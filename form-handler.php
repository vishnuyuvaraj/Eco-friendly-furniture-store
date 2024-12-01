<?php

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$preference = $_POST['preference'];
$message = $_POST['message']; 


$email_from = 'ecoelegance649@gmail.com';


$email_subject = 'New Form Submission'; e


$email_body = "User Name: $name.\n" .
              "User Email: $visitor_email.\n" .
              "Subject: $preference.\n" .
              "User Message: $message.\n"; 

$to = 'quellfreddie0@gmail.com';


$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n"; 

mail($to, $email_subject, $email_body, $headers);


header("Location: contact.html");
exit(); 
?>
