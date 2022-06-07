<?php include 'head.php';?>

<body>
    <div class="container">

        <header class="home-page-bg-img">

            <nav>
                <div class="container-nav">
                    <h1>The Green Tent</h1>

                    <div class="menu">
                        <a href="index.php" class="is-active">Home</a>
                        <a href="about.php">About</a>
                        <a href="availability.php">Availability</a>
                        <a href="#">Gallery</a>
                        <a href="#">Contact</a>
                    </div>

                    <button id="hamburger" class="hamburger" onclick="myFunction()">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
            </nav>

            <div class="home-header-info">
                <p>
                A luxurious Mongolian-style yurt set in rural<br> 
                Matakana within walking distance of the<br> 
                vibrant village.
                </p>
            </div>
        </header>

        <nav class="mobile-nav">
            <a href="index.php" class="is-active-mobile">Home</a>
            <a href="about.php">About</a>
            <a href="#">Availability</a>
            <a href="#">Gallery</a>
            <a href="#">Contact</a>
        </nav>

        <main>
            <h1>Gallery</h1>
            <div class="home-gallery">
                <img class="home-gallery-img" id="home-gallery-1" alt="Image of inside" src="Images/the-green-tent-home-v2.jpg">
                <img class="home-gallery-img" id="home-gallery-2" alt="Image of deck" src="Images/the-green-tent-deck-v1.jpg">
                <img class="home-gallery-img" id="home-gallery-3" alt="Image of deck" src="Images/the-green-tent-outside-v1.jpg">
                <img class="home-gallery-img" id="home-gallery-4" alt="Image of kitchen" src="Images/the-green-tent-kitchen-v1.jpg">
            </div>
        </main>

<?php include 'bottom.php';?>