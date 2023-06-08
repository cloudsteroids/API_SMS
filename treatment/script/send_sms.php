<?php

    $host_name= 'localhost';
    $dbname = 'api_sms';
    $username = 'root';
    $mdp = '';
    try
    {
        $connexion = new PDO("mysql:host=$host_name;dbname=$dbname","$username",$mdp);
       
    }
    //Sinon on affiche un message d'erreur 
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
?>


<?php

//Appel de la fonction
require 'osms/src/Osms.php';



use \Osms\Osms;




//Script pour l'envoi et l'insertion des SMS dans la base de données
if(isset($_POST['SEND_SMS'])){



    //Initialisation
    $Send_number = htmlspecialchars(str_replace(' ','',$_POST['send_number']));
    $Message = htmlspecialchars(trim($_POST['message']));


    //Compte le nombre de messages 
    function Compter_Message($Message){
        $nombre = strlen($Message);
        $reste = $nombre % 160;
        $message = floor($nombre/160);
    
        if($nombre >= 0 && $nombre < 161){
            $message = 1;
            return $message;
        }
        if($nombre > 160){
            
            if($reste == 0){
                return $message;
            }
    
            return $message;
        }
    }
    
    $resultat = Compter_Message($Message);

    //On sélectionne le nombre d'SMS de l'utilisateur 
    $verify_sms_user = $connexion->query("SELECT * FROM comptes WHERE id_user = '$id_user'");

                $result_verify_sms_user = $verify_sms_user->fetch();
                $Nmbre_sms_user = $result_verify_sms_user['nombre_sms'];


    

    //si le message est vide
    if(empty($_POST['message'])){
        $message_erreur='Saisissez un message !';
            header("Refresh:4");
    }

    //si il entre le numero et selectionne aussi une liste de contact
    elseif(!empty($_POST['send_number']) && !empty($_POST['list_send']) && !empty($_POST['message']) ){
        $message_erreur='Impossible d\'envoyer un SMS à une liste et un contact sumultanément !';
            header("Refresh:4");
    }
    //Si il entre un numero ou selectionne une liste mais son message est vide
    elseif(!empty($_POST['send_number']) && empty($_POST['message'])){
        $message_erreur='Saissisez un message';
        header("Refresh:4");
    }
    //aucun destinataire n'est entré mais il ecrit un message et soumet
    elseif(isset($_POST['message']) && empty($_POST['send_number']) && empty($_POST['list_send'])){
        $message_erreur='Entrer un destinataire';
        header("Refresh:4");
    }
    /*elseif($_POST['list_send']){ ../../../treatment/script/send_sms.php?id_groupe = <?php echo $_SESSION['id_groupe']; ?>
        $message_erreur='Saissisez un message';
        header("Refresh:4");
    }*/
    elseif(!empty($_POST['send_number']) && strlen($Send_number)!==14){
        $message_erreur='Entrez un numero à 10 chiffres';
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

                //Receptionner le nombre de messages depuis mon fichier javascript
                if(isset($resultat)){
                    $Nombre_message = $resultat;

                    //verifie si l'utilisateur en cours a des sms
                    if($Nmbre_sms_user<1 || $Nmbre_sms_user < $Nombre_message ){
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
                            $Message
                        );

                        if (empty($response['error'])) {
                            //Initialisation de certaines variables
                            $pref_idm =uniqid('CS_SMS_');
                            $Id_message = uniqid($pref_idm);
                            setlocale(LC_TIME, 'fr_FR.utf8'); // définit la langue française
                            $Date_Envoi = strftime('%A %e %B %Y %H:%M:%S');
                           
                            $Statut = 'Envoyé';
                            
                            
                            
                            $insert_SMS = $connexion->query("INSERT INTO `messages` (id_message,id_user, contenu_message,
                                                            destinataire, date_envoi, statut) VALUES('$Id_message','$id_user','$Message', '$Send_number', '$Date_Envoi','$Statut')");
                            
                            // facturation de l'sms
 
                                $SMS_RESTANTS = $Nmbre_sms_user-$Nombre_message;

                                $req = $connexion->query("UPDATE `comptes` SET nombre_sms = '$SMS_RESTANTS' WHERE id_user = '$id_user'");


                                //Si message envoyé
                                $message_succes='Sms envoyé !';
                                header("Refresh:4");
                                
                                
                        } else {
                        $message_erreur='Echec de l\'envoi !';
                        header("Refresh:4");

                        }
                    }
                }else{
                    die('Variable non recue');
                }
            }
            
        }
        else{

            if(isset($_GET['id_gr'])){
                $id_groupe = $_GET['id_gr'];
                //header("location:app.php?id=$id");

                //On selectionne les contacts du groupe de contact

                $SelectContactGroupe = $connexion ->query("SELECT contacts.numero_contact
                FROM groupe_contact
                JOIN appartenir ON groupe_contact.id_groupe = appartenir.id_groupe
                JOIN contacts ON appartenir.id_contact = contacts.id_contact
                WHERE groupe_contact.id_groupe = '$id_groupe';");

                if($SelectContactGroupe->rowCount()*$resultat<$Nmbre_sms_user){
                    $message_erreur='Vos SMS ne sont pas suffisant !';
                        //header( $header = 'Refresh:4' );
                        header("Refresh:4");
                }
                else{

                    //Execution du code d'envoi SMS a la liste


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


                    while($row = $SelectContactGroupe->fetch()){
                        $response = $osms->sendSms(
                            // sender
                            'tel:+2250565282962',
                            // receiver
                            'tel:'.$row['numero_contact'],
                            // message
                            $Message
                        );
    
                    }
                    
                    




                }
                




                
            }
            else{
                header("location:rate.php");
            }
            //Si il a selectionné une liste de contacts
            

            
        }

    }

}

?>




