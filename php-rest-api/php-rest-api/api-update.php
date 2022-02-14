<?php
header('Content-Type:application/json'); //sob devicejate accessable
header('Access-Control-Allow-Origin:*'); //ONNNO kono website no restiction
header('Access-Control-Allow-Method: PUT');//put real or post  work
header('Access-Control-Allow-Headers:Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Method,Authorization,X-Requested-With');
//kon method o header gula k access dibo security
include "config.php";
$data=json_decode(file_get_contents("php://input"),true);
$student_id=$data['sid'];
$student_name=$data['sname'];
$student_age=$data['sage'];
$student_city=$data['scity'];
$sql="UPDATE`student` SET name='{$student_name}',age='{$student_age}',city='{$student_city}' WHERE id='{$student_id}'";

if(mysqli_query($conn,$sql) ){
    echo json_encode(array('message' =>'Student record is updated','status' => true));
	
}
else{
echo json_encode(array('message' =>'Student record is not updated','status' => false));
}



?>
