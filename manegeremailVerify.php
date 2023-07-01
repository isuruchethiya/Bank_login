<?php 

session_start();
require "connection.php";

if (isset($_GET["v"])) {
    $v = $_GET["v"];

    $admin= Database::search("SELECT * FROM `maneger` WHERE `verification_coad`='".$v."'");
    $num = $admin->num_rows;
    if ($num==1) {
        $data = $admin->fetch_assoc();
        $_SESSION["au"]=$data;
        echo("success");
    }else {
        echo("Invalid varification code");
    }
}else {
    echo("Please enter your varification code");
    
}


?>