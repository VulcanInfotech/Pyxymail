<html>
<head></head>
<body>
<?php

include 'connect.php';
include 'session.php';
$fname=$_POST['fname'];
$email=$_POST['email'];


$query = mysqli_query($conn,"SELECT * FROM audience WHERE email = '". $email ."' AND User='$user_check'");
if (mysqli_num_rows($query) > 0)

{
  echo "<script>
alert('Email already exist');
window.location.href='dash.php';
</script>";

}

elseif (!ereg("[a-zA-Z]", $fname)) { echo "<script>
alert('please enter alphabets only ');
window.location.href='dash.php';
</script>";
}

else
{

mysqli_query($conn,"INSERT INTO audience VALUES ('','$fname','$email','$lsname','$user_check')") or die ("Could not INSERT VALUES ");
echo "<script>
window.location.href='dash.php';
</script>";
}

?>

</body>
</html>