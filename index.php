<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="The name or airbnb is an airbnb in Matakana where you can stay">
    <meta name="keywords" content="Airbnb, bnb, Matakana, Omaha, The Green Tent, Green Tent,">
    <meta name="author" content="Josh Burgess">

    <title>The Green Tent</title>
    <!-- link to css -->
    <link href="css/the-green-tent_style.css" rel="stylesheet">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@700&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <!-- link to social media icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>


<body>
    <div class="container">

        <header>

            <nav>
                <div class="container-nav">
                    <h1>The Green Tent</h1>

                    <div class="menu">
                        <a href="#" class="is-active">Home</a>
                        <a href="#">About</a>
                        <a href="#">Availability</a>
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

        <main>
            <h1>Gallery</h1>
            <div class="home-gallery">
                <img class="home-gallery-img" id="home-gallery-1" alt="Image of inside" src="Images/the-green-tent-home-v2.jpg">
                <img class="home-gallery-img" id="home-gallery-2" alt="Image of deck" src="Images/the-green-tent-deck-v1.jpg">
                <img class="home-gallery-img" id="home-gallery-3" alt="Image of deck" src="Images/the-green-tent-outside-v1.jpg">
                <img class="home-gallery-img" id="home-gallery-4" alt="Image of kitchen" src="Images/the-green-tent-kitchen-v1.jpg">
            </div>
        </main>
        <footer>
            <div class="copyright">      
                <small>&copy; Copyright 2022, The Green Tent</small>
            </div>

            <h1 class="footer-name">The Green Tent</h1>

            <div class="social">
              <h1>Follow Us</h1>
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-instagram"></a>
            </div>
        </footer>
        
    </div> <!-- container -->

    <!-- link to js -->
   <script src="js/nav.js"></script>
</body>
</html>