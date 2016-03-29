<?php
if(isset($_POST['g-recaptcha-response'])){
          $captcha=$_POST['g-recaptcha-response'];
        }
$sendto   = "Put your email here!";
$subject  = "New Feedback Message";
$email = $_POST['email'];
$name  = $_POST['name'];
$enquiry = $_POST['enquiry'];
$content  = nl2br($_POST['msg']);
$headers  = "From: " . strip_tags($email) . "\r\n";
$headers .= "Reply-To: ". strip_tags($email) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";
if(!$captcha){
          exit; }
$secretKey = "Google-Site-Key";
$ip = $_SERVER['REMOTE_ADDR'];
$response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
$responseKeys = json_decode($response,true);
	if(intval($responseKeys["success"]) !== 1) {

$ipaddress = $_SERVER['REMOTE_ADDR'];
	$date = date('d/m/Y');
	$time = date('H:i:s');

$msg  = "<html><body style='font-family:Arial,sans-serif;'>";
$msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>New User Feedback</h2>\r\n";
$msg .= "<p><strong>Name:</strong> ".$name."</p>\r\n";
$msg .= "<p><strong>Sent by:</strong> ".$email."</p>\r\n";
$msg .= "<p><strong>Enquiry:</strong> ".$enquiry."</p>\r\n";
$msg .= "<p><strong>Message:</strong> ".$content."</p>\r\n";
$msg .= "<p><strong>IP:</strong> ".$ipaddress."</p>\r\n";
$msg .= "<p><strong>Date:</strong> ".$date."</p>\r\n";
$msg .= "<p><strong>Time:</strong> ".$time."</p>\r\n";
$msg .= "</body></html>";

if(@mail($sendto, $subject, $msg, $headers, $name)) {
	echo "true";
} else {
	echo "false";}
		}?>
