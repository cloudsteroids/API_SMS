
<?php
    include('connexion.php');
?>


<?php

if(isset($_POST['Ajouter'])){

    //Generer id_contact
$pref_idg =uniqid('CS_');
$id_groupe = uniqid($pref_idg);

$nom_groupe = htmlspecialchars(trim($_POST['nom']));
$description = htmlspecialchars(trim($_POST['description']));
setlocale(LC_TIME, 'fr_FR.utf8'); // définit la langue française
$date = strftime('%A %e %B %Y %H:%M:%S');
//var_dump($date);

        //verfier si les donnees sont entrees au bon format

        if(!preg_match("/^[a-zA-Z-' ]*$/", $nom_groupe) 
            || !preg_match("/^[a-zA-Z-' ]*$/", $description))
        {
        $message_erreur='Les caractères Alpha numérique sont interdits !';
        header("Refresh:4");

        }
        else{

            //Verifié si le contact existe deja 

            $Verify_groupe = $connexion->query("SELECT * FROM groupe_contact WHERE nom_groupe = '$nom_groupe';");

            if($Verify_groupe->rowCount()>0){
                $message_erreur='Ce nom de groupe existe déjà !';
                header("Refresh:4");
            }
            else{

                            // Préparer et exécuter la requête SQL pour insérer le contact dans la base de données
            $create_groupe = $connexion->query("INSERT INTO groupe_contact 
            (id_groupe, id_user, nom_groupe, description_groupe,date_creation)
            VALUES
            ('$id_groupe','$id_user','$nom_groupe','$description','$date');");

            if($create_groupe){

            $message_succes='Groupe Enregistré !';
            header("Refresh:4");
            }

            }   
        }
}
?>
