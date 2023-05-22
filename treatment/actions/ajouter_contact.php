<?php
$host_name= 'localhost';
$dbname = 'api_sms';
$username = 'root';
$mdp = '';
try
{
    $connexion = new mysqli($host_name, $username, $mdp, $dbname);
   
}
//Sinon on affiche un message d'erreur 
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

// Récupérer les données du formulaire
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$id_user = $_POST["id"];
$numero = $_POST['numero'];
$date = date("Y-m-d H:i:s");
//var_dump($date);

// Préparer et exécuter la requête SQL pour insérer le contact dans la base de données
$sql = "INSERT INTO contacts (id_user, nom_contact, prenom_contact, numero_contact, date_creation) VALUES ('$id_user','$nom','$prenom','$numero', '$date')";

if ($connexion->query($sql) === TRUE) {
    echo "Le contact a été ajouté avec succès.";
} else {
    echo "Erreur lors de l'ajout du contact : " . $connexion->error;
}

// Fermer la connexion à la base de données
$connexion->close();
?>
