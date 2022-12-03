<?php

$id= $_GET["id"];

include "setup.php";

    $sql = "DELETE FROM messages WHERE id = $id";

    $result = mysqli_query($conn,$sql);
    if(mysqli_affected_rows($conn)>0) {
        header('location:messages.php');
    } else {
       header('location:messages.php');
    }
   
?>