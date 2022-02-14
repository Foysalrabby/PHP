<?php
$servername="localhost";
$sr_username="root";
$sr_password="";
$db_name="test2";
$conn=new mysqli($servername,$sr_username,$sr_password,$db_name);
if($conn->connect_error){
die("connection failed".$conn->connect_error);
}
$city='dinajpur';
$sql=$conn->prepare("SELECT * FROM `student` WHERE city= ?");
$sql->bind_param("s",$city);
$sql->execute();
//$result=$sql->get_result();
//echo"<pre>";
///print_r($result);
//echo"</pre>";
//while($row=$result->fetch_assoc()){
   // echo $row['id']."-".$row['name']."-".$row['age']."-".$row['city']."<br>";
//}
$sql->bind_result($id,$name,$age,$city);//like database korom
while($sql->fetch()){
    echo "$id-$name-$age-$city)<br>";
}





?>