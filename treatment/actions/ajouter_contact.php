
<?php
    include('connexion.php');
?>


<?php

if(isset($_POST['Ajouter'])){

    //Generer id_contact
$pref_idc =uniqid('CS_');
$id_contact = uniqid($pref_idc);

$nom_contact = htmlspecialchars(trim($_POST['nom']));
$prenom_contact = htmlspecialchars(trim($_POST['prenom']));
$numero_contact = htmlspecialchars(str_replace(' ','',$_POST['numero']));
setlocale(LC_TIME, 'fr_FR.utf8'); // définit la langue française
$date = strftime('%A %e %B %Y %H:%M:%S');
//var_dump($date);

        //verfier si les donnees sont entrees au bon format

        if(!preg_match("/^[a-zA-Z-' ]*$/", $nom_contact) 
            || !preg_match("/^[a-zA-Z-' ]*$/", $prenom_contact)
            || !preg_match('/^\\+?[1-9][0-9]{7,14}$/', $numero_contact))
        {
        $message_erreur='Assurez les conditions : 
        <br> - Nom utilisateur : Alpha numerique interdit ! <br>
        -Mauvais format numero <br>
        Ecrivez EX: +2250565282962
        <br>';
        header("Refresh:15");

        }
        elseif(strlen($numero_contact)!==14){
            $message_erreur='Entrez un numero à 10 chiffres';
            header("Refresh:4");
        }
        else{

            //Verifié si le contact existe deja 

            $Verify_contact = $connexion->query("SELECT * FROM contacts WHERE numero_contact = '$numero_contact';");

            if($Verify_contact->rowCount()>0){
                $message_erreur='Ce numero existe déjà !';
                header("Refresh:4");
            }
            else{

                            // Préparer et exécuter la requête SQL pour insérer le contact dans la base de données
            $create_contact = $connexion->query("INSERT INTO contacts 
            (id_contact, id_user, nom_contact, prenom_contact, numero_contact, date_creation)
            VALUES
            ('$id_contact','$id_user','$nom_contact','$prenom_contact','$numero_contact', '$date');");

            if($create_contact){

            $message_succes='Contact Enregistré !';
            header("Refresh:4");
            }

            }   
        }
}
?>
