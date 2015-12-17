<?php
include_once('connect.php');
include "session.php";

if(isset($_GET['del']))
{
$id=$_GET['del'];
$lname=$_GET['lname'];
$sql="delete from list where id='$id'";
$res=mysqli_query($conn,$sql) or die("failed".mysqli_error());
$sql1="delete from audience where User='$user_check' and Listname='$lname'";
$res1=mysqli_query($conn,$sql1) or die("failed".mysqli_error());
echo"<meta http-equiv='refresh' content='0;url=dash.php'>";

}
?>
