<?php

/*include 'library.php'; */

include "../dist/php/classes/class.phpmailer.php"; // include the class file name

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
}

/*
if(isset($_POST["send"])){
    $email = $_POST["email"];
    $mail   = new PHPMailer; // call the class 
    $mail->IsSMTP(); 
    $mail->Host = "SMTP_HOST"; //Hostname of the mail server
    $mail->Port = SMTP_PORT; //Port of the SMTP like to be 25, 80, 465 or 587
    $mail->SMTPAuth = true; //Whether to use SMTP authentication
    $mail->Username = SMTP_UNAME; //Username for SMTP authentication any valid email created in your domain
    $mail->Password = SMTP_PWORD; //Password for SMTP authentication
    $mail->AddReplyTo("reply@kidsdoc.com", "Reply name"); //reply-to address
    $mail->SetFrom("kidsdocgville@gmail.com", "Asif18 SMTP Mailer"); //From address of the mail
    // put your while loop here like below,
    $mail->Subject = "Your SMTP Mail"; //Subject od your mail
    $mail->AddAddress($email, "Asif18"); //To address who will receive this email
    $mail->MsgHTML("<b>Hi, your first SMTP mail has been received. Great Job!.. <br/><br/>by <a href='http://asif18.com'>Asif18</a></b>"); //Put your body of the message you can place html code here
    
    //$mail->AddAttachment("images/asif18-logo.png"); //Attach a file here if any or comment this line, 
    
    $send = $mail->Send(); //Send the mails
    if($send){
        echo '<center><h3 style="color:#009933;">Mail sent successfully</h3></center>';
    }
    else{
        echo '<center><h3 style="color:#FF3300;">Mail error: </h3></center>'.$mail->ErrorInfo;
    }
}
*/

?>