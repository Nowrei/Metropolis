<?php 
session_start();
require 'assets/class/autoloader.php';
Autoloader::register();
$form = new formulaire ($_POST);
$form1 = new password ($_POST);
if(!isset($_SESSION['prenom'])) {

?>

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

    <form action="assets/php/traitementinscri.php" method="post">
        
            <h1>Inscription</h1>
            <?php

            if (isset($_GET['message'])) {
                if ($_GET['message'] == "error") {

                echo "Les mots de passe ne sont pas identiques";
                }

                if ($_GET['message'] == "error2") {

                    echo "L'email éxiste déjà";
                        }
            }

          
            ?>
            <br><br>

            <?php
            echo $form->input('Nom');
            echo $form->input('Prénom');
            echo $form->input('Email');
            echo $form1->input('Mot de passe');
            echo $form1->input('Confirmer mot de passe');
            echo $form->submit();
    ?>
        <p>Vous possédez déjà un compte ? <a href="connexion.php">Connexion</a></p>
    </form>
</div>
    
    <script src="assets/js/connexion.js">
    </script>
</body>
</html>
<?php }

else{header("location:accueil.php");}
        ?>