<?php
include_once("connection.php");
$query = mysqli_query($con,"update tapp_twilio_number set per_day_count =0 ");
?>