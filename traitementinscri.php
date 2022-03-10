<?php 
    require_once 'config.php'; // On inclu la connexion à la bdd

    // Si les variables existent et qu'elles ne sont pas vides
    if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['confirmpassword']))
    {
        // Patch XSS
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $password_retype = htmlspecialchars($_POST['confirmpassword']);

        // On vérifie si l'utilisateur existe
        $check = $bdd->prepare('SELECT nom_client, prenom_client, mail_client, mdp_client FROM client WHERE mail_client = ?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();

        $email = strtolower($email); // on transforme toute les lettres majuscule en minuscule pour éviter que Foo@gmail.com et foo@gmail.com soient deux compte différents ..
        
        // Si la requete renvoie un 0 alors l'utilisateur n'existe pas 
        if($row == 0){ 
            if(strlen($pseudo) <= 100){ // On verifie que la longueur du pseudo <= 100
                if(strlen($email) <= 100){ // On verifie que la longueur du mail <= 100
                    if(filter_var($email, FILTER_VALIDATE_EMAIL)){ // Si l'email est de la bonne forme
                        if($password === $password_retype){ // si les deux mdp saisis sont bon

                        
            

                            // On insère dans la base de données
                            $insert = $bdd->prepare('INSERT INTO client(nom_client, prenom_client, mail_client, mdp_client,) VALUES(:nom_client, :prenom_client :mail_client, :mdp_client)');
                            $insert->execute(array(
                                'nom_client' => $nom,
                                'mail_client' => $email,
                                'mdp_client' => $password,
                                'prenom_client' => $prenom
                            
                            ));
                            // On redirige avec le message de succès
                            header('Location:inscrire.php?reg_err=success');
                            die();
                        }else{ header('Location: inscrire.php?reg_err=password'); die();}
                    }else{ header('Location: inscrire.php?reg_err=email'); die();}
                }else{ header('Location: inscrire.php?reg_err=email_length'); die();}
            }else{ header('Location: inscrire.php?reg_err=pseudo_length'); die();}
        }else{ header('Location: inscrire.php?reg_err=already'); die();}
    }