<?php
include 'connect.php';
include 'session1.php';
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
<link href="css/style1.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="js/jquery.js"></script>
                <script type="text/javascript" src="js/login.js"></script>
     <link href="css/main.css" rel="stylesheet">
    <script src="js/jquery.min.js"></script>
    <script src="js/smoothscroll.js"></script>
             
<link rel="shortcut icon" type="image/x-icon" href="favicon (12).ico" />
    <link rel="icon" type="image/x-icon" href="favicon (12).ico" />
	</head>
	<body style="background-color:#f8f8f8;">
		
		<!-- end preloader -->
		<!-- start navigation -->
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

<li style="margin-top:10px;"><a href="account.php"  style="font-family: Helvetica Neue,Arial,Helvetica,sans-serif;font-size: 12px;font-weight: bold;line-height: 1.75;letter-spacing: 0.04em;color: #3a3a3a; text-align: center;height: 62px;line-height: 62px;padding: 10px 28px;"> &nbsp;&nbsp;&nbsp;&nbsp;<b>My Account</b></a></li>
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
	



<div class="container" style="margin-top:95px;font-family: Arial,Helvetica,Verdana,sans-serif;">
<div class="panel panel-default">
<div class="panel-body">


<!-- Page Content -->
    <div class="container">

        <!-- Project One -->
        <div class="row">
            <div class="col-md-2">
                <a href="#">
                    <img class="img-responsive" src="images/Dash_promo.png" height="50%" width="50%" alt="Create Promotions">
                </a>
            </div>
            
            <div class="col-md-7">
                    <b>Create Promotions</b><br>
                <p>Create exiciting and innovative promotions just on a single click. Experience our idea and enjoy your promotions.</p>
            </div>
            <div class="col-md-3">
                <a href="#">
                    <a class="btn btn-default" href="Promotion.php">Promotion <!--span class="glyphicon glyphicon-chevron-right"></span--></a>
                </a>
            </div>
        </div>
        <!-- /.row -->

       
    </div>
    <!-- /.container -->


<hr>




     <!-- Page Content -->
    <div class="container">

        <!-- Project One -->
        <div class="row">
            <div class="col-md-2">
                <a href="#">
                    <img class="img-responsive" src="images/Dash_campaign.png" height="50%" width="50%" alt="Create & Send Campaign">
                </a>
            </div>
            
            <div class="col-md-7">
                <b style="font-weight:bold;">Create & Send Campaign</b><br>
                <p>Edit your promotions and and let them travel across the world.</p>
            </div>
            <div class="col-md-3">
                <a href="#">
                    <a class="btn btn-default" href="campaign_dash.php">Campaign<!--span class="glyphicon glyphicon-chevron-right"></span--></a>
                </a>
            </div>
        </div>
        <!-- /.row -->

       
    </div>
    <!-- /.container -->

  
<hr>



<!-- Page Content -->
    <div class="container">

        <!-- Project One -->
        <div class="row">
            <div class="col-md-2">
                <a href="#">
                    <img class="img-responsive" src="images/Dash_audience.png" height="50%" width="50%" alt="Create Audience">
                </a>
            </div>
           
            <div class="col-md-7">
                <b style="font-weight:bold;">Create Audience</b><br>
                <p>Create your own audience here.</p>
            </div>
            <div class="col-md-3">
                <a href="#">
                    <a class="btn btn-default" href="audience1.php">Audience <!--span class="glyphicon glyphicon-chevron-right"></span--></a>
                </a>
            </div>
        </div>
        <!-- /.row -->

       
    </div>
    <!-- /.container -->

<hr>



  

<!-- Page Content -->
    <div class="container">

        <!-- Project One -->
        <div class="row">
            <div class="col-md-2">
                <a href="#">
                    <img class="img-responsive" src="images/Dash_pricing.png" height="50%" width="50%"  alt="Pricing Plans">
                </a>
            </div>
           
            <div class="col-md-7">
                <b style="font-weight:bold;">Pricing</b><br>
                <p>Purchase your pricing plans here.</p>
            </div>
            <div class="col-md-3">
                <a href="#">
                    <a class="btn btn-default" href="pricing_signups.php">&nbsp;&nbsp;&nbsp;&nbsp;Plans&nbsp;&nbsp;&nbsp;&nbsp;<!--span class="glyphicon glyphicon-chevron-right"></span--></a>
                </a>
            </div>
        </div>
        <!-- /.row -->

       
    </div>
    <!-- /.container -->

</div></div>
  </div>

			<!-- Footer Starts Here -->
	<div class="footer" id="footer"  >
		<div class="container" style="padding-right:0;margin-right:0;margin-left:auto;">
			<!--<a href="index.html"><img src="images/logo.png" /></a>-->
			
				<div class="col-md-4 footer-row-column">
                                      <ul class="social" style="padding:0px;">
                                               
						<li style="margin-top:25px;"><a href="about_new1.php"  >About</a></li>
						<li><a href="contactus2.php" >Contact Us</a></li>
						
					</ul>
						
						

				 </div>
				
				<div class="col-md-4 footer-row-column">
					 <p  style="margin-top:25px;" class="copyright" >2015 &copy; <a href="#">PyxyMail</a></p>
				</div>
				<div class="col-md-4 footer-row-column">
					<ul class="social" style="padding:0px;">
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
		
	
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/wow.min.js"></script>
		<script src="js/jquery.singlePageNav.min.js"></script>
		<script src="js/custom.js"></script>
	</body>
</html>