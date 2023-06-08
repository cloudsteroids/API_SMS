<?php
    include('connexion.php');
?>


<?php

if(isset($_GET['Ajouter']) AND isset($_GET['id_groupe'])){

    $id_contact = htmlspecialchars(trim($_GET['Ajouter'])); 

    $id_groupe = htmlspecialchars(trim($_GET['id_groupe']));
    
    $Ajout = $connexion->query("INSERT INTO appartenir (id_groupe, id_contact) VALUES ('$id_groupe','$id_contact')");

    header("Location:../../Contenu/sous-contenu/repertoire/link_contact.php?id_groupe=$id_groupe");
}

?>


<?php

if(isset($_GET['Retirer']) AND isset($_GET['id_groupe'])){

    $id_contact = htmlspecialchars($_GET['Retirer']); 

    $id_groupe = htmlspecialchars($_GET['id_groupe']);

    $Retirer =  $connexion->query("DELETE FROM appartenir WHERE id_contact = '$id_contact' AND id_groupe = '$id_groupe'");

    header("Location:../../Contenu/sous-contenu/repertoire/link_contact.php?id_groupe=$id_groupe");
}
else{
    echo 'variable pas recues';
}
?>