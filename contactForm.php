<?php

if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $mailFrom = $_POST['mail'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo = "nick@nicholaswilde.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have gotten mail from".$name.". \n\n".$message;

    mail($mailTo,$subject,$txt,$headers);
}
?php>