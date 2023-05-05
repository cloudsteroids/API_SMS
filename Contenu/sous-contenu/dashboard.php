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
                    <a href="dashboard.php" class="active">Dashboard</a>   
                </div>
                
                <span class="container">
                    <div>
                    <!-- <i class="fa-solid fa-chart-line"></i> 
                <i class="fa fa-caret-down"></i>-->
                        <a class="messagerie" href="#">Messagerie </a>
                    </div>
                    <ul class="menu">
                        <li><a href="messagerie/new_sms.php">Nouveau SMS</a></li>
                        <li><a href="messagerie/story_sms.php">Historique SMS</a></li>
                    </ul>
                </span>
                
                <span class="container">
                <div>
                <!-- <i class="fa-solid fa-chart-line"></i>-->
                    <a class="repertoire" href="#">Répertoire</a> 
                </div>
                <ul class="menu">
                    <li><a href="repertoire/contacts.php">Contact</a></li>
                    <li><a href="repertoire/liste_diffusion.php">Liste Diffusion</a></li>
                </ul>
                </span>


                <span class="container">
                <div>
                    <!-- <i class="fa-solid fa-chart-line"></i> -->
                    <a class="parametres" href="#">Paramètres</a> 
                </div>
                <ul class="menu">
                    <li><a href="parametres/profil.php">Profil</a></li>
                    <li><a href="parametres/achat_pack.php">Achater Packs</a></li>
                    <li><a href="parametres/story_pack.php">Historique Achats</a></li>
                    <li><a href="parametres/support.php">Contactez Support</a></li> 
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
                
                


        </div>
    </div>    
</body>
</html>