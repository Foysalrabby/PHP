<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>
   <?php
   $con=mysqli_connect("localhost","root", "","crud") or die("connection failed");
   $sql="SELECT*FROM`students`JOIN`studentclass`WHERE`students`.sclass=`studentclass`.cid";
   $result=mysqli_query($con,$sql) or die("unsucessful");
 
   if(mysqli_num_rows($result)>0){
  
   ?>
    
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Class</th>
        <th>Phone</th>
        <th>Action</th>
        </thead>
        <tbody>
               <?php 
               while($row=mysqli_fetch_assoc($result)){
               ?>
          
            <tr>
                <td><?php echo $row ["sid"]; ?></td>
                <td><?php echo $row ['name'];?></td>
                <td><?php echo $row ['address']; ?></td>
                <td><?php echo $row ['cname']; ?> </td>
                <td><?php echo $row ['sphone']; ?></td>
                <td>
                    <a href='edit.php?id=<?php echo $row ["sid"]; ?>'>Edit</a>
                    <a href='deleteddata.php?id=<?php echo $row["sid"]?>'>Delete</a>
                </td>
            </tr>
           <?php  } 
           
           ?>
        </tbody>
    </table> 
    <?php }
    else{
       echo "no record found";
    }

   mysqli_close($con);
    
    ?>
</div>
</div>
</body>
</html>
