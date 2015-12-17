<?php
include 'connect.php';
include 'session1.php';
@session_start();

 $lname=$_SESSION['lname'];
 $t1[]=$_POST['ToLB'];

if(isset($paid_session))
{
$userlog=$user_check1;
}
else
{
$userlog=$user_check;
}

	if ($t1){
	 foreach ($t1 as $t)
	 {
		  "<center><div class='list' style='color:red;' >".$t."</div><br></center>"; 
		
		 }


		 
	}
         $t=@implode("|",$t);
       mysqli_query($conn,"UPDATE list set Members='$t' where lname='$lname' and Email='$userlog'");
       
/*echo "<script>

window.location.href='dashboard2.php';
</script>";
*/
header("location:audience1.php");


?>