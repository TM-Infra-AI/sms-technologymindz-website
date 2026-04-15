<?php
header('Content-type: text/xml');

 include("connection.php");
 /*$get_twilio_number = mysqli_query($con,"select * from twilio_numbers")or die(mysqli_error($con));
 while($data =  mysqli_fetch_array($get_twilio_number))
 {
	 $callerId = str_replace('(','',$data['number']);
	 $callerId = str_replace(')','',$callerId);
	 $callerId = str_replace('-','',$callerId);


 }*/
// put a phone number you've verified with Twilio to use as a caller ID number

//$callerId = "+1".$callerId;
// put your default Twilio Client name here, for when a phone number isn't given


// get the phone number from the page request parameters, if given
if (isset($_REQUEST['PhoneNumber'])) {
    $explode = explode('#',($_REQUEST['PhoneNumber']));
    $number =$explode[0];
    $callerId = $explode[1];
}

// wrap the phone number or client name in the appropriate TwiML verb
// by checking if the number given has only digits and format symbols
if (preg_match("/^[\d\+\-\(\) ]+$/", $number)) {
    $numberOrClient = "<Number>" . $number . "</Number>";
} else {
    $numberOrClient = "<Client>" . $number . "</Client>";
}
$user_number = str_replace('+','',$number);
$voice_file ='';
$agent_number ='';
$caller_id = str_replace('+','',$callerId);
$sql1 = mysqli_query($con,"INSERT INTO tapp_voice_broadcast_logs(twilio_number,user_number,voice_file,agent_number,is_called,date_time) VALUES ('".$caller_id."','".$user_number."','".$voice_file."','".$agent_number."','yes',now())");
?>

<Response>
    <Dial callerId="<?php echo $callerId ?>">
          <?php echo $numberOrClient ?>

    </Dial>
	
<!--Say voice="woman">
      Hi, this is nads calling to you.
      </Say-->

</Response>
