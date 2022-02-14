<?php
header('Content-Type:application/json'); //sob devicejate accessable
header('Access-Control-Allow-Origin:*'); //ONNNO kono website no restiction
include "config.php";
//just singleid passkorar jnno
$data=json_decode(file_get_contents("php://input"),true);
$student_id=$data['sid'];

$sql="SELECT * FROM `student` WHERE id='{$student_id}'";
$result=mysqli_query($conn,$sql) or die("failed");
if(mysqli_num_rows($result)>0){

	$output=mysqli_fetch_all($result,MYSQLI_ASSOC);
	echo json_encode($output);

}
else{
echo json_encode(array('message' =>'No record Found','status' => false));
}

?>
