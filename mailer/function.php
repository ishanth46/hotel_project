<?php
/*
##############################################
# Purpose : Send mail using PHPMailer + Gmail #
# Created : 24-11-2019                        #
# Updated : 2025                               #
##############################################
*/

require 'includes/PHPMailer.php';
require 'includes/SMTP.php';
require 'includes/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function shoot_mailer($to, $cc, $bcc, $subject, $message, $file = "")
{
    $mail = new PHPMailer(true);

    try {
        // SMTP configuration
        $mail->SMTPDebug = 0; // Set 2 for debugging, 0 for production
        $mail->Debugoutput = 'html';
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = '*****@gmail.com';  
        $mail->Password   = '**************';          
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Sender
        $mail->setFrom('ishanth.qrestik@gmail.com', 'Rohaan Hotels');

        // Recipients
        if (!empty($to)) {
            foreach (explode(',', $to) as $addr) {
                $addr = trim($addr);
                if ($addr !== '') $mail->addAddress($addr);
            }
        }

        // CC
        if (!empty($cc)) {
            foreach (explode(',', $cc) as $addr) {
                $addr = trim($addr);
                if ($addr !== '') $mail->addCC($addr);
            }
        }

        // BCC
        if (!empty($bcc)) {
            foreach (explode(',', $bcc) as $addr) {
                $addr = trim($addr);
                if ($addr !== '') $mail->addBCC($addr);
            }
        }

        // Attachments (optional)
        if (!empty($file) && file_exists($file)) {
            $mail->addAttachment($file);
        }

        // Email content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = $message;

        // Send mail
        if ($mail->send()) {
            return true;
        } else {
            // Optional: for debugging
            error_log("Mailer Error: " . $mail->ErrorInfo);
            return false;
        }
    } catch (Exception $e) {
        error_log("PHPMailer Exception: " . $mail->ErrorInfo);
        return false;
    } finally {
        $mail->smtpClose();
    }
}
