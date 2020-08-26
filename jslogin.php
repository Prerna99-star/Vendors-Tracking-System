<?php
session_start();
require_once('config.php');


$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM vendors WHERE emailid = ? AND password = ? LIMIT 1";
$stmtselect = $db->prepare($sql);
$result = $stmtselect->execute([$username, $password]);

if($result){
    $vendors = $stmtselect->fetch(PDO::FETCH_ASSOC);
    if($stmtselect-> rowCount() > 0){
        $_SESSION['userlogin'] = $vendors;
        echo 'Please Wait. press OK';
    }
    else{
        echo 'Wrong id or password';
    }
}else{
    echo 'Errors';
}

?>