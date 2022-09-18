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


// write query
$sql = 'SELECT booking_date FROM bookings where user_id = '.$_SESSION['id'].'';


// make query & get result
$result = mysqli_query($conn, $sql);

// fetch the resulting rows as an array
$booking_date = mysqli_fetch_all($result, MYSQLI_ASSOC);

// free result from memory
mysqli_free_result($result);

// close connection
mysqli_close($conn);

?>

<body>
        <header class="availability-page-bg-img">

        <?php include 'nav.php'; ?>


            <span class="header-title">
                <h1>Availability</h1>
            </span>
        </header>
        <?php include 'mobile-nav.php'; ?>
     


        <tr>
			<td>Hello, <?=$_SESSION['name']?> your current bookings are:</td>
			<td><?php print_r(array_values($booking_date));?></td>
		</tr>

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