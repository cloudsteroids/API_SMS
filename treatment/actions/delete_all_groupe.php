<?php
    include ('connexion.php');
?>

<?php
if(isset($_GET['id_user']) && isset($_GET['id_groupe']))
{

    $id_user = $_GET['id_user'];

    $id_groupe = $_GET['id_groupe'];

    $DeleteGroupe = $connexion->query("DELETE FROM groupe_contact WHERE id_user = '$id_user' AND id_groupe = '$id_groupe'");

    if($DeleteGroupe){
        header("Location:../../Contenu/sous-contenu/repertoire/liste_diffusion.php");
        }
}
?>



<?php
    
if(isset($_GET['id_u']))
{

    $id_user = $_GET['id_u'];

    $DeleteGroupe = $connexion->query("DELETE FROM groupe_contact WHERE id_user = '$id_user'");

    if($DeleteGroupe){
        header("Location:../../Contenu/sous-contenu/repertoire/liste_diffusion.php");
        }
}


?>

