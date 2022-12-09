 <?php
  $name = $_POST['sname'];
  $address = $_POST['saddress'];
  $class = $_POST['class'];
  $phone = $_POST['sphone'];


 $con = mysqli_connect("localhost","root","","crud") or die("failed");
 $sql ="INSERT INTO`students`(name,address,sclass,sphone)VALUES('{$name}','{$address}','{$class}','{$phone}')";
 $result = mysqli_query($con, $sql) or die("uncessful");
 header("Location:http://localhost/crud_html/index.php");
 mysqli_close($con);

 
 
 
 
 ?>