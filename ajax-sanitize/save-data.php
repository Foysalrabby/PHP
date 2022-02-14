<?php
$conn=mysqli_connect("localhost","root","","ajax-form") or die("connect failed");
$name=$_POST['fullname'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$coubtry=$_POST['country'];
$sql="INSERT INTO`students`(name,age,gender,city) VALUES('{$name}','{$age}','{$gender}','{$coubtry}')"; 
if(mysqli_query($conn,$sql)){
    echo"hello {$name} your data save";
}
else{
    echo"cannot save";
}
?>