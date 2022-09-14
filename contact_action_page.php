<?php
include ('setup.php');

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$phonenum = $_POST["phonenum"];
$message = $_POST["message"];

$sql = "INSERT INTO messages (fname, lname, email, phonenum, message)
VALUES ('$fname', '$lname', '$email', '$phonenum', '$message')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>