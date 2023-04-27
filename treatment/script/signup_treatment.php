<?php


//Scription pour l'inscrption d'un utilisateur
if(isset($_POST['inscription'])){
    //On verfie si tous les champs sont entres
    if(
        !empty($_POST['name_user']) 
        && !empty($_POST['sender_name'])
        && !empty($_POST['telephone'])
        && !empty($_POST['email_user'])
        && !empty($_POST['password_1'])
        && !empty($_POST['password_2'])
        && !empty($_POST['password_1'])
        && !empty($_POST['checkbox'])
    )
    {
        $name_user= htmlspecialchars(trim($_POST['name_user']));
        $sender_name=htmlspecialchars(trim($_POST['sender_name']));
        $telephone=htmlspecialchars(trim($_POST['telephone']));
        $email_user=htmlspecialchars(trim($_POST['email_user']));
        $password_1=htmlspecialchars(password_hash(trim($_POST['password_1']), PASSWORD_BCRYPT));
        $password_2=htmlspecialchars(trim($_POST['password_2']));
        $date_inscription = date('l d m Y G:i:s');
        if(!password_verify($password_2, $password_1)){
            $message[]='Les mots de passe sont différents';
            header("Refresh:3");
        }
        else{
            //Dans le cas ou les mots de passe correspondents, on fait la requete d'insertion dans la BD
            
            //id de l'utilisateur
            $Pref_id = uniqid('CS_'); 
            $id_user =uniqid($Pref_id);

            //id du compte
            $pref_idc =uniqid('CS_');
            $id_compte = uniqid($pref_idc);
            //insertion dans la table user 
            $req_1 = $connexion-> query("INSERT INTO utilisateurs 
                        (id_user, name_user, telephone, mail_user, password_user, date_inscription )
                        VALUES 
                        ('$id_user', '$name_user', '$telephone', '$email_user','$password_1', '$date_inscription');");
            //insertion dans la table compte

            $nombre_sms = 0;
            $sender_name='';
            $statut_compte='actif';

            $req_2 = $connexion->query("INSERT INTO comptes 
                        (id_compte, id_user, nombre_sms, sender_name, statut_compte)
                        VALUES 
                        ('$id_compte', '$id_user', '$nombre_sms', '$sender_name', '$statut_compte');");
            if($req_1 && $req_2)
            {
                $message_succes[]='Inscription Réussie !';
                header("Refresh:3");
            }
        }

    }else{
        $message_erreur[]='Veillez remplir tous les champs';
        header("Refresh:3");
    }
}






?>