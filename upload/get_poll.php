<?php
ob_start();
include('connection.php');
//require "twilio/Services/Twilio.php";
//$AccountSid = "AC3855ef9ef340eb1e05d2e04b882b40a9";
//$AuthToken = "c7839a73b0a5250fad944a29dc6cf91e";
//$client = new Services_Twilio($AccountSid, $AuthToken);
$message=$_POST['message'];
$poll_name=$_POST['poll_name'];
$type=$_POST['type'];
$message1=str_replace("'", "", $message);
$message=$message1;
if($type=='from file')
{
$allowedExts = array("xlsx","txt","csv");
$extension = explode(".", $_FILES["file"]["name"]);

if ($extension!=".xlsx" || $extension!=".txt" || $extension!=".csv"
&& ($_FILES["file"]["size"] < 90000000)
&& in_array($extension, $allowedExts))
{
if ($_FILES["file"]["error"] > 0)
{
echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
}
else
{

$file=$_FILES["file"]["name"];

// $file = $temp[0].".".$temp[1];
$temp[0] = rand(0, 3000); //Set to random number
$file;

if (file_exists("../xls/imageDirectory/" . $_FILES["file"]["name"]))
{
echo $_FILES["file"]["name"] . " already exists. ";
}
else
{

$temp = explode(".",$_FILES["file"]["name"]);
$newfilename = rand(1,89768) . '.' .end($temp);
move_uploaded_file($_FILES["file"]["tmp_name"],"upload/".$newfilename);

//echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
"upload/".$newfilename;
echo "upload/".$newfilename;
}
}
}
else
{
echo "Invalid file";
}

$inputFileName ="upload/".$newfilename;
$extension1 = explode(".", $inputFileName);

if ($extension1==".xlsx" || $extension!=".csv")
{

set_include_path(get_include_path() . PATH_SEPARATOR . 'Classes/');
include 'PHPExcel/IOFactory.php';

// This is the file path to be uploaded.

try {
 $objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
} catch(Exception $e) {
 die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
}


$allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
$arrayCount = count($allDataInSheet);  // Here get total count of row in that Excel sheet


for($i=1;$i<=$arrayCount;$i++){
$sm = trim($allDataInSheet[$i]["A"]);
$sm1=str_replace("(", "", $sm);
$sm2=str_replace(")", "", $sm1);
$sm3=str_replace("-", "", $sm2);
$sm4=str_replace(" ", "", $sm3);
$sm5=str_replace(",", "", $sm4);
$sm6=str_replace("+", "", $sm5);
$sm7=str_replace(".", "", $sm6);
$sm8=str_replace("/", "", $sm7);
$sm9=str_replace(";", "", $sm8);
$sm10=str_replace(":", "", $sm9);
$sm11=str_replace("!", "", $sm10);
$sm12=str_replace("@", "", $sm11);
$sm13=str_replace("*", "", $sm12);
$sm14=str_replace("$", "", $sm13);
$sm15=str_replace("%", "", $sm14);
$sm16=str_replace("^", "", $sm15);
$sm17=str_replace("&", "", $sm16);
$sm19=str_replace("<", "", $sm17);
$sm20=str_replace(">", "", $sm19);
$sm21=str_replace("<", "", $sm20);
$sm22=str_replace("?", "", $sm21);
$sm23=str_replace("_", "", $sm22);

$sms_number=str_replace("#", "", $sm23);
$sms_number_lenth=strlen($sms_number);
echo $sms_number_lenth;
echo "<br/>";
if($sms_number_lenth>10)
{
echo "big";
$extra=10-$sms_number_lenth;
echo $extra;
$str1 = "123456789ABC";
$sms_number1 = substr( $sms_number, 0, $extra );
$sms_number=$sms_number1;
}

echo  "else";
//$sms = $client->account->messages->sendMessage("(774) 489-3066",$sms_number,$message);

$sql1 = mysqli_query($con,"INSERT INTO tapp_sent_msg_log(sms_number,message,scheduled_for,date_time) VALUES ('".$sms_number."','".$message."','".$poll_name."',now())");
echo "INSERT INTO tapp_sent_msg(sms_number,message,scheduled_for,date_time) VALUES ('".$sms_number."','".$message."','".$poll_name."',now())";

}
$sql1 = mysqli_query($con,"INSERT INTO tapp_poll(poll_name,sms_number,message,type,date_time) VALUES ('".$poll_name."','".$sms_number."','".$message."','".$type."',now())");
echo "INSERT INTO tapp_poll(poll_name,sms_number,message,type,date_time) VALUES ('".$poll_name."','".$sms_number."','".$message."','".$type."',now())";
}
else
{


}
}
else if($type=='from list')
{
$query = mysqli_query($con,"select * from tapp_suscribers_list where id='".$_POST['list']."'") ;
$i = 1;
while($row = mysqli_fetch_array($query) ) 
{
$num=$row['numbers'];
$n=explode(',',$num);
$sql111 = mysqli_query($con,"INSERT INTO tapp_poll(poll_name,sms_number,message,type,date_time) VALUES ('".$poll_name."','".$num."','".$message."','".$type."',now())");
$query7 = mysqli_query($con,"select max(id) as max_id from tapp_poll") ;
$i = 1;
while($row7 = mysqli_fetch_array($query7) ) 
{
$max_id=$row7['max_id'];
}
for($a=0;$a<sizeof($n);$a++)
{
echo $n[$a];
$sql1 = mysqli_query($con,"INSERT INTO tapp_sent_msg_log(sms_number,message,scheduled_for,date_time) VALUES ('".$n[$a]."','".$message."','".$poll_name."',now())");
//echo "INSERT INTO tapp_sent_msg(sms_number,message,scheduled_for,date_time) VALUES ('".$num."','".$message."','".$poll_name."',now())";
$sql111 = mysqli_query($con,"INSERT INTO tapp_poll_msg_log(sms_number,message,date_time,poll_id,msg_sent_time) VALUES ('".$n[$a]."','".$message."',now(),'".$max_id."',now())");
echo "INSERT INTO tapp_poll_msg_log(sms_number,message,date_time,poll_id,msg_sent_time) VALUES ('".$n[$a]."','".$message."',now(),'".$max_id."',now())";
}

//echo "INSERT INTO tapp_poll(poll_name,sms_number,message,type,date_time) VALUES ('".$poll_name."''".$num."','".$message."','".$type."',now())";
} 
if($i==2)
{

header('Location:poll.php?f=4');
exit();
}
else
{	
header('Location:poll.php?f=2');
exit();
}
}
		else
		{
		$num=$_POST['number'];
		
		$sql111 = mysqli_query($con,"INSERT INTO tapp_poll(poll_name,sms_number,message,type,date_time) VALUES ('".$poll_name."','".$num."','".$message."','".$type."',now())");
		echo "INSERT INTO tapp_poll(poll_name,sms_number,message,type,date_time) VALUES ('".$poll_name."''".$num."','".$message."','".$type."',now())";
		$query77 = mysqli_query($con,"select max(id) as max_id from tapp_poll") ;
$i = 1;
while($row77 = mysqli_fetch_array($query77) ) 
{
$max_id7=$row77['max_id'];
}
		$sql111 = mysqli_query($con,"INSERT INTO tapp_poll_msg_log(sms_number,message,date_time,poll_id,msg_sent_time) VALUES ('".$num."','".$message."',now(),'".$max_id7."',now())");
		$sql1 = mysqli_query($con,"INSERT INTO tapp_sent_msg_log(sms_number,message,scheduled_for,date_time) VALUES ('".$num."','".$message."','".$poll_name."',now())");
		echo "INSERT INTO tapp_sent_msg_log(sms_number,message,scheduled_for,date_time) VALUES ('".$num."','".$message."','".$poll_name."',now())";
		
		if($i==2)
		{
		
		header('Location:poll.php?f=4');
		exit();
		}
		else
		{	
		header('Location:poll.php?f=2');
		exit();
		}
		}

	?>
	<?php ob_flush(); ?>

