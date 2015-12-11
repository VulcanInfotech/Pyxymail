<?php
include 'connect.php';
if(isset($_GET['del']))
{
$id=$_GET['del'];
$sql="delete from commenttable where id='$id'";
$res=mysqli_query($conn,$sql) or die("failed".mysqli_error($conn));
echo"<meta http-equiv='refresh' content='0;url=help.php'>";
}
?>
