<?php
include "session1.php";
include "connect.php";

$lname=$_POST['lname'];

$query = mysqli_query($conn,"SELECT * FROM list WHERE lname = '". $lname ."' AND Email='$user_check'");

if(mysqli_num_rows($query) > 0)
{
 echo "<script>
alert('Listname Already Exist ');
window.location.href='audience1.php';
</script>";
}

elseif (!ereg("[a-zA-Z]", $lname)) 
{ echo "<script>
alert('please enter alphabets only');
window.location.href='audience1.php';
</script>";
}
else{

if(isset($paid_session))
{

mysqli_query($conn,"INSERT INTO list VALUES ('','$lname','$user_check1','$members')");
}
elseif(isset($login_session))
{
mysqli_query($conn,"INSERT INTO list VALUES ('','$lname','$user_check','$members')");
}

}

echo"<meta http-equiv='refresh' content='0;url=audience1.php'>";
?>

