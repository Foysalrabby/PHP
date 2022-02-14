<?php
//api create korar jnno headder lagte hoy
header('Content-Type:application/json'); //sob devicejate accessable
header('Access-Control-Allow-Origin:*'); //ONNNO kono website no restiction
header('Access-Control-Allow-Method: DELETE');
header('Access-Control-Allow-Headers:Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Method,Authorization,X-Requested-With');
include "config.php";
$data=json_decode(file_get_contents("php://input"),true);

$student_id=$data['sid'];
$sql="DELETE FROM`student`WHERE id='{$student_id}'";
if(mysqli_query($conn,$sql) ){
    echo json_encode(array('message' =>'Delete record successfully','status' => true));
}
else{
echo json_encode(array('message' =>'Cannot Delete record Found','status' => false));
}




?>
