
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="https://fonts.googleapis.com/css?family=Assistant:400,700" type="text/css" href="login-styles.css">
    <link rel="stylesheet" type="text/css" href="login-styles.css">
    <title>Login page</title>
    
</head>
<body>
    
    <div class="center">
       <h1>Login</h1>
    <form action="#" method='POST' autocomplete="off">

   
    <div class="form">
        <input type="text" name="usn" class="textfield" placeholder="Username"><br>
        <input type="Password" name="pwd" class="textfield" placeholder="Password"><br>
        <div class="forgetpass" ><a href="#" class="link" onclick="message()">Forget?</a></div><br>
        <input type="submit" name="login" value="Login" class="btn"><br><br>
        <div class="signup" >New member? <br> <a href="signup.php" class="link">SignUp here</a></div>
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
$error='';
session_start();
if(isset($_POST['login']))
{
$username=$_POST['usn'];
$password=$_POST['pwd'];
$query = "SELECT * FROM storesignup WHERE email = '$username' && password = '$password' ";
$data= mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
if($total>0)
{
    $row=mysqli_fetch_assoc($data);
    $_SESSION['EMAIL']=$row->email;
    $_SESSION['IS_LOGIN']='yes';
    if($row['email']=='admin@gmail.com')
    {
        echo '<script type="text/javascript">
        alert("You Logged in as an Admin Successfully");
        </script>';
         echo '<script language="javascript">
         window.location="http://localhost/Kookie-Byte/FLC_project/home_page_flc/adminpage.html";</script>';


        // header('location:http://localhost/Kookie-Byte/FLC_project/home_page_flc/adminpage.html');
        // die();
    }
    if($row['email']!='admin@gmail.com')
    {


        echo '<script type="text/javascript">
        alert("You Logged in  Successfully");
        </script>';
         echo '<script language="javascript">
         window.location="http://localhost/Kookie-Byte/FLC_project/home_page_flc/box.html";</script>';



    //     header('location:http://localhost/Kookie-Byte/FLC_project/home_page_flc/box.html');
    //     die();
     }
}
    else
    {


        echo '<script type="text/javascript">
        alert(" Invalid Log-in Credentials .");
        </script>';

        // $error='please enter the correct login details';
    }


}
?>
