<?php

include("email.php");

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$formcontent=" First Name: $fname    \n Last Name: $lname   \n Email Address: $email \n Phone Number: $phone  \n Message: $message"; 

$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
header('Location: received');
?>