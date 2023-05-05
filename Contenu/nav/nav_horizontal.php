    <!-- Requete pour afficher nombre SMS -->
    <?php

    $Glob_req = $connexion->query("SELECT * FROM comptes WHERE id_user = '$id_user'");

    $results= $Glob_req->fetch();
    
    ?>
    

<nav class="navbar">
            <div class="session">
                    <a href=""><img class="img_profile" src="../../../assets/image/profile_vide.jpg" alt=""></a>
                    <div class="espace"></div>
                    <a href="../../../treatment/actions/deconnexion.php?"><img class="img_deconnexion" src="../../../assets/image/deconnexion.jpg" alt=""></a>
            </div>
            
            <div class="info">
                <div class="text">
                    <p>SMS restants : <?php echo('<span class="sms_rest">'.$results['nombre_sms'].' sms'.'</span>'); ?> </p>
                </div>
                
                <a href="../parametres/achat_pack.php">Acheter Pack</a>  
            </div>
            
</nav>