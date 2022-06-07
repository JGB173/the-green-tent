<?php include 'head.php';?>

<body>
    <div class="container">

        <header class="home-page-bg-img">

            <nav>
                <div class="container-nav">
                    <h1>The Green Tent</h1>

                    <div class="menu">
                        <a href="index.php">Home</a>
                        <a href="about.php">About</a>
                        <a href="availability.php">Availability</a>
                        <a href="gallery.php" class="is-active">Gallery</a>
                        <a href="contact.php">Contact</a>
                    </div>

                    <button id="hamburger" class="hamburger" onclick="myFunction()">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
            </nav>
        </header>

        <nav class="mobile-nav">
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="availability.php">Availability</a>
            <a href="gallery.php" class="is-active-mobile">Gallery</a>
            <a href="contact.php">Contact</a>
        </nav>

        <main>
            <h1>Check Availability</h1>
        </main>

<?php include 'bottom.php';?>