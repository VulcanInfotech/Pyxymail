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
		
<link rel="shortcut icon" type="image/x-icon" href="favicon (12).ico" />
    <link rel="icon" type="image/x-icon" href="favicon (12).ico" />
<link href="css/contact.css" rel="stylesheet" type="text/css" media="all" />

	</head>
	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top" >
  <div class="container-fluid">
    <div class="navbar-header" style="border-radius:none;">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
<a href="index.php" class="navbar-brand"><img src="images/pyxymail31.png"></a>
     
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
       <ul class="nav navbar-nav" style="margin-left:20px;">
        <li  style="margin-top:10px;" ><a href="features.php" style="font-family: Helvetica Neue,Arial,Helvetica,sans-serif;font-size: 12px;font-weight: bold;line-height: 1.75;letter-spacing: 0.04em;color: #3a3a3a; text-align: center;height: 62px;line-height: 62px;padding: 0 28px;"><b>Features</b></a></li>
       
        <li style="margin-top:10px;"><a href="support.php" style="font-family: Helvetica Neue,Arial,Helvetica,sans-serif;font-size: 12px;font-weight: bold;line-height: 1.75;letter-spacing: 0.04em;color: #3a3a3a;
    text-align: center;
    height: 62px;
    line-height: 62px;
    padding: 0 28px;"><b>Support</b></a></li>


        <li style="margin-top:10px;"><a href="pricing_signups2.php" style="font-family: Helvetica Neue,Arial,Helvetica,sans-serif;font-size: 12px;font-weight: bold;line-height: 1.75;letter-spacing: 0.04em;color: #3a3a3a;
    text-align: center;
    height: 62px;
    line-height: 62px;
    padding: 0 28px;"><b>Pricing</b></a></li>


        <li style="margin-top:10px;"><a href="campaign.php" style="font-family: Helvetica Neue,Arial,Helvetica,sans-serif;font-size: 12px;font-weight: bold;line-height: 1.75;letter-spacing: 0.04em;color: #3a3a3a;
    text-align: center;
    height: 62px;
    line-height: 62px;
    padding: 0 28px;"><b>Campaign</b></a></li>

      </ul>

      <ul class="nav navbar-nav navbar-right">
       <li style="margin-top:20px;"><center><a href="paid_signup_form1.php" class="btn btn-danger" role="button"style="font-family: Helvetica Neue,Arial,Helvetica,sans-serif;font-size: 12px;color:white;padding-top:7px; padding-bottom:7px; font-weight: bold;line-height: 1.75;letter-spacing: 0.04em;">Sign Up</a></center></li>

        <li style="margin-top:10px;"><center><a href="paid_login_form1.php" style="font-family: Helvetica Neue,Arial,Helvetica,sans-serif;font-size: 12px;position: relative;font-weight: bold;line-height: 1.75;letter-spacing: 0.04em;color: #3a3a3a;padding: 20px 18px;display: inline-block; vertical-align: middle; -webkit-tap-highlight-color: transparent; box-sizing: border-box;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b> Log In</b></a></center></li>
      </ul>
    </div>
  </div>
</nav>
		<!-- end navigation -->
		<div class="main" style="background:#485b6e; margin-top:60px;">
			<div class="col-md-3"></div>
			<div class="main-bdy col-md-6 panel-body " style="margin-top:-20px;">
				<div class="main-body-left">
					
					<h2 style="font-family: 'FranchiseRegular','Arial Narrow',Arial,sans-serif;color:#3f5348;">Contact Us...</h2>
					<p>Please use the contact form on the right side if you have any questions or requests, concerning our services.

We will respond to your message within 24 hours.</p>
				</div>
				 <div class="main-body-right">
					<form method="POST" action="paid_contactus.php">
						<input name="name" type="text" id="name" placeholder="NAME" required oninput="validateAlpha();">
<span id="error2" style="display:none;color:red;">Wrong name</span>
						<input type="email"  name="email" placeholder="EMAIL ID" id="email"   onblur="validateEmail(this);" required=" ">
<span id="error"> </span>

						<textarea name="txtMessage" value="<?php /*echo $message;*/ ?>" placeholder="MESSAGE" required onkeypress="checkMessage()"></textarea>
<!--button type="button" class="btn btn-primary" >Submit</button-->
						<div class="form-group">
                            <div class="col-md-12 ">
<input type="submit" value="SAVE" class="btn btn-primary "  style="margin-left:10px; margin-top:10px;" name="submit">&nbsp;&nbsp;&nbsp;
<input type="reset" value="RESET" class="btn btn-primary " style="margin-top:7px;">
 

                                
                            </div>
                        </div>
					</form>
				</div>

                                  
                            </div> <!-- /.contact-form-inner -->

                                <div id="message"></div>


				<div class="clear"> </div>
			
			
		</div>
</div>
		
		<!-- Footer Starts Here -->
	<div class="footer" id="footer"  >
		<div class="container" >
			<!--<a href="index.html"><img src="images/logo.png" /></a>-->
			
				<div class="col-md-4 footer-row-column">
                                      <ul class="social" style="padding-left:50px;"  >
                                               
						<li style="margin-top:25px;"><a href="about_new.php"  >About</a></li>
						<li><a href="contactus1.php" >Contact Us</a></li>
						
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