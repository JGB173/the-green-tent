<nav class="mobile-nav">
    <a href="index.php">Home</a>
    <a href="about.php">About</a>
    <a href="availability.php">Availability</a>
    <a href="gallery.php">Gallery</a>
    <a href="contact.php">Contact</a>
    <?php 
            if(!isset($_SESSION['loggedin'])){?>
            <a href="phplogin/login.php">Login</a>
            <?php }

             else
             {
            ?>          
            <a href="phplogin/logout.php" class="logout"><i class="fas fa-sign-out-alt"></i></a>
            <?php 
                } 
            ?>
</nav>