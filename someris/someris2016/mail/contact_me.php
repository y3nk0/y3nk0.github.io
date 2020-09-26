<?php

session_start();
	
$name;$email;$captcha;
if(isset($_POST['name'])){
  $name=$_POST['name'];
}
if(isset($_POST['email'])){
  $email=$_POST['email'];
}
if(isset($_POST['message'])){
  $message=$_POST['message'];
}
if(isset($_POST['g-recaptcha-response'])){
  $captcha=$_POST['g-recaptcha-response'];
}
	
// Create the email and send the message
$to = 'kskianis@lix.polytechnique.fr'; 
$email_subject = "SoMeRis2016 Website Contact Form";
$email_body = "You have received a new message from SoMeRis2016 contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email\n\nMessage:\n$message";
$headers = "From: dascim@lix.polytechnique.fr\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email";	

$secretKey = "6LdqLCATAAAAAPuZzTw4yQuoIW5qvI789yLmgDjc";
$ip = $_SERVER['REMOTE_ADDR'];
$response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
$responseKeys = json_decode($response,true);
if(intval($responseKeys["success"]) !== 1) {
  echo 'error';
} else {
  mail($to,$email_subject,$email_body,$headers);
	echo "ok";
}
exit();
		
?>