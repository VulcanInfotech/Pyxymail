<?php
error_reporting(0);
include 'session1.php'; 
$user=$paid_session;
if(isset($_POST['del']))
{
$name = $_POST['del'];
$ext = $_POST['ext'];
if($_POST['banner'] != '0')
{
	unlink("uploads/".$user."/banner/".$name.".".$ext);
        echo "deleted";
}
else
{
        unlink("uploads/".$user."/".$name.".".$ext);
        echo "deleted";
}
}
?>