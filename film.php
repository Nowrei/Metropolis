<?php session_start();
include 'config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metropolis</title>
    <link rel="stylesheet" href="assets/styles/film.css">
    <link rel="stylesheet" href="assets/styles/navbarre.css">
    <link rel="stylesheet" href="assets/styles/footer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
<body>


<?php include("assets/include/navbarre.php") ?>


        <?php 
$sql = "SELECT * FROM film WHERE id_film=".$_GET["id_film"]."";
$requete=$bdd->prepare($sql);
$requete->execute();
$affiche = $requete->fetch(); 

$sql2 = "SELECT * FROM `joue` j,film f, acteur a WHERE j.id_acteur=a.id_acteur AND j.id_film=f.id_film AND f.id_film=".$_GET["id_film"]."";
$requete2=$bdd->prepare($sql2);
$requete2->execute();
$affiche2 = $requete2->fetchAll();

$sql3 = "SELECT * FROM `avoir` a, film f, realisteur r WHERE a.id_realisteur=r.id_realisteur AND a.id_film=f.id_film AND f.id_film=".$_GET["id_film"]."";
$requete3=$bdd->prepare($sql3);
$requete3->execute();
$affiche3 = $requete3->fetchAll();


?>  
        <div class="background">
        <h1><?php echo $affiche["nom_film"]; ?></h1>
          <style>
            .background {
              background: url(<?php echo $affiche["affiche_film"]; ?>);
              background-size:cover;
             
            }
          </style>
        </div>

        <div class="presentation">
            <div class="info"><h2>Information</h2><br>
              Titre original:  <?php echo $affiche["nom_film"]; ?><br>
              Durée :  <?php echo $affiche["duree_film"]; ?><br>
              Réalisateur : 
              <?php foreach ($affiche3 as $affiche33)
             {

             echo $affiche33["nom_realisateur"];
           }
           ?>
           <br>
              Pays d'origine : <?php echo $affiche["pays_film"]; ?><br>
              Genre : <?php echo $affiche["genre_film"] ?><br>
              Date de sortie: <?php echo $affiche["date_film"]; ?><br>
              
            
            
            
            </div>
            <div class="syno"><h2>Synopsis</h2><br>
              <?php echo $affiche["synopsis_film"]; ?>  </div>
            <div class="acteur"><h2>Acteurs</h2><br>
            <?php foreach ($affiche2 as $affiche22)
             {

             echo $affiche22["nom_acteur"];
           }
           ?>
            </div>
        </div>

        <div class="video-wrapper">
          <iframe width="600" height="500" src="<?php echo$affiche["annonce_film"]; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>


          <?php include("assets/include/footer.php") ?>
</body>