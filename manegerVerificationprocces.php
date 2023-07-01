<?php 


require "connection.php";

require "SMTP.php";
require "PHPMailer.php";
require "Exception.php";

use PHPMailer\PHPMailer\PHPMailer;


if (isset($_POST["e"])) {
    $email = $_POST["e"];
    $admin_rs = Database::search("SELECT * FROM `maneger` WHERE `email`='".$email."'");
    $admin_num = $admin_rs->num_rows;

    if ($admin_num > 0) {
        $code =uniqid();

        Database::iud("UPDATE `maneger` SET `verification_coad`='".$code."' WHERE `email`='".$email."'");
       
        $mail = new PHPMailer;
        $mail->IsSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'isuruche1234@gmail.com';
        $mail->Password = 'npqjvbnxzsrisvsx';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        $mail->setFrom('isuruche1234@gmail.com', 'Admin Varification ');
        $mail->addReplyTo('isuruche1234@gmail.com', 'Admin Varification ');
        $mail->addAddress($email);
        $mail->isHTML(true);
        $mail->Subject = 'E-Banking Maneger log in  Varification  Code';
        $bodyContent = '<h1 style="color:blue">Your Verification code is '.$code.'</h1>';
        $mail->Body    = $bodyContent;

        
        if (!$mail->send()) {
            echo 'Verification code sending failed';
        } else {
            echo 'Success';
        }
    }else {
        echo ("You are not a valid user");
    }
}else {
    echo ("Email field should not be empty.");
}


?>