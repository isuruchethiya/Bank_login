<?php

session_start();
require "connection.php";

$email = isset($_POST["e"]) ? $_POST["e"] : '';
$password = isset($_POST["p"]) ? $_POST["p"] : '';
$rememberme = isset($_POST["r"]) ? $_POST["r"] : '';

if (empty($email)) {
    echo ("Please enter your Email");
} else if (strlen($email) > 100) {
    echo ("Email must have less than 100 characters");
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo ("Invalid Email");
} else if (empty($password)) {
    echo ("Please enter your Password");
} else {

    $rs = Database::search("SELECT * FROM `user` WHERE `email`='" . $email . "' 
    AND `password`='" . $password . "'");
    $n = $rs->num_rows;

    if ($n == 1) {

        $d = $rs->fetch_assoc();
        $_SESSION["email"] = $email;

        if ($rememberme == "true") {

            setcookie("email", $email, time() + (60 * 60 * 24 * 365));
            setcookie("password", $password, time() + (60 * 60 * 24 * 365));
        } else {

            setcookie("email", "", -1);
            setcookie("password", "", -1);
        }
        
        echo ("success");
    } else {
        echo ("Invalid Username or Password");
    }
}

?>
