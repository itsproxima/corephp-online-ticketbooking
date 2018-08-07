<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set('Etc/UTC');
//require 'PHPMailerAutoload.php';


 $to_email_address ="proximagarnaik12@gmail.com"  ;
 $subject="test email";
 $message="i am testing now";
 $headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";


$headers .= 'From: <garnaik.proxima@gmail.com>' . "\r\n";
$headers .= 'Cc: ' . "\r\n";
mail($to_email_address,$subject,$message,$headers);




?>