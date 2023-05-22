<?php
    include('../treatment/actions/connexion.php');
?>

<?php
    include('../treatment/script/login_treatment.php');
?>

<?
$message_erreur='';

$message_succes='';

?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/SignUp.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <title>Connexion</title>
</head>

<body style="background-color:#1072AE;">
        <?php 

        //Affichage du message en cas d'erreur  
            if(isset($message_erreur)){?>  
            <div class="message_erreur"><?php echo($message_erreur);?></div>
            <?php
            }
        ?>
<div class="SignUp">

        <!-- Issertion image  -->
        <div class="image1">
            <img src="../assets/image/sms-img21.png" alt="">
        </div>
        

        <!-- Formulaire  -->

        <div class="myforms">
        
        <h2>Connexion</h2>
            <form method="POST">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Adresse Email</label>
                    <input type="email" name="email_user" class="form-control" id="exampleFormControlInput1">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" name="Connexion"  class="btn btn-primary">Connexion</button>
                <div class="parametre">
                    <span class="span1"><a href="signup.php">S'inscrire</a></span>
                    <span class="span2"><a href="">Mot de passe oublié ?</a></span>
                </div>
            </form>
        </div>
</div>
    

</body>
</html>