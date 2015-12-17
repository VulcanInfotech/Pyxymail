<?php
include 'connect.php';
include 'session1.php';



if (isset($_POST['submit']))
{



$name=$_POST["name"];
$email=$_POST["email"];
//$phone=$_POST["phone"];
$message=$_POST["txtMessage"];




$to = "support@pyxymail.net";
//$from="no_reply@vulcaninfotech.com";	
$subject ="Help Mail";

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: Pyxymail <support@pyxymail.net>' ;









                                            


$Body  = "" ;

ob_start();

				 

 


echo   "<center><h3> Name :- "." ".$name. " </h3></center>";

echo   "<center><h3> Email :- "." ".$email. " </h3></center>";

//echo   "<center><h3> Phone :- "." ".$phone. " </h3></center>";

echo   "<center><h3> Message :- "." ".$message. " </h3></center>";
$body =ob_get_contents();
ob_end_clean();

mail($to,$subject,$body,$headers);

}


 echo "<script>
                 alert('Message has been sent ');
                window.location.href='contactus2.php';
                </script>";




           
?>