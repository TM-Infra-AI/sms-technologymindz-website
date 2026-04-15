<?php
// the message
$msg = "Hi mail testing via php mail function tester *nads*<br>Thanks";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);
$to = 'sampan1983@gmail.com';
$subject = 'email testing';
$headers = 'From: nads1464@gmail.com' . "\r\n" .
    'Reply-To: na1464@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
// send email
if(mail($to,$subject,$msg,$headers))
{
echo "sent";
}

?>