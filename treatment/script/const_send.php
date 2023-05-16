<?php
include('../actions/connexion.php');
require 'osms/src/Osms.php';
use \Osms\Osms;


session_start();
$id_user = $_SESSION['id'];
?>



<?php

$Parcours_sms = $connexion->query("SELECT * FROM messages WHERE id_user = '$id_user' AND statut = 'Programmé'");

//On sélectionne le nombre d'SMS de l'utilisateur 
$verify_sms_user = $connexion->query("SELECT * FROM comptes WHERE id_user = '$id_user'");
 

$result_verify_sms_user = $verify_sms_user->fetch();
$Nmbre_sms_user = $result_verify_sms_user['nombre_sms'];
    while($tst= $Parcours_sms->fetch()){

        $Date1 = strftime('%A %e %B %Y %H:%M:%S');
        $Date2 = $tst['date_envoi'];
        
        // Convertir les dates en objets DateTime
        $dateTime1 = DateTime::createFromFormat('l j F Y H:i:s', $Date1);
        $dateTime2 = DateTime::createFromFormat('l j F Y H:i:s', $Date2);
        
        // Comparer les dates
        if ($dateTime1 < $dateTime2) {
           // echo "La date 1 est antérieure à la date 2";
        

            if($Nmbre_sms_user>1){
                //On uilise la fonction d'envoi SMS
                            
                $config = array(
                    'clientId' => 'Af8Yljmbf1DtKJiaGajsy-licD2p7jNDf',
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
                    'tel:'.$tst['destinataire'],
                    // message
                    $tst['contenu_message']
                );

            $id_message = $tst['id_message'];
            $req = $connexion->query("UPDATE `messages` SET statut = 'envoyé' WHERE id_message = '$id_message'");
            
            }
            else{
                $message_erreur='SMS insuffisants';
                header("Refresh:4");

            }
    }
        sleep(6);
    }
//Parcourir tous les messages programmés dans la base de donnees


// Boucle infinie 


//while (true) {

// Exécution de la requête
//$requete = $connexion->query('SELECT COUNT(*) FROM ma_table');
  //  $resultat = $requete->fetch();

    // Affichage du résultat
    //echo 'Nombre de lignes dans la table : ' . $resultat[0] . '<br>';

    // Pause de 10 secondes
    //sleep(10);
//}
?>
