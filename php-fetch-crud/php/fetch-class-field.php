<?php

include 'config.php';

$sql = "SELECT * FROM class";

$result = mysqli_query($conn, $sql) or die("SQL Failed");
$output = [];

if(mysqli_num_rows($result) > 0){
  while($row = mysqli_fetch_assoc($result)){
    $output[] = $row;
  }
}else{
    return false;
}

mysqli_close($conn);

echo json_encode($output);

?>