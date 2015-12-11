<?php
include 'connect1.php';
include 'session1.php';
?>
<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Pyxymail</title>

        <!-- CSS -->

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
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

     <script type="text/javascript">
function AllowAlphabet(){
if (!frm.first_name.value.match(/^[a-zA-Z]+$/) && frm.first_name.value !="")
{
frm.first_name.value="";
frm.first_name.focus();
alert("Please Enter only alphabets in text");
}
if (!frm.last_name.value.match(/^[a-zA-Z]+$/) && frm.last_name.value !="")
{
frm.last_name.value="";
frm.last_name.focus();
alert("Please Enter only alphabets in text");
}
}
</script>




<script type="text/javascript">
function AllowAlphabet(){
if (!frm.first_name.value.match(/^[a-zA-Z]+$/) && frm.first_name.value !="")
{
frm.first_name.value="";
frm.first_name.focus();
alert("Please Enter only alphabets in text");
}
if (!frm.last_name.value.match(/^[a-zA-Z]+$/) && frm.last_name.value !="")
{
frm.last_name.value="";
frm.last_name.focus();
alert("Please Enter only alphabets in text");
}
}

function div_showAuthorization() {
document.getElementById('auth').style.display = "block";
}
//Function to Hide Popup
function div_hideAuthorization(){
document.getElementById('auth').style.display = "none";
}
function div_showBilling() {
document.getElementById('bill').style.display = "block";
}
//Function to Hide Popup
function div_hideBilling(){
document.getElementById('bill').style.display = "none";
}
function div_showPayment() {
document.getElementById('pay').style.display = "block";
}
//Function to Hide Popup
function div_hidePayment(){
document.getElementById('pay').style.display = "none";
}
</script>
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
		<!-- Top menu -->
		
        <!-- Top content -->
        <div class="top-content" style="margin-top:105px;" >
        	
            <div >
               <div class="container">
    <div class="row">
<div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="well well-sm" >
                <form class="form-horizontal" method="post" action="" name="frm" >
                                    <?php 
                                        include 'connect.php';
                                        include 'session1.php';
                                        if(isset($paid_session))
                                        { 
                                           $sql1=" select * from personalInfo where email='$user_check1'";
                                        }
                                        elseif(isset($login_session))
                                        { 
                                            $sql1=" select * from personalInfo where email='$user_check'";
                                        }
                                            $result1=mysqli_query($conn,$sql1);  
                                            while($row1=mysqli_fetch_assoc($result1))
                                            {
                                                $fname1=$row1['first_name'];
                                                $lname1=$row1['last_name'];
                                                $comp1=$row1['comp'];
                                                $addr1=$row1['addr'];
                                            }
                                       ?>	
                    <fieldset>
                        <legend class="text-center header"><b style="font-family:"Lato" >My Account</b> &nbsp;&nbsp;&nbsp;<i class="fa fa-pencil"></i> <br></legend><br>


                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user fa-2x" style="color:#6b7784;"></i></span>
                            <div class="col-md-7">
                                                            
                                <input id="user_first_name" name="first_name" placeholder="First Name" size="30" type="text" value="<?php echo $fname1;?>" onkeyup="AllowAlphabet()" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user fa-2x" style="color:#6b7784;"></i></span>
                            <div class="col-md-7">
                                <input id="user_last_name" name="last_name" size="30"placeholder="Last Name"  type="text" value="<?php echo $lname1;?>" onkeyup="AllowAlphabet()" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o fa-2x" style="color:#6b7784;"></i></span>
                            <div class="col-md-7">
                                <input id="user_email" name="email" type="text" value="<?php include 'session.php'; echo $user_check; echo $user_check1; ?>" readonly class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-building-o fa-2x" style="color:#6b7784;"></i></span>
                            <div class="col-md-7">
                             <input id="user_organization_name" name="comp" size="30"  placeholder="Company/Group" type="text" value="<?php echo $comp1;?>" class="form-control">
                            </div>
                        </div>
						 <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-key fa-2x" style="color:#6b7784;"></i></span>
                            <div class="col-md-7">
                                <input autocomplete="off" id="user_password" placeholder="Old Password" name="password" size="30" type="password" class="form-control">
                            </div>
                        </div>
						 <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-key fa-2x" style="color:#6b7784;"></i></span>
                            <div class="col-md-7">
                                <input autocomplete="off" id="user_password" placeholder="New Password" name="new_password" size="30" type="password" class="form-control">
                            </div>
                        </div>
						 <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-location-arrow fa-2x" style="color:#6b7784;"></i></span>
                            <div class="col-md-7">
                              <input id="user_postal_address" name="addr" size="30" type="text" placeholder="Permanent Address" value="<?php echo $addr1;?>" class="form-control">
                            </div>
                        </div>

                        

                        <div class="form-group">
                            <div class="col-md-12 text-center">
<input type="submit" value="SAVE" class="btn btn-primary"  name="proceed">&nbsp;&nbsp;&nbsp;
<input type="reset" value="RESET" class="btn btn-primary ">
 

                                
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
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
					 <p  style="margin-top:25px;" class="copyright" >2015 &copy; <a href="http://w3layouts.com/">PyxyMail</a></p>
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


        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
       
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/retina-1.1.0.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>

<?php 


//session_start();// Starting Session
include 'connect.php';
 include 'session1.php';
 


// Report all errors except E_NOTICE
error_reporting(0); 


	if(isset($_POST['proceed']))
        {
		
		$fname=$_POST['first_name'];
		$lname=$_POST['last_name'];
		$email=$_POST['email'];
		$company=$_POST['comp'];
                $_SESSION['comp']=$company;
		$address=$_POST['addr'];
if(isset($paid_session))
{
               $parentemail=$user_check1;
}
elseif(isset($login_session))
{
		$parentemail=$user_check;
}
                $password=$_POST['password'];
		$newpass=$_POST['new_password'];

if(isset($paid_session))
{
               $emailsession1=$user_check1;
}
elseif(isset($login_session))
{
		$emailsession=$user_check;
}
    
               
               if($email==$emailsession)
                {
                           
                           $result = mysqli_query($conn, "SELECT password FROM registered_members WHERE email='$user_check' ");
                                $row=mysqli_fetch_array($result);
                                $oldpassdb= $row['password'];
                                if(empty($newpass) && empty($password))
                                   {
                                      $password=$row['password'];
                                      $newpass=$row['password'];
                                   }
                                if($password== $oldpassdb) 
                                {
                                        mysqli_query($conn, "UPDATE registered_members set password='$newpass' WHERE email='$user_check' ");
                                       //echo '<script>alert("Password changed successfully !");</script>';
                                
                                }   
                                else
                                { 
                                echo '<script>alert("Old Password dosenot match !");</script>'; 
                                }
                 } 
elseif($email== $emailsession1)
                {
                           
                           $result = mysqli_query($conn, "SELECT password FROM paidregistered_members WHERE useremail='$user_check1' ");
                                $row=mysqli_fetch_array($result);
                                $oldpassdb= $row['password'];
                                if(empty($newpass) && empty($password))
                                   {
                                      $password=$row['password'];
                                      $newpass=$row['password'];
                                   }
                                if($password== $oldpassdb) 
                                {
                                        mysqli_query($conn, "UPDATE paidregistered_members set password='$newpass' WHERE useremail='$user_check1' ");
                                       //echo '<script>alert("Password changed successfully !");</script>';
                                
                                }   
                                else
                                { 
                                echo '<script>alert("Old Password dosenot match !");</script>'; 
                                }
                 }     
if(isset($paid_session))
{ 
                 $sql2="SELECT * FROM  personalInfo WHERE email='$user_check1'";
}
elseif(isset($login_session))
{ 
                 $sql2="SELECT * FROM  personalInfo WHERE email='$user_check'";
}


$result2=mysqli_query($conn,$sql2);

$count=mysqli_num_rows($result2);
if($count == 1)
                {
                        mysqli_query($conn, "UPDATE personalInfo set first_name='$fname' , last_name='$lname' , email='$email' ,comp='$company',addr='$address',parentemail='$parentemail' WHERE email='$email' ");
                       
                }  
               else
               {
                  $sql="Insert into personalInfo values('".$fname."','".$lname."','".$email."','".$company."','".$address."','".$parentemail."')";
			
			$query=mysqli_query($conn, $sql);
			if(!$query)
                        {	
			    echo "failed" .mysqli_error();
			}
			else
                        {
                             echo '<script>alert("You Have Successfully updated this information!");</script>';
                        }

             }    
}


?>