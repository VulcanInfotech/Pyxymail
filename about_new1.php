<!DOCTYPE html>
<html>
<head>
	<title>ABOUT US</title>
	<!--fonts-->


<link href="css/bootstrap1.css" rel="stylesheet">

    <!-- Custom styles for this template -->
   
    
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="css/templatemo-style.css">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

<link href="css1/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style1.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="js/jquery.js"></script>
                <script type="text/javascript" src="js/login.js"></script>
     <link href="css/main.css" rel="stylesheet">
    <script src="js/jquery.min.js"></script>
    <script src="js/smoothscroll.js"></script>

<link href="css/style_about.css" rel="stylesheet" type="text/css" media="all" />		
		
		
		<link rel="shortcut icon" type="image/x-icon" href="favicon (12).ico" />
    <link rel="icon" type="image/x-icon" href="favicon (12).ico" />
		
		
		

		
	
	<!-- start-smooth-scrolling -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
	<!-- start-smooth-scrolling -->

</head>
<body style="color: #484848;
    font-family: Arial,Helvetica,Verdana,sans-serif;">
<!-- start navigation -->

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
<!-- banner -->

<div class="banner" style="margin-top:-20px;" >
	<div class="container">
		<div class="header-grids">
			<div class="container">
				<div class="fixed-header">
					
				</div>
			</div>
		</div>
		<div class="slider">
			<!-- responsiveslides -->
						<script src="js/responsiveslides.min.js"></script>
							<script>
								// You can also use "$(window).load(function() {"
								$(function () {
								 // Slideshow 4
								$("#slider3").responsiveSlides({
									auto: true,
									pager: true,
									nav: true,
									speed: 500,
									namespace: "callbacks",
									before: function () {
								$('.events').append("<li>before event fired.</li>");
								},
								after: function () {
									$('.events').append("<li>after event fired.</li>");
									}
									});
									});
						</script>
					<!-- responsiveslides -->
			<div  id="top" class="callbacks_container">
				<ul class="rslides" id="slider3">
					<li>
						<div class="banner-info">
							<h2>ABOUT US</h2>
							
							<p>A pinch of sass,a dollop of rebellion. 
							pyxy's out to change the way email is marketed. 
							Originally,we didnt set out to create an unusually good email marketing company.
							We had simply set out to create an unusually good email. 
							</p>
							
						</div>
					</li>
					<li>
						<div class="banner-info">
							<h2>ABOUT US</h2>
							 <p>
							We needed something stylish,simple and easy to make,to promote our music company.
							We searched for email services online and found millions-but we didnt like them. 
							The outdated templates, the overall spam feel of the promos, and the general lack of joie de vivre in the process Instead of settling for the status quo,we designed our own email campaigns.
							 </p>						</div>
					</li>
					<li>
						<div class="banner-info">
							<h2>ABOUT US</h2>
							 <p>
										 Soon, people were asking us to design emails for them. We thought: sure. 
										 And PyxyMail was born,so that everyone could create a well-designed, elegant email.
										 Soon,we added robust delivery, easy audience management, tracking and support.

							 </p>						</div>
					</li>
					<li>
						<div class="banner-info">
							<h2>ABOUT US</h2>
							 <p>
										 All handled in that simple, powerful, semi-rebellious way that makes the other,complacent email marketing companies nervous,and you happy.
										 If you need to do some email marketing, on a small or grand scale, we hope you will try our product.
										 We made it with people like you in mind.
							 </p>
						</div>
					</li>
					<!--li>
						<div class="banner-info">
							<h1>AGENCY</h1>
							<h2>FREEBIE PSD DOWNLOAD</h2>
							<div class="border"></div>
							<p>Maecenas suscipit imperdiet nisi ac hendrerit. Nam congue felis ac massa rutrum pulvinar.
							Donec sodales eros sed efficitur mattis. Integer tincidunt, felis a placerat maximus, eros							 
							nulla dapibus dui, at facilisis enim odio at velit. Aenean dictum eleifend mi sit amet luctus. </p>
							
						</div>
					</li-->
				</ul>
			</div>
		</div>
		
		
	</div>		
</div>
<!-- work -->
<div class="flex-slider" style="background-color:white;">
	<div class="container">
			<ul id="flexiselDemo1">			
					<li>
						<div class="opportunity">
							<i class="fa fa-users fa-4x"></i>
							<div class="opportunity-info">
								<h3><span>THE TEAM</span></h3>
								<p> We're always looking for smart, creative people to join our team. Our employees enjoy the stability of a time-tested and successful product, and the excitement of developing new products.</p>
							</div>
						</div>
					</li>
					<li>
						<div class="opportunity">
							<i class="fa fa-user fa-4x"></i>
							<div class="opportunity-info">
								<h3><span>THE PARTNERS</span></h3>
								<p> We partner with companies that serve, educate, and empower our customers.</p>
							</div>
						</div>
					</li>
					<li>
						<div class="opportunity">
							<i class="fa fa-globe fa-4x"></i>
							<div class="opportunity-info">
								<h3><span>THE CULTURE</span></h3>
								<p> We help our team members grow in their current roles and dream about what's next.Our tema members are encouraged to share what they do, and take time off to learn new skills.</p>
							</div>
						</div>
					</li>
					<!--li>
						<div class="opportunity">
							<img src="images/20.png" alt=""/>
							<div class="opportunity-info">
								<h3>future<span>think</span></h3>
								<p> Futurethink.com is the professional website which researches and 
								develops innovation for organizations using a refreshing and simple approach.</p>
							</div>
						</div>
					</li-->
					
			</ul>
            		<script type="text/javascript">
							$(window).load(function() {
								$("#flexiselDemo1").flexisel({
									visibleItems: 3,
									animationSpeed: 1000,
									autoPlay: true,
									autoPlaySpeed: 3000,    		
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: { 
										portrait: { 
											changePoint:480,
											visibleItems: 1
										}, 
										landscape: { 
											changePoint:640,
											visibleItems: 2
										},
										tablet: { 
											changePoint:768,
											visibleItems: 2
										}
									}
								});
								
							});
					</script>
					<script type="text/javascript" src="js/jquery.flexisel.js"></script>
	</div>
</div>

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
		
	<!--script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script-->


		<script src="js/bootstrap.min.js"></script>
		<script src="js/wow.min.js"></script>
		
</body>
</html>