<?php
error_reporting(E_ERROR);
$id=$_POST['id'];
 $lname=$_POST['editable'];
include("connect.php");

if (!ereg("[a-zA-Z]", $lname)) { echo "<script>
alert('please enter only alphbates ');
window.location.href='dash1.php';
</script>";
}
 elseif($lname==true)
 {
 mysqli_query($conn,"UPDATE list set lname='$lname' where id='$id'");

 }
 

 echo "<script>

window.location.href='dash1.php';
</script>";

 
 ?>