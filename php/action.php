<?php 
/*PHP code for the form handling*/

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['comment'];
$to = "msakyiama@outlook.com";
$subject = "New Message";

mail($to, $subject, $message, "From: " . $name);
echo "Thank you for your message, your message has been sent!"
?>