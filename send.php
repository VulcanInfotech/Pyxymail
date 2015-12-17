<?php
include 'connect.php';


if (isset($_POST['submit']))
{
//include "classes/class.phpmailer.php";
include 'session1.php'; 
//require_once('class.phpmailer.php');



$email=$_POST["all"];
$mail_subject=$_POST["subject"];
//$message=$_POST["message"];



$to = $email;
//$from="no_reply@vulcaninfotech.com";	
$subject =$mail_subject;

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: Pyxymail <support@pyxymail.net>' ;









                                            


$Body  = "" ;

ob_start();

				 
$pro_title=$_GET['image'];
$image=$_GET['title'];
 


echo   "<center><h3> ".$pro_title. " </h3></center>";

echo  "<center><img src='http://pyxymail.net/$image'></center>";
$body =ob_get_contents();
ob_end_clean();

mail($to,$subject,$body,$headers);

}


 echo "<script>
                 alert('Message has been sent');
                window.location.href='dashboard_compose.php';
                </script>";
           
?>