<?php
ob_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get the source for redirect
    $source = $_POST['source'] ?? 'index';

    $pageMap = [
        'index' => 'index.php#contactform',
        'calendar' => 'index.php#calendar-form',
        'popup' => 'index.php#popupForm'
    ];

    $url = $pageMap[$source] ?? 'index.php';

    // Collect input safely
    $name     = trim($_POST['cname'] ?? $_POST['name'] ?? '');
    $email    = trim($_POST['cemail'] ?? $_POST['email'] ?? '');
    $phone    = trim($_POST['cphone'] ?? $_POST['phone'] ?? '');
    $msg      = trim($_POST['msg'] ?? '');
    $location = trim($_POST['location'] ?? '');
    $checkin  = trim($_POST['checkin'] ?? '');
    $checkout = trim($_POST['checkout'] ?? '');
    $adults   = trim($_POST['adults'] ?? '');
    $children = trim($_POST['children'] ?? '');
    $rooms    = trim($_POST['rooms'] ?? '');

    // Mail settings
    $to      = "rohaanhotels@gmail.com";
    $cc      = "ops.rohaaninnsashoknagar@gmail.com";
    $bcc     = "";
    $subject = "Appointment Booked for Rohaan Hotel";

    // Build HTML email
    $mail_html = '<div style="background:#004875; padding: 50px 24px;">
        <div style="width: 650px; margin:auto; background: #FFFFFF; padding: 25px;">
            <table border="0" width="70%" align="center" style="font-family: Arial, sans-serif; border-collapse: collapse;">
                <tr>
                    <td colspan="3" align="center" style="font-size: 24px; font-weight:bold; padding-bottom:20px;">' . htmlspecialchars($subject) . '</td>
                </tr>';

    if ($name)     $mail_html .= "<tr><td width='40%'><b>Name</b></td><td width='5%'>:</td><td>" . htmlspecialchars($name) . "</td></tr>";
    if ($email)    $mail_html .= "<tr><td><b>Email</b></td><td>:</td><td>" . htmlspecialchars($email) . "</td></tr>";
    if ($phone)    $mail_html .= "<tr><td><b>Phone</b></td><td>:</td><td>" . htmlspecialchars($phone) . "</td></tr>";
    if ($msg)      $mail_html .= "<tr><td><b>Message</b></td><td>:</td><td>" . nl2br(htmlspecialchars($msg)) . "</td></tr>";
    if ($location) $mail_html .= "<tr><td><b>Location</b></td><td>:</td><td>" . htmlspecialchars($location) . "</td></tr>";

    if ($source === "calendar") {
        if ($checkin)  $mail_html .= "<tr><td><b>Check In</b></td><td>:</td><td>" . htmlspecialchars($checkin) . "</td></tr>";
        if ($checkout) $mail_html .= "<tr><td><b>Check Out</b></td><td>:</td><td>" . htmlspecialchars($checkout) . "</td></tr>";
        if ($adults)   $mail_html .= "<tr><td><b>Adults</b></td><td>:</td><td>" . htmlspecialchars($adults) . "</td></tr>";
        if ($children) $mail_html .= "<tr><td><b>Children</b></td><td>:</td><td>" . htmlspecialchars($children) . "</td></tr>";
        if ($rooms)    $mail_html .= "<tr><td><b>Rooms</b></td><td>:</td><td>" . htmlspecialchars($rooms) . "</td></tr>";
    }

    $mail_html .= '</table>
            <br><br>
            <div style="padding-top: 20px; padding-bottom: 20px; margin-top: 25px; border-top: 1px solid #CDCDCD; font-family: Arial, sans-serif; font-size:12px; color:#555;">
                <center>Copyright &copy; ' . date("Y") . ' www.rohaanhotels.com</center>
            </div>
        </div>
    </div>';

    // Include PHPMailer function
    include 'mailer/function.php';

    $file = ""; // No attachments for now

    // ✅ Call shoot_mailer and assign result
    $mailSent = shoot_mailer($to, $cc, $bcc, $subject, $mail_html, $file);

    // Redirect based on result
    if ($mailSent) {
        header("Location: $url?msg=success");
        exit;
    } else {
        header("Location: $url?msg=failed");
        exit;
    }
}
