<?php include 'head.php'; ?>

<?php include"setup.php";
    
    $sql = "SELECT * FROM pages where id=1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        $row = $result->fetch_assoc();
        #debugging print_r($row);
        $title1=$row["title1"];
        $para1=$row["para1"];
        $image1=$row["img1"];
        $title2=$row["title2"];
        $para2=$row["para2"];
        $image2=$row["img2"];
        $title3=$row["title3"];
        $para3=$row["para3"];
        $image3=$row["img3"];
        $title4=$row["title4"];
        $para4=$row["para4"];
        $image4=$row["img4"];

    } else {
        echo "0 results";
    }
$conn->close();
      
    ?>
<body>
    <div class="container">

        <header class="about-page-bg-img">
            
            <?php include 'nav.php'; ?>

            <span class="header-title">
                <h1>About</h1>
            </span>
        </header>   

        <?php include 'mobile-nav.php'; ?>

        <main>
            <h1><?php print $title1; ?></h1>
            <div class="about-page-main"> 
                <span id="about-page-paragraph-1">
                    <?php print $para1; ?>                
                </span>

                <span id="about-page-paragraph-2">
                    <?php print $para2; ?>
                </span>

                <h1 id="info">
                <?php print $title2; ?>
                </h1>
                    <ul id="info-list">
                        <?php print $para3; ?>
                    </ul>

                <h1 id="rates">
                <?php print $title3; ?>
                </h1>
                    <ul id="rates-list">
                        <?php print $para4; ?>
                    </ul>
            </div>
        </main>
        
<?php include 'bottom.php'; ?>