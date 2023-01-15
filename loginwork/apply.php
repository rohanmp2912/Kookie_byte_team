<?php
include("applylink.php");
error_reporting(0);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Details</title>
    <link rel="stylesheet" href="Form Details.css">
</head>
<body>
    <fieldset>
    <legend><h2>Admission Details</h2></legend>
<form action ="applylink.php" method="POST"><b>
    <div class="textpart">
        <p>First Name * :
    <input type="text" name="fname" required placeholder="Enter your First name"></p></div>
    <div class="textpart">
    <p>Last Name *:
    <input type="text" name="lname" placeholder="Enter your last name" ></p></div>
    <div class="textpart">
    <p>Father Name *:
        <input type="text" name="fathername" placeholder="Enter your father's name"></p></div>
        <div class="textpart">
    <p>Mother Name *:
        <input type="text" name="mothername" placeholder="Enter your mother's name"></p></div>

    </div>
    <div class="datepart">
    <p>Date Of Birth : <input type="date" name="date" id="date"></b></p>
    </div>
    <div class="radiopart">
        <b>Select Gender<br>
         <div class="radioitem">
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label> 
         </div>
         <div class="radioitem">
        <input type="radio" id="female" name="gender" value="female" >
        <label for="female">Female</label> </div>
        <div class="radioitem">
        <input type="radio" id="others" name="gender" value="others">
        <label for="others">Others</label> </div>
    </b>
    <div class="numberpart">
        <p><b>Age * : </b><input type="number" name="age" id="age" required placeholder="Enter your Age"></p></div>   
    
    </div>
    
    <div class="textpart">
    <p> <b>Address :*</b></p></div>
    
    <textarea name="address" id="" cols="90" rows="10"></textarea required>

    <div class = "selectpart"> <p><b>Select your City</b></p></div>
    <div class="selectspart">
    <select  id="disrict" name="district">
        <option value="">--Select city--</option>
        <option value="Davangere">Davangere</option>
        <option value="Chittradurga">Chittradurga</option>
        <option value="mysore">mysore</option>
        <option value="Mandya">Mandya</option>
        <option value="Karwar">Karwar</option>
        <option value="Chikkamagalur">Chikkamagalur</option>
        <option value="Coorg">Coorg</option>
        <option value="Mangalore">Mangalore</option>
        <option value="Udupi">Udupi</option>
        <option value="Bangalore">Bangalore</option>
        <option value="Bagalkote">Bagalkote</option>
        <option value="Vijayapur">Vijayapur</option>
        <option value="Dakshina Kannada">Dakshina Kannada</option>
        <option value="Hubli">Hubli</option>
        <option value="Dharwad"> Dharwad</option>
    </select></p></div>

   
     <div class = "selectpart"> <p><b>Select Your State</b></p></div>
      <div class="selectspart">
    <div class="selectspart">
        <select  id="state" name="state">
            <option value="">--Select State--</option>
            <option value="Karnataka">Karnataka</option>
            <option value="Tamil Nadu">Tamil Nadu</option>
            <option value="Kerala">Kerala</option>
            <option value="Andhra Pradesh">Andhra Pradesh</option>
            <option value="Delhi">Delhi</option>
            <option value="Maharashtra">Maharashtra</option>
            <option value="Madhya Pradesh">Madhya Pradesh</option>
            <option value="Assam">Assam</option>
            <option value="Bihar">Bihar</option>
            <option value="Gujarat">Gujarat</option>
            <option value="Jammu and Kashmir">Jammu and Kashmir</option>
            <option value="Punjab">Panjab</option>
            <option value="Rajasthan">Rajasthan</option>
            <option value="Telangana">Telangana</option>
            <option value="Uttar Pradesh">Uttar Pradesh</option>
        </select></p></div>

    <div class="textpart">
    <p><b>Country * :</b> <input type="text" name="country" required placeholder="Enter your Nationality"></p></div>
    <div class="textpart">
    <p><b>E-mail* : </b> <input type="email" name="email" id="email" required placeholder="Enter your Email"></p></div>
    <div class="numberpart">
    <p><b>Pin-code * : </b><input type="number" name="pincode" id="email" required placeholder="Enter your Pin-code"></p></div>
    <div class="textpart">
    <p><b>Language * :</b> <input type="text" name="language" required placeholder="Enter your Language"></p></div> 

    <div class = "selectpart"> <p><b>Educational Qualification</b></p></div>
      <div class="selectspart">
    <div class="selectspart">
        <select  id="" name="qualify">
            <option value="">--Select --</option>
            <option value="BE">BE</option>
            <option value="BCOM">BCOM</option>
            <option value="MTech">MTech</option>
            <option value="MCOM">MCOM</option>
        </select></p></div>

        <div class="textpart">
            <p><b>College name * :</b> <input type="text" name="clgname" required placeholder="Enter your College Name"></p></div> 

        <div class="textpart">
         <p> <b>Extra Curricular Activites:*</b></p></div>
                
        <textarea name="extracaricular" id="" cols="60" rows="7"></textarea required>
           
         <div class="numberpart">
            <p><b>Previous year cgpa/percentage * : </b><input type="number" name="percentage" id="percentage" required placeholder="Enter your CGPA/Percentage"></p></div>   
         </div>
        

    <div class="submission">
        <input type="submit" value="register" name='register'>
      </div> 
     </form>
    </fieldset>
</body>
</html>
<?php
  if($_POST['register'])
  {
    $f_name=$_POST['fname'];
    $l_name=$_POST['lname'];
    $father_name=$_POST['fathername'];
    $mother_name=$_POST['mothername'];
    $date=$_POST['date'];
    $gen=$_POST['gender'];
    $age=$_POST['age'];
    $ad=$_POST['address'];
    $dis=$_POST['district'];
    $state=$_POST['state'];
    $con=$_POST['country'];
    $email=$_POST['email'];
    $pincode=$_POST['pincode'];
    $lang=$_POST['language'];
    $qualify=$_POST['qualify'];
    $clgname=$_POST['clgname'];
    $extra=$_POST['extracaricular'];
    $percentage=$_POST['percentage'];
   $query= "INSERT INTO firstform VALUES('$f_name','$l_name','$father_name','$mother_name','$date','$gen','$age','$ad','$dis','$state','$con','$email','$pincode','$lang','$qualify','$clgname','$extra','$percentage')";
  $data=mysqli_query($conn,$query);

  if($data)
  {
   echo "data is inserted";
 }
 else
 {
    echo "failed to insert";
 }
}

  ?>