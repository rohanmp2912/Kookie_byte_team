<?php
error_reporting(0);
$servername="localhost";
$username="root";
$password="";
$dbname="filemanage1";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
   echo "connection ok";
}
else    
{
    echo "Not ok".mysqli_connect_error();
}

?>