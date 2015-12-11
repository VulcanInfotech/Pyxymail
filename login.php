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


$sql2="SELECT * FROM  paidregistered_members WHERE useremail='$myemail' ";
$result2=mysqli_query($conn,$sql2);

$countp=mysqli_num_rows($result2);



$sql="SELECT * FROM  registered_members WHERE email='$myemail' and password='$mypassword'";
$result=mysqli_query($conn,$sql);

$count=mysqli_num_rows($result);

if($countp == 1)
{
 echo "<script>
alert('This is Your Premium Login EmailID.Go to Premium Login');
window.location.href='paid_login_form1.php#toregister';
</script>";
}
elseif($count==1)
{

$_SESSION['login_user']=$myemail; 

//session_register("$myemail");
//session_register("mypassword"); 

header("location: checkdate.php");

}

elseif($myemail=="" &&  $mypassword=="")
{
  echo "<script>
alert('Please enter login details');
window.location.href='paid_login_form1.php#tologin';
</script>";

}
else 
{
echo "<script>
alert('wrong Email & Password');
window.location.href='paid_login_form1.php#tologin';
</script>";
}

mysqli_close($conn); // Closing Connection
?>
 