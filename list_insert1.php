<?php
include "session1.php";
include "connect.php";

$lname=$_POST['lname'];
if(isset($paid_session))
{

$query = mysqli_query($conn,"SELECT * FROM list WHERE lname = '". $lname ."' AND Email='$user_check1'");
}
elseif(isset($login_session))
{

$query = mysqli_query($conn,"SELECT * FROM list WHERE lname = '". $lname ."' AND Email='$user_check'");
}


if(empty($lname))
{

echo "listname cannot be empty";


}
elseif(!ctype_alpha(str_replace(' ', '',$lname))) {
                        
              echo "Enter character only ";

}
elseif(mysqli_num_rows($query) > 0)
{

echo "Listname Already Exist '$lname' ";

}

else{
if(isset($paid_session))
{
mysqli_query($conn,"INSERT INTO list VALUES ('','$lname','$user_check1','')");
}
elseif(isset($login_session))
{
mysqli_query($conn,"INSERT INTO list VALUES ('','$lname','$user_check','')");
}
echo "List '$lname' added successfully";
}


?>

