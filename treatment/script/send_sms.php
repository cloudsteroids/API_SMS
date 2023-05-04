<?php
//Appel de la fonction
require 'osms/src/Osms.php';

use \Osms\Osms;

//Script pour l'envoi et l'insertion des SMS dans la base de données

if(isset($_POST['SEND_SMS'])){

    //Initialisation
    $Send_number = htmlspecialchars(str_replace(' ','',$_POST['send_number']));
    $Message = htmlspecialchars(trim($_POST['message']));
    $Sender_name ='';
    

    //On sélectionne le nombre d'SMS de l'utilisateur 
    $verify_sms_user = $connexion->query("SELECT * FROM comptes WHERE id_user = '$id_user'");

                $result_verify_sms_user = $verify_sms_user->fetch();
                $Nmbre_sms_user = $result_verify_sms_user['nombre_sms'];



    //si le message est vide
    if(empty($_POST['message'])){
        $message_erreur='Saisissez un message !';
            header("Refresh:4");

    }

    //si il entre le numero et selectionne aussi un contact
    elseif(!empty($_POST['send_number']) && !empty($_POST['list_send']) && !empty($_POST['message']) ){
        $message_erreur='Impossible d\'envoyer un SMS à une liste et un contact sumultanément !';
            header("Refresh:4");
    }
    //Si il entre un numero ou selectionne une liste mais son message est vide
    elseif(!empty($_POST['send_number']) && empty($_POST['message'])){
        $message_erreur='Saissisez un message';
        header("Refresh:4");
    }
    elseif(isset($_POST['list_send']) && empty($_POST['message'])){
        $message_erreur='Saissisez un message';
        header("Refresh:4");
    }
    else{
        if(!empty($_POST['send_number'])){

            
            if(!preg_match('/^\\+?[1-9][0-9]{7,14}$/', $Send_number)){
                $message_erreur='Mauvais format numero <br>
                                Ecrivez EX: +2250565282962';
                header("Refresh:7");
            }
            else{

                //verifie si l'utilisateur en cours a des sms
                
                if($Nmbre_sms_user<1){
                    $message_erreur='Vos SMS sont insuffisants';
                    header("Refresh:7");
                }
                else{
                   
                    //On uilise la fonction d'envoi SMS
                    
                    $config = array(
                        'clientId' => 'Af8Yljmbf1DtKJiaGajsylicD2p7jNDf',
                        'clientSecret' => 'GzIIZwnAzRymHlFN'
                    );
                    $osms = new Osms($config);

                    //$osms->setVerifyPeerSSL(false);

                    $response = $osms->getTokenFromConsumerKey();

                    if (empty($response['error'])) {
                        
                        $_SESSION['token'] = $response['access_token'];
                        //echo $_SESSION['token'] ;
                        // echo $osms->getToken();
                        // echo '<pre>'; print_r($response); echo '</pre>';
                    }

                    $config = array(
                        
                        'token' => $_SESSION['token']
                    );

                    $osms = new Osms($config);

                    //$osms->setVerifyPeerSSL(false);

                    
                    $response = $osms->sendSms(
                        // sender
                        'tel:+2250565282962',
                        // receiver
                        'tel:'.$Send_number,
                        // message
                        $Message,
                        $Sender_name
                        
                    );

                    if (empty($response['error'])) {
                        //Initialisation de certaines variables
                        $pref_idm =uniqid('CS_SMS_');
                        $Id_message = uniqid($pref_idm);
                        $Date_Envoi = date('l d m Y G:i:s');
                        $Statut = 'Envoyé';
                        $insert_SMS = $connexion->query("INSERT INTO `messages` (id_message, contenu_message,
                                                        destinataire, date_envoi, statut) VALUES('$Id_message', '$Message', '$Send_number', '$Date_Envoi','$Statut')");
                        // facturation de l'sms
                        
                        $SMS_RESTANTS = $Nmbre_sms_user-1;

                        $req = $connexion->query("UPDATE `comptes` SET nombre_sms = '$SMS_RESTANTS' WHERE id_user = '$id_user'");

                        //

                        //Si message envoyé
                        $message_succes='Sms envoyé !';
                        header("Refresh:4");
                        

                    } else {
                       $message_erreur='Echec de l\'envoi !';

                    }
                }
            }
            
        }
        else{
            //Si il a selectionné une liste de contacts
        }

    }

}

?>