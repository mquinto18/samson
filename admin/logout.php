<?php
include('./lib/dbcon.php'); 
$conn = dbcon(); 
include('session.php');

$oras = strtotime("now");
$ora = date("Y-m-d",$oras);										
mysqli_query($conn,"update user_log set
logout_Date = '$ora'												
where user_id = '$session_id' ")or die("query Failed");

session_destroy();
header('location:../index.php'); 
?>