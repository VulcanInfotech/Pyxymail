<?php
include 'connect.php';

include 'session1.php';


if(isset($_POST['chkbox1']))
{

$list=implode(",",$_POST['chkbox1']);
if(isset($login_session))
{
 
 mysqli_query($conn,"DELETE FROM list WHERE id IN ($list)");
}
elseif(isset($paid_session))
{
 
 mysqli_query($conn,"DELETE FROM list WHERE id IN ($list)");
}
 
echo "<script>

window.location.href='dash1.php';
</script>";

}
else
{

echo "<script>
alert('Please select list to delete');
window.location.href='dash1.php';
</script>";
}


?>