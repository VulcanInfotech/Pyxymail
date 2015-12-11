<?php
 include 'session1.php';
 include 'connect.php';


//error_reporting(0); 
	if(isset($_GET['del']) ){
		
		$id = $_GET['del'];
		
                //$name=mysql_fetch_assoc($conn,"SELECT img_name FROM Pic WHERE img_name='$id'");
                //$name=$name['img_name'];
                $sql= "DELETE from Pic WHERE img_name='$id'";
                 if(!mysqli_query($conn,$sql)){
                        die("Error number:" . mysql_errno() . "");
                 }
		//unlink("uploads/".$row['img_name']);
                //unlink('uploads/'.$name);
               //if($sql){ echo "<script> alert('Image '); </script>";}
                //else{ //echo "not done"; }
		
		//echo "<script> alert('image  Deleted Successfully'); </script>";
                  echo "<meta http-equiv='refresh' content='0;url=dashboard_compose.php'>"; 
	}

?>