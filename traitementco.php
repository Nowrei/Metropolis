<?php
include 'config.php';

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM CLIENT WHERE mail_client = :mail_client";
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
                    $_SESSION['mail'] = $resultat['mail_client'];
                    header("location:acceuil.php");



                }else{
                    header("location:connexion.php?message=error2");
                }

            }



        }
        else{header("location:connexion.php?message=error");}


