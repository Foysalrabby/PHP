<?php
$servername="localhost";
$username="root";
$password="";
$dbname="test2";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_errno){
    die("connection failed") .$conn->connect_errno;
}
$sql="SELECT * FROM `student`";
$result=$conn->query($sql);
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
    echo"ID: {$row['id']}- Name: {$row['name']} - Age: {$row['age']}.</br>";
    }

}else{
    echo"No data Found";
}


?>