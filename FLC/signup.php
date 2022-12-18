<?php 
include("link-sign.php"); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="signup-styles.css">
    <title>Login page</title>
    
</head>
<body>
    
    <div class="center">
       <h1>Sign-up</h1>
    <form action="#" method='POST'>

   
    <div class="form" action="" method='POST' >
        <input type="text" name="usname" class="textfield" placeholder="Username">
        <input type="email" name="email" class="textfield" placeholder="Email">
        <input type="number" name="phonenumber" class="textfield" placeholder="+91">
        <input type="Password" name="password" class="textfield" placeholder="Password">
        <input type="Password" name="cpassword" class="textfield" placeholder="Confirm Password">
       
        <input type="submit" name="required" value="Sign in" class="btn">
        <div class="signup" >Already member?  <a href="login.php" class="link">Login here</a></div>
    </div>
    </form>
    </div>
    
    
</body>
</html>
<?php
if(isset($_POST['required']))
{
    $user=$_POST['usname'];
    $email=$_POST['email'];
    $phno=$_POST['phonenumber'];
    $pass=$_POST['password'];
    $cpass=$_POST['cpassword'];
    $query="INSERT INTO storesignup VALUES('$user','$email','$phno','$pass','$cpass')";
    $data = mysqli_query($conn,$query);
    if($data)
    {
        echo "data inserted";
        
    }
    else
    {
        echo "Not inserted";
    }
}
?>