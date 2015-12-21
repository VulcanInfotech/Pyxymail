<?php

include('config.php');
include "classes/class.phpmailer.php";

// table name 

// Random confirmation code 
// Random confirmation code 
$confirm_code=md5(uniqid(rand())); 


// values sent from form 

$name=$_POST["user1"];
$email=$_POST["useremail"];
$password= $_POST["password"];
$repassword= $_POST["repassword"];








$query = mysql_query("SELECT * FROM  freesignup WHERE Email = '$email'");


$count=mysql_num_rows($query);

if($count==1)
{
 echo "<script>
alert('You already registred in free signup account,if you want use  paid account then click on Switch To Premium button  ');
window.location.href='paid_signup_form1.php#toregister';
</script>";
}


else
{

$query = mysql_query("SELECT * FROM paidregistered_members WHERE useremail = '$email'");


$count=mysql_num_rows($query);

if($count==1)
{
  echo "<script>
alert('Email already exist');
window.location.href='paid_signup_form1.php#toregister';
</script>";

}

 elseif($repassword !=  $password)
{
echo "<script>
alert('password mismatch');
window.location.href='paid_signup_form1.php#toregister';
</script>";
}

else
{


// Insert data into database 
$sql="INSERT INTO temp_paid_member( username, useremail, password,confirm_code)VALUES( '$name', '$email', '$password','$confirm_code')";
$result=mysql_query($sql);

// if suceesfully inserted data into database, send confirmation link to email 
if($result){
// ---------------- SEND MAIL FORM ----------------

$to = $email;
$from="no_reply@vulcaninfotech.com";	
$subject ='Your confirmation link here';
$Body  = "http://pyxymail.net/paidconfirmation.php?passkey=$confirm_code";//check


mail($to,$subject,$Body);
    

 echo "<script>
alert('Activation Link has been sent,please check your email account and activate your PyxyMail account');
window.location.href='index.php';
</script>";


}
}

}
?>
