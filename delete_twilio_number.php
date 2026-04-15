<?php
ob_start();
include("connection.php");
$type =  $_GET['f'] ;

$sql=mysqli_query($con,"delete from tapp_twilio_number where id='".$_GET['id']."'");

if (!$sql) {
$_SESSION['failure_message'] = 'Sorry! Something went wrong.';
  } 
  else{
$_SESSION['flash_message'] = 'Number has been deleted successfully.';
}

header("Location:add_plivo_number.php?s=2");
exit();
ob_flush();
?>