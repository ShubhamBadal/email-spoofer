<!doctype html>
<html>
<head>
	<title>Direct Mailer</title>
</head>
<body>
	<?php

	/* CONFIGURE PHP IF NEEDED 
	ini_set("SMTP","mail.smtp2go.com");
	ini_set('smtp_port',25);
	ini_set('username',"TCGx");
	ini_set('password',"GRvpw45rDkCw");
	ini_set("sendmail_from","shunty.fun@gmail.com");
	*/

	$to      = 'thecybrgirl@gmail.com';
	$subject = 'Do you even know who I am';
	$message = 'Hey, I want to meet you.';
	
	$headers = 'From: shunty.fun@gmail.com' . "\r\n" .
	   	   	   'Reply-To: shunty.fun@gmail.com' . "\r\n" .
	    	   'X-Mailer: PHP/' . phpversion();
	mail($to, $subject, $message, $headers);
	?>


	// FULL HEADER
	$headers  = "From: testsite < mail@testsite.com >\n";
    $headers .= "Cc: testsite < mail@testsite.com >\n"; 
    $headers .= "X-Sender: testsite < mail@testsite.com >\n";
    $headers .= 'X-Mailer: PHP/' . phpversion();
    $headers .= "X-Priority: 1\n"; // Urgent message!
    $headers .= "Return-Path: mail@testsite.com\n"; // Return path for errors
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=iso-8859-1\n";
	
</body>
</html>