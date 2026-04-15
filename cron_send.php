<?php
ob_start();
session_start();
 require 'vendor/autoload.php';
    use Plivo\RestAPI; 
error_reporting(E_ALL);
ini_set("display_errors", 1);
include("connection.php");
$mediaUrl = '';
$date_time = date('Y-m-d h:i:s');
		$query = mysqli_query($con,"select * from tapp_twilio_account where service_type='plivo'") ;

	while($row = mysqli_fetch_array($query) )
	{
	$sid=$row['twilio_sid'];
	$service_type=$row['service_type'];
	$token=$row['twilio_token'];
	// $sms_per_minute =$row['sms_per_minute'] ;
	}
		
    $auth_id = $sid;
    $auth_token = $token;

    $p = new RestAPI($auth_id, $auth_token);
// $query11 = mysqli_query($con,"select * from  tapp_sent_msg where messageStatus = 'ready' and scheduled_time< now() order by date_time desc limit $sms_per_minute");
    $query11 = mysqli_query($con,"select * from tapp_sent_msg where scheduled_time< now() order by date_time desc LIMIT 120");
while($row=mysqli_fetch_array($query11))

		{
				$check_blacklist = mysqli_query($con,"select * from tapp_blacklist where number like '%".$row['sms_number']."%'");
			if(mysqli_num_rows($check_blacklist)<1)
	{
$id=  $row['id'] ;
		$number=  $row['sms_number'] ;
		$num1=  "+".$number ;
		// $select_plivo_num = mysqli_query($con,"select * from tapp_twilio_number where per_day_count<200 order by id asc limit 1");
        $select_plivo_num = mysqli_query($con,"select * from tapp_twilio_number order by id asc limit 1");
		while($number_plivo = mysqli_fetch_array($select_plivo_num))
		{
		    $twilio_number = $number_plivo['number'];
		}
		
		$twilio_number=  $row['twilio_num'] ;
		$msg=  $row['message'] ;
    // Set message parameters
    $params = array(
        'src' => $twilio_number, // Sender's phone number with country code
        'dst' => $num1, // Receiver's phone number with country code
        'text' => $msg, // Your SMS text message
        // To send Unicode text
        //'text' => 'こんにちは、元気ですか？' # Your SMS Text Message - Japanese
        //'text' => 'Ce est texte généré aléatoirement' # Your SMS Text Message - French
     //   'url' => 'https://texting84.com/status_report.php', // The URL to which with the status of the message is sent
        'method' => 'POST' // The method used to call the url
    );
    // Send message
    $response = $p->send_message($params);

    // Print the response
    echo "Response : ";
  //  print_r ($response['response']);

    // Print the Api ID
    echo "<br> Api ID : {$response['response']['api_id']} <br>";

    // Print the Message UUID
  echo $a = "Message UUID : {$response['response']['message_uuid'][0]} <br>";
    
    if($a != '')
    {
    $_SESSION['flash_message'] = 'Message has been sent to '.$num1;
    $sql1 = mysqli_query($con,"INSERT INTO tapp_sent_msg_log(service_type,sms_number,twilio_num,message,bulk_name,date_time) VALUES ('plivo','".$number."','".$twilio_number."','".$msg."','".$bulk_name."',now())");
    $update_count = mysqli_query($con,"update tapp_twilio_number set per_day_count=per_day_count + 1 where number='".$twilio_number."'");
    }
    else
    {
    $_SESSION['failure_message'] = "Sorry! SMS couldn't sent to ".$num1;
    $sql1 = mysqli_query($con,"INSERT INTO tapp_sent_msg_failed(service_type,sms_number,twilio_num,message,bulk_name,date_time) VALUES ('plivo','".$number."','".$twilio_number."','".$msg."','".$bulk_name."',now())");
    }
	$sql2 = mysqli_query($con,"delete from tapp_sent_msg  where id='".$id."'");
		}
		}

ob_flush();





?>