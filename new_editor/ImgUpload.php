<?php

//session_start();// Starting Session
include 'connect.php';

//include 'session1.php';
// Check connection

// Report all errors except E_NOTICE
error_reporting(0); 
//$parentemail=$user_check;

  /*if(isset($login_session))
    { 
    $parentemail=$user_check;
    }

elseif(isset($paid_session))
    { 
    $parentemail=$user_check1;
    }*/


  // if (isset($_POST['action']))
    if(isset($_FILES["filep"]["type"]))
        {
		$folder = "uploads/";
		
              
             for($i=0; $i<count($_FILES["filep"]["name"]);$i++ )
             {  
                $allowed =  array('gif','png' ,'jpg','jpeg','JPG','GIF','PNG','JPEG');
                $ext = pathinfo($_FILES["filep"]["name"][$i], PATHINFO_EXTENSION);
                if(!in_array($ext,$allowed) ) {
                    echo "<script> alert('Please select jpg(jpeg), png or gif'); 
					
					
					</script>";
                }
               else
               { 
               
                       
                       
                        if(move_uploaded_file($_FILES["filep"]["tmp_name"][$i] , "$folder".$_FILES["filep"]["name"][$i])) 
                        {
                        $img_name=$_FILES["filep"]["name"][$i];
        
                               //$query_upload="INSERT into pic VALUES('$file','".$img_name."','".$parentemail."')";
							   $query_upload="INSERT into pic VALUES('$file','".$img_name."','sumitvilankar619@gmail.com')";
                                mysqli_query($conn,$query_upload) or die("error in $query_upload == ----> ".mysqli_error()); 
                                echo "<script> alert('Image successfully uploaded');
									window.location.href='index.php';
								</script>";
                                
                        }
                             
                        else
                        {
        
                                //exit("Error While uploading image on the server");
                                 die("error in $query_upload == ----> ".mysqli_error()); 
                        } 
              }
              
             }      
     
        }     
			
			 /* echo "<ul id='flexiselDemo2'>";	
                                        echo "<li><img src='images/up1.jpg' class='img-responsive'  height='100' width='100'></li>";
                                        echo "<li><img src='images/up2.JPG' class='img-responsive'  height='100' width='100'></li>";
                                        echo "<li><img src='images/up3.jpg' class='img-responsive'  height='100' width='100'></li>";
                                        echo "<li><img src='images/up4.jpg' class='img-responsive'  height='100' width='100'></li>";
                                        echo "<li><img src='images/up5.jpg' class='img-responsive'  height='100' width='100'></li>";
                        
				$sql = "SELECT img_name FROM Pic where parentemail='sumitvilankar@gmail.com' ";  
				$query=mysqli_query($conn,$sql);
				while($row=mysqli_fetch_array($query))
				{
					
					$image=$row['img_name'];
					echo "<br>";

					echo "<li><img src=uploads/".$image." class='img-responsive' height=100 width=100></li>";
                                        echo "<a href=delete_img.php?del=".$image."><B>X</B></a>";
				}
                                
			echo "</ul>";*/
                        
                        
        





            
?> 
<html>
<head>
 <style>

  B{
  cursor: auto;
  }

 </style>
</head>
<!--<body>
<form action=" " method="post" enctype="multipart/form-data">
<table border="0" cellspacing="0" align=center cellpadding="0" bordercolor="#cccccc">
		<tr>
			<td colspan=2 style="padding:20px 0px 20px 0px;" >
                        
				<input type="file" id="name"   name="filep[]" size=45 style="width: 100%" multiple>
                       
			</td>
		</tr>
		<tr>
			<td>
                        <p align=center style="padding-top: 10px;"></p>
                               <label class="error" for="phone" id="name_error" style="color:red;left:30px;position: relative;top: -17px;"><i class="fa fa-exclamation-circle"></i>Please select image first.</label>
				<input type="submit" id="upload_img" name="action" value="Upload Image" class="btn btn-success" style="  width: 100%;" required>
			</td>
			
		</tr>
</table>
</form>
<script>
  $(function() {
    $('.error').hide();
    $("#upload_img").click(function() {
      // validate and process form here
      
      $('.error').hide();
  	  var name = $("input#name").val();
  		if (name == "") {
        $("label#name_error").show();
        $("input#name").focus();
        return false;
      }
      })
    });
</script>
</body>-->
</html>
