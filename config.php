<?php 

$user="root";
$pass="";
try {
    $bdd = new PDO('mysql:host=localhost;dbname=metropolis', $user, $pass);
   
    
    $dbh = null;
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}