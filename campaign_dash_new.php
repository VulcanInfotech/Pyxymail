<?php session_start(); 

include 'session1.php';

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Campaigns</title>
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
		
				
		<!--<script src="js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
		<script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>-->

<link rel="shortcut icon" type="image/x-icon" href="Pmail.ico" />
    <link rel="icon" type="image/x-icon" href="Pmail.ico" />



<link href="popup/css/style2.css" rel='stylesheet' type='text/css' />

</script><script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script src="popup/js/jquery.magnific-popup.js" type="text/javascript"></script>
		<script type="text/javascript" src="popup/js/modernizr.custom.53451.js"></script> 



<script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});


</script>



<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
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
body{
background-color: rgba(22, 22, 22, 0.91);
}
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
	 margin: 0px 0px 50px 180px;
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
	   background-color: rgba(22, 22, 22, 0.71);
	   border-radius: 7px;
 }
.pro_tools{
	background-color:rgba(22, 22, 22, 0.48);
  padding: 9px;
  color: #002d77;
  fill: #002d77;
  stroke: #002d77;
  border-color: #0a4dba;
  border-radius: 0px 0px 7px 7px;
}
.pro_contents img
{
  //width: auto;
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
.p_bck
{
          background: grey;
  font-size: 18px;
  padding: 10px;
  margin-left: 232px;
  border-radius: 10px 0px;
}

.pre_img{

width: 370px;
//height:50px;
-webkit-transition : width 0.3cs linear 0s;
z-index:10;
}
.pre_imgbig
{
width:0px;
-webkit-transition : width 0.3cs linear 0s;
z-index:10;
position:absolute;
}
.pre_img:hover 
{
width:600px;
height:700px;
}
header
{
background-image: url("images/pro2.png");
background-size: cover;
}
h2
{

  margin-top: 123px;
 
}
.txt
{

  height: 35px;
  text-shadow: 0px -1px 1px black;
  letter-spacing: 1px;
  color: black;
  
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


        .social-icons {
 float: right;
 }
.social-icons li a {
	height: 40px;
	width: 40px;
	display:block;
	text-indent: -9999px;
	background: transparent url(./images/social-icons.png);
}
.contact-info1 {
	font-family: Montserrat;
	font-weight: 700;
	color: #eee;
}
.social-icons li:first-child {
	border-left: 1px solid rgba(231, 231, 231, 0.73);
}
.social-icons ul li:first-child, ol li:first-child {
	margin-top: 0px;
}
.social-icons li {
	float: left;
	width: 40px;
	height: 40px;
	border-right: 1px solid rgba(231, 231, 231, 0.73);
	background: none;
	padding: 0px;
	margin: 0;
}
.social-icons a.facebook:hover {
	background-position: 0px bottom;
}
.social-icons a.facebook {
	background-position: 0px top;
}
.social-icons li a {
	height: 40px;
	width: 40px;
	display: block;
	text-indent: -9999px;
	background: transparent url(./images/social-icons.png);
}
.social-icons a.twitter {
	background-position: -40px top;
}
.social-icons a.twitter:hover {
	background-position: -40px bottom;
}
.social-icons a.googleplus {
	background-position: -440px top;
}
.social-icons a.googleplus:hover {
	background-position: -440px bottom;
}
.social-icons a.pinterest {
	background-position: -480px top;
}
.social-icons a.pinterest:hover {
	background-position: -480px bottom;
}
.social-icons a.dribbble {
	background-position: -160px top;
}
.social-icons a.dribbble:hover {
	background-position: -160px bottom;
}
.social-iconst a.dribbble:hover {
	background-position: -160px bottom;
}	
.social-icons a.vimeo {
	background-position: -120px top;
}
.social-icons a.vimeo:hover {
	background-position: -120px bottom;
}





</style>
	</head>
	<body>




<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3&appId=1625276917695542";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<script type="javascript">
function openRequestedPopup()
{
window.open('http://pyxymail.net/promosent.php'
'popup',
'width=545,height=326,resizable=no,scrollbars=yes,status=yes');
}
</script>


<!-- <section id="pageloader">
            <div class="loader-item fa fa-spin colored-border"></div>
        </section> -->

<!-- /#pageloader -->

        <header class="site-header container-fluid" style="width:100%">
            <div class="top-header">
                <div class="logo col-md-6 col-sm-6">
                   <h1><img src="./images/pyxymail2.jpg"></h1>
 
               
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
                        <a href="index2.php"><img src="./images/home.png" height=42 width=40></img>
                    </div> <!-- /.main-header-left -->
                    <div class="menu-wrapper col-md-9 col-sm-6 col-xs-4">
                        <a href="#" class="toggle-menu visible-sm visible-xs"><i class="fa fa-bars"></i></a>
                        <ul class="sf-menu hidden-xs hidden-sm">
                        	 <li ><a href="audience1.php">Audience</a></li>
                            <li ><a href="dashboard_compose.php">Promotion</a></li>
                            <li class="active"><a href="campaign_dash.php">Campaign</a></li>
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
                            <li><a href="help2.php">Help</a >      </li>
                        </ul>
                    </div> <!-- /.menu-wrapper -->
                </div> <!-- /.row -->
            </div> <!-- /.main-header -->
            <div id="responsive-menu">
                <ul>
                       <li ><a href="audience1.php">Audience</a></li>
                             <li ><a href="dashboard_compose.php">Promotion</a></li>
                              <li class="active"><a href="campaign_dash.php">campaign</a></li>
                            <li  ><a href="account.php">My Account</a></li>
                           <?php
//include 'session1.php';
if(isset($paid_session))
{
         echo "                  <li><a href='pricing_signups.php'>Upgrade</a>   </li>";
}
?>
<?php
//include 'session1.php';
if(isset($login_session))
{
         echo "                  <li><a href='pricing_signups3.php'>Pricing Plans</a>   </li>";
}
?>
                            <li><a href="help2.php">Help</a >      </li>
                            <li><a><i class="fa fa-user"></i>&nbsp;&nbsp;<?php include 'session1.php';  echo $paid_user; echo $login_session;?></a>
                                    <ul>
                       
                              
                                          <li><a href="logout.php">&nbsp;&nbsp;Logout</a></li>
                            
                                    </ul>
                           </li>
                </ul>
            </div>
            
        </header> <!-- /.site-header -->

        <div class="content-wrapper" style="background:rgb(43, 43, 43)">

 
						<div class="midpart" >
							<div class="leftinfo">
							    <div class="main_pro"> <!-- main_pro strt -->
									<header >
										<h2 class="left" style="font-size: 30px;font-weight:100; padding: 7px;width:105%;  font-family: initial; color: white;">Dashboard - <span class="subtle recent" style="display: inline; color: white;">Recent</span>
										<!--  <a href="dashboard_compose.php" class="p_bck">Back to Promotions</a> -->
											
										</h2>
									</header>
                                                                        
                                                                        
                                                                        
                                 <?php
                                 include 'session1.php';
                                 if(isset($login_session)){
                                      $parentemail=$user_check;
                                  
									  echo "<ul style='padding: 50px;margin-top: -40px;'>";



                                            $sql = "SELECT Img, pro_title FROM promotion WHERE parentemail = '$parentemail'";
                                            $query=mysqli_query($conn,$sql);
                                           $count=mysqli_num_rows($qry);
					 while($row=mysqli_fetch_array($query))
                                            {
                                                    
                                                    $image=$row['Img'];
                                                    $pro_title=$row['pro_title'];
			     									echo "<li class='pro_item'>";
				 									echo"<div class='pro_header'>";
														echo"	<input type='text' class='txt' name='pro_name' size='30' value = '".$pro_title."'  >";
												echo"		</div>";
			                                                                                   
			   echo" <div class='pro_body'>";
                           echo" <div class='pro_contents'>";
                           echo" <a href='#' id='jump' target='_blank'>";
                           echo" <br>";

                                           
             echo "        <div class='projects-holder'>";
             echo "           <div class='row' id= 'row_ex'>";
                        
             echo "                 <div class='col-md-4 project-item mix design' style='width :70%;margin-left: 95px;margin-bottom: 0px;'>";
             echo "                   <div class='project-thumb'> ";
             
             echo "                      <img src='".$image."'  class='pre_img'>";
                                    //<img src="images/macd.png" alt=""   height=" 476px">;
             echo "                       <div class='overlay-b'>";
             echo "                           <div class='overlay-inner'> ";
             echo "                               <a href='".$image."' class='fancybox fa fa-expand' title=' '></a>";
             echo "                           </div>";
             echo "                       </div>";
             echo"                   </div>";


             echo "                </div> <!-- /.project-item --> ";
             echo "              </div> ";
             echo "          </div> ";

                                                    						
											echo"		</a>";
											echo"	</div>";
											echo"	<div class='pro_tools'>";
											
											echo"		<span class='btn btn-success'><a href='autocomplete.php?in=$image&inpt=$pro_title'>Send</a></span>";
											echo"		<span class='btn btn-success' style='float:right'><a href=delete_pro.php?del=".$image." onclick='return del();'>delete</a></span>";


                                                                               echo "<br>";
                                                                                          
                                                                                        $sql2="select * from promotion_sent where Promo_title='$pro_title'";
                                                                                            $query2=mysqli_query($conn,$sql2);
                                                                                         $row3=mysqli_fetch_assoc($query2);

                                                                                                 $sent=$row3['email'];
                                                                                                 $sent_date=$row3['date'];
                                                                                                 
                                                                                       
                                                           echo "<br><a><b>Last Sent On</b>"."&nbsp;".$sent_date."</a>";
                                                          echo '<a target="popup" onclick="window.open("", "popup", width=580,height=360,scrollbars=no, toolbar=no,status=no,resizable=yes,menubar=no,location=no,directories=no,top=10,left=10)" href="promosent.php?title='.$pro_title.' & image='.$image.'"><b style="float:right;">See Details</b></a>';






/* echo '<div id="small-dialog" class="mfp-hide">
									<div class="pop_up">
									 	<div class="payment-online-form-left">
											<form>
                                           <h4><span class="col-md-3"> </span> Sent Details</h4><br><br>
															<ul class="payment-sendbtns" style="float:left; ">';
						
echo "<table>
<tr>
<td>
Emails
</td>
<td>&nbsp;</td>
<td>
Emails
</td>
</tr>
<tr>
<td>".$sent."</td>
<td>&nbsp;</td>
<td>". $sent_date."</td>
</tr>
</table>

												</ul>
												<div class='clear'> </div>
											</form>
										</div>
						  			</div>
								</div>";*/
								




											echo "	</div>";
											echo "</div>";
                                                                                        
                                                                                        
									echo"	</li> <br/><br/><br/>";
                                                                            }										  



											
								echo"	</ul> ";
                                                                        
                                                           }  

elseif(isset($paid_session)){
                                      $parentemail=$user_check1;
									 echo "<ul style='padding: 50px;margin-top: -40px;'>";



                                            $sql = "SELECT Img, pro_title FROM promotion WHERE parentemail = '$parentemail'";
                                            $query=mysqli_query($conn,$sql);
                                           $count=mysqli_num_rows($qry);
					 while($row=mysqli_fetch_array($query))
                                            {
                                                    
                                                    $image=$row['Img'];
                                                    $pro_title=$row['pro_title'];
			     									echo "<li class='pro_item'>";
				 									echo"<div class='pro_header'>";
														echo"	 <input type='text' class='txt' name='pro_name' value = '".$pro_title."'  >";
												echo"		</div>";
			                                                                                   
			   echo" <div class='pro_body'>";
                           echo" <div class='pro_contents'>";
                           echo" <a href='#' id='jump' target='_blank'>";
                           echo" <br>";

                                           
             echo "        <div class='projects-holder'>";
             echo "           <div class='row' id= 'row_ex'>";
                        
             echo "                 <div class='col-md-4 project-item mix design' style='width :70%;margin-left: 95px;margin-bottom: 0px;'>";
             echo "                   <div class='project-thumb'> ";
             
             echo "                      <img src='".$image."'  class='pre_img'>";
                                    //<img src="images/macd.png" alt=""   height=" 476px">;
             echo "                       <div class='overlay-b'>";
             echo "                           <div class='overlay-inner'> ";
             echo "                               <a href='".$image."' class='fancybox fa fa-expand' title=' '></a>";
             echo "                           </div>";
             echo "                       </div>";
             echo"                   </div>";


             echo "                </div> <!-- /.project-item --> ";
             echo "              </div> ";
             echo "          </div> ";
                                                    						
											echo"		</a>";
											echo"	</div>";
											echo"	<div class='pro_tools'>";
											
											echo"		<span class='btn btn-success'><a href='autocomplete.php?in=$image&inpt=$pro_title'>Send</a></span>";
											echo"		<span class='btn btn-success' style='float:right'><a href=delete_pro.php?del=".$image." onclick='return del();'>delete</a></span>";

                                                                                         echo "<br>";
                                                                                          
                                                                                        $sql2="select * from promotion_sent where Promo_title='$pro_title'";
                                                                                            $query2=mysqli_query($conn,$sql2);
                                                                                         $row3=mysqli_fetch_assoc($query2);

                                                                                                 $sent=$row3['email'];
                                                                                                 $sent_date=$row3['date'];
                                                                                                 
                                                                                       
                                                           echo "<br><a><b>Last Sent On</b>"."&nbsp;".$sent_date."</a>";
                                                             echo '<a target="popup" onclick="window.open("", "popup", width=580,height=360,scrollbars=no, toolbar=no,status=no,resizable=yes,menubar=no,location=no,directories=no,top=10,left=10)" href="promosent.php?title='.$pro_title.' & image='.$image.'"><b style="float:right;">See Details</b></a>';



 


/* echo '<div id="small-dialog" class="mfp-hide">
									<div class="pop_up">
									 	<div class="payment-online-form-left">
											<form>
                                           <h4><span class="col-md-3"> </span> Sent Details</h4><br><br>
															<ul class="payment-sendbtns" style="float:left; ">';
						
echo "<table>
<tr>
<td>
Emails
</td>
<td>&nbsp;</td>
<td>
Emails
</td>
</tr>
<tr>
<td>".$sent."</td>
<td>&nbsp;</td>
<td>". $sent_date."</td>
</tr>
</table>

												</ul>
												<div class='clear'> </div>
											</form>
										</div>
						  			</div>
								</div>";*/
								




                   
											echo"	</div>";


											echo "</div>";
                                                                                        
                                                                                        
									echo"	</li> <br/><br/><br/>";
                                    }										  
									echo"	</ul> ";
                                                                        
                                  }    
                              ?>
                                                                      
								
                             </div><!-- main_pro end -->
							</div><!-- leftinfo end -->
							
						</div><!-- midpart end of dash-->
 

<div class="col-md-12"  style=" width:100%;margin:0 auto; padding: 0px 89px 0px;;">
         <hr>
         <div class="social-icons">
   <ul>
<li><div class="fb-like" data-href="https://www.facebook.com/pages/PyxyMail/952542731452333" data-layout="box_count" data-action="like" data-show-faces="true" data-share="true"></div></li>
  </ul>				
</div>
<p style="float:left; ">&copy; Copyright PyxyMail - 2015.</p>
</div>					

	
				
					</div> 	<!-- end	content-wrapper	 -->

	
                            




	
  <!--<script src="js/vendor/jquery-1.11.0.min.js"></script>-->
       <!-- <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>-->
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Preloader -->
<script type="text/javascript">

    function del() {

    var txt;
    var r = confirm("Are you sure would you like to delete?");
    if (r == true) {
        window.location='delete_pro.php';
        return true;
        
    } else {
    return false;
        window.location='campaign_dash.php';
    }
}
 
          /*  //<![CDATA[
            $(window).load(function() { 
                $('.loader-item').fadeOut(); 
                    $('#pageloader').delay(350).fadeOut('slow');
                $('body').delay(350).css({'overflow-y':'visible'});
            })
            //]]>*/
         
</script>

<script>
$(document).ready(function(){
      
      $('#jump').click(function() {
             var loc = $(this).attr("href");
             window.open(loc, '_blank');
        });

}) ; 
        </script>
	</body>
</html>