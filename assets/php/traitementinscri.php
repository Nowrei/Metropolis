<?php
include "config.php";

$nom = $_POST['Nom'];
$prenom = $_POST['Prénom'];
$email = $_POST['Email'];
$password = $_POST['Mot de passe'];
$password1 = $_POST['Confirmer mot de passe'];



if ($password == $password1){
    $password = password_hash( $password, PASSWORD_DEFAULT);    

    $sql="SELECT * FROM client WHERE mail_client = :mail_client";
    $requete= $bdd->prepare($sql);
    $requete->execute(array(
        "mail_client" => $email
    ));

    $testmail = 0;
        while($resultat = $requete->fetch()) {

          if ($email == $resultat['mail_client']) {

            $testmail = 1 ;
        }
    }


    if ($testmail == 0) {

    $sql = "INSERT INTO client (nom_client, prenom_client, mail_client, mdp_client) VALUES (:nom_client, :prenom_client, :mail_client, :mdp_client)";
    $requete= $bdd->prepare($sql);
    $requete->execute(array(
        ":nom_client" => $nom,
        ":prenom_client" => $prenom,
        ":mail_client" => $email,
        ":mdp_client" => $password
    )); 
    header ("location: ../../connexion.php?message=succes");

    }else{header('location: ../../inscrire.php?message=error2');}
}else{

    header ("location: ../../inscrire.php?message=error");
}