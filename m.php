<?php
$name = $_POST['name'];
  $visitor_email = "navjyot.gaonkar@gmail.com";
  $message ="naa";
  $email_from = "navjyot";
 
    $email_subject ="hello";
 
    $email_body = "You have received a new message from the user $name.\n".
                            "Here is the message:\n $message".
  $to = "navjyot.gaonkar@gmail.com,sumitvilankar619@gmail.com";
 
  $headers = "From: 9jyot.gaonkar@gmail.com \r\n";
 
  $headers .= "Reply-To: $visitor_email \r\n";
 
  mail($to,$email_subject,$email_body,$headers);
  
  echo "<h2>Message Sent successfully</h2>";


?>