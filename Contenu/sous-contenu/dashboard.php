<?php
session_start();
?>
<?php
$id_user = $_SESSION['id'];
    if(!isset($id_user)){
        header('Location:../../index.php');
    }
?>

<?php

    //INCLURE LA CONNEXION A LA BASE DE DONNEES
    include('../../treatment/actions/connexion.php');
?>

    <!-- Requete pour afficher nombre SMS -->
    <?php

    $Glob_req = $connexion->query("SELECT * FROM comptes WHERE id_user = '$id_user'");

    $results= $Glob_req->fetch();
    
    ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/home_login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <script src="../../assets/js/menu.js"></script>
    <title>Home</title>
    <style>
        .dashboard {
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      padding: 40px;
      margin: 50px auto;
      max-width: 600px;
    }
    
    h1 {
      font-size: 24px;
      color: #333;
      margin-top: 0;
    }
    
    .pp {
      font-size: 16px;
      line-height: 1.5;
      color: #555;
    }
    
    .highlight {
      color: #ff9900;
      font-weight: bold;
    }
    </style>
</head>
<body>
    <!-- NAV VERTICALE -->
    <div class="nav_vertical">
        <!-- Insertion de l'image -->
            <div class="logo">
                <img src="../../assets/image/logo_last.png" alt="">
            </div>
         
        <!-- Menu deroulant -->

            <div class="scroll_menu">
                <div>
                    <!-- <i class="fa-solid fa-chart-line"></i> -->
                    <a href="dashboard.php" class="active"><i class="fa fa-list" aria-hidden="true"></i> Dashboard</a>   
                </div>
                
                <span class="container">
                    <div>
                    <!-- <i class="fa-solid fa-chart-line"></i> 
                <i class="fa fa-caret-down"></i>-->
                        <a class="messagerie" href="#"><i class="fa fa-commenting" aria-hidden="true"></i> Messagerie </a>
                    </div>
                    <ul class="menu">
                        <li><a href="messagerie/new_sms.php"><i class="fa fa-paper-plane" aria-hidden="true"></i> Nouveau SMS</a></li>
                        <li><a href="messagerie/story_sms.php"><i class="fa fa-file-text" aria-hidden="true"></i> Historique SMS</a></li>
                    </ul>
                </span>
                
                <span class="container">
                <div>
                <!-- <i class="fa-solid fa-chart-line"></i>-->
                    <a class="repertoire" href="#"><i class="fa fa-address-book" aria-hidden="true"></i>  Répertoire</a> 
                </div>
                <ul class="menu">
                    <li><a href="repertoire/contacts.php"><i class="fa fa-mobile" aria-hidden="true"></i>  Contact</a></li>
                    <li><a href="repertoire/liste_diffusion.php"><i class="fa fa-share-square" aria-hidden="true"></i>  Liste Diffusion</a></li>
                </ul>
                </span>


                <span class="container">
                <div>
                    <!-- <i class="fa-solid fa-chart-line"></i> -->
                    <a class="parametres" href="#"><i class="fa fa-cogs" aria-hidden="true"></i> Paramètres</a> 
                </div>
                <ul class="menu">
                    <li><a href="parametres/profil.php"><i class="fa  fa-user-md" aria-hidden="true"></i>  Profil</a></li>
                    <li><a href="parametres/achat_pack.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Acheter Packs</a></li>
                    <li><a href="parametres/story_pack.php"><i class="fa fa-history" aria-hidden="true"></i> Historique Achats</a></li>
                    <li><a href="parametres/support.php"><i class="fa fa-ticket" aria-hidden="true"></i>  Contactez Support</a></li> 
                </ul>
                </span>
            </div>
    </div>

    <!-- NAV Horizontale -->
    <div class="nav_horizontal">
        <nav class="navbar">
            <div class="session">
                    <a href=""><img class="img_profile" src="../../assets/image/profile_vide.jpg" alt=""></a>
                    <div class="espace"></div>
                    <a href="../../treatment/actions/deconnexion.php?"><img class="img_deconnexion" src="../../assets/image/deconnexion.jpg" alt=""></a>
            </div>
            
            <div class="info">
                <div class="text">
                    <p>SMS restants : <?php echo('<span class="sms_rest">'.$results['nombre_sms'].' sms'.'</span>'); ?> </p>
                </div>
                
                <a href="parametres/achat_pack.php">Acheter Pack</a>  
            </div>
            
        </nav>
        <div class="contain">
        
<?php
    //Recuperer les informations de l'uilisateur

    $info_user = $connexion->query("SELECT * FROM utilisateurs WHERE id_user = '$id_user'");
    $info = $info_user->fetch();
?>
   <style>
    .name_user{
        color:#06466d;
        font-family: "Helvetica Neue",Helvetica;
        font-size:27px;
    }
   </style>             
        <div class="dashboard">
            <h1><?php echo '<div class="name_user">'.$info['name_user'].'</div>'; ?> Bienvenue   sur votre tableau de bord</h1>
            <p clas="pp">Merci d'avoir choisi notre service. Vous avez maintenant accès à un ensemble d'outils puissants pour gérer vos données.</p>
            <p class="highlight">Explorez les fonctionnalités avancées, visualisez les statistiques en temps réel et prenez des décisions éclairées.</p>
            <p class="pp">N'hésitez pas à nous contacter si vous avez des questions ou des commentaires. Nous sommes là pour vous aider !</p>
        </div>

        </div>
    </div>    
</body>
</html>