

<?php

    //Ecoute du clic du bouton connexion

    if(isset($_POST['Connexion'])){
        //verifie si les champs ne sont pas vides

        if(!empty($_POST['email_user']) && !empty($_POST['password'])){

            $email_user = $_POST['email_user'];

            $password_user =trim($_POST['password']);

           $req= $connexion->query("SELECT * FROM utilisateurs WHERE `mail_user`='$email_user'") or die('echec');

           if($req->rowCount()>0){

            $row = $req->fetch();

            $passwordhash_user =$row['password_user'];

            //Verifie si les mots de passes correspondent
            if(password_verify($password_user,$passwordhash_user)){

                //On cree les varibles de sessions
                
                session_start();
                $_SESSION['id']=  $row['id_user'];
                
                header("Location:sous-contenu/dashboard.php");

            }
            else{
                $message_erreur='Mot de passe incorrect !';
                            header("Refresh:4");
            }

           }
           else{
            $message_erreur='Utilisateur inexistant. <br>
                            Veillez vous inscrire !';
            header("Refresh:4");
           }

        } 
        else{
            $message_erreur='Veillez remplir tous les champs !';
                header("Refresh:4");
        }   
    }


?>