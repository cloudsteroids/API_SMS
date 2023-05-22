<!-- SI IL PROGRAMME L'ENVOI D'UN SMS -->


<?php




//SI IL CLIQUE SUR LE BOUTON PROGRAMMER

if(isset($_POST['Programmer'])){
    

//Initialisation des donnees
$Message = htmlspecialchars(trim($_POST['message']));
$Send_number = htmlspecialchars(str_replace(' ','',$_POST['send_number']));
$date_send = htmlspecialchars(str_replace(' ','',$_POST['date_send']));


//Compter le nombre de message avec la fonction suivante
 
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





    //ON VERIFIE S'IL A SELECTIONNE UNE DATE D'ENVOI
    if(!empty($_POST['date_send'])){

        //si le message est vide 
        if(empty($_POST['message'])){
            $message_erreur='Saisissez un message !';
            header("Refresh:4");   
        }
      
        //aucun destinataire n'est entré mais il ecrit un message et soumet
        elseif(empty($_POST['send_number']) && empty($_POST['list_send'])){
            $message_erreur='Entrer un destinataire';
            header("Refresh:4");
        }
        //Si il selectionne a la fois une liste et un contact pour l'envoi du message
        elseif(!empty($_POST['send_number']) && !empty($_POST['list_send'])){
            $message_erreur='Impossible de programmer un envoi à une liste et un contact sumultanément !';
            header("Refresh:4");
        }
        else{


            //S'il selectionne un contact
            if(!empty($_POST['send_number'])){

            
                if(isset($resultat)){
                    $Nombre_message = $resultat;

                    //verifie si l'utilisateur en cours a des sms
                    if($Nmbre_sms_user<1 || $Nmbre_sms_user < $Nombre_message ){
                        $message_erreur='Vos SMS sont insuffisants';
                        header("Refresh:7");
                    }
                    else{
                        //Si ses messages sont suffisants

                        //Initialisation de certaines variables
                        $pref_idm =uniqid('CS_SMS_');
                        $Id_message = uniqid($pref_idm);
                        setlocale(LC_TIME, 'fr_FR.utf8'); // définit la langue française
                        $Date_Envoi = strftime('%A %e %B %Y %H:%M:%S');
                       
                        $Statut = 'Programmé';
                        
                        //Insertion du message dans la base donnees
                        $insert_SMS = $connexion->query("INSERT INTO `messages` (id_message,id_user, contenu_message,
                                                            destinataire, date_envoi, statut) VALUES('$Id_message','$id_user','$Message', '$Send_number', '$Date_Envoi','$Statut')");

                            //Si envoi message Programmé
                            $message_succes='Envoi programmé !';
                            header("Refresh:4");
                    }
                }
            }
            else{

            //S'il selectionne un liste de contact

            }
            
        }
    }
    else{
        
        $message_erreur='Selectionner une date d\'envoi';
        header("Refresh:4");
    }
}



// facturation de l'sms                        
//$SMS_RESTANTS = $Nmbre_sms_user-$Nombre_message;
//$req = $connexion->query("UPDATE `comptes` SET nombre_sms = '$SMS_RESTANTS' WHERE id_user = '$id_user'");
?>






























        




