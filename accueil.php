<?php session_start();
include 'config.php';
$requete = $bdd->prepare('SELECT * FROM film WHERE id_film');
    $requete->execute();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceuil</title>
    <link rel="stylesheet" href="assets/styles/accueil.css">
    <link rel="stylesheet" href="assets/styles/navbarre.css">
    <link rel="stylesheet" href="assets/styles/footer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/ee02dbcf72.js" crossorigin="anonymous"></script>
</head>
<body>
<?php include("assets/include/navbarre.php") ?>

        <div id="container">
      
          <div id="leftView"></div>
          <button id="navLeft" class="navBtns"><i class="fas fa-arrow-left fa-3x"></i></button>
          <a id="linkTag">
          <div id="mainView"></div>
          </a>
          <div id="rightView"></div>
          <button id="navRight" class="navBtns"><i class="fas fa-arrow-right fa-3x"></i></button>
        </div>

<div class="allemand">
  
        <div class="framebox">
          <hr>
          <h2>Nos films</h2>
          <hr>
          <div class="owl-carousel">
          <?php
          $requete = $bdd->prepare('SELECT * FROM film WHERE id_film');
          $requete->execute();
                                while($row=$requete->fetch())
                                
                                {
                                ?>
         <a class="item item" href="film.php?id_film=<?php echo $row['id_film'];?>"><img src ="<?php echo $row['bande_film'];?>"/></a>
         <?php
                                }
                                ?>
     </div>
</div>



<?php include("assets/include/footer.php") ?>




     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js" ></script>
     <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" rel="stylesheet" type="text/css">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <script src="assets/js/carousel.js">
        </script>
        <script src="assets/js/slider.js">
        </script>
</body>
</html>