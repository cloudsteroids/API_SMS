


<?php
//Connexion

include('connexion.php');

?>


<?php
//Supprimer tous les utilisateurs
if(isset($_GET['id_user'])){

    $id_user = $_GET['id_user'];
 
    $Delete_All = $connexion->query("DELETE FROM messages WHERE id_user = '$id_user'");

    if($Delete_All){
        header("Location:../../Contenu/sous-contenu/messagerie/story_sms.php");
    }
}
?>


<?php
    if(isset($_GET['id']) && isset($_GET['id_sms'])){

        $id_user = $_GET['id'];
        $id_sms = $_GET['id_sms'];

        $Delete_sms = $connexion->query("DELETE FROM messages WHERE id_user = '$id_user' AND id_message = '$id_sms'");

        if($Delete_sms){
            
            header("Location:../../Contenu/sous-contenu/messagerie/story_sms.php");
        }

        
    }



?>