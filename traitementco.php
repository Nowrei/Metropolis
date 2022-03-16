<?php
include 'config.php';

$email = $_POST['email'];
$password = $_POST['password']

$sql="SELECT * FROM client WHERE mail_client = :mail_client";
$requete= $bdd->prepare($sql);
$requete->execute(array(
    "mail_client" => $email
));

$count = $requete->rowCount();