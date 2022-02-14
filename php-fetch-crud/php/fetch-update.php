<?php

include 'config.php';

$input = file_get_contents('php://input');
$decode = json_decode($input, true);

$student_id = $decode["s_id"];
$firstName = $decode["fname"];
$lastName = $decode["lname"];
$class = $decode["class"];
$city = $decode["city"];

$sql = "UPDATE students SET first_name = '{$firstName}', 
last_name = '{$lastName}',class = '{$class}', city= '{$city}' WHERE id = {$student_id}";

if(mysqli_query($conn,$sql)){
	echo json_encode(array('update' => 'success'));
}else{
	echo json_encode(array('update' => 'failed'));
}

?>