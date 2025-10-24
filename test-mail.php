<?php
require 'mailer/function.php';

// Test email settings
$to      = "suvaqrestik@gmail.com";
$cc      = "";
$bcc     = "";
$subject = "Test Mail from Rohaan Hotels";
$message = "<p>This is a test email sent via PHPMailer SMTP.</p>";
$file    = ""; // No attachments

// Send the email
$mailSent = shoot_mailer($to, $cc, $bcc, $subject, $message, $file);

// Check result
if ($mailSent) {
    echo "Test mail sent successfully!";
} else {
    echo "Test mail failed. Check SMTP settings or Gmail app password.";
}
