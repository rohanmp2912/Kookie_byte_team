<?php

use LDAP\Result;
$message="Data inserted successfully";
include'connect.php';
$id=$_GET['updateid'];
$sql="Select * from crud where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$fathername=$row['fathername'];
$mothername=$row['mothername'];
$age=$row['age'];
$address=$row['address'];
$district=$row['district'];
$pincode=$row['pincode'];
$state=$row['state'];
$pclasspercent=$row['pclasspercent'];


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
   
    $sql="update crud set id=$id,name='$name',email='$email',
    fathername='$fathername',mothername='$mothername' ,age='$age',address='$address',
    district='$district',pincode='$pincode',state='$state',pclasspercent='$pclasspercent' where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo "Data inserted successfully";
       
    //    echo "<script type ='text/JavaScript'>";  
    // echo "alert('$message')";  
    // echo "</script>";
    // header('location:display.php'); 
   // echo "Updated successfully";
    header('location:display.php');
      
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

    <title>Crud</title>
  </head>
  <body>
    <div class="container my-5" >
    <form method="POST">
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" placeholder="Enter your Name" name="name" autocomplete="off" value=<?php
    echo "$name";?>>
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" placeholder="Enter your Email" name="email" autocomplete="off"
    value=<?php
    echo "$email";?>>
  </div>
  <div class="form-group">
    <label>Father Name:</label>
    <input type="text" class="form-control" placeholder="Enter your Father Name" name="fname" autocomplete="off"
    value=<?php echo "$fathername";?>>
  </div>
  <div class="form-group">
    <label>Mother Name:</label>
    <input type="text" class="form-control" placeholder="Enter your Mother Name" name="mname" autocomplete="off"
    value=<?php echo "$mothername";?>>
  </div>
  <div class="form-group">
    <label>Age:</label>
    <input type="number" class="form-control" placeholder="Enter your Age" name="age" autocomplete="off"
    value=<?php echo "$age";?>>
  </div>
  <div class="form-group">
    <label>Address:</label>
    <input type="text" class="form-control" placeholder="Enter your Address" name="add" autocomplete="off"
    value=<?php echo "$address";?>>
  </div>
  <div class="form-group">
    <label>District:</label>
    <input type="text" class="form-control" placeholder="Enter your District" name="dis" autocomplete="off"
    value=<?php echo "$district";?>>
  </div>
  <div class="form-group">
    <label>Pin-Code:</label>
    <input type="number" class="form-control" placeholder="Enter your Pin-Code" name="pinc" autocomplete="off"
    value=<?php echo "$pincode";?>>
  </div>
  <div class="form-group">
    <label>State:</label>
    <input type="text" class="form-control" placeholder="Enter your state" name="state" autocomplete="off"
    value=<?php echo "$state";?>>
  </div>
  
  <div class="form-group">
    <label>Previous Class Percentage:</label>
    <input type="number" class="form-control" placeholder="Enter your Percentage" name="pclasspercent" autocomplete="off"
    value=<?php echo "$pclasspercent";?>>
  </div>

  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
    </div>

  </body>
</html>
