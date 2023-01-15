<?php 
include("link-sign.php"); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Assistant:400,700" rel="stylesheet" >
    <link rel="stylesheet" type="text/css" href="signup-styles.css">
    <title>Login page</title>
    
</head>
<body>
    
    <div class="center pm-credits-text bold sans">
       <h1>Sign-up</h1>
    <form action="#" method='POST' autocomplete="off">

   
    <div class="form" action="signup.php" method='POST' >
        <input type="text" name="usname" class="textfield" placeholder="Username"><br>
        <input type="email" name="email" class="textfield" placeholder="Email"><br>
        <input type="text" name="phonenumber" class="textfield" placeholder="+91"><br>
        <input type="Password" name="password" class="textfield" placeholder="Password"><br>
        <input type="Password" name="cpassword" class="textfield" placeholder="Confirm Password"><br>
       <br><br>
        <input type="submit" name="required" value="Sign in" class="btn"><br><br>
        <div class="signup" >Already member?  <a href="login.php" class="link">Login here</a></div><br>
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
    $query="INSERT INTO storesignup  VALUES('$user','$email','$phno','$pass','$cpass')";
    $data = mysqli_query($conn,$query);
    if($data)
    {
         echo "data inserted";
        echo '<script type="text/javascript">
        alert("file Signed-Up successfully !!");
        </script>';
         echo '<script language="javascript">
         window.location="http://localhost/Kookie-Byte/FLC_project/home_page_flc/box.html";</script>';
        }
        
    
}
    else
    {
       // echo "Not inserted";
    }
?>
<!-- (user,email,phno,pass,cpass) -->