<?php
// read the variables form the string, 
// Sending email to . Replace email address with your email address.
$to = "christophe@itkinfo.com";
// Name information from the form
$name = $_REQUEST["name"];
// Subject information from the form
$subject = $_REQUEST["sub"];
// Getting IP Address
$getIP =  $_SERVER['REMOTE_ADDR'];
// Message information from the form
$getMessage = $_REQUEST["msg"];
// Concnating the valuses
$message = "Name: ".$name."\nMessage:".$getMessage."\n\nMessage Sent from IP:".$getIP;
// Sender email information from the form
$sender = "From:". $_REQUEST["email"];

// Remove the backslashes that normally appears when entering " or '
$message = stripslashes($message); 
$subject = stripslashes($subject); 
$sender = stripslashes($sender); 

// Add a prefix in the subject line so that you know the email was sent by online form
$subject = "Contact Form: ". $subject;

if(isset($message) and isset($subject) and isset($sender)){
	$mailSentSuccess = mail($to, $subject, $message, $sender);
	echo "mailSentSuccess=".$mailSentSuccess;
}
?>