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

if(mail($to, $subject, $message, "From: " . $name)){
	echo "Thank you for your message! Message has been sent!"

}else {
	echo "Error occurred while sending the message."
}	

?>
</body>
</html>
