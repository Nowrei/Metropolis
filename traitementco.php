<?php 
    session_start(); 
    require_once 'config.php'; 

    if( isset($_POST['email']) && isset($_POST['password'])) 
    {
        
        $email = htmlspecialchars($_POST['email']); 
        $password = htmlspecialchars($_POST['password']);
        
        $email = strtolower($email); 
        
        
        $check = $bdd->prepare('SELECT  mail, mdp FROM client WHERE mail = ?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();
        
        

        
        if($row == 1)
        {
            
            if(filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                $password = hash ('sha256', $password);
                if ($data['mdp'] ==$password)
                {
                    
                    $_SESSION['user'] = $data['token'];
                    header('Location: connexion.php');
                    
                }else{ header('Location: connexion.php?login_err=password'); die(); }
            }else{ header('Location: connexion.php?login_err=email'); die(); }
        }else{ header('Location: connexion.php?login_err=already'); die(); }
    }else{ header('Location: acceuil.php'); die();} 