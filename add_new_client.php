<?php

/**

 * @Author: Nadim Ahmad

 * @Date:   2016-02-15 14:05:55

 * @Last Modified by:    Nadim Ahmad

 * @Last Modified time: 2017-12-20

 */

ob_start();

session_start();

include("connection.php");

$mobile = $_POST['mobile'];

$first_name=$_POST['first_name'];
$email=$_POST['email'];

$address=$_POST['address'];







$check_dup = mysqli_query($con,"select * from tapp_tbl_clients where sender = '".$mobile."'");
if(mysqli_num_rows($check_dup)<1)
{
$sql=mysqli_query($con,"insert into tapp_tbl_clients (sender,first_name,email,date_time,address) values('".$mobile."','".$first_name."','".$email."',now(),'".$address."')");
if($sql)
{
	$_SESSION['flash_message'] = 'Contact Added Successfully.';
}
else
{
$_SESSION['failure_message'] = 'Sorry! Something went wrong.';	
}
}
else{
	$_SESSION['failure_message'] = $mobile.' is already exists'; 
}
header("Location:clients.php");



ob_flush();

?>