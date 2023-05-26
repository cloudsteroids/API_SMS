<?php
    include ('connexion.php');
?>

<?php
if(isset($_GET['id_user']) && isset($_GET['id_contact']))
{

    $id_user = $_GET['id_user'];

    $id_contact = $_GET['id_contact'];

    $DeleteContact = $connexion->query("DELETE FROM contacts WHERE id_user = '$id_user' AND id_contact = '$id_contact'");

    if($DeleteContact){
        header("Location:../../Contenu/sous-contenu/repertoire/contacts.php");
        }
}
?>



<?php
    
if(isset($_GET['id_u']))
{

    $id_user = $_GET['id_u'];

    $DeleteContact = $connexion->query("DELETE FROM contacts WHERE id_user = '$id_user'");

    if($DeleteContact){
        header("Location:../../Contenu/sous-contenu/repertoire/contacts.php");
        }
}


?>

