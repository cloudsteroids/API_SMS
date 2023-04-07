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
                
                <div>
                <!-- <i class="fa-solid fa-chart-line"></i> -->
                    <a class="Messagerie" href="#">Messagerie</a>
                </div>
                <ul class="menu">
                    <li><a href="#">Nouveau SMS</a></li>
                    <li><a href="#">Historique SMS</a></li>
                </ul>

                <div>
                <!-- <i class="fa-solid fa-chart-line"></i>-->
                    <a class="" href="#">Répertoire</a> 
                </div>
                <ul class="menu">
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Liste Diffusion</a></li>
                </ul>

                <div>
                    <!-- <i class="fa-solid fa-chart-line"></i> -->
                    <a class="" href="#">Paramètres</a> 
                </div>
                <ul class="menu">
                    <li><a href="#">Profil</a></li>
                    <li><a href="#">Achater Packs</a></li>
                    <li><a href="#">Historique Achats</a></li>
                    <li><a href="#">Contactez Support</a></li> 
                </ul>
            </div>
    </div>

    <!-- NAV Horizontale -->
    <div class="nav_horizontal">
        <nav class="navbar">
            <div class="session">
                    <a href=""><img class="img_profile" src="../../assets/image/profile_vide.jpg" alt=""></a>
                    <div class="espace"></div>
                    <a href=""><img class="img_deconnexion" src="../../assets/image/deconnexion.jpg" alt=""></a>
            </div>
            
            <div class="info">
                <div class="text">
                    <p>SMS restants : </p>
                </div>
                
                <a href="">Acheter Pack</a>  
            </div>
            
        </nav>
        <div class="contain">
                



        </div>
    </div>    
</body>
</html>