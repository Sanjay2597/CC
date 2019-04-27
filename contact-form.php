<?<?php 


	$name = $_Post['name'];
	$visitor_email = $_Post['email'];
	$message = $_Post['message'];


	$email_form = 'cryotikcomputers.co.tt'

	$email_subject = "New Form Submission";

	$email_body = "User Name: $name.\n".
					"User EmailL: $visitor_email. \n".
						"User Message: $message. \n";


						$to = "cryptikcomputers@gmail.com";


						$headers = "Form: $email_ form \r\n";

						$headers .= "Reply-To $visitor_email \r\n";

						mail($to, $email_subject, $email_body, $headers);

						header("Location: Contact.html");


 ?>