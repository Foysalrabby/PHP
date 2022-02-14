<?php
//api create korar jnno headder lagte hoy
header('Content-Type:application/json'); //sob devicejate accessable
header('Access-Control-Allow-Origin:*'); //ONNNO kono website no restiction
header('Access-Control-Allow-Method: POST');
header('Access-Control-Allow-Headers:Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Method,Authorization,X-Requested-With');
//kon method o header gula k access dibo security
include "config.php";
$data=json_decode(file_get_contents("php://input"),true);
$student_name=$data['sname'];
$student_age=$data['sage'];
$student_city=$data['scity'];
$sql="INSERT INTO`student`(name,age,city) VALUES('{$student_name}','{$student_age}','{$student_city}')";

if(mysqli_query($conn,$sql) ){
    echo json_encode(array('message' =>'Student record is inserted','status' => true));
	
}
else{
echo json_encode(array('message' =>'Student record is not inserted','status' => false));
}



?>
