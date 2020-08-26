<?php
  $db_vendor = "root";
  $db_pass = "";
  $db_name = "vendorsaccounts";

  $db = new PDO('mysql:host=localhost;dbname=' . $db_name . ';charset=utf8', $db_vendor, $db_pass);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>