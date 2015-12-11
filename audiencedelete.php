<?php
include 'connect.php';
include 'session1.php';
if(isset($_GET['del']))
{
$id=$_GET['del'];
if(isset($paid_session))
{

$sql="delete from audience where id='$id'";
}

elseif(isset($login_session))
{

$sql="delete from audience where id='$id'";
}
$res=mysqli_query($conn,$sql) or die("failed".mysqli_error());
echo"<meta http-equiv='refresh' content='0;url=audience1.php'>";
}
?>
