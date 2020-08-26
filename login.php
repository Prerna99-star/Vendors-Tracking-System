<?php
    session_start();
    if(isset($_SESSION['userlogin']))
    
        header("Location: index.php")
    ?>
<!DOCTYPE html>
<html>
<head>
<meta charset ="UTF-8">
  <meta name="viewport"
        content="width:device-width, user-scalable:no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
  <meta http-equiv:"X-UA-Compatible" content:"ie:edge">
  <title> Vendor Login </title>
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel= "stylesheet" href="beauty.css">
<style>
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
</head>
<body>
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

<div class="container h-100">
  <div class="d-flex justify-content-center h-100">
      <div class="user_card">
       <div class="d-flex justify-content-center">
        <div class="brand_logo_container">
         <img src="TCIL-Logo.jpg" class="brand_logo" alt="TCIL logo">
    </div>    
    </div> 
    <div class="d-flex justify-content-center form-container">
        <form>
        <div class="input-group mb-3">
           <div class="input-group-append">
               <span class="input-group-text">Username</span>
            </div> 
       <input type="text" name="username" id="username" class="form-control input_user" required>
       </div>
       <div class="input-group mb-2">
           <div class="input-group-append">
               <span class="input-group-text">Password</span>
            </div> 
       <input type="password" name="password" id="password" class="form-control input_pass" required>
       </div>
       <div class="form-group">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" name="rememberme" class="custom-control-input" id="customControlInline">
                <label class="custom-control-label" for="customControlInline">Remember me</label>
            </div>
       </div>    

    </div>
    <div class="d-flex justify-content-center mt-3 login-container">
        <button type="button" name="button" id="login" class="btn login_btn"> Login </button>
    </div>
    </form> 
    <div class="mt-4">
        <div class="d-flex justify-content-center links">
            Don't have account?<a href="registration.php" class="ml-2">Register</a>
        </div>
        <div class="d-flex justify-content-center">
            <a href="#">Forgot password?</a>
        </div>
    </div>
</div>  
</div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<script>
    $(function(){
       $('#login').click(function(e){
            var valid = this.form.checkValidity();
            if(valid){
                var username = $('#username').val();
                var password = $('#password').val();
            }
            e.preventDefault();
            $.ajax({
                type:'POST',
                url: 'jslogin.php',
                data: {username: username, password: password},
                success: function(data){
                    alert(data);
                    if($.trim(data) === "1"){
                        setTimeout('window.location.href = "index.php"',2000);
                    }
                },
                error: function(data){
                    alert('Error');
                }

            });
       });
    });
</script>
</body>
</html>
