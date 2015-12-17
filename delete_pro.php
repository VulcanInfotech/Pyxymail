<?php
include 'session1.php';
include 'connect.php';
// Report all errors except E_NOTICE
//error_reporting(0); 
			
	if(isset($_GET['del']))
{
		
		$id = $_GET['del'];
                //$title=$_GET['title'];
		
                //$name=mysql_fetch_assoc($conn,"SELECT img_name FROM Pic WHERE img_name='$id'");
                //$name=$name['img_name'];
               // $sql= "DELETE from save_promotion WHERE id='$id'";
                   $sql= "DELETE from promotion WHERE id='$id'";
                  
                //$sql2="DELETE from promotion_sent WHERE promo_title='$title'";
                
                 if(!mysqli_query($conn,$sql))
                 {
                        die("Error number:" . mysql_errno() . "");
                 }

                 
		//unlink("upload/".$row['Img']);
                //unlink('uploads/'.$name);
               //if($sql){ echo "<script> alert('Image '); </script>";}
                //else{ //echo "not done"; }
	 header('location:campaign_dash.php');
                 //echo "<meta http-equiv='refresh' content='0;url=campaign_dash.php'>"; 

    /*echo "<script>
alert('$title');
window.location.href='campaign_nav.php';
</script>";*/
}
?>