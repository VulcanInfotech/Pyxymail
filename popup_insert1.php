<?php

include 'connect.php';
include 'session1.php';


$namefield=$_POST['ffname'];

$emailfld=$_POST['eemail'];

$count=0;
$count1=0;

if(isset($paid_session))
{
$query = mysqli_query($conn,"SELECT * FROM audience WHERE Email = '". $emailfld ."' AND User='$user_check1'");

$query1=mysqli_query($conn,"SELECT * FROM unsubscribe WHERE Email = '". $emailfld ."' AND User='$user_check1'");

}
elseif(isset($login_session))
{
$query = mysqli_query($conn,"SELECT * FROM audience WHERE Email = '". $emailfld ."' AND User='$user_check'");


$query1=mysqli_query($conn,"SELECT * FROM unsubscribe WHERE Email = '". $emailfld ."' AND User='$user_check'");

}
$domain=substr(strrchr($emailfld,"@"),1);

if(empty($namefield))
{

echo "Name cannot be empty";

}
elseif(empty($emailfld))
{

echo "Name cannot be empty";

}


elseif(!ctype_alpha(str_replace(' ', '',$namefield))){
                        
              echo "Enter character only you have entered '$namefield'";

}
elseif(!filter_var(gethostbyname($domain),FILTER_VALIDATE_IP)) {
 
  echo "invalid email '$emailfld'";
  

}
elseif (mysqli_num_rows($query) > 0)
{

echo "Email already exist";

}

elseif(mysqli_num_rows($query1)>0)
{
echo "Sorry..This Email-Id Found as a Unsubscribe Email-Id";
}
else
{
if(isset($paid_session))
{
$query2=mysqli_query($conn,"select * from used_contact where User='$user_check1'");
$row1=mysqli_fetch_assoc($query2);
$contactvalue=$row1['usedcontact'];
$query3=mysqli_query($conn,"select no_contact from contact_count where useremail='$user_check1'");
$row2=mysqli_fetch_assoc($query3);
$pcvalue=$row2['no_contact'];
if($contactvalue > $pcvalue)
{
echo "Sorry...Contact Exceeds..Please Purchase Contacts";
}
else
{
mysqli_query($conn,"INSERT INTO audience(id,Name,Email,User) VALUES ('','$namefield','$emailfld','$user_check1')") or die ("Could not INSERT VALUES ");

$count=$count+1;

$sql5=mysqli_query($conn,"select * from used_contact where User='$user_check1'");

$row5=mysqli_fetch_assoc($sql5);
$oldused=$row5['usedcontact'];

$newused=$oldused + $count;

mysqli_query($conn,"update used_contact set usedcontact=$newused where User='$user_check1'");
//echo "Name  ".$namefield." and Email ".$emailfld." Added successfully" ;

}

}
elseif(isset($login_session))
{
$query6=mysqli_query($conn,"select no_contact from registered_members where email='$user_check'");
$row6=mysqli_fetch_assoc($query6);
$contactvalue1=$row6['no_contact'];
if($contactvalue1 > 250)
{
echo "Sorry...Contact Exceeds";

}
else
{
mysqli_query($conn,"INSERT INTO audience(id,Name,Email,User) VALUES ('','$namefield','$emailfld','$user_check')") or die ("Could not INSERT VALUES ");

$count1=$count1 + 1;


$sql8=mysqli_query($conn,"select * from registered_members where email='$user_check' ");
$row8=mysqli_fetch_assoc($sql8);
$oldno1=$row8['no_contact'];

$newno1=$oldno1 + $count1;

mysqli_query($conn,"update registered_members set no_contact=$newno1 where email='$user_check'");
//echo "Name  ".$namefield." and Email ".$emailfld." Added successfully" ; 

}

}





}



if(isset($paid_session))
{
// Logic for reduce Count from db
$query12=mysqli_query($conn,"select usedcontact from used_contact where User='". $user_check1 ."'");
$row12=mysqli_fetch_assoc($query12);
$number=$row12['usedcontact'];

$query13=mysqli_query($conn,"select no_contact from contact_count where useremail= '". $user_check1 ."'");
$row13=mysqli_fetch_assoc($query13);

$oldno=$row13['no_contact'];

$newno =  $oldno - $number;

$query14=mysqli_query($conn,"update paidregistered_members set no_contact = $newno where useremail= '". $user_check1 ."'");

$query15=mysqli_query($conn,"select no_contact from paidregistered_members where useremail= '". $user_check1 ."'");
$row15=mysqli_fetch_assoc($query15);
$number1=$row15['no_contact'];

if($number1 >= 0)
{
echo "Only". $number1. "contacts left";
$to = $user_check1;
$subject =$mail_subject;

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
//$headers .= 'From:no-reply' . "\r\n";
                                        

$Body  = "" ;

ob_start();
echo "<b>Dear $paid_user,</b>";
echo "<p>Thank you for using our services & we hope you are enjoying using pyxymail.This is a reminder,you have <b>".$number1." of contacts left </b>.Let Our relationship be more better,choose the best plan and continue with more number of contacts support in your pyxymail account.</p>";
echo "<p>Thank you for choosing us.</p>";
echo  "<b>-Pyxymail Support Team</b>";
$body .= ob_get_contents();
ob_end_clean();

mail($to,$subject,$body,$headers);


}

}
elseif($login_session)
{
$sql9=mysqli_query($conn,"select * from registered_members where email='$user_check'");
$row9=mysqli_fetch_assoc($sql9);
$contactno=$row9['no_contact'];
$nodefault=250;
$resultno= $nodefault - $contactno;
if($resultno == 0)
{
$to = $user_check;
$subject =$mail_subject;

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
//$headers .= 'From:no-reply' . "\r\n";
                                        

$Body  = "" ;

ob_start();
echo "<b>Dear $login_session,</b>";
echo "<p>Thank you for using our services & we hope you are enjoying using pyxymail.This is a reminder,you have <b> 0 of contacts left</b>.Let Our relationship be more better,choose the best premium plan and continue with more number of contacts support in your pyxymail account.</p>";
echo "<p>Thank you for choosing us.</p>";
echo  "<b>-Pyxymail Support Team</b>";
$body .= ob_get_contents();
ob_end_clean();

mail($to,$subject,$body,$headers);

}
elseif($resultno >= 200 && $resultno < 250 )
{
echo "Only". $resultno. "contacts left";
}
 

}

?>
