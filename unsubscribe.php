<?php
include 'connect.php';
$from1=$_GET['from']; 
$id=$_GET['id']; 

?>

<!DOCTYPE html>
<html lang="en">
	<head>
    	
		<meta charset="utf-8">
		<title>PyxyMail</title>
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="">
		<meta name="description" content="">
<link href="css/bootstrap1.css" rel="stylesheet">

    <!-- Custom styles for this template -->
   
    
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="css/templatemo-style.css">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

<link href="css1/style.css" rel="stylesheet" type="text/css" media="all" />
     <link href="css/main.css" rel="stylesheet">
    <script src="js/jquery.min.js"></script>
    <script src="js/smoothscroll.js"></script>
		
<link href="css/contact.css" rel="stylesheet" type="text/css" media="all" />
<link rel="shortcut icon" type="image/x-icon" href="favicon (12).ico" />
    <link rel="icon" type="image/x-icon" href="favicon (12).ico" />

<script>

 function validateEmail(emailField){
        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

        if (reg.test(emailField.value) == false) 
        {
document.getElementById('error').innerHTML="<span style='color:red; font-weight:bold; font-size:14;'>Invalid Email-Id</span>";


            emailField.value="";
emailField.focus();
            return false;
        }

        return true;

}
</script>
	</head>

	<body>
		<!-- start preloader -->
		<nav class="navbar navbar-inverse navbar-fixed-top" >
  <div class="container-fluid">
    <div class="navbar-header" style="border-radius:none;">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
<a href="dashboard.php" class="navbar-brand"><img src="images/pyxymail31.png"></a>
     
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav" style="margin-left:20px;">
        <li  style="margin-top:10px;" ><a href="dashboard.php"  style="font-family: Helvetica Neue,Arial,Helvetica,sans-serif;font-size: 12px;font-weight: bold;line-height: 1.75;letter-spacing: 0.04em;color: #3a3a3a; text-align: center;height: 62px;line-height: 62px;padding: 0 28px;"><b>Dashbord</b></a></li>
       
        <li style="margin-top:10px;"><a href="audience1.php"  style="font-family: Helvetica Neue,Arial,Helvetica,sans-serif;font-size: 12px;font-weight: bold;line-height: 1.75;letter-spacing: 0.04em;color: #3a3a3a; text-align: center;height: 62px;line-height: 62px;padding: 0 28px;"> <b>Audience</b></a></li>

        <li style="margin-top:10px;"><a href="campaign_dash.php"  style="font-family: Helvetica Neue,Arial,Helvetica,sans-serif;font-size: 12px;font-weight: bold;line-height: 1.75;letter-spacing: 0.04em;color: #3a3a3a; text-align: center;height: 62px;line-height: 62px;padding: 0 28px;"> <b>Campaign</b></a></li>
<?php
include 'session1.php';
if(isset($paid_session))
{
         echo "                  <li style='margin-top:10px;'><a href='pricing_signups.php' style='font-family: Helvetica Neue,Arial,Helvetica,sans-serif;font-size: 12px;font-weight: bold;line-height: 1.75;letter-spacing: 0.04em;color: #3a3a3a; text-align: center;height: 62px;line-height: 62px;padding: 0 28px;'><b>Pricing</b></a>   </li>";
}
?>
<?php
include 'session1.php';
if(isset($login_session))
{
         echo "                  <li style='margin-top:10px;'><a href='pricing_signups.php'  style='font-family: Helvetica Neue,Arial,Helvetica,sans-serif;font-size: 12px;font-weight: bold;line-height: 1.75;letter-spacing: 0.04em;color: #3a3a3a; text-align: center;height: 62px;line-height: 62px;padding: 0 28px;'><b>Pricing Plans</b></a>   </li>";
}
?> 

<li style="margin-top:10px;"><a href="account.php"  style="font-family: Helvetica Neue,Arial,Helvetica,sans-serif;font-size: 12px;font-weight: bold;line-height: 1.75;letter-spacing: 0.04em;color: #3a3a3a; text-align: center;height: 62px;line-height: 62px;padding: 0 28px;"> &nbsp;&nbsp;&nbsp;&nbsp;<b>My Account</b></a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
         <li style="margin-top:10px;"><center><b  style="font-family: Helvetica Neue,Arial,Helvetica,sans-serif;font-size: 12px;font-weight: bold;line-height: 1.75;letter-spacing: 0.04em;color: #3a3a3a; text-align: center;height: 62px;line-height: 62px;"><?php include 'session1.php';  echo $paid_user;  echo $login_session;?>,&nbsp;
<a href="logout.php" style="color:green;">Logout</a></b>

 <!--i class="fa fa-sign-out fa-1x"></i--></center></li>
        <li>&nbsp;&nbsp;&nbsp;&nbsp;</li>
        
      </ul>
    </div>
  </div>
</nav>
		<!-- end navigation -->



		<div class="main" style="background:#485b6e; margin-top:30px;" >
			<div class="col-md-4"></div>
			<div class="main-bdy col-md-4 " style="margin-top:80px;">
				<h4 class="contact-title" style="text-align:center;margin-top:-20px;"><b style="font-family: Arial, sans-serif">For Unsubscribe Please Enter Your Email Id</b></h4>
<br><br>

             
                               
                                   <form action="unsubscribe.php" method="POST">
                                        
                                        <p>
                                            <label for="email">Email Address:</label>&nbsp;&nbsp;&nbsp;
                                           <input type="email" name="email" id="email" onblur="validateEmail(this);" />
                                           <input type="hidden" name="useremail" id="useremail" value="<?php echo $from1; ?>" />
                                            <input type="hidden" name="id" id="id" value="<?php echo $id; ?>" />

                                        </p>
                                        
<div id="error">  </div>
                                        
                                       <br> <input type="submit" class="btn btn-primary" name="submit2" value="Unsubscribe me">
                                    </form>
                   
                            </div> <!-- /.contact-form-inner -->

                                <div id="message"></div>


				<div class="clear"> </div><br><br><br><br>
			
		</div>
</div>
<?php






include 'connect.php';



 
if(isset($_POST['submit2']))
{


$txtemail=$_POST['email'];
$useremail=$_POST['useremail'];
//$protitle=$_POST['id'];
$id=$_POST['id'];
$sql2=mysqli_query($conn,"SELECT * FROM audience WHERE Email='$txtemail' AND User='$useremail'");
if(mysqli_num_rows($sql2)>0)
{
$row2=mysqli_fetch_assoc($sql2);
$block_email=$row2['Email'];
$user_email=$row2['User'];



mysqli_query($conn,"INSERT INTO unsubscribe(email,User,promo_id)VALUES('$block_email','$user_email','$id')");


mysqli_query($conn,"delete from audience where  Email='$txtemail' and User='$useremail'");

echo "<script>
                 alert('You are Successfully Unsubscribe');
               
                  window.close();
                </script>";
}
else
{
echo "<script>
                 alert('Email-Id not Found');
               
                  window.location.href='unsubscribe.php';
                </script>";
}
}
?>
		
		<!-- Footer Starts Here -->
	<div class="footer" id="footer"  >
		<div class="container" >
			<!--<a href="index.html"><img src="images/logo.png" /></a>-->
			
				<div class="col-md-4 footer-row-column">
                                      <ul class="social" style="padding-left:50px;"  >
                                               
						<li style="margin-top:25px;"><a href="about_new1.php"  >About</a></li>
						<li><a href="contactus2.php" >Contact Us</a></li>
						
					</ul>
						
						

				 </div>
				
				<div class="col-md-4 footer-row-column">
					 <p  style="margin-top:25px;padding-left:50px;" class="copyright" >2015 &copy; <a href="#">PyxyMail</a></p>
				</div>
				<div class="col-md-4 footer-row-column">
					<ul class="social" style="padding-left:50px;" >
                                               <!--div class="text1">
                                                <P style="color:#3bc492"><B>FOLLOWS :<B></p>
                                                 </div-->
						<li style="margin-top:25px;"><a href="#"><i class="fa fa-facebook-square fa-2x" ></i></a></li>
						<li style="margin-top:25px;" ><a href="#"><i class="fa fa-twitter-square fa-2x"></i></a></li>
						<li style="margin-top:25px;" ><a href="#"><i class="fa fa-google-plus-square fa-2x" ></i></a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
			
                                           
		</div>
	</div>
	<!-- Footer Ends Here -->
		

        
		
		 <script src="js/bootstrap.js"></script>
	<script>
	$('.carousel').carousel({
	  interval: 3500
	})
	</script>
	</body>
</html>