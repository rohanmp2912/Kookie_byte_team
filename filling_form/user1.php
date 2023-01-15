<?php

use LDAP\Result;
$message="Data inserted successfully";
include'connect.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
   $fathername=$_POST['fname'];
   $mothername=$_POST['mname'];
   $age=$_POST['age'];
   $address=$_POST['add'];
   $district=$_POST['dis'];
   $pincode=$_POST['pinc'];
   $state=$_POST['state'];
   $pclasspercent=$_POST['pclasspercent'];
    $sql="insert into crud (name,email,fathername,mothername,age,address,district,pincode,state,pclasspercent) values('$name','$email','$fathername','$mothername',
    '$age','$address','$district','$pincode','$state','$pclasspercent')";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo "Data inserted successfully";
       
        echo '<script type="text/javascript">
        alert("Your Data stored Securely !!");
        </script>';
         echo '<script language="javascript">
         window.location="http://localhost/Kookie-Byte/FLC_project/home_page_flc/box.html";</script>';






    //    echo "<script type ='text/JavaScript'>";  
    // echo "alert('$message')";  
    // echo "</script>";
    // header('location:display.php'); 

      
    }else{
        die(mysqli_error($con));
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="usersty.css">
    <title>Crud</title>
  </head>
  <body>
    <div class="container">
    <div class="container my-4" >
    <form method="POST">
  <div class="form-group">
    <label>Name:</label>
    <input type="text" class="form-control" placeholder="Enter your Name" name="name" autocomplete="off">
  </div>
  <div class="form-group">
    <label>Email:</label>
    <input type="email" class="form-control" placeholder="Enter your Email" name="email" autocomplete="off">
  </div>
  <div class="form-group">
    <label>Father Name:</label>
    <input type="text" class="form-control" placeholder="Enter your Father Name" name="fname" autocomplete="off">
  </div>
  <div class="form-group">
    <label>Mother Name:</label>
    <input type="text" class="form-control" placeholder="Enter your Mother Name" name="mname" autocomplete="off">
  </div>
  <div class="form-group">
    <label>Age:</label>
    <input type="number" class="form-control" placeholder="Enter your Age" name="age" autocomplete="off">
  </div>
  <div class="form-group">
    <label>Address:</label>
    <input type="text" class="form-control" placeholder="Enter your Address" name="add" autocomplete="off">
  </div>
  <div class="form-group">
    <label>District:</label>
    <input type="text" class="form-control" placeholder="Enter your District" name="dis" autocomplete="off">
  </div>
  <div class="form-group">
    <label>Pin-Code:</label>
    <input type="number" class="form-control" placeholder="Enter your Pin-Code" name="pinc" autocomplete="off">
  </div>
  <div class="form-group">
    <label>State:</label>
    <input type="text" class="form-control" placeholder="Enter your state" name="state" autocomplete="off">
  </div>
  
  <div class="form-group">
    <label>Previous Class Percentage:</label>
    <input type="number" class="form-control" placeholder="Enter your Percentage" name="pclasspercent" autocomplete="off">
  </div>
  
  <div class="submit">
  <button type="submit" class="btn btn-primary" name="submit">Submit</button></div>
</form>
    </div></div>

  </body>
</html>
