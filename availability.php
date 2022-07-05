<?php include 'head.php';?>

<body>
    <script src="calendar.js"></script>
    <div class="container">

        <header class="availability-page-bg-img">

        <?php include 'nav.php'; ?>


            <span class="header-title">
                <h1>Availability</h1>
            </span>
        </header>

        <?php include 'mobile-nav.php'; ?>

        <main class="availability-page-main">
            <div class="calendar-container">
                <div class="calendar">
                    <div class="month">
                        <i class="fas fa-angle-left prev"></i>
                        <div class="date">
                            <h1></h1>
                            <p>Fri May 29, 2020</p>
                        </div>
                        <i class="fas fa-angle-right next"></i>
                    </div>
                    <div class="weekdays">
                        <div>Sun</div>
                        <div>Mon</div>
                        <div>Tue</div>
                        <div>Wed</div>
                        <div>Thu</div>
                        <div>Fri</div>
                        <div>Sat</div>
                    </div>
                    <div class="days">
                    
                    </div>
                </div>
            </div>          
        </main>

<?php include 'bottom.php';?>