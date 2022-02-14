<?php
include 'header.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | login</title>
     <!-- css FILES for online bootstarp -->
     <link rel="stylesheet" href="../src/css/bootstrap.css">
    <link rel="stylesheet" href="../src/css/fontawesome.min.css">
    <!-- css FILES for online bootstarp End -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    
    <!-- css FILES style 1 folder por ty admin sob file .. -->
    <link rel="stylesheet" href="../src/scss/style.css">
</head>
<body>      
   <div id="wp-admin" class="wp-context">
    <div class="container">
        <div class="row">
              <div class=" col-md-12">
                 <!-- Form Start -->
                 <form action="" method="POST" class="mt-4 center">
                  <div class="form-group">
                   <label>First Name</label>
                   <input type="text" class="form-control" name="fname" placeholder="First name" required>
                  </div>
                  <div class="form-group">
                   <label>Last Name</label>
                   <input type="text" class="form-control" name="lname" placeholder="Last name" required>
                  </div>
                  <div class="form-group">
                   <label>Username</label>
                   <input type="text" class="form-control" name="flname" placeholder="User name" required>
                  </div>
                  <div class="form-group">
                   <label>Password</label>
                   <input type="password" class="form-control" name="apassword" placeholder="Password" required>
                  </div>
                  <div class="form-group">
                   <label>User role</label>
                   <input type="password" class="form-control" name="apassword" placeholder="Number user" required>
                  </div>
                 <input type="submit" class="btn-dark" value="save" name="ulogin" id="ulogin">
                 </form>
                  <!-- Form end -->
              </div>
  

        </div>
    </div>
   </div>
    <!-- JS FILES for online bbotstarp -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js " integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN " crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js " integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q " crossorigin="anonymous "></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js " integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl " crossorigin="anonymous "></script>
    <!-- JS FILES for online bbotstarp end -->
</body>
</html>
<?php include 'footer.php'; ?>