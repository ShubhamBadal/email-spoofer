<!--  Email Spoofer v0.0.1 | MIT License | github.com/ShubhamBadal/email-spoofer  -->

<!doctype html>
<html>
<head>
	<title>Direct Mailer</title>
</head>
<body>
	
	<?php

	/* CONFIGURE PHP IF NEEDED */
	// ini_set("sendmail_from","$fromFull");
	// ini_set("SMTP","mail.smtp2go.com");
	// ini_set('smtp_port',2525);
	// ini_set('username',"snake");
	// ini_set('password',"cobra");


	// COMPOSE
	$to      = 'thecybrgirl@gmail.com';
	$subject = 'Do you even know who I am';
	$message = 'Hey, I want to meet you.';
	

	// BASIC HEADER
	$headers = 'From: shunty.fun@gmail.com' . "\r\n" .
	   	   	   'Reply-To: shunty.fun@gmail.com' . "\r\n" .
	    	   'X-Mailer: PHP/' . phpversion();
	
	
	// SEND AND SHOW MESSAGE
	if (mail($to, $subject, $message, $headers)) echo $headers.'<h1>Mail sent!</h1>';
	else echo '<h1>Something went wrong...</h1>';
	

	// FULL HEADER
	// $headers  = "From: testsite < mail@testsite.com >\n";
	// $headers .= "Cc: testsite < mail@testsite.com >\n"; 
	// $headers .= "X-Sender: testsite < mail@testsite.com >\n";
	// $headers .= 'X-Mailer: PHP/' . phpversion();
	// $headers .= "X-Priority: 1\n";
	// $headers .= "Return-Path: mail@testsite.com\n";
	// $headers .= "MIME-Version: 1.0\r\n";
	// $headers .= "Content-Type: text/html; charset=iso-8859-1\n";

    ?>
	
</body>
</html>