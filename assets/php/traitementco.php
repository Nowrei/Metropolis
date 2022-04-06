<?php
include 'config.php';

$email = $_POST['Email'];
$password = $_POST['Mot de passe'];

$sql = "SELECT * FROM client WHERE mail_client = :mail_client";
$requete= $bdd->prepare($sql);
$requete->execute(array(
    ':mail_client' => $email
));

$count = $requete->rowCount();

if ( $count == 1) {

            while($resultat = $requete->fetch()) {

                if (password_verify($password,$resultat['mdp_client'])) {
                    session_start();
                    $_SESSION['id'] = $resultat['id_client'];
                    $_SESSION['nom'] = $resultat['nom_client'];
                    $_SESSION['prenom'] = $resultat['prenom_client'];
                    header("location:../../accueil.php");



                }else{
                    header("location:../../connexion.php?message=error2");
                }

            }



        }
        else{header("location:../../connexion.php?message=error");}



