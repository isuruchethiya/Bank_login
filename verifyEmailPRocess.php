<?php
require "connection.php";
session_start();

$email =$_SESSION['email'];
$verifyCode = $_POST['VerifyCode'];   

if(empty($verifyCode)){
    echo "empty email";
    die();
};


$rs = Database::search("SELECT * FROM `user` WHERE `email`='" . $email . "'");
$userData = $rs->fetch_assoc();
if($userData['verificaton_coad'] == $verifyCode){
    $updateStstus = Database::iud("UPDATE user SET verifyed = '1' WHERE email = '$email'");
    echo "Success";
}else{
    echo "Enter Correct Code";
}

?>