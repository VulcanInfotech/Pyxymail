
<?php 

$editor=$_REQUEST['Editor'];
include "connect.php";

$sql = "INSERT INTO promotion VALUES ('', '','$editor', '','','','','')";
mysqli_query($conn, $sql);
if($sql!=null)
{
echo"
<div class='fadebox'>
    <p class='alert alert-success'>
  <strong>Saved Successfully!</strong> For Preview Click on Campaign
</p>
</div>";
}
else
{ echo"<div class='fadebox'>
	<p>navjyot</p>
</div>";
}

?>