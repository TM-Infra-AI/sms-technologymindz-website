<?php
 require 'vendor/autoload.php';
    use Plivo\RestAPI;
ob_start();
session_start();
include('connection.php');
$unique_id = 'unique_id'.uniqid();
	$query = mysqli_query($con,"select * from tapp_twilio_number where number like '%".$_POST['twilio_number']."'") ;
$check_blacklist = mysqli_query($con,"select * from tapp_blacklist where number like '%".$_POST['number']."%'");
if(mysqli_num_rows($check_blacklist)<1)
{
    //echo 'blacklist';
	while($row = mysqli_fetch_array($query) )
	{
	 $sid=$row['twilio_sid'];
// 	  print_r($sid);
//     die;
	$token=$row['twilio_token'];
	$service_type=$row['service_type'];
	}
	$num=$_POST['number'];

$twilio_number=$_POST['twilio_number'];
if($_POST['message_type'] == 'custom')
{

 $mes=$_POST['message'];
}
else{
	$mes=$_POST['message1'];
}

$dbmessage= mysqli_real_escape_string($con, stripslashes($mes));
$message = str_replace(PHP_EOL,'',$mes);
$msg= str_replace('\r',' ',$message);
$msg = preg_replace('/\s+/', ' ', $msg);
$num1='+'.$num;


    $auth_id = $sid;
    $auth_token = $token;
    
    
    try {
    
    $p = new RestAPI($auth_id, $auth_token);
            // Set message parameters
    $params = array(
        'src' => $twilio_number, // Sender's phone number with country code
        'dst' => $num1, // Receiver's phone number with country code
        'text' => $msg, // Your SMS text message
        // To send Unicode text
        //'text' => 'こんにちは、元気ですか？' # Your SMS Text Message - Japanese
        //'text' => 'Ce est texte généré aléatoirement' # Your SMS Text Message - French
       // 'url' => 'https://texting84.com/status_report.php', // The URL to which with the status of the message is sent
        'method' => 'POST' // The method used to call the url
    );
    
   
    // Send message
    $response = $p->send_message($params);

    // Print the response
    //print_r($response);
     echo $response;
    // echo "Response : ";
    //print_r ($response['response']);
   // echo $response['response']->api_id;

    // Print the Api ID
    // echo "<br> Api ID : {$response['response']['api_id']} <br>";

    // Print the Message UUID
    // echo $a = "Message UUID : {$response['response']['message_uuid'][0]} <br>";
     
    $error = json_encode($response['response']['error']);
     
    if ($response['status'] >=200 && $response['status'] <400) {
        // echo "if";
      $_SESSION['flash_message'] = 'Message has been sent to '.$num1;
    $sql1 = mysqli_query($con,"INSERT INTO tapp_sent_msg_log(service_type,sms_number,twilio_num,message,bulk_name,date_time) VALUES ('plivo','".$num."','".$twilio_number."','".$dbmessage."','".$unique_id."',now())");
    }
    else
    {
        echo "else";
     $_SESSION['failure_message'] = $error;
    $sql1 = mysqli_query($con,"INSERT INTO tapp_sent_msg_failed(service_type,sms_number,twilio_num,message,bulk_name,date_time) VALUES ('plivo','".$num."','".$twilio_number."','".$dbmessage."','".$unique_id."',now())");
    }

    
    // $update_count = mysqli_query($con,"update tapp_twilio_number set per_day_count=per_day_count + 1 where number='".$twilio_number."'");

    } catch (Exception $e) {
    $_SESSION['failure_message'] = $e->getMessage();
    $sql1 = mysqli_query($con,"INSERT INTO tapp_sent_msg_failed(service_type,sms_number,twilio_num,message,bulk_name,date_time) VALUES ('plivo','".$num."','".$twilio_number."','".$dbmessage."','".$unique_id."',now())");
    }
   

	
}
else
{
	$_SESSION['failure_message'] = "Sorry! the number is blacklisted or user stop the receiving sms";
}
			  header('Location:single_message.php?f=2');

exit();

ob_flush(); ?>



