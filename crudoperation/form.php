<?php
include 'database.php';
$obj=new Database();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="save-data.php" method="POST" >
        <label>Name:</label>
        <input type="text" id="name" name="cname"><br>
        <label >Age:</label>
        <input type="number" id="cage" name="cage" style="margin-top: 5px;"><br>
        <label>City:</label>  
        <select style="margin-top: 5px;" name="scity" id="scity">
        <?php
        $obj->select('student');
        $result=$obj->getResult();
        foreach($result as list("id"=>$id,"name"=>$student_name,"age"=>$age,"city"=>$city)){
        echo"<option value='$id'>$city</option>";
        }
         ?>
        </select>
        <br><br>
        <input type="submit" value="Save">

    </form>
</body>
</html>