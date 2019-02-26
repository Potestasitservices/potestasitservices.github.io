<?php
$to = "Potestas.itservices@gmail.com";
$subject = "Contact Form";
$name = $_POST['username'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message \n Phone: $phone";
$headers = "From: webmaster@example.com";

mail($to,$subject,$formcontent,$headers);
header('Location: http://potestasgroup.in');
?>