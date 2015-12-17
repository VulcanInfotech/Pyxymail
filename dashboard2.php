<?php

include 'session1.php';
?>

<!DOCTYPE html>


<head>
        <meta charset="utf-8">
        <title>Dashboard</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

       
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,400italic,300italic,300,500,500italic,700,900">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/crazymimi-misc.css">
        <link rel="stylesheet" href="css/crazymimi-style.css">
        <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

           
<link rel="shortcut icon" type="image/x-icon" href="Pmail.ico" />
    <link rel="icon" type="image/x-icon" href="Pmail.ico" />
         
        <script src="js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
          <script src="http://code.jquery.com/jquery-1.9.1.js" type="text/javascript"></script>

        <script type="text/javascript">
        
         function validateEmail() {
    var emailText = document.getElementById('email').value;
    var pattern =/^[A-Za-z0-9._]*\@[A-Za-z]*\.[A-Za-z]{2,5}$/;
     var tx= document.getElementById('fname').value;
        var pt=/^[A-Za-z\s]+$/;
   
       if (pattern.test(emailText) && (pt.test(tx))) {
        return true;
    } else {
        alert('Enter details in proper format );
        return false;
    }
}

window.onload = function() {
    document.getElementById('email_form').onsubmit = validateEmail;
}






</script>

        <script language="javascript">
 $(document).ready(function(){
$(".btn9").click(function(){
$("#overlay").fadeIn("slow");
$("#overlay_div").fadeIn("slow");
});
$(".cls").click(function(){
$("#overlay").fadeOut("fast");
$("#overlay_div").fadeOut("fast");
});
});
        
        $(document).ready(function(){
$(".btn7").click(function(){
$("#over").fadeIn("slow");
$("#over_div").fadeIn("slow");
});
$(".cls").click(function(){
$("#over").fadeOut("fast");
$("#over_div").fadeOut("fast");
});
});

        </script>
     <style>

   .dashright
{
float:right;
margin-top:-300px;
 width:500px;
 
}

.audright
{
float:right;
 width:700px;
font-size:15px;

}
.audlefft
{
float:left;
 width:600px;

}
.leftpic2
{
float:right;
width:890px;

}

#leftside 
{ 
   width:250px; 
background-color:#F0F0F0;
   height: 360px; 
    float:left; 
font-size:15px;
font-weight:bold;
}

.btncomp
{
    bottom: 300px;
  position: fixed;
  left: 900px;
  padding: 7px 30px 7px 30px;
  background-color: #ff9933;
  border: transparent;
  color: rgb(255, 239, 242);
  font-weight: 200;
  font-family: cursive;
  border-radius: 18px;
}


.btn8{width:50px;
height:40px;
background-color:orange;
color:white;
}

.btn8:hover{color:black;}

.btn7{width:180px;
height:40px;
background-color:orange;
color:white;
font-weight:400;
}

.btn7:hover{color:black;}

.btn9{width:180px;
height:40px;
background-color:orange;
color:white;
font-weight:400;
}

.btn9:hover{color:black;}

.cls{background-color:orange; 
color:#fff;}

.push_button {
	position: relative;
	width:220px;
	height:40px;
	text-align:center;
	color:#FFF;
        background-color:orange;
	text-decoration:none;
	line-height:43px;
	font-family:'Oswald', Helvetica;
	display: block;
	margin: 30px;
        font-size:20px;
       
}
.push_button:before {
	background:#ff9933;
	background-image:-webkit-gradient(linear, 0% 0%, 0% 100%, from(#D0D0D0), to(#f0f0f0));
	
	-webkit-border-radius:5px;
	-moz-border-radius:5px;
	border-radius:5px;
	
	-webkit-box-shadow:0 1px 2px rgba(0, 0, 0, .5) inset, 0 1px 0 #FFF; 
	-moz-box-shadow:0 1px 2px rgba(0, 0, 0, .5) inset, 0 1px 0 #FFF; 
	box-shadow:0 1px 2px rgba(0, 0, 0, .5) inset, 0 1px 0 #FFF;
	
	position: absolute;
	content: "";
	left: -6px; right: -6px;
	top: -6px; bottom: -10px;
	z-index: -5;
}

.push_button:active {
	-webkit-box-shadow:0 1px 0 rgba(255, 255, 255, .5) inset, 0 -1px 0 rgba(255, 255, 255, .1) inset;
	top:5px;
}
.push_button:active:before{
	top: -11px;
	bottom: -5px;
	content: "";
}



.btn-info{color:#fff;background-color:#5bc0de;border-color:#46b8da}

#overlay
{width:2000px;
height:2000px;
background-color:#84c3ec;
position:fixed;
top:0;
bottom:0;
left:0;
right:0;
z-index:1000;
opacity:0.7;
display:none;
}
#overlay_div{
background-color:#ddd;
width:500px;
height:350px;
position:absolute;
text-align:center;
top:0px;
right:20%;
left:10%;
z-index:1500;
box-shadow:0 0 50px #000;
-0-box-shadow:0 0 50px #000;
-moz-box-shadow:0 0 50px #000;
-webkit-box-shadow-:0 0 50px #000;
-ms-box-shadow:0 0 50px #000;
display:none;
}

#over
{width:2000px;
height:2000px;
background-color:#84c3ec;
position:fixed;
top:0;
bottom:0;
left:0;
right:0;
z-index:1000;
opacity:0.7;
display:none;
}
#over_div{
background-color:#ddd;
width:500px;
height:350px;
position:absolute;
text-align:center;
top:0px;
right:20%;
left:10%;
z-index:1500;
box-shadow:0 0 50px #000;
-0-box-shadow:0 0 50px #000;
-moz-box-shadow:0 0 50px #000;
-webkit-box-shadow-:0 0 50px #000;
-ms-box-shadow:0 0 50px #000;
display:none;
}





.main-header2 {
  width: 100%;
  min-height: 96px;
  background-color: white;
  padding: 30px 60px;
  margin-top:33px;
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
  top: 30px;
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

@media screen and (min-width: 769px) and (max-width: 991px) {
  .main-header {
   
    padding: 20px;
    min-height: 76px;
  }
}
@media screen and (max-width: 768px) {
  .main-header {
  
    padding: 20px;
    min-height: 76px;
  }
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
  margin-left: 7px;
  position: relative;
}
.main-header2 .menu-wrapper ul li:after {
  content: '';
  color: #d5d5d5;
  margin-left: 10px;
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
<!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->
        <section id="pageloader">
            <div class="loader-item fa fa-spin colored-border"></div>
        </section> <!-- /#pageloader -->

        <header class="site-header container-fluid">
            <div class="top-header">
                <div class="logo col-md-6 col-sm-6">
                    <h1><img src="./images/pyxymail2.jpg"></img></h1>
                 </div> <!-- /.logo -->
               


                




 <div class="main-header2">
               <div  class="menu-wrapper">
                             
                             <a href="#" class="toggle-menu visible-sm visible-xs"></a>
                          <ul class="sf-menu hidden-xs hidden-sm">
                       <li><a><i class="fa fa-user"></i>&nbsp;&nbsp;<?php include 'session1.php';  echo $paid_session; echo $login_session;?><b class="caret"></b></a>
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
                           
                              <li class="active" ><a href="dashboard.php">dashboard</a></li>
                            <li  ><a href="audience1.php">Audience</a></li>
                            <li><a href="account.php">Account</a></li>
                           
                            <li><a href="pricing_signups.php">Upgrade</a>   </li>
                            <li><a href="help.php">Help</a >      </li>
                              
                        </ul>
                    </div> <!-- /.menu-wrapper -->
                </div> <!-- /.row -->
            </div> <!-- /.main-header -->
            <div id="responsive-menu">
                <ul>
                     
                            <li  ><a href="account.php">My Account</a></li>
                           <li><a href="pricing_signups.php">Upgrade</a>   </li>
                            <li><a href="help.php">Help</a >      </li>
                            <li><a><i class="fa fa-user"></i>&nbsp;&nbsp;<?php include 'session1.php';  echo $paid_session; echo $login_session;?><b class="caret"></b></a>
                                    <ul>
                       
                              
                                          <li><a href="logout.php">&nbsp;&nbsp;Logout</a></li>
                            
                                    </ul></li>
                      </ul>
                              
                </ul>
            </div>
   </header> <!-- /.site-header -->

        <div class="content-wrapper">
            <div class="inner-container container">
               
                    <div class="projects-holder">
                    
                    
                    
                        <div class="row">
                         
                         
  <div class="col-md-8"> 
  
  
<ul class="tabs">
<li>
         
          <input type="radio"  name="tabs" id="tab1">
          <label for="tab1">Dashboard</label>
          <div id="tab-content1" class="tab-content animated fadeIn" >
  					
<div class="leftinfo">
								
<h1> Hey There <?php echo $login_session; ?>!</h1><BR><br>
<div style="text-align:center;font-size:20px;">Create exiciting and innovative promotions just on a single click.</div>
<br>								
<div class="leftpic">
									
<img src="images/compose.png">


<div class="dashright" style= "  margin-top:-200px; margin-right:-80px;"><br>
<a href="dashboard_compose.php" class="push_button">+ Compose</a>
</div>
</div>

<p>&nbsp;</p>										
</div>

</li>
        <li>
          <input type="radio" checked name="tabs" id="tab2">
          <label for="tab2">Audience</label>
          <div id="tab-content1" class="tab-content animated fadeIn" >
  <div class="audright"> <table><tr> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><a href="#over"><button type="button" class="btn7"  >Create Email list</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;</td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<td align="right"><a href="#overlay"><button type="button" class="btn9">Add Contacts</button></a></td></tr></table></div>
 <p>&nbsp;</p><br>
         <hr>
          
          
          
          <div class="leftpic2">

                      <div class="dashright" style= " background-color:ff9933; margin-top:-10px;margin-right:-100px;"><br><br><br>

                        <a href="show.php" class="push_button">View All contacts</a><br><br>
            </div>

			
   <div id="leftside">
                         <p>&nbsp;</p>
                           <input class="toggle-box" id="identifier-1" type="checkbox">
                                        <label for="identifier-1"  style="background-color:#F0F0F0;"><font size="4">All Contacts</font></label>
                            <div id="listv">
                                <ul style="height:90px">
                                <li>
                                 
                <div class="scrollit" style="overflow:auto;
    height:100px; width:280px;">
        <table>
         
          
          <?php 
include 'connect.php';
include 'session1.php';
$audience=mysqli_query($conn,"SELECT * FROM audience where User='$user_check'");

while($audadd=mysqli_fetch_array($audience))
{
	
	echo "<tr>";
	echo "<td><font size='2'>".$audadd['Name']."</font></td>";
                  echo "<td>&nbsp;</td>";
	echo "<td align='right'><font size='2'>".$audadd['Email']."</font></td>";
                 echo "<td>&nbsp;</td>";
                   echo "<td>&nbsp;</td>";
                 echo "<td align='right'><a href='edit3.php?edit=$audadd[Name]&id=$audadd[id]&email=$audadd[Email]'>Edit</a></font>&nbsp;&nbsp;</td><td align='right'><a href='audiencedelete3.php?del=$audadd[id]' onClick=\"javascript: return confirm('Are you sure want to delete');\">Delete</a></font></td>";
	
	echo "</tr>";
}

?>
          
          
          
          
          
		  </table>
<div>
                                   </li>
                                 </ul>
</div>
<br><BR>


<div id="over"></div>
<div id="over_div">
<form id="list_form" action="list_insert.php" method="post">
<div style="line-height:60px;border-bottom: 1px solid black;text-align:left;background-color:#ddd">&nbsp;&nbsp; <u>List details</u></div><BR>
<fieldset style="border:solid 1px #000;width:90%;margin-left:20px; background-color:#fff; height:150px;"><br><br>
 List name &nbsp; &nbsp; <input type="text" name="lname" id="lname" placeholder="Enter list name..." required><br><br><br>

</fieldset><br>
<div style="border-top: 1px solid black;"></div><br>
<input type="submit" name="submit" value="Ok" style="background-color:orange; color:#fff;" >&nbsp;&nbsp;&nbsp;
<input type="button"  value="Cancel" class="cls"  style="background-color:orange; color:#fff;"><BR>
</form>
</div>
      <br>
&nbsp;&nbsp;

                           <input class="toggle-box" id="identifier-2" type="checkbox">
                                        <label for="identifier-2"  style="background-color:#F0F0F0;"><font size="4">View Lists</font></label>
                            <div id="listv">
                                <ul style="height:150px">
                                <li>
                          
						 <div class="scrollit1" style="overflow:auto;
    height:100px; width:280px;">
        <table>
                  
			<?php

$audience=mysqli_query($conn,"SELECT * FROM list where Email='$user_check'");
while($row=mysqli_fetch_array($audience))
{
	
	echo "<tr>";
	           echo "<td><font size='2'>".$row[1]."</font></td>";
                   echo "<td>&nbsp;</td>";
        
                 echo "<td align='right'><a href='delete.php?del=$row[id]' onClick=\"javascript: return confirm('Please confirm deletion');\">Delete</a></font></td>";
                                 echo "<td>&nbsp;&nbsp;&nbsp;</td>";
                echo"<td right='right' ><a href='dash.php?listname=$row[lname]'>Add contact</a></td>";
                echo "<td align='right'>&nbsp;&nbsp;&nbsp;&nbsp;<a href='edit4.php?lname=$row[lname]&id=$row[id]'>Edit</a></font></td>";
                echo "<td>&nbsp;</td>";
              
	
	echo "</tr>";
}
;
?> </table>
<div>
</li>
</ul>

</div>
<br><BR><br><BR>

 <div id="overlay"></div>
<div id="overlay_div">
<form action="popup_insert1.php" method="post">
<div style="line-height:40px;border-bottom: 1px solid black;text-align:left;background-color:#ddd">&nbsp;&nbsp; <u>Contact details</u></div><BR>
<fieldset style="border:solid 1px #000;width:90%;margin-left:20px; background-color:#fff; height:195px;"><br>
 First name &nbsp; &nbsp; <input type="text" name="fname" id="fname" placeholder="Enter first name..." required ><br><br><br>
Email &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; <input type="email" name="email" id="email" placeholder="Enter email....." required><br><br>
</fieldset><br>
<div style="border-top: 1px solid black;"></div><br>
<input type="submit" name="submit" value="Ok" style="background-color:orange; color:#fff;" >&nbsp;
<input type="button"  value="Cancel" class="cls"><BR>
</form>
</div>
             


</div>
</div>
</div>

</li>
</ul>

</div>






  </div> <!-- /.row -->
               
                      



<div class="col-md-12"  style="margin-top:500px;">
                
         <hr>
         
         <div class="social-icons">
			             
   <ul>
			                    
<li><a class="facebook" href="#" target="_blank"> </a></li>
			                
    <li><a class="twitter" href="#" target="_blank"></a></li>
			                   
 <li><a class="googleplus" href="#" target="_blank"></a></li>
			                 
   
			              
  </ul>
					
</div>

<p style="float:left; ">&copy; Copyright vulcaninfotech - 2015.</p>





</div>




                                              
                       
                        
                        
                    </div> <!-- /.projects-holder -->
              
            </div> <!-- /.inner-content -->
            
        </div> <!-- /.content-wrapper -->
       
        
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