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
              <a href="logout.php" >Déconnexion</a>
              <?php }else { ?>
             
              
              <a href="connexion.php" >Connexion</a>
              <?php } ?>
              
    
            </div>
          </div>
        </nav>

      
