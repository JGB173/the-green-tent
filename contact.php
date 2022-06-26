<?php include 'head.php';?>

<body>
    <div class="container">

        <header class="contact-page-bg-img">

            <?php include 'nav.php'; ?>

            <span class="header-title">
                <h1>Contact</h1>
            </span>
        </header>

            <?php include 'mobile-nav.php'; ?>

        <main class="contact-page">
            <div class="contact-us">
                <div class="title">
                    <h2>Get in Touch</h2>
                </div>
                <div class="box">
                    <!-- Form -->
                    <div class="contact form">
                        <h3>Send a Message</h3>
                        <form>
                            <div class="formBox">
                                <div class="row50">
                                    <div class="inputBox">
                                        <span>First Name</span>
                                        <input type="text" placeholder="John">
                                    </div>
                                    <div class="inputBox">
                                        <span>Last Name</span>
                                        <input type="text" placeholder="Doe">
                                    </div>
                                </div>

                                <div class="row50">
                                    <div class="inputBox">
                                        <span>Email</span>
                                        <input type="text" placeholder="johndoe@email.com">
                                    </div>
                                    <div class="inputBox">
                                        <span>Mobile</span>
                                        <input type="text" placeholder="+91 987 654 3210">
                                    </div>
                                </div>

                                <div class="row100">
                                    <div class="inputBox">
                                        <span>Message</span>
                                        <textarea placeholder="Write your message here..."></textarea>
                                    </div>
                                </div>

                                <div class="row100">
                                    <div class="inputBox">
                                        <input type="submit" value="Send">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Info Box -->
                    <div class="contact info">
                        <h3>Contact Info</h3>
                        <div class="infoBox">
                            <div>
                                <span><ion-icon name="location"></ion-icon></span>
                                <p>Tongue Farm Road Matakana 0985, Auckland <br>New Zealand</p>
                            </div>
                            <div>
                                <span><ion-icon name="mail"></ion-icon></span>
                                <a href="#mailto:stay@thegreentent.co.nz">stay@thegreentent.co.nz</a>
                            </div>
                            <div>
                                <span><ion-icon name="call"></ion-icon></span>
                                <a href="#tel:+64(0)212162320">+64 (0) 21 2162320</a>
                            </div>
                            <!-- social media icons -->
                            <ul class="sci">
                                <li><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
                                <li><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
                                <li><a href="#"><ion-icon name="logo-linkedin"></ion-icon></a></li>
                                <li><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Map -->
                    <div class="contact map"></div>
                </div>
            </div>
        </main>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<?php include 'bottom.php';?>