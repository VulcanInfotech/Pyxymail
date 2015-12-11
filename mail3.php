<?php include 'session1.php';






$message = '<html><body>';
$message .= '<table width="100%"; rules="all" style="border:1px solid black;" cellpadding="10">';
$message .= '<tr><td><b>'.$pro_title.'</b></td></tr>';
$message .= '<tr><td>'.$show_img.'</td></tr>';
$message .= '<tr><td colspan=2 font="colr:#999999;"><I>pyxymail.net<br>Best Email Marketing website. :)</I></td></tr>'; 
$message .= '</table>';
$message .= '</body></html>';


 ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Send Mail</title>
		<link href="font-awesome-4.3.0/css/font-awesome.min.css" rel="stylesheet" />
		<script src="js/jquery-ui.min.js" type="text/javascript"></script>
		<script src="js/bootstrap.min.js" type="text/javascript"></script>
		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link href="font-awesome-4.3.0/css/font-awesome.min.css" rel="stylesheet" />	

		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,400italic,300italic,300,500,500italic,700,900">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/crazymimi-misc.css"> 
        <link rel="stylesheet" href="css/crazymimi-style.css"> 
		<link href="css/myStyle.css" rel="stylesheet" type="text/css">	
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
		
				
		<script src="js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
		<script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
<script type="text/javascript">
<!--
    function toggle_visibility(id) {
       var e = document.getElementById(id);
       if(e.style.display == 'block')
          e.style.display = 'none';
       else
          e.style.display = 'block';
    }
    //-->
</script>
<style>

.midpart
{
	width: 68%;
	margin: 0 auto;
        margin-top: 81px;
}
.midpart1
{
	width: 85%;
	margin: 0 auto;
}
.leftinfo
{
	width: 67%;
	float: left;
	background-color: white;
	
}
.leftinfo h1
{
	font-size: 27px !important;
	font-weight: 300 !important;
	margin-top: 28px;
	margin-left: 14px;
}
.pro
{
  margin-top: 83px;

}
.leftpic
{
	width: 37%;
	float: left;
}
.rightpic
{
	width: 60%;
	float: left;
	padding-top: 51px;

}
.rightpic p
{
	font-size: 17px;
	line-height: 1.5em;
	padding-top: 10px;
	padding-bottom: 10px;
	font-family: initial;	
}
.rightpic h4
{
	font-family: sans-serif !important;
	font-weight: 100 !important;
	line-height: 1.1 !important;
	color: black !important;
	font-size: 20px;

}
.rightinfo
{
	width: 33%;
	float: left;
	height: 414px;
background-color: #E9E9E9;
}
.rightinfo1 
{
	width: 28%;
	float: left;
	height: 713px;
	background-color: #E9E9E9;
	position: absolute;
	top: -102px;
	right: 115px;
}
.rightinfo1 img
{
	width: 100%;
	height: 14.7%;
}
.rightinfo img {
width: 70px;
  height: 70px;
    padding:0px;
}

.comp
{
 float: left;
 width: 68%;
 margin-left: 21px;
 margin-top: 8px;
   padding: 36px;
}

input[type="button"]
{
	 color: white !important;
	 background-color: orange !important;
	 font-size: 23px !important;
}

.adduser
{
	color: white !important;
background-color: orange !important;
font-size: 23px !important;
box-shadow: inset 2px -8px 0px rgba(250,149,0,0.85);
border-color: rgba(192,63,4,0.65);
text-shadow: 0 -1px 0 #da4412;
padding: 0px 10px 0px 10px;
}
.window {
padding: 5px!important;
min-width: 340px;
width: 600px;
zoom: 1;
max-width: 900px;
position: fixed;
border-radius: 8px;
display: none;
background-color: white;

}
.window header {
position: relative;
background-color: #fafafa;
border-bottom: 1px solid #e2e2e2;
border-radius: 5px 5px 0 0;
display: block;
overflow: hidden;
width: 100%;
padding-bottom: 26px;
margin: 0 auto;
}
.window .window_title {
color: #777;
text-shadow: 0 19px 35px rgba(255,255,255,0.5);
font-size: 18px !important;
text-align: center;
width: 93%;
float: left;

}
.window .window_close {
position: absolute;
right: 20px;
top: 25px;
width: 14px;
height: 26px;
line-height: 26px;
z-index: 8500;
cursor: pointer;
font-weight: lighter;
font-size: 22px;
display: block;
text-align: center;
-webkit-user-select: none;
-moz-user-select: none;
-ms-user-select: none;
user-select: none;
opacity: 0.75;
}
.window .window_close {
color: #777;
text-shadow: 0 1px 0 rgba(250,250,250,0.5);
float: left;
width: 0%;
text-shadow: 0 1px 0 rgba(250,250,250,0.5);
}
.window .window_close span {
width: 14px;
height: 26px;
line-height: 26px;
padding: 0;
}

.window .window_contents {
clear: both;
overflow: hidden;
zoom: 1;
background: #fff;
box-shadow: 0 4px 0 0 rgba(0,0,0,0.1);
border-radius: 0 0 5px 5px;
width: 100%;
}

.window .field, .window>p, .popover .field, .popover>p {
margin: 0px 0px 13px -11px;
border-bottom: 1px solid #ddd;
width: 100%;
display: inline-flex;
border-bottom: 1px solid #ddd;
padding-bottom: 26px;
}
.window .field input
{
font-family: inherit;
font-size: inherit;
line-height: 19px;
margin-left: 20px;
box-shadow: 0px 0px 4px #80BFFF, 0px 2px 3px 0px rgba(0, 0, 0, 0.15) inset;
border-radius: 3px 3px;
}
fieldset p:after, fieldset .field:after, .fieldset p:after, .fieldset .field:after {
content: " ";
display: block;
height: 0;
font-size: 0;
clear: both;
visibility: hidden;
}
fieldset .half
{
	padding: 0 10px;
float: left;
display: block;
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
 
}
.actions {
float: left;
width: 100%;
background-color: rgb(250, 250, 250);
padding: 25px 23px 29px 175px;
}
.half .full label
{
	display: inherit !important;
	margin-left: 20px;
}
.usertable {
float: left; width: 100%;
}
.tbhead
{
float: left;
}
.tbbody
{
	float: left;
}
.deckout header
{
width: 100%; border-bottom: 1px solid #ddd;

}
.wfbutton
{
float: left; padding-top: 27px;

}
.deckout header h2 {
padding-bottom: 21px;
text-align: center;
font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
font-weight: 300;
display: block;
float: left;
width: 56%;
border-bottom: 0px !important;
}
.main_pro
{
padding: 10px;
height: auto;
}
 .main_pro header{
	   display: table;
  width: 100%;
  vertical-align: middle;
  margin-bottom: 1em;
  border-bottom: 1px solid #ccc;
  font-size: 36px;
  padding: 24px;
 }
 .pro_header{
	 
   padding: 13px;
  font-size: 20px;
 }
 .pro_body
 {
	   background-color: rgba(102, 157, 247, 0.21);
	   border-radius: 7px;
 }
.pro_tools{
	background-color: #669df7;
  padding: 9px;
  color: #002d77;
  fill: #002d77;
  stroke: #002d77;
  border-color: #0a4dba;
  border-radius: 0px 0px 7px 7px;
}
.pro_contents img
{
  width: auto;
  height: 200px;
  margin: 0 auto;
}
.btn
{
  background-color: #fcfcfc !important;
  border-style: solid;
  border-color: rgba(0,0,0,0.25) !important;
  /* border-width: 1px!important; */
  /* box-shadow: inset 0 -4px 0 rgba(0,0,0,0.1); */
  text-shadow: 0 1px 0 rgba(255,255,255,0.8) !important;
  font-family: "Helvetica Neue",Helvetica,Arial,sans-serif!important;
  text-transform: none !important;
  font-weight: 500 !important;
  box-shadow: inset 0 -4px 0 rgba(145,133,133,0.5) !important;
  color: black !important;
}
.left
{
font-size:33px !important;
font-weight:none !important;
}



.main-header2 {
  width: 100%;
  min-height: 96px;
  background-color: white;
  padding: 30px 60px;
  margin-top:31px;
}
@media screen and (min-width: 769px) and (max-width: 991px) {
  .main-header2 {
    padding: 20px;
    min-height: 76px;
  }
}
@media screen and (max-width: 768px) {
  .main-header2 {
    padding: 20px;
    min-height: 76px;
  }
}

.main-header2 .menu-wrapper {
  position: relative;
  z-index: 99;
  text-align: right;
  margin-top: -10px;
}
.main-header2 .menu-wrapper a.toggle-menu {
  display: none;
  background-color: #2c2c2c;
  color: white;
  border-color: #2c2c2c;
  position: absolute;
  right: 20px;
  overflow: hidden;
}
.main-header2 .menu-wrapper a.toggle-menu:hover {
  color: grey;
}
.main-header2 .menu-wrapper ul li {
  display: inline;
  margin-left: 20px;
  position: relative;
}
.main-header2 .menu-wrapper ul li:after {
  content: '/';
  color: #d5d5d5;
  margin-left: 20px;
}
.main-header2 .menu-wrapper ul li:last-child:after {
  content: '';
  display: none;
}
.main-header2 .menu-wrapper ul li a {
  text-transform: uppercase;
  font-weight: 500;
  padding: 30px 0;
  color: black;
}
.main-header2 .menu-wrapper ul li a:hover {
  color: #f69730;
}
.main-header2 .menu-wrapper ul li.active a {
  color: #f69730;
}
.main-header2 .menu-wrapper ul li ul {
  position: absolute;
  width: 200px;
  z-index: 9999;
  top: 28px;
  left: 50%;
  margin-left: -115px;
  text-align: center;
  background-color: #efefef;
}
.main-header2 .menu-wrapper ul li ul:before {
  content: ' ';
  width: 0;
  height: 0;
  border-left: 10px solid transparent;
  border-right: 10px solid transparent;
  border-bottom: 10px solid #efefef;
  position: absolute;
  top: -10px;
  margin-left: -10px;
  left: 50%;
}
.main-header2 .menu-wrapper ul li ul li {
  position: relative;
  display: block;
  text-align: center;
  margin: 0;
  border-bottom: 1px solid #efefef;
}
.main-header2 .menu-wrapper ul li ul li:last-child {
  border-bottom: 0;
}
.main-header2 .menu-wrapper ul li ul li a {
  display: block;
  padding: 10px;
  color: black; !important;
}
.main-header2 .menu-wrapper ul li ul li a:hover {
  color: #f69730 !important;
}
.main-header2 .menu-wrapper ul li ul li:after {
  display: none;
}
.main-header2 .menu-wrapper ul li ul li ul {
  left: 100% !important;
  margin-left: 1px;
  top: 0;
}
.main-header2 .menu-wrapper ul li ul li ul:before {
  display: none;
}



</style>
	</head>
	<body>

 <section id="pageloader">
            <div class="loader-item fa fa-spin colored-border"></div>
        </section> <!-- /#pageloader -->

        <header class="site-header container-fluid" style="width:100%">
            <div class="top-header">
                <div class="logo col-md-6 col-sm-6">
                   <h1><a href="logout.php"><img src="./images/pyxymail2.jpg"></img></h1>
 
               
                </div> <!-- /.logo -->
                


                <div class="main-header2">
               <div  class="menu-wrapper">
                             
                             <a href="#" class="toggle-menu visible-sm visible-xs"></a>
                          <ul class="sf-menu hidden-xs hidden-sm">
                       <li><a><i class="fa fa-user"></i>&nbsp;&nbsp;<?php include 'session1.php';  echo $paid_user;  echo $login_session;?></a>
                       <ul>
                       
                              
                            <li><a href="logout.php">&nbsp;&nbsp;Logout</a></li>
                            
                            
                      </ul>
                       </li></ul>
               </div>
               </div>                  
             


            </div> <!-- /.top-header -->
            <div class="main-header">
                <div class="row">
                    <div class="main-header-left col-md-3 col-sm-6 col-xs-8">
                         <a href="logout.php"><img src="./images/home.png" height=42 width=40></img>
                    </div> <!-- /.main-header-left -->
                    <div class="menu-wrapper col-md-9 col-sm-6 col-xs-4">
                        <a href="#" class="toggle-menu visible-sm visible-xs"><i class="fa fa-bars"></i></a>
                        <ul class="sf-menu hidden-xs hidden-sm">
                               <li ><a href="dashboard.php">Promotion</a></li>
                            <li ><a href="audience1.php">Audience</a></li>

                          <li  ><a href="campaign_dash.php">Campaign</a></li>
                            <li  ><a href="account.php">My Account</a></li>
<?php
include 'session1.php';
if(isset($paid_session))
{
         echo "                  <li><a href='pricing_signups.php'>Upgrade</a>   </li>";
}
?>
<?php
include 'session1.php';
if(isset($login_session))
{
         echo "                  <li><a href='pricing_signups3.php'>Pricing Plans</a>   </li>";
}
?>
                            <li><a href="help.php">Help</a >      </li>
                                   
                        </ul>
                    </div> <!-- /.menu-wrapper -->
                </div> <!-- /.row -->
            </div> <!-- /.main-header -->
            <div id="responsive-menu">
                <ul>
                      <li ><a href="campaign_dash.php">campaign</a></li>
                            <li ><a href="audience1.php">Audience</a></li>
                            <li  ><a href="account.php">My Account</a></li>
                           <?php
include 'session1.php';
if(isset($paid_session))
{
         echo "                  <li><a href='pricing_signups.php'>Upgrade</a>   </li>";
}
?>
<?php
include 'session1.php';
if(isset($login_session))
{
         echo "                  <li><a href='pricing_signups3.php'>Pricing Plans</a>   </li>";
}
?>
                            <li><a href="help.php">Help</a >      </li>
                            <li><a><i class="fa fa-user"></i>&nbsp;&nbsp;<?php include 'session1.php';  echo $paid_user; echo $login_session;?></a>
                                    <ul>
                       
                              
                                          <li><a href="logout.php">&nbsp;&nbsp;Logout</a></li>
                            
                                    </ul>
                           </li>
                                  
                </ul>
            </div>
            
        </header> <!-- /.site-header -->

      <div class="content-wrapper">

 <div class="inner-container container" style="background:none;">  

<div class="row">
                    <div class="col-md-8 comment-form">

<h2 class="comment-heading"> Send Promotion</h2>
                        <div class="box-content">
                        <form name="comment" method="post" action="send.php" >
                           

                             <p>
                                <label for="email" style="background-color:white;">E-mail:</label>
                                 <input type="text" name="email" readonly value="<?php echo $_POST['all'];?>" />
                            </p>

                          <p>
                                 <label for="name" style="background-color:white;">Subject:</label>
                                <input type="text" name="subject" />
                            </p>

                             <p>
                                
                                <td><textarea name="message"  style="visibility:hidden;" ><?php  echo $message; ?></textarea></td>  
                            </p>                           

                             <p>
                               <label for="comment" style="background-color:white;">&nbsp;</label>
                          <input type="submit" name="submit" value="Send Promotion" style="background-color:orange;color:black;"/>
                               
                             </p>
                             
                            </form>
                         <a href="autocomplete.php"><input type="button" class="mainBtn" value="Back" style="background-color:orange;color:black;"/ ></a>
                        </div> <!-- /.box-content -->
                    </div> <!-- /.comment-form -->
</div>



</div>
</div>						
		
  <script src="js/vendor/jquery-1.11.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Preloader -->
        <script type="text/javascript">
            //<![CDATA[
            $(window).load(function() { 
                $('.loader-item').fadeOut(); 
                    $('#pageloader').delay(350).fadeOut('slow');
                $('body').delay(350).css({'overflow-y':'visible'});
            })
            //]]>
        </script>


	</body>
</html>