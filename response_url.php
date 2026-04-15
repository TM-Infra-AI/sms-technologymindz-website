<?php 
$sen = $_REQUEST['CLID'];

$number = $_REQUEST['To'];
include_once('connection.php');
?>

<Response>

    <Dial callerId="<?php echo $_REQUEST['CLID']; ?>">

        <Number><?php echo $number; ?></Number>

    </Dial>

</Response>
<?php
$caller_id = str_replace('+','',$sen);
$user_number = str_replace('+'.'',$number);
$agent_number ='0000000';
$sql1 = mysqli_query($con,"INSERT INTO tapp_voice_broadcast_logs(twilio_number,user_number,voice_file,agent_number,is_called,date_time) VALUES ('".$caller_id."','".$user_number."','".$voice_file."','".$agent_number."','yes',now())")or die(mysqli_error($con));?>