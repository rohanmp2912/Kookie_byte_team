<?php
include("mark_upload.php");
include("aadhar_upload.php");
include("birthcft_upload.php");
include("income_upload.php");
include("tc_cft_upload.php");
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <title>Upload the documents</title>
  <link rel="stylesheet" href="documentsty.css">
</head>
<body>
    <h1>Upload the documents</h1>
    <form action='mark_upload.php' method='POST' enctype="multipart/form-data">
      <div class="box">
          <div class="markcard" >
            <label for="marks">Marks Card:<br>
            <input type="file" id="marks" class="filebox" name="file[]" placeholder="Upload your folder here"></label>
          </div>
          <div class="submission">
            <input type="submit" value="Submit" name='submit'  multiple>
          </div>
</form>
<form action='aadhar_upload.php' method='POST' enctype="multipart/form-data">
          <div class="aadharcard">
            <label for="aadhar">Aadhar Card:<br>
            <input type="file" id="aadhar"  class="filebox" name="file[]" placeholder="Upload your folder here"></label>
          </div>
          <div class="submission">
            <input type="submit" value="Submit" name='submit' multiple>
          </div>
          </form>
          <form action='birthcft_upload.php' method='POST' enctype="multipart/form-data">
          <div class="birthcertificate">
            <label for="birth">Birth Certificate:<br>
            <input type="file" id="birth"  class="filebox" name="file[]" placeholder="Upload your folder here"></label>
          </div>
          <div class="submission">
            <input type="submit" value="Submit" name='submit' multiple>
          </div>
          </form>
          <form action='income_upload.php' method='POST' enctype="multipart/form-data">
          <div class="income">
            <label for="income">Income Certificate:<br>
            <input type="file" id="income" class="filebox" name="file[]" placeholder="Upload your folder here"></label>
          </div>
          <div class="submission">
            <input type="submit" value="Submit" name='submit'  multiple>
          </div>
</form>
          <form action='tc_cft_upload.php' method='POST' enctype="multipart/form-data">
          <div class="Photo"> 
            <label for="photo">Transfer Certificate:<br>
            <input type="file" id="photo"  class="filebox" name="file[]" placeholder="Add your Transfer Certificate Here" ></label>
            </div>
          <div class="submission">
            <input type="submit" value="Submit" name='submit' id='file' multiple>
          </div></form>
          (All the documents should be valid !!)
          <div class="submission">
          <a href="/Kookie-Byte/FLC_project/box.html">
            <button type="submit" class="Home">Home</button></a>
      </div>
      </div>
    </form>
</body>
</html>