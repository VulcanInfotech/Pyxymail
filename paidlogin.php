<?php
session_start(); // Starting Session

include 'connect.php';

$myemail=$_POST['useremail']; 
$mypassword=$_POST['password']; 

// To protect MySQL injection (more detail about MySQL injection)

$myemail = stripslashes($myemail);
$mypassword = stripslashes($mypassword);
$myemail = mysqli_real_escape_string($conn,$myemail);
$mypassword = mysqli_real_escape_string($conn,$mypassword);


$sql2="SELECT * FROM  registered_members WHERE email='$myemail' ";
$result2=mysqli_query($conn,$sql2);

$countp=mysqli_num_rows($result2);

$sql="SELECT * FROM  paidregistered_members WHERE useremail='$myemail' and password='$mypassword'";
$result=mysqli_query($conn,$sql);

$count=mysqli_num_rows($result);

if($countp == 1)
{
 echo "<script>
alert('This is Your Free Login EmailID.Go to Free Login');
window.location.href='paid_login_form1.php#tologin';
</script>";
}

elseif($count==1)
{

$_SESSION['login_user1']=$myemail; 


$sql1="SELECT no_contact FROM contact_count WHERE useremail='$myemail'";
$result1=mysqli_query($conn,$sql1);
$row1=mysqli_fetch_assoc($result1);

 $contactno=$row1['no_contact'];



if($contactno > 0)
{
header("location: dashboard.php");

}
else
{
header("location: pricing_signups.php");

}

}

elseif($myemail=="" &&  $mypassword=="")
{
  echo "<script>
alert('Please enter login details');
window.location.href='paid_login_form1.php#toregister';
</script>";

}
else 
{
echo "<script>
alert('wrong Email & Password');
window.location.href='paid_login_form1.php#toregister';
</script>";
}

mysqli_close($conn); // Closing Connection
?>
 