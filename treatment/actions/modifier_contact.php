<?php
    include('connexion.php');
?>

<?php

session_start();

$id_user = $_SESSION['id'];

    if(isset($_GET['contact']) AND isset($_GET['id_contact'])){

        
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
        //$_SESSION['message_erreur']='Assurez les conditions : 
        //<br> - Nom utilisateur : Alpha numerique interdit ! <br>
        //-Mauvais format numero <br>
        //Ecrivez EX: +2250565282962
        //<br>';

        header("Location:../../Contenu/sous-contenu/repertoire/contacts.php");

        }
        elseif(strlen($numero_contact_new)!==14){
            //$_SESSION['message_erreur']='Entrez un numero à 10 chiffres';
        
            header("Location:../../Contenu/sous-contenu/repertoire/contacts.php");
        }
        
        elseif($numero_contact_new==$contact){
            $update_contact = $connexion->query("UPDATE `contacts` SET nom_contact = '$nom_contact', prenom_contact = '$prenom_contact' WHERE id_contact = '$id_contact' AND id_user ='$id_user'");
            header("Location:../../Contenu/sous-contenu/repertoire/contacts.php");
        }
        elseif($numero_contact_new!==$contact){

                    //verifie si le numero existe deja
                $verify = $connexion->query("SELECT *
                FROM contacts
                WHERE id_user = '$id_user' 
                AND numero_contact = '$numero_contact_new'
                ");

                if($verify->rowCount()>=1){
                    //$_SESSION['message_erreur']='Ce contact existe déjà'; 
                }
                else{
                    $update_contact = $connexion->query("UPDATE `contacts` SET nom_contact = '$nom_contact', prenom_contact = '$prenom_contact', numero_contact = '$numero_contact_new' WHERE id_contact = '$id_contact' AND id_user ='$id_user'");
                    header("Location:../../Contenu/sous-contenu/repertoire/contacts.php");
                }
            }
        
        
        
  }
    else{
        echo('donnees pas recues !');
    }


?>