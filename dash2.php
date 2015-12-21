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
    <link rel="shortcut icon" type="image/x-icon" href="favicon (12).ico" />
    <link rel="icon" type="image/x-icon" href="favicon (12).ico" />
               
<style>
body {
    background-color:#34495e;
}
.panel-contact {
        
	border-color: #ccc;
	-webkit-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
	-moz-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
	box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
}
.panel-contact>.panel-heading {
	color: #00415d;
	background-color: #fff;
	border-color: #fff;
	text-align:center;
}
.panel-contact>.panel-heading a{
	text-decoration: none;
	color: #666;
	font-weight: bold;
	font-size: 15px;
	-webkit-transition: all 0.1s linear;
	-moz-transition: all 0.1s linear;
	transition: all 0.1s linear;
}
.panel-contact>.panel-heading a.active{
	color: white;//#029f5b;
	font-size: 17px;
border-radius:3px 3px 3px 3px;
background-color:#34495e;
padding:9px;
}
.panel-contact>.panel-heading hr{
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
.panel-contact input[type="text"],.panel-contact input[type="email"],.panel-contact input[type="password"] {
	
	border: 1px solid #ddd;
	font-size: 16px;
	-webkit-transition: all 0.1s linear;
	-moz-transition: all 0.1s linear;
	transition: all 0.1s linear; 
}
.panel-contact input:hover,
.panel-contact input:focus {
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

    $('#contact-form-link').click(function(e) {
		$("#contact-form").delay(100).fadeIn(100);
 		$("#list-form").fadeOut(100);
		$('#list-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
	$('#list-form-link').click(function(e) {
		$("#list-form").delay(100).fadeIn(100);
 		$("#contact-form").fadeOut(100);
		$('#contact-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});

});

</script>
	</head>
	<body style="overflow-x:hidden;">
		
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


    


<div class="row"  style="font-family: Arial,Helvetica,Verdana,sans-serif;"">
<div class="container" >
  <div class="col-md-10 col-md-offset-1 " >
  <div class="panel panel-success"style="margin-top:15%">
   <div class="panel-heading" style="font-size:22px;"><center><B>Add contacts to <?php echo $listnm=$_GET['listname'];?></B></center></div>
    <div class="panel-body" style="background:#f2f2f2;"">
  



					


  <div class="col-md-4 col-md-offset-1" style="margin-top:-10px;"> 

<input type='checkbox' name='check' id='check'  onclick='selectLB()' ><b style="font-size:16px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Select All</b>
<form name="content" action="sample.php" method="POST" >
		
    <?php
if(isset($paid_session))
{
								$sql=("select `Name` from audience where User='$user_check1'" );
}
elseif(isset($login_session))
{
								$sql=("select `Name` from audience where User='$user_check'" );
}

								$result=mysqli_query($conn,$sql);

				echo "<select size=16 id='FromLB' name='FromLB[]' multiple style=' height:auto;' class='form-control'>";
								echo "<option value=''  disabled=''  style='color:red;font-weight:bold;'>

<B>Contacts</B></option>";

echo"<option disabled>────────────────────</option>";
                                                               // echo "<option value=''  disabled='' >&nbsp;</option>";


if(isset($paid_session))
{
								$sql11=("select * from list where Email='$user_check1' and lname='$_GET[listname]'" );

}
elseif(isset($login_session))
{
								$sql11=("select * from list where Email='$user_check' and lname='$_GET[listname]'" );
}

								$result11=mysqli_query($conn,$sql11);
								while( $row12=mysqli_fetch_array($result11))
								{
								
								$listmembers= $row12['Members'];

								}

								$explodedmember=@explode("|",$listmembers);
								
								$_words = "'".@implode("','", $explodedmember)."'";
								if(isset($paid_session))
{
								$sql12=("select * from audience where User='$user_check1' and Name NOT in ($_words)" );
}
if(isset($login_session))
{
								$sql12=("select * from audience where User='$user_check' and Name NOT in ($_words)" );
}
								$result12=mysqli_query($conn,$sql12);
								
								while($f=mysqli_fetch_array($result12))
								{
								$f1=$f['Name'];
								
							echo "<option value='$f1' style='font-weight:bold; font-size:15px;text-align:center;'><b>$f1</b></option>";
echo"<option disabled>────────────────────</option>";
								}
								
								 //echo "<option value='$f'>$f</option>";
								
										/*foreach($explodedmember as $T_array1)
																								  
									   {
									   if($row1['Name']==$T_array1)
									   {
									   }elseif($T_array1==""){}
									   else{
									   echo "<option value='$T_array1'>$T_array1</option>";
echo"<option disabled>────────────────────</option>";
									   }
									   }*/
								
								//  echo "<option value='" . $explodedmember."'>" . $explodedmember ."</option>";
								// echo "<option value='" . $row1['Name'] ."'>" . $row1['Name'] ."</option>";
								echo"<hr>";
								 echo "</select>";
							?>
  </div>

<div class="col-md-2 "> 
 
    <br><br><br><br><br>				
					<button type="button" class="btn btn-default"  onClick="move(this.form.elements['FromLB[]'],this.form.elements['ToLB[]'])" style="margin-left:20px;"><i class="fa fa-arrow-right fa-1x" ></i></button></br></br> 
					<button type="button" class="btn btn-default "  onClick="move(this.form.elements['ToLB[]'],this.form.elements['FromLB[]'])" style="margin-left:20px;"><i class="fa fa-arrow-left fa-1x"></i></button></br>


						
						
  </div>
 
 <div class="col-md-4" style="font-size:15px;text-align:justify;margin-top:-10px;"> 
 
    <?php
							   
								
								echo"<input type='checkbox' name='check1' id='check1' onclick='selectLA()'><b style='font-size:16px;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Select All</b>";
if(isset($paid_session))
{
								 $sql=("select Members from list where lname='$listnm' and Email='$user_check1' " );
}
else
{
$sql=("select Members from list where lname='$listnm' and Email='$user_check' " );
}
								$result=mysqli_query($conn,$sql);
								$fetch=mysqli_fetch_array($result);
							  $ToLB=$fetch['Members'];
								$ToLB_array=@explode("|",$ToLB);
								
								//$r=@count($result);
								
								
							echo "<select name='ToLB[]' id='ToLB' size='16' multiple style=' height:auto;' class='form-control'>";
							   
								$_SESSION['lname']=$_GET['listname'];
							   if(isset($_GET['listname']))
							   {
							   $listnm=$_GET['listname'];

							echo "<option value=''  disabled='' style='color:red; font-weight:bold;'><b>$listnm</b></option>";

foreach($ToLB_array as $T_array)
									   {
									   echo "<option value='$T_array' style='font-size:15px; text-align:center;'>$T_array</option>";
echo"<option disabled>────────────────────</option>";

									   }
													  
							  }
								


								echo "</select></center>";echo"<br>";
echo"</div>";

echo"<div class='col-md-5 col-md-offset-4' >";
echo"<input type='submit' id='save1' value='SAVE' style='background-color:#34495e; color:white; margin-left:46px;'class='btn btn-default' name='s1' onclick='selectAll()' disabled='disabled'>";

echo" <a href='audience1.php'><button type='button' class='btn btn-default' data-dismiss='modal' style='background-color:#34495e;color:#fff;'>CLOSE</button></a>";
echo"</div>";								
?>
  	
<br>
					 <!-- /.projects-holder -->					  
		</div>


					</form>
					</div>
            
</div>
</div>


       </div>
      
</div></div></div></div>
  

	





  

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
		
  <script type="text/javascript">
        
    function selectAll() 
    { 
        selectBox = document.getElementById("ToLB");

        for (var i = 1; i < selectBox.options.length; i++) 
        { 
             selectBox.options[i].selected = true; 
        } 
    }
    
    function selectLB() 
    { 
    
    if(document.getElementById('check').checked)
    {
        selectBox = document.getElementById("FromLB");

        for (var i = 0; i < selectBox.options.length; i++) 
        { 
             selectBox.options[i].selected = true; 
        } 
      }
      else
      {
      for (var i = 0; i < selectBox.options.length; i++) 
        { 
             selectBox.options[i].selected = false; 
        } 
      }
    }
    
function selectLA() 
    { 
    
    if(document.getElementById('check1').checked)
    {
        selectBox = document.getElementById("ToLB");

        for (var i = 0; i < selectBox.options.length; i++) 
        { 
             selectBox.options[i].selected = true; 
        } 
      }
      else
      {
      for (var i = 0; i < selectBox.options.length; i++) 
        { 
             selectBox.options[i].selected = false; 
        } 
      }
    }




    function validateEmail() {
    var emailText = document.getElementById('email').value;
    var pattern =/^[A-Za-z0-9._]*\@[A-Za-z]*\.[A-Za-z]{2,5}$/;
     var tx= document.getElementById('fname').value;

     
        var pt=/^[A-Za-z\s]+$/;
   
       if (pattern.test(emailText) && (pt.test(tx)))
       {
        return true;
    } else {
        alert('Enter details proper format');
        return false;
    }
}

window.onload = function() {
    document.getElementById('email_form').onsubmit = validateEmail;
}
</script>

        <script language="javascript">

function move(tbFrom, tbTo) 
{
 var arrFrom = new Array(); var arrTo = new Array(); 
 var arrLU = new Array();
 var i;
 for (i = 0; i < tbTo.options.length; i++) 
 {
  arrLU[tbTo.options[i].text] = tbTo.options[i].value;
  arrTo[i] = tbTo.options[i].text;
 }
 var fLength = 0;
 var tLength = arrTo.length;
 for(i = 0; i < tbFrom.options.length; i++) 
 {
  arrLU[tbFrom.options[i].text] = tbFrom.options[i].value;
  if (tbFrom.options[i].selected && tbFrom.options[i].value != "") 
  {
   arrTo[tLength] = tbFrom.options[i].text;
   tLength++;
  }
  else 
  {
   arrFrom[fLength] = tbFrom.options[i].text;
   fLength++;
  }
}

tbFrom.length = 0;
tbTo.length = 0;
var ii;

for(ii = 0; ii < arrFrom.length; ii++) 
{
  var no = new Option();
  no.value = arrLU[arrFrom[ii]];
  no.text = arrFrom[ii];
  tbFrom[ii] = no;
}

for(ii = 0; ii < arrTo.length; ii++) 
{
 var no = new Option();
 no.value = arrLU[arrTo[ii]];
 no.text = arrTo[ii];
 tbTo[ii] = no;
}


document.getElementById("save1").disabled = false;
}
</script>


<script>

var rowCount = 0;
function addMoreRows(frm) {
rowCount ++;
var recRow = '<p id="rowCount'+rowCount+'"><tr><td><input name="fname[]" id="name1" size="17%" required  ></td><td><input name="email[]" id="email1" type="email" required ></td></tr><a href="javascript:void(0);" onclick="removeRow('+rowCount+');">Delete</a></p>';
jQuery('#addedRows').append(recRow);
}
function removeRow(removeNum) {
jQuery('#rowCount'+removeNum).remove();
}

</script>


                <script src="js/bootstrap.js"></script>
		<script src="js/jquery.js"></script>

		
		
		
 
	</body>
</html>