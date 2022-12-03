<?php

$user_id= $_GET["id"];

include "setup.php";

    $sql = "DELETE FROM accounts WHERE user_id = $user_id";

    $result = mysqli_query($conn,$sql);
    if(mysqli_affected_rows($conn)>0) {
        header('location:accounts.php');
    } else {
       header('location:accounts.php');
    }
   
?>