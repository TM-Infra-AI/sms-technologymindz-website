<?php



/**



 * @Author: Sanjay bhatt



 * @Date:   2016-02-15 14:05:55



 * @Last Modified by:   sanjay



 * @Last Modified time: 2016-02-12 18:18:40



 */



ob_start();



session_start();



include("connection.php");




$get_twilio_token = mysqli_query($con,"select * from tapp_twilio_account where twilio_sid='".$_POST['sid']."'");
while($row_twil = mysqli_fetch_array($get_twilio_token))
{	
$token = $row_twil['twilio_token'];
$service_type = $row_twil['service_type'];
}


$is_default = 'no';




$allowedExts = array("xlsx","txt","csv");





$extension = explode(".", $_FILES["file"]["name"]);











if ($extension!=".xlsx" || $extension!=".txt" && ($_FILES["file"]["size"] < 90000000) && in_array($extension, $allowedExts))
{

if ($_FILES["file"]["error"] > 0)

{

echo "Return Code: " . $_FILES["file"]["error"] . "<br />";

}

else

{

$file=$_FILES["file"]["name"];


$temp[0] = rand(0, 3000); //Set to random number

if (file_exists("../xls/imageDirectory/" . $_FILES["file"]["name"]))

{

echo $_FILES["file"]["name"] . " already exists. ";

}

else

{

$temp = explode(".",$_FILES["file"]["name"]);

$newfilename = rand(1,89768) . '.' .end($temp);
move_uploaded_file($_FILES["file"]["tmp_name"],"upload1/".$newfilename);

//echo "Stored in: " . "upload/" . $_FILES["file"]["name"];

"upload1/".$newfilename;

echo "upload1/".$newfilename;

}
}
}
else
{
echo "Invalid file";
}
$inputFileName ="upload1/".$newfilename;
$extension1 = explode(".", $inputFileName);

if ($extension1==".xlsx" || $extension!=".csv" || $extension1==".txt")
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
for($i=2;$i<=$arrayCount;$i++){

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
if(strlen($sms_number) == 10)
{
$sms_number = '1'.$sms_number;
}
$query11 = mysqli_query($con,"select * from  tapp_twilio_number where number='".$sms_number."'");
while($row=mysqli_fetch_array($query11))
{
$number=  $row['number'] ;
}
if($number==$sms_number)
{
}
else
{

$query = mysqli_query($con,"insert into tapp_twilio_number(service_type,number,twilio_sid,twilio_token,email,is_default,date_time) values('".$service_type."','".$sms_number."','".$_POST['sid']."','".$token."','".$_SESSION['user']."','".$is_default."',NOW())");
}
}
}
if (!$query) {
$_SESSION['failure_message'] = 'Sorry! Something went wrong';
  }
  else{
$_SESSION['flash_message'] = 'Bulk numbers has been imported successfully';

}

header("Location:add_plivo_number.php?s=1");
ob_flush();
?>