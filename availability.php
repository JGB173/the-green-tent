<?php 
include 'setup.php';
include 'head.php';
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
    echo '<script type="text/javascript">'; 
    echo 'alert("Please login to view the availability page.");'; 
    echo 'window.location.href = "phplogin/login.php";';
    echo '</script>';

	exit;
}


?>

<body>
        <header class="availability-page-bg-img">

        <?php include 'nav.php'; ?>


            <span class="header-title">
                <h1>Availability</h1>
            </span>
        </header>
        <?php include 'mobile-nav.php'; ?>
        <table id="bookings-table">
                <tr>
                    <th>Hello, <?=$_SESSION['name']?> your current bookings are:</th>
                </tr>
                <?php 
                    $sql = 'SELECT booking_date FROM bookings where user_id = '.$_SESSION['id'].'';
                    $result = $conn->query($sql);
                
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                        #debugging print_r($row);
                        $booking_date=$row["booking_date"];
                      ?>
                <tr>
                    <td><?php print $booking_date; ?></td>
                </tr>
                <?php
                    } 
                    } 
                $conn->close();
                ?>
            </table>

        <form action="availability_action_page.php" method="post">
                            <div class="formBox">
                                <div class="row50">
                                    <div class="inputdate">
                                        <span>Arrive</span>
                                        <input type="date" placeholder="John" id="arrive" name="arrive">
                                    </div>
                                    <div class="inputdate">
                                        <span>Depart</span>
                                        <input type="date" placeholder="Doe" id="depart" name="depart">
                                    </div>
                                </div>
                                <div class="row100">
                                    <div class="inputBox">
                                        <input type="submit" value="Send">
                                    </div>
                                </div>
                            </div>
                        </form>

    <div class="calendar">
        <?php
            include 'calendar.php';
            include 'booking.php';
            include 'bookablecell.php';
        
            $booking = new Booking(
                'thegreentent',
                'localhost',
                'root',
                ''
            );
            
            $bookableCell = new BookableCell($booking);
            
            $calendar = new Calendar();
            
            $calendar->attachObserver('showCell', $bookableCell);
            
            $bookableCell->routeActions();
            
            echo $calendar->show();
        ?>
    </div>


<?php include 'bottom.php';?>