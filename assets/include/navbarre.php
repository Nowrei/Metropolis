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
              <p>Bonjour <?php echo $_SESSION['mail']; ?></p>
              <a href="acceuil.php" >Acceuil</a>
              <a href="#" >Films</a>
              <a href="logout.php" >Déconnexion</a>
              
    
            </div>
          </div>
        </nav>

      
