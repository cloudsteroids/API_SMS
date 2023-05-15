<?php
/*
    include('../treatment/actions/connexion.php');
?>



<?php

$email_user = '';

$password_user = '';

$req= $connexion->query("SELECT * FROM utilisateurs WHERE `mail_user`='$email_user'") or die('echec');

           if($req->rowCount()>0){

            $row = $req->fetch();

            $passwordhash_user =$row['password_user'];

            //Verifie si les mots de passes correspondent
            if(password_verify($password_user,$passwordhash_user)){

                //On cree les varibles de sessions
                echo('connecté');

                

            }
            else{
                echo('mot de passe incorrecte');
            }
        }

*/
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Bouton pour ouvrir le formulaire popup -->
<button id="btnAjouter" onclick="ouvrirFormulaire()">Ajouter contacts</button>

<!-- Formulaire popup -->
<div id="popup" class="popup">
  <div class="popup-content">
    <span class="close" onclick="fermerFormulaire()">&times;</span>
    <form>
      <label for="nom">Nom :</label>
      <input type="text" id="nom" name="nom" required>

      <label for="prenoms">Prénoms :</label>
      <input type="text" id="prenoms" name="prenoms" required>

      <label for="numero">Numéro :</label>
      <input type="tel" id="numero" name="numero" required>

      <label for="listeDiffusion">Liste de diffusion :</label>
      <select id="listeDiffusion" name="listeDiffusion" required>
        <option value="">Choisissez une option</option>
        <option value="Option 1">Option 1</option>
        <option value="Option 2">Option 2</option>
        <option value="Option 3">Option 3</option>
      </select>

      <label for="dateAjout">Date ajout :</label>
      <input type="date" id="dateAjout" name="dateAjout" required>

      <input type="submit" value="Soumettre">
    </form>
  </div>
</div>

</body>
</html>


<style>
    /* Style du bouton pour ouvrir le formulaire popup */
#btnAjouter {
  background-color: #008CBA;
  border: none;
  color: white;
  padding: 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin-bottom: 10px;
}

/* Style du formulaire popup */
.popup {
  display: none;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0, 0, 0, 0.4);
}

.popup-content {
  background-color: #fefefe;
  margin: 10% auto;
  padding: 20px;
  border: 1px solid #888;
  width: 50%;
}

/* Style du bouton pour fermer le formulaire popup */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

/* Style des champs du formulaire popup */
form {
  display: flex;
  flex-direction: column;
}

label {
  margin-top: 10px;
}

input[type="text"],
input[type="tel"],
select,
input[type="date"] {
  padding: 5px;
  border-radius: 5px;
  border: none;
  margin-bottom: 10px;
}

input[type="submit"] {
  background-color: #008CBA;
  border: none;
  color: white;
  padding: 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin-top: 10px;
  margin-bottom: 10px;
}

</style>





























<script>

/*function popupEcho(val)
{
    
    if(val==1)
    {
        document.getElementById('popup').style.display="block";
    }
    if(val==0)
    {
        document.getElementById('popup').style.display="none";
    }
    
}
*/

</script>



        




<?php
    //header("Content-type:application/pdf"); /^((0[1-9])|(4[0-2])|(4[4-9])|(5[4-9])|(6[0-1])|6[5-7]|(7[5-9]))[0-9]{6}$/

    // It will be called downloaded.pdf
    //header("Content-Disposition:attachment;filename='downloaded.pdf'");

    // The PDF source is in original.pdf
    //readfile("original.pdf");

/*
    if($connexion){
        $pref = uniqid('CS_');
        $test = uniqid($pref);
        echo($test);
    }
    */
?>