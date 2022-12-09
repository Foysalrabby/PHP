<?php

$stu_id = $_GET['id'];

include 'config.php';
$sql="DELETE FROM`students`WHERE sid={$stu_id}";
$result = mysqli_query($con,$sql) or die("uncessful");

header("Location:http://localhost/crud_html/index.php");
mysqli_close($con);




?>