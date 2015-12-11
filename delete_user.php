<?php
session_start();
?>
<?php
$servername = "fdb3.biz.nf";
$username = "1832235_crazy";
$password="priyanka123";
$dbname = "1832235_crazy";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn)
 {
    die("Connection failed: " . mysqli_connect_error());
}
			
	if(isset($_GET['del']) ){
		
		$id= $_GET['del'];
		$sql="delete from AddUser where email='$id'";
		$res=mysqli_query($conn ,$sql) or die ("Failed".mysql_error());
		echo "<meta http-equiv='refresh' content='0;url=adduser.php'>"; 
		echo "<script>
		  alert('User  Deleted Successfully');
		  </script>";
	}
?>