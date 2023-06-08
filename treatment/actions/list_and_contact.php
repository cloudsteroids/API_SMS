
<?php
    include('connexion.php');
?>


<?php

    if(isset($_GET['id_user']) && isset($_GET['id_groupe'])){

        $id_user = htmlspecialchars($_GET['id_user']);
        $id_groupe = htmlspecialchars($_GET['id_groupe']);
        

        //Recuperer les informations de l'uilisateur

        $info_user = $connexion->query("SELECT * FROM utilisateurs WHERE id_user = '$id_user'");
        $info = $info_user->fetch();
        //var_dump($info);
        $list_contact = $connexion->query("SELECT * FROM contacts WHERE id_user = '$id_user'");
        
        //var_dump($list_contact); "SELECT COUNT(*) FROM appartenir WHERE id_liste = ?;"


        //Selectionner les contacts qui appartiennent a la liste

        $appartenance = $connexion-> query("SELECT COUNT(*) FROM appartenir WHERE id_groupe =  '$id_groupe';");

        $app = $appartenance->fetch();


        
 $id_groupe = htmlspecialchars($_GET['id_groupe']);

$affiche_contact_groupe = $connexion ->query("SELECT * FROM contacts WHERE id_user = '$id_user'");
 
/*
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

        /*$lien_contact_groupe = $connexion-> query("SELECT contacts.*
        FROM contacts
        JOIN appartenir ON contacts.id_contact = appartenir.id_contact
        JOIN groupe_contact ON appartenir.id_groupe = groupe_contact.id_groupe
        WHERE groupe_contact.nom_groupe = 'NomDuGroupe';");
        */

        


    }
    else{
        echo 'variables non recues';
    }
        
?>





