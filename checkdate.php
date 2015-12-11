<?php
error_reporting(0);
include 'connect1.php';
include 'session1.php';
$query = mysql_query("SELECT `id`,`date` FROM `freesignup` WHERE Email='$user_check'  ");
	while ($row = mysql_fetch_array($query, MYSQL_NUM))
		{
			 $id=$row[0];  
			$days=$row[1];  
		}
list($date,$time)= explode(" ",$days);
list($year,$month,$day)= explode("-",$date);

if ($month == 12)
{
$month_n=1;
$year_n=($year)+1;
$today = date("Y-m-d H:i:s");
list($year_t,$month_t,$day_demo)= explode("-",$today);
list($day_t,$time_t)= explode(" ",$day_demo);
if ($year_n >= $year_t)
{
		if ($month_n <= $month_t)
	{
				if ($day <= $day_t)
			{
$sql1=mysql_query("select * from registered_members where email='$user_check'");
while($row1=mysql_fetch_assoc($sql1))
{
$uname=$row1['name'];
$uemail=$row1['email'];
$upassword=$row1['password'];
}

mysql_query("insert into paidregistered_members(username,useremail,password,no_contact,price_contact) values('$uname','$uemail','$upassword','','')");				
mysql_query("delete from `registered_members` where email='$user_check'");				
 echo "<script>
alert('Sorry..!!! Your Free Subscription is Expired..!Please Choose our Sign Up Plans.');
window.location.href='paid_login_form.php#toregister';
</script>";		
			}
			else
			{
			
 echo "<script>
alert('Your Plan Expired Date Is: $year_n-$month_n-$day ');
window.location.href='dashboard.php';
</script>";

			}
	}
	else
	{
	
	
 echo "<script>
alert('Yur Plan Expired Date Is: $year_n-$month_n-$day ');
window.location.href='dashboard.php';
</script>";
	}

}
}
else
{
$month_n=$month+1;
$year_n=$year;

$today = date("Y-m-d H:i:s");
list($year_t,$month_t,$day_demo)= explode("-",$today);
list($day_t,$time_t)= explode(" ",$day_demo);
if ($year_n <= $year_t)
{
		if ($month_n <= $month_t)
	{
				if ($day <= $day_t)
			{
$sql1=mysql_query("select * from registered_members where email='$user_check'");
while($row1=mysql_fetch_assoc($sql1))
{
$uname=$row1['name'];
$uemail=$row1['email'];
$upassword=$row1['password'];
}

mysql_query("insert into paidregistered_members(username,useremail,password,no_contact,price_contact) values('$uname','$uemail','$upassword','','')");				
mysql_query("delete from `registered_members` where email='$user_check'");	
				
mysql_query("delete from `registered_members` where email='$user_check'  ");					
 echo "<script>
alert('Sorry..!!! Your Free Subscription is Expired..!Please Choose our Sign Up Plans.');
window.location.href='paid_login_form.php#toregister';
</script>";		
			}
			else
			{
			
 echo "<script>

window.location.href='dashboard.php';
</script>";

 

			}
	}
	else
	{
	
	
 echo "<script>

window.location.href='dashboard.php';
</script>";
	}

}
}
mysql_close($connection); // Connection Closed

 
?>