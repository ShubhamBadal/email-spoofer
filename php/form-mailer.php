<!--  Email Spoofer v0.0.1 | MIT License | github.com/ShubhamBadal/email-spoofer  -->

<!doctype html>
<html>
<head>
	<title>Form Mailer</title>
</head>
<body>

	<?php

	/* FETCH FROM HTML */
	$fromName=$_POST['fromname'];
	$fromEmail=$_POST['fromemail'];
	$replytoName=$_POST['replytoname'];
	$replytoEmail=$_POST['replytoemail'];
	$toEmail=$_POST['to'];
	$subjectText=$_POST['subject'];
	$messageText=$_POST['message'];


	// CREATE FULL FIELDS (NAME + EMAIL)
	$fromFull 	=  $fromName . ' <'.$fromEmail.'> ';
	$replytoFull 	=  $replytoName . ' <'.$replytoEmail.'> ';

	
	/* CONFIGURE PHP IF NEEDED */
	// ini_set("sendmail_from","$fromFull");
	// ini_set("SMTP","mail.smtp2go.com");
	// ini_set('smtp_port',2525);
	// ini_set('username',"snake");
	// ini_set('password',"cobra");
	

	// COMPOSE
	$to      = $toEmail;
	$subject = $subjectText;
	$message = $messageText;


	// BASIC HEADER
	// $headers =	'From: '.$fromFull . "\r\n" .
	//    	   		'Reply-To: '.$replytoFull . "\r\n" .
	//    	   		'X-Mailer: PHP/' . phpversion();


	// FULL HEADER
	$headers  = "From: ".$fromFull . "\r\n";
	$headers .= "Reply-To: ".$replytoFull . "\r\n";
	// $headers .= "To: Mary <mary@example.com>, Kelly <kelly@example.com>" . "\r\n";
	// $headers .= "Cc: sendacopy@here.com" . "\r\n";
	// $headers .= "Bcc: sendablindcopy@here.com" . "\r\n";
	// $headers .= "X-Sender: testsite < mail@testsite.com >" . "\r\n";
	// $headers .= "Return-Path: " . $fromFull . "\r\n";
	// $headers .= "Content-Type: text/html; charset=ISO-8859-1" . "\r\n";
	$headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
	$headers .= "X-Priority: 1" . "\r\n";
	$headers .= "MIME-Version: 1.0" . "\r\n";
	


	// SEND AND SHOW MESSAGE
	if (mail($to, $subject, $message, $headers)) echo $headers.'<h1>Mail sent!</h1>';
	else echo '<h1>Something went wrong...</h1>';


	// DEBUGGING MODE
	// echo $fromFull;
	// echo $replytoFull;
	// echo $header;


	// REDIRECT TO PREVIOUS PAGE AFTER SENDING
	// header('Location: ' . $_SERVER['HTTP_REFERER']);

	?>

</body>
</html>