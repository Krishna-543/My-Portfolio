<?php
$to = "krishnastar543@gmail.com"; 
$subject = "Test Email from PHP";
$message = "Hello, this is a test email from my website!";
$headers = "From: no-reply@yourdomain.com";

if(mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully!";
} else {
    echo "Failed to send email.";
}
?>
