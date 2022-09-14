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
    <link rel="stylesheet" type="text/css" href="css/form.css">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@700&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <!-- link to social media icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>

<?php include"setup.php";

    print_r($_GET);
    $pageID= $_GET["id"];
?>
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
                <?php 
                    $sql = "SELECT * FROM pages where id = $pageID";
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
                    } 
                    } 
                    else {
                    
                        echo "0 results";
                    }
                $conn->close();
                ?>

            <form action="edit_action_page.php" method="post" >
    <div class="row">
      <div class="col-25">
        <label for="pageID">ID</label>
      </div>
      <div class="col-75">
    <?php print $id ?>
          <input type="hidden" id="pageID" name="pageID" value= "<?php print $pageID ?>">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="title1">Title One</label>
      </div>
      <div class="col-75">
        <input type="text" id="title1" name="title1" value="<?php print $title1 ?>">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="country">Country</label>
      </div>
      <div class="col-75">
        <select id="country" name="country">
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">New Zealand</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="para1">Paragraph 1</label>
      </div>
      <div class="col-75">
        <textarea id="para1" name="para1" style="height:200px"><?php print $para1 ?></textarea>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="image1">Image One</label>
      </div>
      <div class="col-75">
        <input type="text" id="image1" name="image1" value="<?php print $image1 ?>">
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>



        </main>
<?php include 'bottom.php'; ?>