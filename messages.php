<?php 
include 'head.php';

session_start();

if (!isset($_SESSION['loggedin'])) {
	header('Location: phplogin/login.php');
}

if ($_SESSION['admin'] <> 1) {
    header('Location: index.php');
}

?>

<body>
    <div class="container">

        <header class="availability-page-bg-img">
            
            <?php include 'nav.php'; ?>

            <span class="header-title">
                <h1>Admin Messages</h1>
            </span>
        </header>   

        <?php include 'mobile-nav.php'; ?>

        <main>
            <table id="dbtable">
                <tr>
                    <th>Id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Message</th>
                </tr>
                <?php 
                    $sql = "SELECT * FROM messages";
                    $result = $conn->query($sql);
                
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                        #debugging print_r($row);
                        $id=$row['id'];
                        $fname=$row["fname"];
                        $lname=$row["lname"];
                        $email=$row["email"];
                        $phonenum=$row["phonenum"];
                        $message=$row["message"];
                      ?>
                <tr>
                    <td><?php print $id; ?></td>
                    <td><?php print $fname; ?></td>
                    <td><?php print $lname; ?></td>
                    <td><?php print $email; ?></td>
                    <td><?php print $phonenum; ?></td>
                    <td><?php print $message; ?></td>
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