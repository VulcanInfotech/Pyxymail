<?php
include 'config.php';



$emailid=$_POST['email'];


$sql=mysql_query("select * from freesignup where Email='$emailid'");
$count=mysql_num_rows($sql);

if($count == 1)
{
  $sql1=mysql_query("select * from registered_members where email='$emailid'");
$row1=mysql_fetch_assoc($sql1);
$uname=$row1['name'];
$uemail=$row1['email'];
$upassword=$row1['password'];

$sql2=mysql_query("insert into paidregistered_members(id,username,useremail,password,no_contact,price_contact) values('','$uname','$uemail','$upassword','','')");
$sql3=mysql_query("insert into contact_count(id,useremail,no_contact) values('','$uemail','')");
$sql4=mysql_query("insert into used_contact(id,User,usedcontact) values('','$uemail','')");

mysql_query("delete from freesignup  where Email='$emailid' ");

mysql_query("delete from registered_members where email='$emailid' ");


echo "<script>
alert('Your Paid Account has been Activated.');
window.location.href='paid_login_form1.php#toregister';
</script>";



}

else
{
echo "<script>
alert('Your Account Not Found');
window.location.href='paid_signup_form1.php';
</script>";

}


?>
