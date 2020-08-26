<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html lang ="en", dir ="ltr">
<title>Welcome to Dashboard</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel = "stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel = "stylesheet" href ="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"> 
<link rel = "stylesheet" href="design4.css">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.datatables.min.js"></script>
<script src="js/datatables.bootstrap.min.js"></script>
<link rel="stylesheet" href="css/datatables.bootstrap.min.js">
<body>

<input type="checkbox" id="check">

<header>
  <label for="check">
      <i class="fas fa-bars" id="sidebar-btn"></i>
</label>      
  <div class = "left_area">
    <h3>Enter Details:<span> TCIL Invoice</span></h3>
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

<?php
      if(isset($_POST['Create'])){
        $invoiceno = $_POST['invoiceno'];
        $invoicedate = $_POST['invoicedate'];
        $amount = $_POST['amount'];
        $pono = $_POST['pono'];
        $supplierid = $_POST['supplierid'];
    
        
        $sql = "INSERT INTO newinvoice (invoiceno, invoicedate, amount, pono, supplierid) VALUES(?,?,?,?,?)";
    
        $stmtinsert = $db->prepare($sql);
        $result = $stmtinsert->execute([$invoiceno, $invoicedate, $amount, $pono, $supplierid]);
    
      } 
    
    ?>
</div>
<div>    
      <form action = "newinvoice.php" method = "post">
       <div class="container">
         <div class ="row" style ="justify-content: center;">
           <div class="col-sm-4 offset lg-3">
             <div class="text-center pb-5">
               <h1 class="Login-title text-white" style ="padding-top:150px;" >New Invoice</h1>
                  <p class="p-1 m-0 font-unbuntu text-white-50">Please fill up the form with correct values!</p>
                  </div>

                 <hr class ="mb-3">

           <label1 for = "invoiceno" style="color:#fff;"><b>Invoice No.</b></label1>
           <input class="form-control" type="text" id="invoiceno" name="invoiceno" required>

           <label1 for = "invoicedate" style="color:#fff;"><b>Invoice Date</b></label1>
           <input class="form-control" type="date" id="invoicedate" name="invoicedate" required>

           <label1 for = "amount" style="color:#fff;"><b>Invoice Amount<p>INR<p></b></label1>
           <input class="form-control" type="text" id="amount" name="amount" required>

           <label1 for = "pono" style="color:#fff;"><b>P.O. No.</b></label1>
           <input class="form-control" type="text" id="pono" name="pono" required>

           <label1 for = "supplierid" style="color:#fff;"><b>Supplier ID</b></label1>
           <input class="form-control" type="text" id="supplierid" name="supplierid">

           <hr class ="mb-3">
           <input class="btn btn-primary" type="Submit" id="register" name="Create" style="color:#fff;" value="Submit">

           </div>
          </div>
         </div>
      </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("form").submit(function(){
    alert("New Invoice Submitted");
  });
});
</script>
</body>
</html>