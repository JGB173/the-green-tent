

<nav>
    <div class="container-nav">
        <img src="Images/the-green-tent-logo.png" class="logo">
        <div class="menu">
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
            
        </div>

        <button id="hamburger" class="hamburger" onclick="myFunction()">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</nav>