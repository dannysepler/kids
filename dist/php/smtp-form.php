
<?php
include "classes/class.phpmailer.php"; // include the class file name

$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for GMail
$mail->Host = "smtp.gmail.com";
$mail->Port = 587; // or 587
$mail->IsHTML(true);
$mail->Username = "kidsdocgville@gmail.com";
$mail->Password = "qwop1290!";
$mail->SetFrom("kidsdocgville@gmail.com");
$mail->Subject = $_POST['name'] . " sent you an email!";
$mail->Body = $_POST['message'] . " phone number(optional) - " . $_POST['tel'];
$mail->AddAddress( $_POST['email'] );
 if(!$mail->Send()){
    echo "Mailer Error: " . $mail->ErrorInfo;
}
else{
	
    echo "Message has been sent";	
	header("Location: http://162.243.207.74/kids/demo.html");
}

?>
