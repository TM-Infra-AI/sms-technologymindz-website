<?php
/**
 * @Author: Sanjay bhatt
 * @Date:   2016-02-15 14:05:55
 * @Last Modified by:   Nadim Ahmad
 * @Last Modified time: 2016-12-27 18:18:40
 */
ob_start();
session_start();
include("connection.php");
$token = '';
$key ='';
//$client_name =  $_POST['client_name'] ;
$num =  clear_num($_POST['num'] );
function clear_num($mobile)
{
	$mobile = str_replace('(','',$mobile);
$mobile = str_replace(')','',$mobile);
$mobile = str_replace('-','',$mobile);
$mobile = str_replace(' ','',$mobile);
$mobile = str_replace('!','',$mobile);
$mobile = str_replace('@','',$mobile);
$mobile = str_replace('*','',$mobile);
$mobile = str_replace('$','',$mobile);
$mobile = str_replace('#','',$mobile);
$mobile = str_replace('^','',$mobile);
$mobile = str_replace('&','',$mobile);
$mobile = str_replace('+','',$mobile);
$mobile = str_replace('=','',$mobile);
$mobile = str_replace('?','',$mobile);
$mobile = str_replace('/','',$mobile);
if(strlen($mobile) == 10)
{
	$mobile = '1'.$mobile;
}
	return $mobile;
	
}
$service_type = 'twilio';
$endpoint_user = $_POST['endpoint_user'];
$endpoint_pass = $_POST['endpoint_pass'];
$is_default = $_POST['is_default'];
if($is_default =='yes')
{
	$set_all_as_not_default = mysqli_query($con,"update tapp_twilio_number set is_default='no'");
}
$get_twilio_token = mysqli_query($con,"select * from tapp_twilio_account where twilio_sid='".$_POST['sid']."'");
while($row_twil = mysqli_fetch_array($get_twilio_token))
{	
$token = $row_twil['twilio_token'];
$service_type = $row_twil['service_type'];
}

$query11 = mysqli_query($con,"select * from  tapp_twilio_number where number='".$num."'");

while($row=mysqli_fetch_array($query11))
{
$key=  $row['number'] ;

}
if($key==$num)
{
echo "exist";
$_SESSION['failure_message'] = 'Number already exists.';

}
else
{
echo "not exist";
// die;
$query = mysqli_query($con,"insert into tapp_twilio_number(service_type,number,twilio_sid,twilio_token,email,is_default,endpoint_user,endpoint_pass,date_time) values('".$service_type."','".$num."','".$_POST['sid']."','".$token."','".$_SESSION['user']."','".$is_default."','".$endpoint_user."','".$endpoint_pass."',NOW())");




if (!$query) {$_SESSION['failure_message'] = 'Sorry! Something went wrong.';
  } 
  
  else{
	$_SESSION['flash_message'] = 'Number has been added successfully.';

}

}header("Location:add_twilio_number.php?s=1");
ob_flush();


?>