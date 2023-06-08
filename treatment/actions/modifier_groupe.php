<?php
    include('connexion.php');
?>

<?php

session_start();

$id_user = $_SESSION['id'];

    if(isset($_GET['groupe']) AND isset($_GET['id_groupe'])){

        
        $id_groupe = $_GET['id_groupe'];
        $nom_groupe = $_GET['groupe'];
        $nom_groupe_new = htmlspecialchars(trim($_POST['nom_groupe']));
        $description_groupe = htmlspecialchars(trim($_POST['description_groupe']));
        setlocale(LC_TIME, 'fr_FR.utf8'); // définit la langue française
        $date_modif = strftime('%A %e %B %Y %H:%M:%S');
        
        if(!preg_match("/^[a-zA-Z-' ]*$/", $nom_groupe_new) 
            || !preg_match("/^[a-zA-Z-' ]*$/", $description_groupe))
        {
        //$_SESSION['message_erreur']='Assurez les conditions : 
        //<br> - Nom utilisateur : Alpha numerique interdit ! <br>
        //-Mauvais format numero <br>
        //Ecrivez EX: +2250565282962
        //<br>';

        header("Location:../../Contenu/sous-contenu/repertoire/liste_diffusion.php");

        }
        
        elseif($nom_groupe_new==$nom_groupe){
            $update_groupe = $connexion->query("UPDATE `groupe_contact` SET nom_groupe = '$nom_groupe_new', description_groupe = '$description_groupe' WHERE id_groupe = '$id_groupe' AND id_user ='$id_user'");
            header("Location:../../Contenu/sous-contenu/repertoire/liste_diffusion.php");
        }
        elseif($nom_groupe_new!==$nom_groupe){

                    //verifie si le numero existe deja
                $verify = $connexion->query("SELECT *
                FROM groupe_contact
                WHERE id_user = '$id_user' 
                AND nom_groupe = '$nom_groupe_new'
                ");

                if($verify->rowCount()>=1){
                    //$_SESSION['message_erreur']='Ce contact existe déjà'; 
                    header("Location:../../Contenu/sous-contenu/repertoire/liste_diffusion.php");
                }
                else{
                    $update_groupe = $connexion->query("UPDATE `groupe_contact` SET nom_groupe = '$nom_groupe_new', description_groupe = '$description_groupe' WHERE id_groupe = '$id_groupe' AND id_user ='$id_user'");
                    header("Location:../../Contenu/sous-contenu/repertoire/liste_diffusion.php");
                }
            }
        
        
        
  }
    else{
        echo('donnees pas recues !');
    }


?>