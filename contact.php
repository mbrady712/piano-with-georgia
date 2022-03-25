<?php 
if(isset($_POST['submit'])){
    $to = "pianowithgeorgia@gmail.com"; 
    $contact_name = $_POST['contact_name'];
    $student_name = $_POST['student_name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$age = $_POST['age'];
	$experience = $_POST['experience'];
    $subject = "Form Submission";
    $message = $_POST['message'];
	$text = "A potential client has filled out your contact form.
		\nContact Name: " . $contact_name . 
		"\nStudent Name: " . $student_name . 
		"\nPhone: " . $phone . 
		"\nEmail: " . $email .
		"\nStudent's Age (if adult - you can just write \"adult\"): " . $age . 
		"\nStudent's Experience (if any): " . $experience . 
		"\nTell me a little about yourself and/or what you would like to learn: " . $message;
    $headers = 'From: pianowithgeorgia@example.com' . "\r\n" .
    'Reply-To: pianowithgeorgia@example.com' . "\r\n" .
	'MIME-Version: 1.0' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    mail($to,$subject,$text,$headers);
    header("Location: contact.html");
    }
?>
