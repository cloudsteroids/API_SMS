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
/*


curl -X GET https://formsubmit.co/api/get-apikey/philippeouraga52@gmail.com

onclick = "return confirm('Voulez-vous supprimer cette liste ?')"
../../../treatment/actions/ajouter_contact.php

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
    SELECT DISTINCT c.*
FROM contacts c
INNER JOIN appartenir a ON c.id = a.id_contact
WHERE a.id_groupe = 1;





$id_contact = $_GET['id_contact'];
        $contact = $_GET['contact'];
        $nom_contact = htmlspecialchars(trim($_POST['nom_contact']));
        $prenom_contact = htmlspecialchars(trim($_POST['prenom_contact'])); 
        $numero_contact_new = htmlspecialchars(str_replace(' ','',$_POST['numero_contact']));
        setlocale(LC_TIME, 'fr_FR.utf8'); // définit la langue française
        $date_modif = strftime('%A %e %B %Y %H:%M:%S');

        
        if(!preg_match("/^[a-zA-Z-' ]*$/", $nom_contact) 
            || !preg_match("/^[a-zA-Z-' ]*$/", $prenom_contact)
            || !preg_match('/^\\+?[1-9][0-9]{7,14}$/', $numero_contact_new))
        {
        $_SESSION['message_erreur']='Assurez les conditions : 
        <br> - Nom utilisateur : Alpha numerique interdit ! <br>
        -Mauvais format numero <br>
        Ecrivez EX: +2250565282962
        <br>';

        }
        elseif(strlen($numero_contact_new)!==14){
            $_SESSION['message_erreur']='Entrez un numero à 10 chiffres'; 
        }
        else{
            //verifie si le numero existe deja

            $verify = $connexion->query("SELECT * FROM contacts WHERE numero_contact <>'$numero_contact_new'  AND contact <> '$contact'");

            if($verify ->rowCount() > 0){
                $_SESSION['message_erreur'] = 'Ce contact exist déja !';
            }
            else{
                $update_contact = $connexion->query("UPDATE `contacts` SET nom_contact = '$nom_contact', prenom_contact = '$prenom_contact', numero_contact = '$numero_contact_new' WHERE id_contact = '$id_contact'");

                if($update_contact){
                    $_SESSION['message_success'] = 'Mise à jour effectuée !';
                }
            }


        }




        
    */
    
?>




        <?php
        /*
 $id_groupe = htmlspecialchars($_GET['id_groupe']);

 $affiche_contact_groupe = $connexion ->query("SELECT
    c.id_contact, c.nom_contact, c.prenom_contact, c.numero_contact, c.date_creation,
    CASE
    WHEN a.id_groupe IS NOT NULL THEN 'Retirer'
    ELSE 'Ajouter'
    END AS action
    FROM contacts c
    LEFT JOIN appartenir a ON c.id_contact = a.id_contact AND a.id_groupe = '$id_groupe'
    WHERE a.id_groupe = '$id_groupe' OR a.id_contact IS NULL;
    ");

*/



 ?> 

<?php

$host_name= 'localhost';
$dbname = 'api_sms';
$username = 'root';
$mdp = '';
try
{
    $connexion = new PDO("mysql:host=$host_name;dbname=$dbname","$username",$mdp);
   
}
//Sinon on affiche un message d'erreur 
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
?>

<?php



$affiche_contact_groupe = $connexion ->query("SELECT * FROM contacts WHERE id_user = '$id_user'");
$row = $affiche_contact_groupe->fetchAll();
$id_groupe = 'CS_647dc29945853647d';


foreach($row as $roww)
{
?>

                    <?php
                     $id_contact = $roww['id_contact'];

                     $Appartient = $connexion ->query("SELECT * FROM appartenir WHERE id_groupe = '$id_groupe' AND id_contact = '$id_contact'");
                        while($Appartien = $Appartient->fetch())
                        {
                            if($id_contact == $Appartien['id_contact']){
                        ?>
                            <tr>          
                            <td><?php echo $roww['prenom_contact'].' '.$roww['nom_contact'];?></td>
                            <td><?php echo $roww['numero_contact'];?></td>
                            <td><?php echo $roww['date_creation'] ?></td>
                            <td>
                            <a href="../../../treatment/actions/Actions_contact_list.php?Retirer=<?php echo $Appartien["id_contact"];?>&id_groupe=<?php echo $id_groupe?>">Retirer</a>
                            </td>
                        </tr>
                      
                        <?php
                            }
                        }
                        ?>
                        
                    <?php
                    }
                    ?>

