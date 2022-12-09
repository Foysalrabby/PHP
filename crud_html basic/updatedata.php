<?php
$stu_id = $_POST['sid'];
 $stu_name = $_POST['sname'];
$stu_addres= $_POST['saddress'];
 $stu_class = $_POST['sclass'];
 $stu_phone = $_POST['sphone'];

$con=mysqli_connect("localhost","root", "","crud") or die("connection failed");
$sql="UPDATE`students`SET name='{$stu_name}',address='{$stu_addres}',sclass='{$stu_class}',sphone='{$stu_phone}'WHERE sid='{$stu_id }'";
$result=mysqli_query($con,$sql) or die("unsucessful");

header("Location:http://localhost/crud_html/index.php");
 mysqli_close($con);


?>