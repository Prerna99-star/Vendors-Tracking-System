<!DOCTYPE html>
<html lang ="en", dir ="ltr">
<title>Welcome to Dashboard</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel = "stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel = "stylesheet" href ="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"> 
<link rel = "stylesheet" href="design3.css">
<body>
<?php

session_start();

    if(!isset($_SESSION['userlogin']))
    {
        header("Location: login.php");
    }
    
    if(isset($_GET['logout']))
    {
        session_destroy();
        unset($_SESSION);
        header("Location: login.php");
    }

?>

<input type="checkbox" id="check">

<header>
  <label for="check">
      <i class="fas fa-bars" id="sidebar-btn"></i>
</label>      
  <div class = "left_area">
    <h3>Welcome to<span> TCIL dashboard </span></h3>
  </div>
  <div class ="right_area">
     <a href ="index.php ? logout=true" class="logout_btn">Logout</a>
  </div>  
</header>


<div class="sidebar">
  <center>
  <img src="ac.png" class="profile_image">
  <h4 style="color:#fff;"> USER </h4>
  </center>
  <a href="index.php"><i class="fa fa-desktop" aria-hidden="true"><span>Dashboard</span></i></a>
  <a href="#"><i class="fa fa-cogs" aria-hidden="true"><span>Components</span></i></a>
  <a href="#"><i class="fa fa-th" aria-hidden="true"><span>Forms</span></i></a>
  <a href="#"><i class="fa fa-info-circle" aria-hidden="true"><span>About</span></i></a>
  <a href="#"><i class="fa fa-sliders-h" aria-hidden="true"><span>settings</span></i></a>
</div>

<div class="content">
<div class="row">
  <div class="column">
    <div class="card">
      <a href="newinvoice.php"><h3>New Invoice</h3></a>
    </div>
  </div>

  <div class="column">
    <div class="card">
    <a href="status.php"><h3>Status of Pending Invoice</h3></a>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
    <a href="reports.php"><h3>Reports</h3></a>
    </div>
  </div>
</div>
</div>
</body>
</html>