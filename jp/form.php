<?php
	
	header( 'Location: http://www.sosstudiocafe.com/jp/confirm.html' ) ;
	
	$to = "eikaiwa_cafe@hotmail.com,dan-jpn@i.softbank.jp";
	$email = $_POST['email'];
	$subject = "Web Inquiry";
	$msg = $_POST['message'] . "\n\n" . $_POST['name'];
	$headers = "From: $email\r\n";
	$headers .= 'Bcc: askewmichaeljames@gmail.com' . "\r\n";

    mail($to, $subject, $msg, $headers);
	
	mail($email,"Confirmation","Thank you for contacting SOS Studio Cafe, " . $_POST['name'] . ". We will respond to your inquiry as soon as possible.","From: donotreply@sosstudiocafe.com");

?>