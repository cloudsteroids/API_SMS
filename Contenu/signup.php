<?php
    include('../treatment/actions/connexion.php');
?>

<?php
    include('../treatment/script/signup_treatment.php');
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
    <title>Inscription</title>
</head>
<body style="background-color:#fff;">
        <?php 
            if(isset($message_erreur)){?>  
            <div class="message_erreur"><?php echo($message_erreur);?></div>
            <?php
            }
        ?>
        <?php 
            if(isset($message_succes)){?>  
            <div class="message_succes"><?php echo($message_succes);?></div>
            <?php
            }
        ?>
<div class="SignUp">

        <!-- Issertion image  -->
        <div class="image">
            <img src="../assets/image/phone.png" alt="">
        </div>
        

        
        <!-- Formulaire  -->

        <div class="myforms">
        

        <h2>Inscription</h2>
            <form method="POST">

                <div class="mb-3">
                    <label for="Username" class="form-label">Nom d'utilisateur</label>
                    <input type="text" name="name_user" class="form-control" id="Username" placeholder="Saisir lettres uniquement">
                    <div id="" class="form-text"></div>
                </div>

                <div class="mb-3">
                    <label for="nomcommercial" class="form-label">Nom Commercial</label>
                    <input type="text" name="sender_name" class="form-control" id="nomcommercial" placeholder="Il vous servira de Sender Name">
                    <div id="" class="form-text"></div>
                </div>

                <div class="mb-3">
                    <label for="telephone" class="form-label">Téléphone</label>
                    <input type="text" name="telephone" class="form-control" id="telephone" placeholder="Saisir le préfixe +225">
                    <div id="" class="form-text"></div>
                </div>
        
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Adresse Email</label>
                    <input type="email" name="email_user" class="form-control" id="exampleFormControlInput1">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                    <input type="password" name="password_1" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Confirmation de mot de passe</label>
                    <input type="password" name="password_2" class="form-control" id="exampleInputPassword1">
                </div>

                <div class="mb-3 form-check">
                    <label class="form-check-label" for="exampleCheck1">J'accepte les <a href="#" style="color:#06466d;">termes et les conditions d'utilisations</a> </label>
                    <input type="checkbox" name="checkbox" class="form-check-input" id="exampleCheck1"> 
                </div>

                <button type="submit" name="inscription" class="btn btn-primary">S'inscrire</button>
            </form>
                <div class="parametre2">
                    <span><a href="login.php">Se Connecter</a></span>
                </div>
        </div>
</div>
    

</body>
</html>

