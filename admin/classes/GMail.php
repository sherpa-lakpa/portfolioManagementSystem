<?php
//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require '../vendor/autoload.php';

class GMail{
	public static function send($by, $email, $subject, $message){
		//Create a new PHPMailer instance
		$mail = new PHPMailer;

		//Tell PHPMailer to use SMTP
		$mail->isSMTP();

		//Enable SMTP debugging
		// SMTP::DEBUG_OFF = off (for production use)
		// SMTP::DEBUG_CLIENT = client messages
		// SMTP::DEBUG_SERVER = client and server messages
		$mail->SMTPDebug = SMTP::DEBUG_OFF;

		//Set the hostname of the mail server
		$mail->Host = 'smtp.gmail.com';
		// use
		// $mail->Host = gethostbyname('smtp.gmail.com');
		// if your network does not support SMTP over IPv6

		//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
		$mail->Port = 587;

		//Set the encryption mechanism to use - STARTTLS or SMTPS
		$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

		//Whether to use SMTP authentication
		$mail->SMTPAuth = true;

		//Username to use for SMTP authentication - use full email address for gmail
		$mail->Username = 'lakpasherpa5680@gmail.com';

		//Password to use for SMTP authentication
		$mail->Password = 'encrypted4us';

		//Set who the message is to be sent from
		$mail->setFrom('message@slakpa.com.np', 'Lakpa Sherpa');

		//Set an alternative reply-to address
		$mail->addReplyTo($email, $by);

		//Set who the message is to be sent to
		$mail->addAddress('sherpalakpa18@gmail.com', 'Lakpa Sherpa');

		//Set the subject line
		$mail->Subject = $subject;

		//Read an HTML message body from an external file, convert referenced images to embedded,
		//convert HTML into a basic plain-text alternative body
		$message_body = file_get_contents('../admin/contents.html');
		$message_body = str_replace('{{message}}', $message, $message_body);
		$message_body = str_replace('{{by}}', $by, $message_body);
		$mail->msgHTML($message_body, __DIR__);

		//Replace the plain text body with one created manually
		$mail->AltBody = 'This is a plain-text message body';

		//send the message, check for errors
		if (!$mail->send()) {
		    echo 'Mailer Error: '. $mail->ErrorInfo;
		}
	}
}