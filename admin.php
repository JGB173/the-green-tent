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
            <table id="dbtable">
                <tr>
                    <th>Id num</th>
                    <th>Title 1</th>
                    <th>Para 1</th>
                    <th>Image 1</th>
                    <th>Title 2</th>
                    <th>Para 2</th>
                    <th>Image 2</th>
                    <th>Title 3</th>
                    <th>Para 3</th>
                    <th>Image 3</th>
                    <th>Title 4</th>
                    <th>Para 4</th>
                    <th>Image 4</th>
                    
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
                        $title2=$row["title2"];
                        $para2=$row["para2"];
                        $image2=$row["img2"];
                        $title3=$row["title3"];
                        $para3=$row["para3"];
                        $image3=$row["img3"];
                        $title4=$row["title4"];
                        $para4=$row["para4"];
                        $image4=$row["img4"];
                      ?>
                <tr>
                    <td><?php print $id; ?></td>
                    <td><?php print $title1; ?></td>
                    <td><?php print $para1; ?></td>
                    <td><?php print $image1; ?></td>
                    <td><?php print $title2; ?></td>
                    <td><?php print $para2; ?></td>
                    <td><?php print $image2; ?></td>
                    <td><?php print $title3; ?></td>
                    <td><?php print $para3; ?></td>
                    <td><?php print $image3; ?></td>
                    
                </tr>
                <?php
                    } 
                    } 
                    else {
                    
                        echo "0 results";
                    }
                $conn->close();
                ?>
            </table>

        </main>
<?php include 'bottom.php'; ?>