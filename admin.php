<?php include 'head.php'; ?>

<?php include"setup.php"; ?>

<body>
    <div class="container">

        <header class="availability-page-bg-img">
            
            <?php include 'nav.php'; ?>

            <span class="header-title">
                <h1>Admin</h1>
            </span>
        </header>   

        <?php include 'mobile-nav.php'; ?>

        <main>
            <table id="customers">
                <tr>
                    <th>Id num</th>
                    <th>Title 1</th>
                    <th>Para 1</th>
                </tr>
                <?php 
                    $sql = "SELECT * FROM pages";
                    $result = $conn->query($sql);
                
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                        #debugging print_r($row);
                        $id=$row['id'];
                        $title1=$row["title1"];
                        $para1=$row["para1"];
                        $image1=$row["img1"];
                      ?>
                <tr>
                    <td><?php print $id; ?></td>
                    <td><?php print $title1; ?></td>
                    <td><?php print $image1; ?></td>
                </tr>
                <?php
                    } 
                    } 
                    else {
                    
                        echo "0 results";
                    }
                $conn->close();
                ?>

        </main>
    </div>
<?php include 'bottom.php'; ?>