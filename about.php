<?php include 'head.php'; ?>

<body>
    <div class="container">

        <header class="about-page-bg-img">

            <nav>
                <div class="container-nav">
                    <h1>The Green Tent</h1>

                    <div class="menu">
                        <a href="index.php">Home</a>
                        <a href="about.php" class="is-active">About</a>
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

            <span class="about-header">
                <h1>About</h1>
            </span>
        </header>   

        <nav class="mobile-nav">
            <a href="index.php">Home</a>
            <a href="about.php" class="is-active-mobile">About</a>
            <a href="availability.php">Availability</a>
            <a href="gallery.php">Gallery</a>
            <a href="contact.php">Contact</a>
        </nav>

        <main>
            <h1>About the property</h1>
            <div class="about-page-main"> 
                <span id="about-page-paragraph-1">
                    A luxurious Mongolian-style yurt set in rural Matakana within walking distance of the vibrant village. Private & self-contained this access-friendly, chic retreat has everything you need to experience glamping at its finest from luxury linen to technology needs. A locally crafted kitchen & bathroom a step away across a covered deck. Outdoor bath, festoon lights & campfire add the extra touches for an unforgettable escape. Relax & unwind in this truly tranquil setting, you won't want to leave…
                </span>

                <span id="about-page-paragraph-2">
                    The Green Tent is located on the Matakana cycleway close to our vibrant village with our famous market, great dining options, shops & boutique cinema The Matakana Coast is a fantastic area to visit with it's stunning beaches, regional parks, and surf spots - make it your next adventure Surrounded by farmland The Green Tent is super private and relaxing, make yourself at home and enjoy the peaceful rural setting
                </span>

                <h1 id="info">Info</h1>
                    <ul id="info-list">
                        <li>Air Conditioning</li>
                        <li>Bathtub</li>
                        <li>Bedrooms: 1</li>
                        <li>Beds: 1</li>
                        <li>Bathroom: 1</li>
                        <li>Kitchen</li>
                        <li>Wi-Fi</li>
                        <li>Tv</li>
                        <li>Dedicated Workspace</li>
                    </ul>

                <h1 id="rates">Rates</h1>
                    <ul id="rates-list">
                        <li>MIDWEEK (SUNDAY-THURSDAY)<br>One night stay $270 + $60 cleaning fee </li>
                        <li>Two or more nights mid week<br>$260 per night + $60 cleaning fee</li>
                        <li>WEEKENDS<br>2 night minimum stay $580</li>
                    </ul>
            </div>
        </main>
        
<?php include 'bottom.php'; ?>