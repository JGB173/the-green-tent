<?php
$servername = "localhost";
$username = "sec_user";
$password = "greenChair153";
$dbname = "thegreentent";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully to $dbname";  

$sql = "DELETE FROM bookings WHERE booking_date < CURDATE()";
$result = $conn->query($sql);

?>