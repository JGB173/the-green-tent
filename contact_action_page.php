<?php
include ('setup.php');

$booking_date = $_POST["booking_date"];
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$phonenum = $_POST["phonenum"];
$arrive = $_POST["arrive"];
$depart = $_POST["depart"];
$message = $_POST["message"];

$sql = "INSERT INTO bookings (booking_date, fname, lname, email, phonenum, arrive, depart, message)
VALUES ('$booking_date', '$fname', '$lname', '$email', '$phonenum', '$arrive', '$depart', '$message')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>