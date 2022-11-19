<?php 
include 'head.php';
include 'setup.php';

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
            
        <?php include 'admin-nav.php'; ?>

            <span class="header-title">
                <h1>Bookings</h1>
            </span>
        </header>   
        
        <main>
            <table id="dbtable">
                <tr>
                    <th>Username</th>
                    <th>Email</th>
                    <th>bookings</th>
                </tr>
                <?php 
                    $sql = "SELECT * From accounts INNER JOIN bookings ON accounts.user_id = bookings.user_id";
                    $result = $conn->query($sql);
                
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                        #debugging print_r($row);
                        $id=$row['id'];
                        $username=$row["username"];
                        $email=$row["email"];
                        $booking_date=$row["booking_date"];
                      ?>
                <tr>
                    <td><?php print $username; ?></td>
                    <td><?php print $email; ?></td>
                    <td><?php print $booking_date; ?></td>
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