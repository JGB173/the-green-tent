<?php
include 'setup.php';

// Now we check if the data was submitted, isset() function will check if the data exists.
if (!isset($_POST['fname'], $_POST['lname'], $_POST['email'], $_POST['phonenum'], $_POST['message'])) {
	// Could not get the data that should have been sent.
    echo '<script type="text/javascript">'; 
    echo 'alert("Please complete the contact form!");'; 
    echo 'window.location.href = "contact.php";';
    echo '</script>';	
	exit;}
// Make sure the submitted registration values are not empty.
if (empty($_POST['fname']) || empty($_POST['lname']) || empty($_POST['email']) || empty($_POST['phonenum']) || empty($_POST['message'])) {
	// One or more values are empty.
    echo '<script type="text/javascript">'; 
    echo 'alert("Please complete the contact form!");'; 
    echo 'window.location.href = "contact.php";';
    echo '</script>';	
	exit;
}

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$phonenum = $_POST["phonenum"];
$message = $_POST["message"];

$sql = "INSERT INTO messages (fname, lname, email, phonenum, message)
VALUES ('$fname', '$lname', '$email', '$phonenum', '$message')";

if ($conn->query($sql) === TRUE) {

    echo '<script type="text/javascript">'; 
    echo 'alert("Thank you for your message!");'; 
    echo 'window.location.href = "contact.php";';
    echo '</script>';	
} 


else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>