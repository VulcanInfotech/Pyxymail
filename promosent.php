<?php
include 'connect.php';
include 'session1.php';
?>
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
               
<style>
body {
    background-color:#34495e;
}
.panel-subscribed {
        
	border-color: #ccc;
	-webkit-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
	-moz-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
	box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
}
.panel-subscribed>.panel-heading {
	color: #00415d;
	background-color: #fff;
	border-color: #fff;
	text-align:center;
}
.panel-subscribed>.panel-heading a{
	text-decoration: none;
	color: #666;
	font-weight: bold;
	font-size: 15px;
	-webkit-transition: all 0.1s linear;
	-moz-transition: all 0.1s linear;
	transition: all 0.1s linear;
}
.panel-subscribed>.panel-heading a.active{
	color: #029f5b;
	font-size: 18px;
}
.panel-subscribed>.panel-heading hr{
	margin-top: 10px;
	margin-bottom: 0px;
	clear: both;
	border: 0;
	height: 1px;
	background-image: -webkit-linear-gradient(left,rgba(0, 0, 0, 0),rgba(0, 0, 0, 0.15),rgba(0, 0, 0, 0));
	background-image: -moz-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
	background-image: -ms-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
	background-image: -o-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
}
.panel-subscribed input[type="text"],.panel-subscribed input[type="email"],.panel-subscribed input[type="password"] {
	
	border: 1px solid #ddd;
	font-size: 16px;
	-webkit-transition: all 0.1s linear;
	-moz-transition: all 0.1s linear;
	transition: all 0.1s linear;
}
.panel-subscribed input:hover,
.panel-subscribed input:focus {
	outline:none;
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
	border-color: #ccc;
}
.btn-login {
	background-color: #59B2E0;
	outline: none;
	color: #fff;
	font-size: 14px;
	height: auto;
	font-weight: normal;
	
	text-transform: uppercase;
	border-color: #59B2E6;
}
.btn-login:hover,
.btn-login:focus {
	color: #fff;
	background-color: #53A3CD;
	border-color: #53A3CD;
}
.forgot-password {
	text-decoration: underline;
	color: #888;
}
.forgot-password:hover,
.forgot-password:focus {
	text-decoration: underline;
	color: #666;
}

.btn-register {
	background-color: #1CB94E;
	outline: none;
	color: #fff;

	font-size: 14px;
	height: auto;
	font-weight: normal;
	text-transform: uppercase;
	border-color: #1CB94A;
}
.btn-register:hover,
.btn-register:focus {
	color: #fff;
	background-color: #1CA347;
	border-color: #1CA347;
}

</style>
<script>
$(function() {

    $('#subscribed-form-link').click(function(e) {
		$("#subscribed-form").delay(100).fadeIn(100);
 		$("#unsubscribed-form").fadeOut(100);
		$('#unsubscribed-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
	$('#unsubscribed-form-link').click(function(e) {
		$("#unsubscribed-form").delay(100).fadeIn(100);
 		$("#subscribed-form").fadeOut(100);
		$('#subscribed-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});

});

</script>
	</head>
	<body style="overflow-x:hidden;">
		
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
<br><br><br>

<?php
include 'connect.php';
//$promo_title=$_GET['promo_title'];
$id=$_GET['id'];

//$sql3="select Img,promo_title from promotion where id='$promo_id'";
$sql3="select Img,pro_title from promotion where id='$id'";

$query=mysqli_query($conn,$sql3);
$row=mysqli_fetch_assoc($query);
$image=$row['Img'];
$pro_title=$row['pro_title'];

echo $pro_title;
echo "<div class='container-fluid' style='margin-left:10%; margin-top:1%;'>
      <div class='row'>";
    
    echo     "<div class='col-md-5' style='height:90%;background-color:white;overflow-y:scroll;'><br>
            <center><h2>".$pro_title."</h2><hr>
      <div> <img src='".$image."' class='img-responsive' style='height:600px; width:400px;' ></div></center> </div>";

 	
         echo "     <div class='col-md-5' style='height:90%;background-color:#f2f2f2;overflow-y:scroll;'>
		<div class='panel panel-subscribed' style='margin-top:7%;'>
					<div class='panel-heading'>
						<div class='row'>
							<div class='col-xs-6'>
								<a href='#' class='active' id='subscribed-form-link'>SUBSCRIBED USERS</a>
							</div>
							<div class='col-xs-6'>
								<a href='#' id='unsubscribed-form-link'>UNSUBSCRIBED USERS</a>
							</div>
						</div>
						<hr>
					</div>
					<div class='panel-body>
						<div class='row'>
							<div class='col-lg-12'>
								<form id='subscribed-form' action='#' method='post' role='form' style='display: block;'>
								<table class='table table-hover' style='height:auto: width:auto; overflow:scroll;'>
    <thead>
      <tr>
        <th style='text-align:center;'>Email</th>
        <th style='text-align:center;'>Date</th>
       </tr>
    </thead> 
<tbody>";

    $sql2="select email,date from promotion_sent where promo_id='$id' order by date DESC";
                                                                                            $query2=mysqli_query($conn,$sql2);
                                                                                       while(  $row3=mysqli_fetch_assoc($query2))
{

                                                                                                 $sent=$row3['email'];
                                                                                                 $sent_date=$row3['date'];
                                                                                                 

  echo "   
    
      <tr >
        <td >".$sent."</td>
        <td >".$sent_date."</td>
        
      </tr>";
   }   
echo   " </tbody>
  </table>

                                                                
</form>";

echo   "  <form id='unsubscribed-form' action='#' method='post' role='form' style='display: none;'>
                                                                 
<table class='table table-hover' style='height:auto; width:auto; overflow:scroll;'>
    <thead>
      <tr>
        <th style='text-align:center;'>Email</th>
        <th style='text-align:center;'>Date</th>
       </tr>
    </thead> 
<tbody>";


  $sql3="select * from unsubscribe where promo_id='$id' order by date desc";
                                                                                            $query3=mysqli_query($conn,$sql3);
                                                                                       while($row4=mysqli_fetch_assoc($query3))
{

                                                                                                 $sent1=$row4['email'];
                                                                                                 $sent_date1=$row4['date'];
                                                                                                 
  echo "   
    
      <tr>
        <td>".$sent1."</td>
        <td>". $sent_date1."</td>
        
      </tr>";
   }   
echo   " </tbody>
  </table>";
								echo   " </form>
							</div>
						</div>
					</div>
				</div>			
         </div>
      </div>
</div>
    </div>

</div>";

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
		<script src="js/jquery.js"></script>

		
		
		
 
	</body>
</html>