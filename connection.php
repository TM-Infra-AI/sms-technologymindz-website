<?php

$dbhost = 'localhost';

$dbuser = 'smstechn_vm';

$dbpass = '%[OTt}Sn,E^#';

$dbname = 'smstechn_plivo_sms';
$con= new mysqli($dbhost, $dbuser, $dbpass,$dbname);
$a = mysqli_query($con,"SHOW TABLES FROM $dbname");

$tables = '';
//mysql_select_db("sendmach_sms",$con);

if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>