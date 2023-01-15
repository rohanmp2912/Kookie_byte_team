<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Display</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="displaysty.css">
</head>
<body>
    <div class="container">
 <button type="button" class="btn btn-primary my-4"><a href="user.php" class="text-light">Add user</a></button>
 <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Sl No.</th></th>
      <th scope="col">Name</th>
      <th scope="col">E-mail</th>
      <th scope="col">Father Name</th>
      <th scope="col">Mother Name</th>
      <th scope="col">Age</th>
      <th scope="col">Address</th>
      <th scope="col">District</th>
      <th scope="col">Pin-Code</th>
      <th scope="col">State</th>
      <th scope="col">Previous Class Percentage</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
    <?php
       $sql="Select * from crud";
       $result=mysqli_query($con,$sql);
       if($result){
        while($row=mysqli_fetch_assoc($result)){
            $id=$row['id'];
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
            
            echo ' <tr>
            <th scope="row">'.$id.'</th>
            <td>'.$name.'</td>
            <td>'.$email.'</td>
            <td>'.$fathername.'</td>
            <td>'.$mothername.'</td>
            <td>'.$age.'</td>
            <td>'.$address.'</td>
            <td>'.$district.'</td>
            <td>'.$pincode.'</td>
            <td>'.$state.'</td>
            <td>'.$pclasspercent.'</td>
            <td>
            <button type="button" class="btn btn-success my-2" style="padding: 8px 10px" ><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
            <button type="button" class="btn btn-danger" style="left-margin:4px"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
        </td>
          </tr>';
        }
       }
       
    ?>
   
  </tbody>
</table>
    </div>
</body>
</html>