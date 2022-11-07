<?php
session_start();

include 'setup.php';

$user_id = $_SESSION['id'];
$arrive = $_POST["arrive"];
$depart = $_POST["depart"];



function getBetweenDates($startDate, $endDate)
{
    $rangArray = [];
        
    $startDate = strtotime($startDate);
    $endDate = strtotime($endDate);
         
    for ($currentDate = $startDate; $currentDate <= $endDate; 
                                    $currentDate += (86400)) {
                                            
        $date = date('Y-m-d', $currentDate);
        $rangArray[] = $date;
    }

    return $rangArray;
}

$dates = getBetweenDates($arrive, $depart);
    $count = 1;
    foreach ($dates as $value) {
        $x = 'value'.$count;
        $$x = $value; //here's the usage of Variable variables
        $count++;
    }


$sql = "INSERT INTO bookings (user_id, booking_date) VALUES 
('$user_id', '$value1'), 
('$user_id', '$value2'), 
('$user_id', '$value3'), 
('$user_id', '$value4'), 
('$user_id', '$value5'),
('$user_id', '$value6'),
('$user_id', '$value7'),
('$user_id', '$value8'),
('$user_id', '$value9'),
('$user_id', '$value10'),
('$user_id', '$value11'),
('$user_id', '$value12'),
('$user_id', '$value13'),
('$user_id', '$value14')";

if ($conn->query($sql) === TRUE) {

    echo '<script type="text/javascript">'; 
    echo 'alert("Thank you for your booking!");'; 
    echo 'window.location.href = "availability.php";';
    echo '</script>';	
} 


else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();



?>
