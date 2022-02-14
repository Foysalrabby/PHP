<?php
//api create korar jnno headder lagte hoy
header('Content-Type:application/json'); //sob devicejate accessable
header('Access-Control-Allow-Origin:*'); //ONNNO kono website no restiction
include "config.php";
/*post jnno
$data=json_decode(file_get_contents("php://input"),true);
$search_value=$data['search'];*/
//get method
$search_value=isset($_GET['search']) ? $_GET['search']:die();

$sql="SELECT*FROM`student` WHERE name LIKE'%{$search_value}%'";
$result=mysqli_query($conn,$sql) or die("failed");
if(mysqli_num_rows($result)>0){

	$output=mysqli_fetch_all($result,MYSQLI_ASSOC);
	echo json_encode($output);

}
else{
echo json_encode(array('message' =>'No search Found','status' => false));
}



?>
