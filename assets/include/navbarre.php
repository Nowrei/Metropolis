<nav class="sticky">
        <div class="nav">
            <input type="checkbox" id="nav-check">
            <div class="nav-header">
              <div class="nav-title">
                <a href="index.php">Metropolis</a>
              </div>
            </div>
            <div class="nav-btn">
              <label for="nav-check">
                <span></span>
                <span></span>
                <span></span>
              </label>
            </div>
            
            <div class="nav-links">

            <?php 
            if (isset($_SESSION['prenom'])) {
              ?>
              <a hreh=#>Bonjour <?php echo $_SESSION['prenom']; ?> <?php echo $_SESSION['nom'];?></a>

              <?php } ?>
              <a href="accueil.php" >Acceuil</a>
              <a href="#" >Films</a>
              <?php
              if (isset($_SESSION['prenom'])) { ?>
              <a href="assets/php/logout.php" >Déconnexion</a>
              <?php }else { ?>
             
                <label class="dropdown">

<div class="dd-button">
  Connexion/Inscription
</div>

<input type="checkbox" class="dd-input" id="test">

<ul class="dd-menu">
  <li><a href="connexion.php" >Connexion</a></li>
  <li><a href="inscrire.php" >S'inscrire</a></li>
</ul>

</label>
              <?php } ?>
              
    
            </div>
          </div>
        </nav>

      
