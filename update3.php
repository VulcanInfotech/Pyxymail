<?php
$id=$_POST['id'];
 $name=$_POST['editable'];
 $email=$_POST['editable1'];
 $email_list=$_POST['editable2'];
include("connect.php");

 if($name==true || $email==true)
 {
 mysqli_query($conn,"UPDATE audience set Name='$name',Email='$email' where id='$id'");

 }
 else
 {
  mysqli_query($conn,"UPDATE audience set Email='$email_list' where id='$id'");

 
 }
 
 echo "<script>

window.location.href='audience1.php';
</script>";

 
 ?>