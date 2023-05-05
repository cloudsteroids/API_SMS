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