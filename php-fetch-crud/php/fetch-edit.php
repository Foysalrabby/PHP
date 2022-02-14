<?php

include 'config.php';

$sid = $_GET['editId'];

$sql = "SELECT * FROM students WHERE id = {$sid}";

$result = mysqli_query($conn, $sql) or die("SQL Failed");
$output = [];

if(mysqli_num_rows($result) > 0){
  while($row = mysqli_fetch_assoc($result)){
    $output['response'][] = $row;
  }
}

$sql1 = "SELECT * FROM class";

$result1 = mysqli_query($conn, $sql1) or die("SQL Failed");

if(mysqli_num_rows($result1) > 0){
  while($row1 = mysqli_fetch_assoc($result1)){
    $output['class'][] = $row1;
  }
}

mysqli_close($conn);

echo json_encode($output);

?>