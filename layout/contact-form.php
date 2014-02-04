<?php

/*
|--------------------------------------------------------------------------
| Settings 
|--------------------------------------------------------------------------
*/

define("EMAIL" , "dannysepler@gmail.com");
define("SUBJECT" , "You've got mail");

/*
|--------------------------------------------------------------------------
| Simple Sender Script
|--------------------------------------------------------------------------
*/

if( $_POST ) {
  
  /* create body message */
    $message = '';
    
  // Name 
  $message.= '<p> Name : ' . $_POST['name'] . '</p>';
  
    // Phone
    $message.= '<p> Phone : ' . $_POST['tel'] . '</p>';
      
    // Message
    $message.= '<p> Message : ' . $_POST['message'] . '</p>';
  
     
/* send email */
$email = mail( EMAIL , SUBJECT , $message , "From: ".$_POST['name']." <".$_POST['email'].">\r\n" ."Reply-To: ".$_POST['email']."\r\n" );

/* callback for ajax */
if( $email ) {
    echo 'OK';
} else { 
    echo 'ERROR'; }
}
  
?>