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
                        <form action="contact_action_page.php" method="post">
                            <div class="formBox">
                                <div class="row50">
                                    <div class="inputBox">
                                        <span>First Name</span>
                                        <input type="text" placeholder="John" id="fname" name="fname">
                                    </div>
                                    <div class="inputBox">
                                        <span>Last Name</span>
                                        <input type="text" placeholder="Doe" id="lname" name="lname">
                                    </div>
                                </div>

                                <div class="row50">
                                    <div class="inputBox">
                                        <span>Email</span>
                                        <input type="text" placeholder="johndoe@email.com" id="email" name="email">
                                    </div>
                                    <div class="inputBox">
                                        <span>Mobile</span>
                                        <input type="text" placeholder="+91 987 654 3210" id="phonenum" name="phonenum">
                                    </div>
                                </div>
                                <div class="row100">
                                    <div class="inputBox">
                                        <span>Message</span>
                                        <textarea placeholder="Write your message here..." id="message" name="message"></textarea>
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
                                <li><a href="https://www.facebook.com/thegreententmatakana""><ion-icon name="logo-facebook"></ion-icon></a></li>
                                <li><a href="https://www.instagram.com/thegreententmatakana/"><ion-icon name="logo-instagram"></ion-icon></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Map -->
                    <div class="contact map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12852.934973076095!2d174.71438686675543!3d-36.355116759757735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d0cdb048e7cd525%3A0x6a4ed707ae581b8a!2sTongue%20Farm%20Road%2C%20Matakana%200985!5e0!3m2!1sen!2snz!4v1656284337658!5m2!1sen!2snz" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </main>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<?php include 'bottom.php';?>