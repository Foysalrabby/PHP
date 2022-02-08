<?php
$conn=mysqli_connect("localhost","root","","test1") or die("not found database");

$limit_per_page = 3;
$page ="";
if(isset($_POST["page_on"])){
    $page = $_POST["page_on"];
}
else{
    $page = 1;
}

$offset = ($page - 1) * $limit_per_page;
$sql="SELECT * FROM `student1` LIMIT {$offset},{$limit_per_page}";
$result=mysqli_query($conn,$sql) or die("connection failed");
$output="";
if(mysqli_num_rows($result)>0){
    $output.='<table id="loadData" border="1" width="100%" cellspacing="0" cellpadding="10px">
    <tr>
      <th>Id</th>
      <th>Name</th>
    </tr>';
  while($row=mysqli_fetch_assoc($result)){
    $output.="<tr><td align='center'>{$row['id']}</td><td>{$row['first_name']} 
   {$row['last_name']}</td></tr>";
}
$output .="</table>";  


   $sql_total = "SELECT * FROM `student1`";
    $records = mysqli_query($conn,$sql_total) or die("Query Unsuccessful.");
    $total_record = mysqli_num_rows($records);
    $total_pages = ceil($total_record/$limit_per_page);

    $output .='<div id="pagination">';
    for($i=1; $i <= $total_pages; $i++){
    $output .= "<a class='active' id='{$i}' href=''>{$i}</a>";
}

$output .='</div>';
 
echo $output;
}
else{
    echo"No Record found ";
}
?>