<?php
require_once('connect.php');

$statement = $db -> prepare("
SELECT * FROM newinvoice 
ORDER BY id DESC
");

$statement->execute();
$All_result = $statement->fetchAll();

$total_rows = $statement->rowCount();
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

</div>
<div>
  <table id="data-table" class="table table-borderes table-striped" style="color:#fff;">
    <thead>
    <tr>
       <th>Invoice No.</th>
       <th>Invoice Date</th>
       <th>Invoice Amount</th>
       <th>P O No.</th>
       <th>Supplier ID</th>
    </tr>
    </thead>
    <?php
      if($total_rows>0){
          foreach($All_result as $row){
              echo '
              <tr>
                <td>'.$row["invoiceno"].'<td>
                <td>'.$row["invoicedate"].'<td>
                <td>'.$row["amount"].'<td>
                <td>'.$row["pono"].'<td>
                <td>'.$row["supplierid"].'<td>
                <td><a href ="invoice.php?update=1&id='.$row["id"].'"><span class ="glyphicon glyphicon-edit></span></a></td>
                <td><a href ="#" id="'.$row["id"].'" class="delete"><span class ="glyphicon glyphicon-remove></span></a></td>
              </tr>
              ';
          }
      }
    ?>
</div>

<script type="text/javascript">
$(document).ready(function(){
  var table = $('#data-table').DataTables()
});
</script>
</body>
</html>