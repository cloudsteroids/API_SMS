

curl -X GET https://formsubmit.co/api/get-apikey/philippeouraga52@gmail.com

onclick = "return confirm('Voulez-vous supprimer cette liste ?')"
../../../treatment/actions/ajouter_contact.php

<?php
/*
    include('../treatment/actions/connexion.php');

    session_start();
    $id_user = $_SESSION['id'];

    $Parcours_sms = $connexion->query("SELECT * FROM messages WHERE id_user = '$id_user' AND statut = 'Programmé'");

    while($tst= $Parcours_sms->fetch()){
      echo $tst['statut'];
    }
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