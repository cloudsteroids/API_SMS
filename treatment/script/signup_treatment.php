<?php

//Initialisation des messages



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
        //Mettre les inputs recuperer dans des variables

        $name_user= htmlspecialchars(trim($_POST['name_user']));
        $sender_name=htmlspecialchars(trim($_POST['sender_name']));
        $telephone=htmlspecialchars(str_replace(' ','',$_POST['telephone']));
        $email_user=htmlspecialchars(trim($_POST['email_user']));
        $password_1=htmlspecialchars(password_hash(trim($_POST['password_1']), PASSWORD_BCRYPT));
        $password_2=htmlspecialchars(trim($_POST['password_2']));
        setlocale(LC_TIME, 'fr_FR.utf8'); // définit la langue française
        $date_inscription = strftime('%A %e %B %Y %H:%M:%S');

        if(!password_verify($password_2, $password_1)){
            $message_erreur='Entrez des mots de passes identiques !';
            header("Refresh:4");
            
        }
        else{

            $N_C_senderName= strlen($sender_name)<=11;

            //Expressions regulieres
            
            if(!preg_match("/^[a-zA-Z-' ]*$/", $name_user) || !$N_C_senderName
              || !preg_match('/^\\+?[1-9][0-9]{7,14}$/', $telephone)
              || !filter_var($email_user, FILTER_VALIDATE_EMAIL)
              || !preg_match('/^(?=.*?[A-Z])(?=.*?[#?!@$%^&*-]).{8,}$/', $password_1)
              ){
                $message_erreur='Assurez les conditions : 
                <br> - Nom utilisateur : Alpha numerique interdit ! <br>
                -Entrez un telephone Valide <br>
                -Sender Name 11 Caracteres Maximum <br>
                -Mot de passe : Minimun = 8 Caracteres , 1 Majuscule, 1 Alpha Numerique <br>';
                header("Refresh:20");
               
            }
            else{
                    //Les saisies sont au bon format

                     //Dans le cas ou les mots de passe correspondents, on verifie si l'utilisateur existe deja 

            $voir = $connexion->query("SELECT * FROM utilisateurs WHERE `mail_user`='$email_user'");
            $count = $voir->rowCount();
            if( $count>0){
                $message_erreur='Adresse Mail déjà utilisée';
                header("Refresh:4");
                
            }
            else{
                //Si l'utilisateur existe, on fait la requete d'insertion dans la BD
                
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
                    $message_succes='Inscription Réussie. <br>
                                    Connectez-Vous !';
                    header("Refresh:4");
                    
                }
                }
            }

            
        }
    }else{
        $message_erreur='Veillez remplir tous les champs !';
        header("Refresh:4.8");
        
    }
}
?>