<?php
session_start();

$id_user = $_SESSION['id'];
    if(!isset($id_user)){
        header('Location:../../../index.php');
    }
?>


<?php

    //INCLURE LA CONNEXION A LA BASE DE DONNEES
    include('../../../treatment/actions/connexion.php');
?>






<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../assets/css/home_login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link rel="stylesheet" href="https://code.jquery.com/jquery-3.5.1.js"/>
    
    <script src="../../../assets/js/script.js"></script>
    <title>envoyer SMS</title>
    

</head>
<body>
