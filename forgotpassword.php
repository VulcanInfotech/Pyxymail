<?php 
//session_start();

include 'connect1.php'; //connects to the database
//include "classes/class.phpmailer.php";


if (isset($_POST['useremail']))
{
	$useremail= $_POST['useremail'];
	$query="select * from registered_members where email='$useremail'";
	$result   = mysql_query($query);
	$count=mysql_num_rows($result);
	// If the count is equal to one, we will send message other wise display an error message.
	if($count==1)
	{
		$rows=mysql_fetch_assoc($result);
		$pass  =  $rows['password'];//FETCHING PASS
		//echo "your pass is ::".($pass)."";
		$email = $rows['email'];
		//echo "your email is ::".$email;
		




$to = $useremail;
//$from="no_reply@vulcaninfotech.com";	
$subject ='Email and Password';

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: Pyxymail <support@pyxymail.net>' ;









                                            


$Body  = "" ;

ob_start();

				 
$pro_title=$_GET['image'];
$image=$_GET['title'];
 


echo   "<center><h3> Your Email is &nbsp; ".$email. " </h3></center>";

echo  "<center><h3>Your Password is &nbsp;".$pass."</h3></center>";
$body =ob_get_contents();
ob_end_clean();

mail($to,$subject,$body,$headers);




    
     echo "<script>
alert('Message has been sent');
window.location.href='index.php';
</script>";

}

      else
      {
 
	
		
     echo "<script>
alert('No such Email Found');
window.location.href='paid_login_form1.php#tologin';
</script>";

		
  
     }
}

?>

