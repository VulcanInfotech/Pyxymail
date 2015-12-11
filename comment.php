<?php
include 'connect.php';
include 'session.php';
if(isset($_POST['submit']))
{
	$name=$_POST['Name'];
	$email=$_POST['Email'];
	$website=$_POST['website'];
         $comment=$_POST['comment'];
         $date=date('y/m/d');
	$insert=mysqli_query($conn,"insert into commenttable values('','$name','$email','$website',' $comment','$date','$login_session')")or die(mysql_error());
	header("Location: help.php");
}
?>