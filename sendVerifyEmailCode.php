<?php
require "connection.php";
session_start();

$email =$_SESSION['email'];


$rs = Database::search("SELECT * FROM `user` WHERE `email`='" . $email . "'");
$userData = $rs->fetch_assoc();
$verificationCode = $userData['verificaton_coad'];

require "./include/PHPMailer.php";
require "./include/SMTP.php";
require "./include/Exception.php";


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class EmailTemplate {
    public static function EmailFormat($verificationCode) {
        return "<p>VERIFICATION CODE: ".$verificationCode."</p>";
    }
}

$mail = new PHPMailer;
$mail->IsSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'thamoddya.smtp@gmail.com';
$mail->Password = 'vfpornoftoayuwgf';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;
$mail->setFrom('isuruche1234@gmail.com', 'KNOWLADGE ADDICT');
$mail->addReplyTo("isuruche1234@gmail.com");
$mail->addAddress($email);
$mail->isHTML(true);
$mail->Subject = 'BLOG - Thamoddya Rashmitha';
$mail->Body = EmailTemplate::EmailFormat($email);

$mail->send();

if ($mail->send()) { 
    echo "success";
} else {
    echo "Error: " . $mail->ErrorInfo;
}

$mail->smtpClose();

?>