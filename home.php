<?php
require "connection.php";
session_start();
echo($_SESSION['email']);
$userEmail = $_SESSION['email'];

if (empty($_SESSION['email'])) {
    header("Location: ./signIn.php");
}
$rs = Database::search("SELECT * FROM `user` WHERE `email`='" . $userEmail . "'");
$userData = $rs->fetch_assoc();
if($userData['verifyed']==0){
    header("Location: ./verifyEmail.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    
</body>
</html>