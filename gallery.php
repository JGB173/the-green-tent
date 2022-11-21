<?php 
include 'head.php';
include 'setup.php';
session_start();

?>

<body>
    <div class="container">

        <header class="gallery-page-bg-img">
            <?php include 'nav.php'; ?>

            <span class="header-title">
                <h1>Gallery</h1>
            </span>
        </header>

        <?php include 'mobile-nav.php'; ?>

        <main>
            <div class="gallery-page-main">
                <img class="gallery-img" id="gallery-1" alt="Image of inside" src="Images/the-green-tent-gallery-lounge-v1.jpg">
                <img class="gallery-img" id="gallery-2" alt="Image of bed side" src="Images/the-green-tent-gallery-bed-v1.jpg">
                <img class="gallery-img" id="gallery-3" alt="Image of bed" src="Images/the-green-tent-gallery-bed2-v1.jpg">
                <img class="gallery-img" id="gallery-4" alt="Image of couch" src="Images/the-green-tent-gallery-couch-v1.jpg">
                <img class="gallery-img" id="gallery-5" alt="Image of plant closeup" src="Images/the-green-tent-gallery-plant-closeup-v1.jpg">
                <img class="gallery-img" id="gallery-6" alt="Image of doorway" src="Images/the-green-tent-gallery-doorway-v1.jpg">
                <img class="gallery-img" id="gallery-7" alt="Image of walk way between kitchen and yurt" src="Images/the-green-tent-gallery-outside-deck-v1.jpg">
                <img class="gallery-img" id="gallery-8" alt="Image of bath closeup" src="Images/the-green-tent-gallery-bath-v1.jpg">
                <img class="gallery-img" id="gallery-9" alt="Image of kitchen" src="Images/the-green-tent-gallery-kitchen-v1.jpg">
                <img class="gallery-img" id="gallery-10" alt="Image of kitchen closeup" src="Images/the-green-tent-gallery-kitchen-closeup-v1.jpg">
                <img class="gallery-img" id="gallery-11" alt="Image of outside seating" src="Images/the-green-tent-gallery-outside-seating-v1.jpg">
                <img class="gallery-img" id="gallery-12" alt="Image of table" src="Images/the-green-tent-gallery-table-closeup-v1.jpg">
                <img class="gallery-img" id="gallery-13" alt="Image of yurt from far away" src="Images/the-green-tent-longshot-v1.jpg">
            </div>

            <button onclick="topFunction()" id="myBtn" title="Go to top">&#8593</button>
        </main>

<?php include 'bottom.php';?>