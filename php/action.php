<html>
<head>
<title>Thank You!</title>
</head>
<body>
<?php 
/*PHP code for the form handling*/

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$to = "msakyiama51@gmail.com";
$subject = "New Message";

mail($to, $subject, $message, "From: " . $name);
echo "Thank you for your message! I will get back to you!"
?>
</body>
</html>
