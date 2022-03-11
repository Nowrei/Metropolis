<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S'inscrire</title>
    <link rel="stylesheet" href="assets/styles/s'inscrire.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/2c7fc28a2f.js"></script>
</head>
<body>
<a href="index.php" class ="Buttonretc">Précédent</a>

<div class=login-form>
<?php 
                if(isset($_GET['reg_err']))
                {
                    $err = htmlspecialchars($_GET['reg_err']);

                    switch($err)
                    {
                        case 'success':
                        ?>
                            <div class="alert alert-success">
                                <strong>Succès</strong> inscription réussie !
                            </div>
                        <?php
                        break;

                        case 'password':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> mot de passe différent
                            </div>
                        <?php
                        break;

                        case 'email':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email non valide
                            </div>
                        <?php
                        break;

                        case 'email_length':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email trop long
                            </div>
                        <?php 
                        break;

                        case 'pseudo_length':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> pseudo trop long
                            </div>
                        <?php 
                        case 'already':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> compte deja existant
                            </div>
                        <?php 

                    }
                }
                ?>
    <form action="traitementinscri.php" method="post">
        <div class="form-control">
            <label for="nom">Nom</label>
            <input type="text" id="nom" name="nom">
        </div>
        <div class="form-control">
            <label for="prenom">Prénom</label>
            <input type="text" id="prenom" name="prenom">
        </div>
        <div class="form-control">
            <label for="email">Email</label>
            <input type="email" id="email" name="email">
        </div>
        <div class="form-control">
            <label for="password">Mot de passe</label>
            <input type="password" id="password" name="password">
        </div>
        <div class="form-control">
            <label for="confirmpassword">Confirmer mot de passe</label>
            <input type="confirmpassword" id="confirmpassword" name="confirmpassword">
        </div>
        <div class="form-control">
            <button type="submit">S'inscrire</button>
        </div>
        <div id="errors">
            <ul></ul>
        </div>
        <p>Vous possédez déjà un compte ? <a href="connexion.php">Connexion</a></p>
    </form>
</div>
    
    <script src="assets/js/connexion.js">
    </script>
</body>