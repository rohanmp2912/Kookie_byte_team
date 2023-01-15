<?php

$con=new mysqli('localhost','root','','filemanage1');
if($con)
{
  //  echo "Connection successfull";
}
else{
    die(mysqli_error($con));
}

?>