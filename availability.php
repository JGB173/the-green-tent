<?php include 'head.php';?>

<body>
        <header class="availability-page-bg-img">

        <?php include 'nav.php'; ?>


            <span class="header-title">
                <h1>Availability</h1>
            </span>
        </header>
        <?php include 'mobile-nav.php'; ?>
       
    <div class="calendar">
        <?php
            include 'Calendar.php';
            include 'Booking.php';
            include 'BookableCell.php';
        
        
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