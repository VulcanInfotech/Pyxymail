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

<script>
function showPrice(str) {
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  } 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","getprice.php?q="+str,true);
  xmlhttp.send();
}
</script>
       
    <style>
    

 

/*--//content-middle-top---*/
/*---- pricing -----*/
.pricing-table-grid ul li {
	list-style: none;
	text-align: center;
	border-bottom: 1px solid #909090;
font-size:16px;font-family: 'FranchiseRegular','Arial Narrow',Arial,sans-serif;color:#3f5348;
}
.plans_head{
	display: block;
	padding:1em;
	background:#02557e;
}
.plans_head h3{
	display: block;
	color:#fff;
	font-size: 1.3em;
}
h4.m_4{
	font-size: 2.8em;
	color: #FFF;
	padding: 1em 0;
}
small.m_2{
	font-size:30px;
	color: #FFF;
	vertical-align: text-top;
}
small.m_3{
	font-size:22px;
	color: #FFF;

}
.plans_head p{
	font-size:0.9em;
	color:#fff;
	line-height:1.5em;
}
.pricing-table-grid ul span{
	padding: 24px 0;
	display: block;
	color: #fff;
	font-size: 1em;
}
.pricing-table-grid{
	transition: 0.5s all;
	-webkit-transition: 0.5s all;
	-moz-transition: 0.5s all;
	-o-transition: 0.5s all;
	-ms-transition: 0.5s all;
	background: #025a85;
	text-align: center;
//margin-top:-25px;
}
.pricing-table-grid:hover{
	transform:scale(1.05);
	-webkit-transform:scale(1.05);
	-moz-transform:scale(1.05);
	-o-transform:scale(1.05);
	-ms-transform:scale(1.05);
}

.button {
	text-align: center;
}
a.button{
	text-transform: uppercase;
	text-decoration: none;
	color: #fff;	
	display: block;
	font-size: 1em;	
	outline:none;
	background: #00405f;
	  padding: 1em 0;
}
.pricing-table-grid:hover .button{
	color:#fff;
}

.col-md1 {
  width: 32%;
  float: left;
  margin: 0 2% 0 0;
}
.col-md1:nth-child(3){
	margin: 0;
}
a.button i {
  display: inline-block;
  background: url(../images/img-sprite.png) no-repeat -244px -11px;
  width: 20px;
  height: 20px;
  vertical-align: sub;
  margin: 0 0.7em 0 0em;
}
/*--//pricing--*/
/*--comment--*/
.comment {
  float: left;
  width: 68%;
  margin: 0 2% 0 0;
}
.top-comment-left{
	float: left;
	width: 8%;
}
.top-comment-right{
	float: left;
	width:89%;
	margin-left:2%;
}
.top-comment-right h5{
	color:#fff;
	font-size:1.2em;
}
.top-comment-right span{
	color:#fff;
	font-size:1em;
}
.comments-top-top {
	margin:0em 0 1em;
	background-color: #00405f;
	padding: 2.8em;
}
.three{
	float:right;
}
.three a{
	text-decoration: none;
	color:#fff;
	font-size:1em;
}
.three a i {
  display: inline-block;
  background: url(../images/img-sprite.png) no-repeat -441px -11px;
  width: 20px;
  height: 20px;
  vertical-align: sub;
  margin: 0 0.7em 0 0em;
}
.comments {
  padding: 1.5em 0 0;
}



@media(max-width:768px){

.wrap {
  width: 80%;
}

}


@media(max-width:480px){
.wrap {
  width: 95%;
}	
.col-md1 {
  width: 100%;
  margin: 0 9% 0 0;
}

}
}
@media(max-width:320px){

.plans_head h3 {
  font-size: 1em;
}
h4.m_4 {
  font-size: 1.7em;
  padding: 0.5em 0;
}
small.m_3 {
  font-size: 17px;
}
.pricing-table-grid ul span {
  padding: 15px 0;
  font-size: 0.87em;
}
.plans_head {
  padding: 0.5em;
}

}


#appimg
{
background-image: url("images/prc.png");
background-size:cover;
 // background: rgba(0, 0, 0, 0.76);
}
.guess_what{
clear:left;
font-size:16px;
font-weight:normal;
font-family:initial ;
 padding-top: 28px;

.over:hover
{
color:#2ecc71;
}
}
</style>
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
       <li style="margin-top:20px;"><a href="paid_signup_form1.php" class="btn btn-danger" role="button"style="font-family: Helvetica Neue,Arial,Helvetica,sans-serif;font-size: 12px;color:white;padding-top:7px; padding-bottom:7px; font-weight: bold;line-height: 1.75;letter-spacing: 0.04em;">Sign Up</a></li>

        <li style="margin-top:10px;"><a href="paid_login_form1.php" style="font-family: Helvetica Neue,Arial,Helvetica,sans-serif;font-size: 12px;position: relative;font-weight: bold;line-height: 1.75;letter-spacing: 0.04em;color: #3a3a3a;padding: 20px 18px;display: inline-block; vertical-align: middle; -webkit-tap-highlight-color: transparent; box-sizing: border-box;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b> Log In</b></a></li>
      </ul>
    </div>
  </div>
</nav>
		<!-- end navigation -->
		<!-- start home -->
		
		<section id="home" style="background:#efefef; margin-top:60px;" >
		<div id="headerwrap">
	    <div class="container">
	    	<div class="wrap"  >
 	<div class="plans">
        <div class="col-md1" >
			 <div class="pricing-table-grid">
				<div class="plans_head" style="background: rgba(61, 61, 61, 0.81);">
						<h3 style="font-family: 'FranchiseRegular','Arial Narrow',Arial,sans-serif;color:#2ecc71;">Basic</h3>
								<h6 style="color:white;">Individual</h6>
				</div>
				<ul style=" background-color:white ">
					<li> <h4  style="color: rgba(61, 61, 61, 0.81);font-family: 'FranchiseRegular','Arial Narrow',Arial,sans-serif;"class="m_4">$10</h4></li>
					<li><span style="color:black  ;">500 contacts</span></li>
					<li><span style="color:black  ;">Basic Features</span></li>
					<li style="border-bottom: none;"><span style="color:black  ; "> ∞ emails</span></li>
				</ul>
					<!---->
				 <!--a class=" button" style="background: rgba(61, 61, 61, 0.81);" href="#"><i> </i>Add to cart</a-->			   
		         </div>
		     </div>
             <div class="col-md1" >
			 <div class="pricing-table-grid">
				<div class="plans_head" style="background: rgba(61, 61, 61, 0.81);">
						<h3 style="font-family: 'FranchiseRegular','Arial Narrow',Arial,sans-serif;color:#2ecc71;">PRO </h3>
<h6 style="color:white;"> Best Value</h6>
				</div>
				<ul style="background: white;">
					<li> <h4 class="m_4"  style="color: rgba(61, 61, 61, 0.81);font-family: 'FranchiseRegular','Arial Narrow',Arial,sans-serif;">$30</h4></li>
					<li><span style="color: black;">10,000 and above</span></li>
					<li><span style="color: black;"> Advance features</span></li>
					<li style="border-bottom: none;"><span style="color: black;"> ∞ emails</span></li>
				</ul>
					<!---->
				 <!--a class=" button" href="#" style="background: rgba(61, 61, 61, 0.81);"><i> </i>Add to cart</a-->			   
		         </div>
		     </div>
		 <div class="col-md1" >
			 <div class="pricing-table-grid">
				<div class="plans_head"  style="background: rgba(61, 61, 61, 0.81);">
						<h3 style="font-family: 'FranchiseRegular','Arial Narrow',Arial,sans-serif;color:#2ecc71;">Customize </h3>
<h6 style="color:white;">Great for small business</h6>
				</div>
				<ul style="background: white;">

					<li> <span ><form action="paidsession.php" method="GET" style="  ">
<h5 style="margin-left:70px; margin-top:-15px;color:black; ">Others Plans <select name="numcontact" onchange="showPrice(this.value)" style="box-sizing:content-box; border-radius:5px; height:32px;color:black;">
<option value="2">1,000 contacts</option>
<option value="3">2,000 contacts</option>
<option value="4">3,000 contacts</option>
<option value="5">4,000 contacts</option>
<option value="6">5,000 contacts</option>
<option value="7">6,000 contacts</option>
<option value="8">7,000 contacts</option>
<option value="9">8,000 contacts</option>
<option value="10">9,000 contacts</option>

</select> </h5>  
</form></span></li>
<li><span><div id="txtHint" style="color: black;"><b>The Price For 1000 Contact is $14</b></div></span></li>
					<li><span style="color: black;">Premier support</span></li>
					<!--li><span style="color: black;">More options</span></li-->
					<li><span style="color: black;"> Customize features</span></li>
<li style="border-bottom: none;"><span style="color: black;" > ∞ emails</span></li>
				</ul>
					   
		         </div>
		     </div>
		    <div class="clear"> </div>								
       </div>
 </div>
       
	    </div> <br><br><!--/ .container -->
	</div> <!--/ #headerwrap--> 

       </section>
		
		
		<!-- end home -->
		<!-- start divider -->
		
		<!-- end contact -->

		<!-- start footer -->
		<!--<footer>
			<div class="container">
				<div class="row">
					<p>Copyright © 2084 Your Company Name</p>
				</div>
			</div>
		</footer>-->
		<!-- end footer -->
		
		<!-- Footer Starts Here -->
	<div class="footer" id="footer"  >
		<div class="container" style="padding-right:0;margin-right:0;margin-left:auto;">
			<!--<a href="index.html"><img src="images/logo.png" /></a>-->
			
				<div class="col-md-4 footer-row-column">
                                      <ul class="social" style="padding:0px;">
                                               
						<li style="margin-top:25px;"><a href="about_new.php"  style="color:white;">About</a></li>
						<li><a href="contactus1.php" style="color:white;">Contact Us</a></li>
						
					</ul>
						
						

				 </div>
				
				<div class="col-md-4 footer-row-column">
					 <p  style="margin-top:25px;" class="copyright" >2015 &copy; <a href="http://w3layouts.com/">PyxyMail</a></p>
				</div>
				<div class="col-md-4 footer-row-column">
					<ul class="social" style="padding:0px;">
                                               <!--div class="text1">
                                                <P style="color:#3bc492"><B>FOLLOWS :<B></p>
                                                 </div-->
						<li style="margin-top:25px;"><i class="fa fa-facebook-square fa-2x" style="color:white;"></i></li>
						<li style="margin-top:25px;" ><i class="fa fa-twitter-square fa-2x" style="color:white;"></i></li>
						
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