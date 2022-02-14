<?php
include 'database.php';
$obj= new Database();

$name=$_POST['cname'];
$age=$_POST['cage'];
$city=$_POST['scity'];

$value=["name"=>$name,"age"=>$age,"city"=>$city];
if($obj->insert("student",$value)){
echo"<h2>Data is inserted</h2>";
}
else{
    echo"<h2>Data is not inserted</h2>";
}

?>