<?php

$frm_name  = "Daniel Sheard";
$recepient = "androsipen@gmail.com";
$sitename  = "WhittonElectrical";
$subject   = "A new application site from \"$sitename\"";

$name = trim($_POST["name"]);
$bussinesname = trim($_POST["bussinesname"]);
$email = trim($_POST["email"]);
$phonenumber = trim($_POST["phonenumber"]);

$message = "
A new application site from WhittonElectrical <br>
Name : $name <br>
Bussines name : $bussinesname <br>
E-mail: $email <br>
Phone number : $phonenumber <br>
";

mail($recepient, $subject, $message, "From: $frm_name <$email>" . "\r\n" . "Reply-To: $email" . "\r\n" . "X-Mailer: PHP/" . phpversion() . "\r\n" . "Content-type: text/html; charset=\"utf-8\"");
