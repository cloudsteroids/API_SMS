<!-- SI IL PROGRAMME L'ENVOI D'UN SMS -->


<?php
use \Osms\Osms;



//SI IL CLIQUE SUR LE BOUTON PROGRAMMER

if(isset($_POST['Programmer'])){
    //ON VERIFIE S'IL A SELECTIONNE UNE DATE D'ENVOI
    
    if(!empty($_POST['date_send'])){

        //si le message est vide 
        if(!empty($_POST['message'])){
            $message_erreur='Saisissez un message !';
            header("Refresh:4");   
        }
      
        //aucun destinataire n'est entré mais il ecrit un message et soumet
        elseif(isset($_POST['message']) && empty($_POST['send_number']) && empty($_POST['list_send'])){
            $message_erreur='Entrer un destinataire';
            header("Refresh:4");
        }
        //Si il selectionne a la fois une liste et un contact pour l'envoi du message
        elseif(!empty($_POST['send_number']) && !empty($_POST['list_send'])){
            $message_erreur='Impossible de prgrammer un envoi à une liste et un contact sumultanément !';
            header("Refresh:4");
        }
        elseif(empty($_POST['send_number']) && !isset($_POST['list_send'])){

        }

        else{
            //S
            $Send_number = htmlspecialchars(str_replace(' ','',$_POST['date_send']));
        }
    }
    else{
        $message_erreur='Selectionner une date d\'envoi';
        header("Refresh:4");
    }
}
?>






























        





<?php
/*
// Connexion à la base de données
$bdd = new PDO('mysql:host=localhost;dbname=ma_base_de_donnees', 'mon_utilisateur', 'mon_mot_de_passe');

// Boucle infinie
while (true) {

    // Exécution de la requête
    $requete = $bdd->query('SELECT COUNT(*) FROM ma_table');
    $resultat = $requete->fetch();

    // Affichage du résultat
    echo 'Nombre de lignes dans la table : ' . $resultat[0] . '<br>';

    // Pause de 10 secondes
    sleep(10);
}
*/
?>
