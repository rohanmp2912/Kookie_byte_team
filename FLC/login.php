
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="login-styles.css">
    <title>Login page</title>
    
</head>
<body>
    
    <div class="center">
       <h1>Login</h1>
    <form action="#" method='POST' autocomplete="off">

   
    <div class="form">
        <input type="text" name="usn" class="textfield" placeholder="Username">
        <input type="Password" name="pwd" class="textfield" placeholder="Password">
        <div class="forgetpass" ><a href="#" class="link" onclick="message()">Forget password?</a></div>
        <input type="submit" name="login" value="Login" class="btn">
        <div class="signup" >New member?  <a href=" signup.php" class="link">SignUp here</a></div>
    </div>
    </form>
    </div>
    
    
</body>
<script>
    function message()
    {
    alert("Toh Password yad karo bhai");
    }
</script>
</html>
<?php
include("link-sign.php");
if(isset($_POST['login']))
$username=$_POST['usn'];
$password=$_POST['pwd'];
$query = "SELECT * FROM storesignup WHERE email = '$username' && password = '$password' ";
$data= mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
if($total==1)
{
   // header('location:box.php');
   echo "You Logged in Successfully  !!";
   ?>
   <meta http-equiv = "refresh" content = "3; url = http://localhost/FLC/box.php" />
  
<?php
}
else{
    echo "Invalid credential";
}



?>
