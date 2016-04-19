<?php
include_once("header.php");
session_start();
include_once("data/dbConnect.php");
require("PHPMailer-master/PHPMailerAutoload.php");

//error_reporting(-1);
//ini_set('display_errors', 'On');		//shows errors
//set_error_handler("var_dump");

// Was the form submitted?
if (isset($_POST["ForgotPassword"])) {
	
	// Harvest submitted e-mail address
	if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
		$email = $_POST["email"];
		echo "email is valid";			//test
		
	}else{
		echo "email is not valid";
		exit;
	}

	// Check to see if a user exists with this e-mail
	$userExists = mysqli_fetch_assoc(mysqli_query($conn,"SELECT userName FROM user WHERE userName = '$email'"));
	
	//echo mysqli_error($conn);
	
	if ($userExists["userName"])
	{
		// Create a unique salt. This will never leave PHP unencrypted.
		$salt = "498#2D83B631%3800EBD!801600D*7E3CC13";

		// Create the unique user password reset key
		$password = hash('sha512', $salt.$userExists["userName"]);

		// Create a url which we will direct them to reset their password
		$pwrurl = "www.yoursitehere.com/resetPassword.php?q=".$password;
		
		
		$mail = new PHPMailer();

		$mail->IsSMTP();  // telling the class to use SMTP
		$mail->Host     = "smtp.gmail.com"; // SMTP server
		$mail->Port = 587;
		$mail->SMTPSecure = 'tls';
		$mail->SMTPAuth = true;

		$mail->From     = "forrestwong9@gmail.com";
		$mail->Username   = "luxepropertiesatlanta@gmail.com";  // GMAIL username
		$mail->Password   = "simmigon"; 
		$mail->AddAddress("forrestwong9@gmail.com");
		$mail->FromName = "Luxe Properties Atlanta";

		$mail->Subject  = "First PHPMailer Message";
		$mail->Body     = "Hi! \n\n This is my first e-mail sent through PHPMailer.";
		$mail->WordWrap = 50;

		if(!$mail->Send()) {
		  echo 'Message was not sent.';
		  echo 'Mailer error: ' . $mail->ErrorInfo;
		} else {
		  echo 'Message has been sent.';
		}
		
		/*
		// Mail them their key
		$mailbody = "Dear user,\n\nIf this e-mail does not apply to you please ignore it. It appears that you have requested a password reset at our website www.yoursitehere.com\n\nTo reset your password, please click the link below. If you cannot click it, please paste it into your web browser's address bar.\n\n" . $pwrurl . "\n\nThanks,\nThe Administration";
		mail($userExists["userName"], "apartmentrental.azurewebsites.net - Password Reset", $mailbody);
		echo "Your password recovery key has been sent to your e-mail address.";
		*/
		
	}
	else
		echo "No user with that e-mail address exists.";
}
include("footer.php");
?>