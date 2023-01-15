<?php
error_reporting(0);
$servername="localhost";
$username="root";
$password="";
$dbname="filemanage1";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn){
  // echo "database";
}

if(isset($_POST['submit']))
{
  
    $fileCount=count($_FILES['file']['name']);
    echo" count.$fileCount";
    for($i=0;$i<$fileCount;$i++)
    {
      $fileName=$_FILES['file']['name'][$i];
      $sql="INSERT INTO income_certificate(title_ic,income_cft) VALUES ('$fileName','$fileName')";
      if($conn->query($sql)===TRUE)
      {
      // echo "file uploaded successfully !!";
      echo '<script type="text/javascript">
      alert("file uploaded successfully");
      </script>';
       echo '<script language="javascript">
       window.location="http://localhost/Kookie-Byte/file_managing/mainhtml.php";</script>';
      
      }
      else
      { 
          echo "not uploaded";
      }
      move_uploaded_file($_FILES['file']['tmp_name'][$i],'income_certificate/'.$fileName);
    }
  }

?>



