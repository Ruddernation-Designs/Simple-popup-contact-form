<?php
// First branch - I'll be adding more security features in a later version, But for now this works well.
$sendto   = "Your email address goes here!";
$subject  = "New Feedback Message";
$enquiry = $_POST['enquiry'];   // I have this set to default but you can change it to what you like, It's just I have a dropdown menu for this set.
$content  = nl2br($_POST['msg']);
$headers  = "Name: " . strip_tags($name) . "\r\n";
$headers  = "From: " . strip_tags($email) . "\r\n";
$headers .= "Reply-To: ". strip_tags($email) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";
$ipaddress = $_SERVER['REMOTE_ADDR'];
	$date = date('d/m/Y');
	$time = date('H:i:s');
$msg  = "<html><body style='font-family:Arial,sans-serif;'>";  // I've added paragraph tags on all $msg as I was testing on a PS Vita and it clumped together without them.
$msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>New User Feedback</h2>\r\n"; //simple styling also as it displayed as one word on the PS Vita.
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
	echo "false";
}
?>
