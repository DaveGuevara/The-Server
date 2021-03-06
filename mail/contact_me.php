<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['email'];
	
// Create the email and send the message
$to = 'matteeique@gmail.com';                          // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Non-Disclosure Form:  $name";
$email_body = "You have received a new non-disclosure agreement signature from your website.\n\n"."Here is the person's details:\n\nName: $name\n\nEmail: $email_address";
$headers = "From: matteeique@gmail.com\n";                // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);			
return true;
?>