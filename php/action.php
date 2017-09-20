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
$to = 'msakyiama@outlook.com';
$subject = 'New Message';

if(mail($to, $subject, $message, "From: " . $name)){
	echo "<h1>Thank you for your message! Message has been sent!</h1>";

}else {
	echo "<h1>Error occurred while sending the message.</h1>";
}	

?>
</body>
</html>
