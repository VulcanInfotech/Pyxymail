<?php
error_reporting(E_ERROR);
include('config.php');



// table name 

// Random confirmation code 
$confirm_code=md5(uniqid(rand())); 

// values sent from form 

$name=$_POST["user"];
$email=$_POST["useremail"];
$password= $_POST["password"];
$repassword= $_POST["repassword"];





$sql2="SELECT * FROM  paidregistered_members WHERE useremail='$email' ";
$result2=mysql_query($sql2);

$countp=mysql_num_rows($result2);



$sql="SELECT * FROM  freesignup WHERE Email='$email' ";
$result=mysql_query($sql);

$count=mysql_num_rows($result);

if($countp == 1)
{
echo "<script>
alert('Your already having Premium account');
window.location.href='paid_signup_form1.php#tologin';
</script>";

}

elseif($count==1)
{
echo "<script>
alert('Email already exist');
window.location.href='paid_signup_form1.php#tologin';
</script>";

}

 elseif($repassword !=  $password)
{
echo "<script>
alert('password mismatch');
window.location.href='paid_signup_form1.php#tologin';
</script>";
}

else
{

// Insert data into database 
$sql="INSERT INTO temp_members_db(confirm_code, name, email, password)VALUES('$confirm_code', '$name', '$email', '$password')";
$result=mysql_query($sql);

// if suceesfully inserted data into database, send confirmation link to email 
if($result){
// ---------------- SEND MAIL FORM ----------------



$to = $email;
$from="no_reply@vulcaninfotech.com";	
$subject ='Your confirmation link here';
$Body  = "http://pyxymail.net/confirmation.php?passkey=$confirm_code";//check


mail($to,$subject,$Body);


echo "<script>
alert('Activation Link has been sent,please check your email account and activate your PyxyMail account');
window.location.href='index.php';
</script>";

}

}
?>