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

<div class="SignUp">

        <!-- Issertion image  -->
        <div class="image1">
            <img src="../assets/image/sms-img21.png" alt="">
        </div>

        <!-- Formulaire  -->

        <div class="myforms">

        <h2>Connexion</h2>
            <form>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Adresse Email</label>
                    <input type="email" name="email_user" class="form-control" id="exampleFormControlInput1">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary">Connexion</button>
                <div class="parametre">
                    <span><a href="signup.php">S'inscrire</a></span>
                    <span><a href="">Mot de passe oublié ?</a><a href="">aide</a></span>
                </div>
            </form>
        </div>
</div>
    

</body>
</html>