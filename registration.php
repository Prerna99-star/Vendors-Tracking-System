<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset ="UTF-8">
  <meta name="viewport"
        content="width:device-width, user-scalable:no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
  <meta http-equiv:"X-UA-Compatible" content:"ie:edge">
  <title> VENDOR REGISTRATION </title>
  <link rel = "stylesheet" type="text/css" href="css/bootstrap.min.css"> 
  <link rel= "stylesheet" href="style.css">
  <style>
   body{
    
    background-image: url("bg.jpg") ;
    background-position: center;
    background-size: cover;
    height: 100%;
    margin: 0;
    font-size: 1rem;
    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
    font-weight: 400;
    line-height: 1.5;
    
     }
  ul {
    list-style-type: none;
    margin: 0;
    padding: 100;
    overflow: hidden;
    background-color:  #17a2b8;
  }
  
  li {
    float: left;
  }
  
  li a {
    display: block;
    color:  white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
  }
  
  /* Change the link color to #111 (black) on hover */
  li a:hover {
    background-color: #dc3545;
  }
  
  .navbar {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-pack: justify;
    justify-content: space-between;
    padding: .5rem 1rem;
  }

    </style>
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding-left: 0px; padding-right:0px;">
 <a class="navbar-brand" style="display: inline-flex;" href="index.php">
    <img class="float-left" src="TCIL-Logo.jpg" width="65" height="65" alt="">
    <span class="float-left mt-2 fc d-none d-lg-block logo-text"><b style="font-size:18px">Telecommunications Consultants India Limited</b><br>
    (A Government of India Enterprise)</span>
	<span class="float-left mt-2 fc d-block d-lg-none logo-text" style="font-size:0.9rem; white-space: normal; vertical-align: middle; text-align: center;">
	<b>Telecommunications Consultants India Limited</b><br>
    (A Government of India Enterprise)</span>
  </a>
</nav>

<ul>
  <li><a class="active" href="tcil_vendors.php">Home</a></li>
  <li><a href="#about">News</a></li>
  <li><a href="registration.php">Register</a></li>
  <li><a href="#contact">Contact</a></li>
  <li style="float:right"><a href="login.php">Login</a></li>
</ul>


<div>
    <?php
      if(isset($_POST['Create'])){
        $companyname = $_POST['companyname'];
        $companyaddress = $_POST['companyaddress'];
        $contactno = $_POST['contactno'];
        $msme = $_POST['msme'];
        $typemsme = $_POST['typemsme'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $department = $_POST['department'];
        $contact = $_POST['contact'];
        $emailid = $_POST['emailid'];
        $addressv = $_POST['addressv'];
        $password = $_POST['password'];
    
        $sql = "INSERT INTO vendors (companyname, companyaddress, contactno, msme, typemsme, firstname, lastname, department, contact, emailid, addressv, password) VALUES(?,?,?,?,?,?,?,?,?,?,?,?)";
    
        $stmtinsert = $db->prepare($sql);
        $result = $stmtinsert->execute([$companyname, $companyaddress, $contactno, $msme, $typemsme, $firstname, $lastname, $department, $contact, $emailid, $addressv, $password]);
    
      } 
    
    ?>
</div>
<div>    
      <form action = "registration.php" method = "post">
       <div class="container">
         <div class ="row" style ="justify-content: center;">
           <div class="col-sm-4 offset lg-3">
             <div class="text-center pb-5">
               <h1 class="Login-title text-dark" >Registration</h1>
                  <p class="p-1 m-0 font-unbuntu text-black-50">Please fill up the form with correct values!</p>
                  <span class="font-unbuntu text-black-50">I already have <a href="login.php">LOGIN</a></span>
                  </div>
                 <hr class ="mb-3">
           <label1 for = "companyname"><b>Company Name</b></label1>
           <input class="form-control" type="text" id="companyname" name="companyname" required>

           <label1 for = "companyaddress"><b>Company Address</b></label1>
           <input class="form-control" type="text" id="companyaddress" name="companyaddress" required>

           <label1 for = "contactno"><b>Contact no</b></label1>
           <input class="form-control" type="text" id="contactno" name="contactno" required>

           <label1 for = "msme"><b>MSME (Yes/No)</b></label1>
           <input class="form-control" type="text" id="companyname" name="msme" required>

           <label1 for = "typemsme"><b>Category of MSME</b></label1>
           <input class="form-control" type="text" id="msme" name="typemsme">
           <hr class ="mb-3">
           <h2><b>Contact Person Information<b></h2>
           <hr class ="mb-3">
           <label1 for = "firstname"><b>First Name</b></label1>
           <input class="form-control" type="text" id="firstname" name="firstname" required>

           <label1 for = "lastname"><b>Last Name</b></label1>
           <input class="form-control" type="text" id="lastname" name="lastname" required>

           <label1 for = "department"><b>Department</b></label1>
           <input class="form-control" type="text" id="department" name="department" required>

           <label1 for = "contact"><b>Contact No.</b></label1>
           <input class="form-control" type="text" id="contact" name="contact" required>

           <label1 for = "emailid"><b>Email ID</b></label1>
           <input class="form-control" type="email" id="emailid" name="emailid" required>

           <label1 for = "addressv"><b>Address</b></label1>
           <input class="form-control" type="text" id="addressv" name="addressv" required>

           <label1 for = "password"><b>Password</b></label1>
           <input class="form-control" type="password" id="password" name="password" required>

           <hr class ="mb-3">
           <input class="btn btn-primary" type="Submit" id="register" name="Create" value="Sign Up">

           </div>
          </div>
         </div>
      </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("form").submit(function(){
    alert("Submitted. Kindly go to Login");
  });
});
</script>
</body>
</html>