<?php 
session_start();
if(!isset($_SESSION['prenom'])) {

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="assets/styles/s'inscrire.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
</head>

<body>
<a href="index.php" class ="Buttonretc">Précédent</a>

<div class=login-form>
    <form action="traitementco.php" method="post">
        <div class="form-control">
            <h1>Connexion</h1>
            <?php

            if (isset($_GET['message'])) {
                if ($_GET['message'] == "succes") {

                echo "Vous êtes bien inscrit";
                }
            }

            if (isset($_GET['message'])) {
                if ($_GET['message'] == "error") {

                echo "Vous n'êtes pas inscrit";
                }
            }

            if (isset($_GET['message'])) {
                if ($_GET['message'] == "error2") {

                echo "Mauvais mot de passe";
                }
            }

          
            ?>
            <br><br>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" >
        </div>
        <div class="form-control">
            <label for="password">Mot de passe</label>
            <input type="password" id="password" name="password" >
        </div>
        <div class="form-control">
            <button type="submit" name="submit">Connexion</button>
            <p>Pas encore de compte? <a href="inscrire.php">Inscris-toi ici</a></p>
        </div>
    </form>
</div>
   
   
</body>
</html>
<?php }

else{header("location:accueil.php");}
        ?>