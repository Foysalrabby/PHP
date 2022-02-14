<?php
include 'database.php';
 $obj= new Database();//tutorial 240 -245
 // $obj->insert('student',['name'=>'Kumar Sanu','age'=>'22','city'=>'Delhi']);
  //echo "insert id";
 // print_r($obj->getResult());
//$obj->update('student',['name'=>'jakir molla','age'=>'299','city'=>'Delhi'],'id="35"');
//echo "update id";
//print_r($obj->getResult());
//$obj->delete('student','id="35"');
//echo "delete id";
//print_r($obj->getResult());
//$obj->sql('SELECT * FROM student');
//echo "All student info";
//print_r($obj->getResult());
//$colName= "student.id,student.name,student.age,student.city,cityname.cid,cityname.cname";
//$join = "cityname ON student.city = cityname.cid";
//$limit=2;
//$obj->select('student','*',$join,null,null,2);//condition use kora jabe 'city'="dhaka"
//echo "\n\nSelect result is : ";
	print_r($obj->getResult());
//$obj->pagination('student',$join,null,2);
   //$colName = "student.id,student.name,student.age,cityname.cname";
   //$join = "cityname ON student.city = cityname.cid";
   $limit = 2;

	$obj->select('student','*',null,null,null,$limit);//n2 null $join hobe bt kaj krini 
	//echo "\n\nSelect result is : "."</br>";
	$result=($obj->getResult());
    echo"<table border='1px' width='500px'>";
    echo"<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Age</th>
    <th>City</th>
    </tr>";

    foreach($result as list("id"=>$id,"name"=>$student_name,"age"=>$age,"city"=>$city)){
     echo"<tr><td>$id</td> 
     <td>$student_name</td>
     <td>$age</td>
     <td>$city</td>
    </tr>";
     
    }
    echo"</table>";
	$obj->pagination('student',null,null,$limit);
?>