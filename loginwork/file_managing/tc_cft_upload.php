<?php
error_reporting(0);
$servername="localhost";
$username="root";
$password="";
$dbname="filemanage";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn){
  echo "database";
}

if(isset($_POST['submit']))
{
  
    $fileCount=count($_FILES['file']['name']);
    echo" count.$fileCount";
    for($i=0;$i<$fileCount;$i++)
    {
      $fileName=$_FILES['file']['name'][$i];
      $sql="INSERT INTO transfer_certificate(title_tc,tc_cft) VALUES ('$fileName','$fileName')";
      if($conn->query($sql)===TRUE)
      {
      echo "file uploaded successfully !!";
      }
      else
      { 
          echo "not uploaded";
      }
      move_uploaded_file($_FILES['file']['tmp_name'][$i],'transfer_certificate/'.$fileName);
    }
  }

?>



