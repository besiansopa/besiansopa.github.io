Vielen Dank, f&uuml;r Ihre Nachricht!
<?php
	
	$firstName 		= $_POST['vorname'];
    $lastName 		= $_POST['nachname'];
	$email	 		= $_POST['email'];
	$message 		= $_POST['nachricht'];

	$to 			= "besian.sopa@bbzbl-it.ch";
	$subject 		= "Email von meiner Webseite";
	$body 			= "Informationen:";

	$body .= "\r\n Vorname: " . $firstName;
    $body .= "\r\n Nachname: " . $lastName;
	$body .= "\r\n Email-Adresse: " . $email;
	$body .= "\r\n Nachricht: " . $message;
	$headers = 'From: ' . $email . "\r\n" .
               'Reply-To: ' . $email . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

	mail($to, $subject, $body);
?>
