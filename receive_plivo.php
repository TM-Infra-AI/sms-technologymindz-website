<?php
 require 'vendor/autoload.php';
    use Plivo\RestAPI;
include('connection.php');
    // Sender's phone numer
    $from_number = $_REQUEST["From"];
    $from = str_replace('+','',$from_number);
    // Receiver's phone number - Plivo number
    $to_number = $_REQUEST["To"];
    $to = str_replace('+','',$to_number);
   // $to ='19166750234';
   // $from= '12093127983';
    // The SMS text message which was received
    $text = $_REQUEST["Text"];
    $body1 = strtolower($text);
    // Output the text which was received to the log file.
    error_log("Message received - From: $from_number, To: $to_number, Text: $text");
    //$body1 ='hello plivo sms testing for receiving';
    if($body1 == 'stop' || $body1 == 'Stop')
{
	$query = mysqli_query($con,"insert into tapp_blacklist values('".$from."','stop',now())");
}

$sqlrec4 = mysqli_query($con,"insert into tapp_msg_receive (sender,body,date_time,read_status,msg_read,twilio_num) values('".$from."','".$body1."',now(),'N','0','".$to."')");
$sqlrec5 = mysqli_query($con,"insert into table_data (sender,body,date_time,sending_status) values('".$from."','".$body1."',now(),'R')");









//// SMS Forwarding code here //////
$check_for_forward = mysqli_query($con,"select * from  tapp_call_forwarding where twilio_number='".$to."'");
if(mysqli_num_rows($check_for_forward)>0)
{
while($rowforward = mysqli_fetch_array($check_for_forward))
{
	$forward_to = $rowforward['smsForwardTo'];
}
$unique_id = 'unique_id'.uniqid();
	$query = mysqli_query($con,"select * from tapp_twilio_number  where number like '%".$to."'") ;
$check_blacklist = mysqli_query($con,"select * from tapp_blacklist where number like '%".$forward_to."%'");
if(mysqli_num_rows($check_blacklist)<1)
{
	while($row = mysqli_fetch_array($query) )
	{
	 $sid=$row['twilio_sid'];
	$token=$row['twilio_token'];
	 $service_type=$row['service_type'];
	}
	$num=$forward_to;

$twilio_number=$to;

 $mes=$body1;



$message= mysqli_real_escape_string($con, stripslashes($mes));
$msg=$mes;
$num1='+'.$num;
	if($service_type == 'plivo')
	{


 $auth_id = $sid;
    $auth_token = $token;

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
    echo "Response : ";
    //print_r ($response['response']);
   // echo $response['response']->api_id;

    // Print the Api ID
    echo "<br> Api ID : {$response['response']['api_id']} <br>";

    // Print the Message UUID
    echo $a = "Message UUID : {$response['response']['message_uuid'][0]} <br>";
	}
}
}
?>