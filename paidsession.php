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

<li style="margin-top:10px;"><a href="account.php"  style="font-family: Helvetica Neue,Arial,Helvetica,sans-serif;font-size: 12px;font-weight: bold;line-height: 1.75;letter-spacing: 0.04em;color: #3a3a3a; text-align: center;height: 62px;line-height: 62px;padding: 0 28px;"> &nbsp;&nbsp;&nbsp;&nbsp;<b>Myaccount</b></a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li style="margin-top:10px;"><a href="logout.php"> <b  style="font-family: Helvetica Neue,Arial,Helvetica,sans-serif;font-size: 12px;font-weight: bold;line-height: 1.75;letter-spacing: 0.04em;color: #3a3a3a; text-align: center;height: 62px;line-height: 62px;padding: 0 28px;"><?php include 'session1.php';  echo $paid_user;  echo $login_session;?></b>
 <i class="fa fa-sign-out fa-1x"></i></a></li>
        
      </ul>
    </div>
  </div>
</nav>
		<!-- end navigation -->
		<div class="main" style="background:#485b6e; margin-top:-20px;">
			<div class="col-md-3"></div>
			<div class="main-bdy col-md-6 " style="margin-top:60px;">
				<h3 style="text-align:center; margin-top:-30px;"><b>Your Plan Details</b></h3><br><br>

				 <form action="payment.php" method="POST" autocomplete="on">
                                        
                                        
 <?php
				include 'config.php';

$b=$_GET['idno'];
$a=$_GET['numcontact'];
$c=$_GET['idnos'];
if(isset($b))
{
$sql=mysql_query("select * from pricingdetail where id=$b");
			while($row=mysql_fetch_assoc($sql))
			{
			$contactno=$row['contactno'];
			$contactprice=$row['contactprice'];
			}

}
elseif(isset($c))
{
$sql1=mysql_query("select * from pricingdetail where id=$c");
			while($row1=mysql_fetch_assoc($sql1))
			{
			$contactno=$row1['contactno'];
			$contactprice=$row1['contactprice'];
			}
}
 elseif(isset($a))
{                           
                            
			$sql2=mysql_query("select * from pricingdetail where id=$a");
			while($row2=mysql_fetch_assoc($sql2))
			{
			$contactno=$row2['contactno'];
			$contactprice=$row2['contactprice'];
			}

 }                       

			?>
<label ><b>Your Email Id:</b>&nbsp;&nbsp;<?php include 'session1.php'; echo $paid_session;?></label><br><br>
<label ><b>Your Plan:</b>&nbsp;&nbsp;<?php echo $contactno;?><b>Contacts</b></label><br><br>
<label ><b>Price:</b> &nbsp;&nbsp;<b>$</b><?php echo $contactprice;?></label><br><br>
<input type="hidden" name="email" value="<?php include 'session1.php'; echo $paid_session;?>" >
<input type="hidden" name="nocontact" value="<?php echo $contactno;?>" >
<input type="hidden" name="pricecontact" value="<?php echo $contactprice;?>" >

<div id="error"> </div>
                                


                                        <input type="submit" class=" btn btn-primary " id="submit" value="proceed for payment" />
                                        
                                    </form>
 <br><br>

                                  <p ><b>* Please don't Refresh Page..</b> <a href="pricing_signups.php" style="float:right; ">Go Back</a></p>

                            </div> <!-- /.contact-form-inner -->

                                <div id="message"></div>


				<div class="clear"> </div>
			
			
		</div>
</div>
		
		<!-- Footer Starts Here -->
	<div class="footer" id="footer"  >
		<div class="container" style="padding-right:0;margin-right:0;margin-left:auto;">
			<!--<a href="index.html"><img src="images/logo.png" /></a>-->
			
				<div class="col-md-4 footer-row-column">
                                      <ul class="social" style="padding:0px;">
                                               
						<li style="margin-top:25px;"><a href="about_new1.php"  style="color:white;">About</a></li>
						<li><a href="contactus2.php" style="color:white;">Contact Us</a></li>
						
					</ul>
						
						

				 </div>
				
				<div class="col-md-4 footer-row-column">
					 <p  style="margin-top:25px;" class="copyright" >2015 &copy; <a href="">PyxyMail</a></p>
				</div>
				<div class="col-md-4 footer-row-column">
					<ul class="social" style="padding:0px;">
                                               <!--div class="text1">
                                                <P style="color:#3bc492"><B>FOLLOWS :<B></p>
                                                 </div-->
						<li style="margin-top:25px;"><i class="fa fa-facebook-square fa-2x" style="color:white;"></i></li>
						<li style="margin-top:25px;" ><i class="fa fa-twitter-square fa-2x" style="color:white;"></i></li>
						<li style="margin-top:25px;" ><i class="fa fa-google-plus-square fa-2x" style="color:white;"></i></li>
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