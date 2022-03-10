<?php
    session_start();
    require_once 'config.php'; 

    if( isset($_POST['email']) && isset($_POST['password'])) 
    {
        
        $email = htmlspecialchars($_POST['email']); 
        $password = htmlspecialchars($_POST['password']);
        
        $check = $bdd->prepare('SELECT * FROM client');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();

        if($row > 1)
        {
            
            if(filter_var($email, FILTER_VALIDATE_EMAIL))
            {
             
                if ($data['mdp_client'] =$password)
                {
                    
                    $_SESSION['submit'] = $data['pseudo'];
                    header('Location: acceuil.php');
                    
                }else{ header('Location: connexion.php?login_err=password'); die(); }
            }else{ header('Location: connexion.php?login_err=email'); die(); }
        }else{ header('Location: connexion.php?login_err=already'); die(); }
    }else{ header('Location: index.php'); die();} 