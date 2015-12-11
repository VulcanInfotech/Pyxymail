<?php session_start(); ?>

<!DOCTYPE html>
<html>
	<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
		
		<title>Mad mimi</title>
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
margin: 0px 0px 13px 4px;
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
</style>
	</head>
	<body>

 <section id="pageloader">
            <div class="loader-item fa fa-spin colored-border"></div>
        </section> <!-- /#pageloader -->

        <header class="site-header container-fluid" style="width:100%">
            <div class="top-header">
                <div class="logo col-md-6 col-sm-6">
                  <h1><a href="index.php"><img src="./images/crazy3.jpg"></img></h1>
 
               
                </div> <!-- /.logo -->
                
            </div> <!-- /.top-header -->
            <div class="main-header">
                <div class="row">
                    <div class="main-header-left col-md-3 col-sm-6 col-xs-8">
                        <a href="logout.php"><img src="./images/home.png" height=42 width=40></img>
                    </div> <!-- /.main-header-left -->
                    <div class="menu-wrapper col-md-9 col-sm-6 col-xs-4">
                        <a href="#" class="toggle-menu visible-sm visible-xs"><i class="fa fa-bars"></i></a>
                        <ul class="sf-menu hidden-xs hidden-sm">
                               <li><a href="account.php">Account</a></li>
                            <li><a href="addon.php">Add Things</a>   </li>
                            <li><a href="gopro.php">Go Pro</a>   </li>
                            <li><a href="help.php">Help</a >      </li>
                             <li ><a href="logout.php">Logout, <?php include 'session.php'; echo $login_session ?></a > </li>
                        </ul>
                    </div> <!-- /.menu-wrapper -->
                </div> <!-- /.row -->
            </div> <!-- /.main-header -->
            <div id="responsive-menu">
                <ul>
                       <li><a href="account.php">Account</a></li>
                            <li><a href="addon.php">Add Things</a>   </li>
                            <li><a href="gopro.php">Go Pro</a>   </li>
                            <li><a href="help.php">Help</a >      </li>
                             <li ><a href="logout.php">Logout, <?php include 'session.php'; echo $login_session ?></a > </li>
                </ul>
            </div>
            
        </header> <!-- /.site-header -->

        <div class="content-wrapper">

						<div class="midpart" >
							<div class="leftinfo">
								<div id="leftDiv">
									<h1> Hi! <?php echo $login_session; ?>
										<small> <a href="adduser.php" style="font-size: 19px;margin-left:171px;background-color: orange;padding: 7px;color: white;border-radius: 9px;"> 
										Click here to see Added Users</a>
										<a href="addon.php" style="font-size: 20px;margin-left: 127px;">Back</a></small>
									</h1>
									
									<div class="leftpic">
										<img src="images/dash.jpg" />
									</div>
									<div class="rightpic">
										<h4>Welcome to your multi-user page.</h4>
										<p>
										Here you'll be able to add your colleagues and team members to your Mad Mimi account. 
										As you add them, you get to set permissions and share as much or as little information with them as you're comfy with.
										</p>
										<p>Whether your users are just creating or creating and sending emails, you'll always be in the know!</p>
									</div>
								</div>
								<div id="addedUsersBox" style="width: 100%;height: 358px;display:none; overflow: scroll;">
									<center>
										<table style="margin-top: 46px;margin-bottom: 40px;background-color: antiquewhite;">
											<thead style="position: relative;">
												<tr>
													<th class="name" style="background-color: #FAFAFA;padding-right: 397px;padding-left: 60px;">Users</th>
													<th class="actions" style="padding: 25px 12px 29px 13px;">Actions</th>
												</tr>
											</thead>
											<tbody>
												<tr style="overflow-y: scroll;">
													<td class="addedUsersBox1" style="overflow: scroll;padding-left: 57px; ">
														<span class="addedUsersBox_name"></span>
													</td>
													<td class="AddDel">

													</td>
												</tr>
											</tbody>
										</table>
									</center>
								</div>
							</div><!-- leftinfo end -->
							<div class="rightinfo" style="height: 362px;">
								<div class="comp" style="margin-left: 63px;">
									<a href="javascript:void(0)" > 
									<input class="adduser" type="button" name="adduser" value="Add a User" onclick="toggle_visibility('new_user_dialog');" style="  padding: 15px;
  width: 100%;">
									</a>
								</div>
								<div class="pro">
							<figure class="upgrade_nag" style="padding-top:17px">

									<span style="padding-left: 10px;">
									<img alt="Bdelpesco" src="images/bdel.jpg" style="  margin-left: 19px;">
									</span>
								<span class="avatar_person" style="position: absolute;left: 1085px;top: 427px;">
									<a href="https://twitter.com/bdelpesco" target="blank">@bdelpesco</a>
									<span class="avatar_company subtle">
										<a href="http://belindadelpesco.blogspot.com/" title="Visit Belinda Del Pesco Fine Art" target="_blank">
										Belinda Del Pesco Fine Art
										</a>
									</span>
								</span>
								<span class="prouser">
									<img src="images/prouser.jpg" style="margin-left: 260px;margin-top: -87px;">
								</span>
								<figcaption>
								

									<span class="upgrade_nag_action right" style="float: right">
										<a href="/service_agreements/change_plan" class="btn primary small">Go Pro Today</a>
									</span>
									<cite>Crazy Mimi Pro rocks! Without fail, when I've announced an event with Crazy Mimi, I've sold art to a patron pre-opening.</cite>
								</figcaption>
							</figure>
						</div>
							</div> <!-- rightinfo end dash-->
						</div><!-- midpart end of dash-->	
					
					
					<div id="new_user_dialog" class="window " style="display: none; position: fixed; z-index: 7000; left: 415px; top: 201px;">						
						<header>
						<h1 class="window_title" style="margin-top: 21px;">
						Add a person to Company
						</h1>
						<a href="javascript:void(0);" onclick="toggle_visibility('new_user_dialog');" class="window_close" style="top: 17px;"><span>×</span></a>
						</header>
						<div class="window_contents">
						<form accept-charset="UTF-8" action="multiuser.php" class="new_user" id="new_user" method="post">
							<div style="margin:0;padding:0;display:inline">
								<input name="utf8" type="hidden" value="?"/>
								<input name="authenticity_token" type="hidden" value="VweM7KBiMOZUO+iqybd+wStmRgzU2wUJjxQqa4FM28Y="/>
							</div>
							<fieldset>
                                                       
								<div class="field">
									<span class="half">
									<label for="user_first_name">First name</label>
									<input autocomplete="off" autofocus="autofocus" id="user_first_name" name="first_name" 
									required="required" size="30" type="text">
									</span>
									<span class="half">
									<label for="user_last_name">Last name</label>
									<input autocomplete="off" id="user_last_name" name="last_name" required="required" size="30" type="text"/>
									</span>
								</div>
								<div class="field">
									<span class="half">
									<label for="user_email">Email address</label>
									<input autocomplete="off" id="user_email" name="email" required="required" size="30" type="email">
									</span>
									<span class="half">
									<label for="user_password" style="padding-right:20px">Password</label>
									<input autocomplete="off" id="user_password" name="password" required="required" size="30" type="password">
									</span>
								</div>
								<div class="field">
									<span class="full" style="  width: 93%; !important;">
									<label for="user_organization_name">Company/Group</label><br>
									<input id="user_organization_name" name="comp" required="required" type="text" value="" size="76">
									</span>
								</div>
								<div class="actions" style="WIDTH: 100%;margin-left: 2px;  margin-bottom: -9px;">
									<button class="btn primary" id="primary_form_action" name="proceed" type="submit" >
										<span>Add this person to my account</span>
									</button>
								</div>
							</fieldset>
						</form>
						</div> 
					</div>
</div> 	<!-- end	content-wrapper	 -->		
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
<?php
			
include 'connect.php';
include 'session.php';	

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn)
 {
    die("Connection failed: " . mysqli_connect_error());
}
	if(isset($_SESSION['login_user']))
        {
		if(isset($_POST['proceed'])){
				$fname=$_POST['first_name'];
				$lname=$_POST['last_name'];
				$email=$_POST['email'];
				$password=$_POST['password'];
				$company=$_POST['comp'];
				$parentemail=$user_check;
				$sql="Insert into AddUser values('','".$fname."','".$lname."','".$email."','".$password."','".$company."','".$parentemail."')";
				$query=mysqli_query($conn , $sql);
				if(!$query)
				{
					echo "failed" .mysqli_error();
				}
				else{
					
					echo "<script>
				  alert('User Added Successfully');
				  </script>";
				  echo"<meta http-equiv='refresh' content='0;url=adduser.php'>";

				}
				 
		}
	}
?>