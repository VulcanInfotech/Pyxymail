<!DOCTYPE html>
<?php
include 'connect.php';
include 'session1.php';
?>

<head>
        <meta charset="utf-8">
        <title>Audience</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
 <link href='src/vendor/normalize.css/normalize.css' rel='stylesheet'>
  <link href='src/vendor/fontawesome/css/font-awesome.min.css' rel='stylesheet'>
  <link href="dist/vertical-responsive-menu.min.css" rel="stylesheet">
  <link href="css/demo.css" rel="stylesheet">


        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,400italic,300italic,300,500,500italic,700,900">
        <link rel="stylesheet" href="css/bootstrap.css"> 
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/crazymimi-misc.css">
                <link rel="stylesheet" href="css/crazymimi-misc.css">
        <link rel="stylesheet" href="css/crazymimi-style.css">
        <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
         
		<link rel="stylesheet" href="css/new.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>		 
          
        <!--<script src="js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
        <script src="http://code.jquery.com/jquery-1.9.1.js" type="text/javascript"></script>-->

<link rel="shortcut icon" type="image/x-icon" href="Pmail.ico" />
    <link rel="icon" type="image/x-icon" href="Pmail.ico" />

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
<script>
 $(document).ready(function(){
 $("#close").click(function() {
 location.reload();
});
});

    $(document).ready(function(){
 $(".ll").click(function() {
 location.reload();
});
});



<script type="text/javascript">
    
function resetform() {
document.getElementById("nameemail1").reset();
document.getElementById("listform").reset();
document.getElementById("formAllContact").reset();
document.getElementById("formViewList").reset();
document.getElementById("formViewAllContact").reset();
document.getElementById("formUploadCsv").reset();
}



function clrs() {
    document.getElementById('ffname').value = "";
    document.getElementById('eemail').value = "";
} 
function clr()
{document.getElementById('lname').value = "";
    }
 
    $(document).ready(function(){
 $("#close").click(function() {
 location.reload();
});
});

    $(document).ready(function(){
 $(".ll").click(function() {
 location.reload();
});
});


</script>

<style>

.ll{margin-top:5%;
color:#FF6600;}

img#close {
position:absolute;
right:1px;
height:20px;
width:20px;
top:1px;
cursor:pointer;
//border-radius:7px 7px 7px 7px;
}

/*!
 * Start Bootstrap - Simple Sidebar HTML Template (http://startbootstrap.com)
 * Code licensed under the Apache License v2.0.
 * For details, see http://www.apache.org/licenses/LICENSE-2.0.
 */

/* Toggle Styles */
input[type=text] {
width:60%;
margin-top:30px;
border:1px solid #ccc;
font-size:16px;
font-family:raleway;
border-radius:5px 5px 5px 5px;
box-shadow:2px 5px 7px #CCCCCC;
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
  content: '';
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
    <body style="background-color:#F2F2F2; overflow-x:hidden;">



<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3&appId=1625276917695542";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>





<!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->

      <!--  <section id="pageloader">
            <div class="loader-item fa fa-spin colored-border"></div>
        </section> -->

<!-- /#pageloader -->

        <header class="site-header container-fluid">
            <div class="top-header">
                <div class="logo col-md-6 col-sm-6">
                  <h1><img src="./images/pyxymail3.jpg"></img></h1>

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
                <div class="row_u">
                    <div class="main-header-left col-md-3 col-sm-6 col-xs-8">
                        <a href="index2.php"><img src="./images/home.png" height=42 width=40></img>
                    </div> <!-- /.main-header-left -->
                    <div class="menu-wrapper col-md-9 col-sm-6 col-xs-4">
                        <a href="#" class="toggle-menu visible-sm visible-xs"><i class="fa fa-bars"></i></a>
                        <ul class="sf-menu hidden-xs hidden-sm">
                           
                             <li class="active"><a href="audience1.php">Audience</a></li>
                            <li ><a href="dashboard_compose.php">Promotion</a></li>
                            <li ><a href="campaign_dash.php">Campaign</a></li>
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
<li><a href="contactus2.php">Contact</a > </li>
                        </ul>
                    </div> <!-- /.menu-wrapper -->
                </div> <!-- /.row -->
            </div> <!-- /.main-header -->
             <div id="responsive-menu">
                <ul>
                     
                           <li class="active" ><a href="audience1.php">Audience</a></li>
                             <li ><a href="dashboard_compose.php">Promotion</a></li>
                              <li ><a href="campaign_dash.php">campaign</a></li>
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
<li><a href="contactus2.php">Contact</a > </li>
                            <li><a><i class="fa fa-user"></i>&nbsp;&nbsp;<?php include 'session1.php';  echo $paid_user; echo $login_session;?></a>
                                    <ul>
                       
                              
                                          <li><a href="logout.php">&nbsp;&nbsp;Logout</a></li>
                            
                                    </ul>
                           </li>
                </ul>
            </div>
            
        </header> 

 <div class="content-wrapper" >
 <div class="container" >


<button type="button" id="toggleMenu" class="toggle_menu">
      <i class="fa fa-bars" style="margin-top:55px;margin-left:30px;"></i>
    </button>
    
 
  <nav class="vertical_nav" style="margin-top:150px;z-index:9999;">

    <ul id="js-menu"  class="menu">
 <li class="menu--item">
        <label class="menu--link" >
          <i class="menu--icon  fa fa-fw fa-briefcase" style="margin-top:6px;margin-left:15px;"></i>
           <a href="#addcontact" data-toggle="modal" data-target="#myModal2" onclick="resetform();"style="margin-left:24px;">Add Contacts</a>
        </a>
      </li>

      <li class="menu--item">
        <label class="menu--link" >
          <i class="menu--icon  fa fa-fw fa-cog" style="margin-top:6px;margin-left:15px;"></i>
          <a href="#allcontacts" data-toggle="modal" data-target="#myModal3" onclick="resetform();"style="margin-left:24px;">View Contacts</a>
        </a>
      </li>

      <li class="menu--item  ">

        <label class="menu--link" >
          <i class="menu--icon  fa fa-fw fa-user" style="margin-top:6px;margin-left:15px;"></i>
           <a href="#emaillist" data-toggle="modal" data-target="#myModal1" onclick="resetform();"style="margin-left:24px;">Create  list</a>
        </label>

        
      </li>
<li class="menu--item  ">

        <label class="menu--link" ">
          <i class="menu--icon  fa fa-fw fa-database" style="margin-top:6px;margin-left:15px;"></i>
          <a href="#viewlist" data-toggle="modal" data-target="#myModal4" onclick="resetform();"style="margin-left:24px;">View Lists</a>
        </label>

        
      </li>


     

      
      

    </ul>

    <button id="collapse_menu" class="collapse_menu">
      <i class="collapse_menu--icon  fa fa-fw"></i>
     <!-- <span class="collapse_menu--label"></span>-->
    </button>

  </nav>


<div class="content-wrapper">

<div class="panel panel-default " style="width:80%; margin-left:18%; margin-top:170px;box-shadow:1px 5px 7px #999999;" >
			<div class="panel-body" >

<div class="col-md-12" style="font-size:20px;color:orange; ">Add contacts to <?php echo $listnm=$_GET['listname'];?></div><BR>							
<div class="row" >
<div class="col-md-2" style="margin-left:40px;"></div>
  <div class="col-md-3" style="font-size:15px;margin-top:5%;text-align:justify;"> 

<input type='checkbox' name='check' id='check' onclick='selectLB()' ><b style="font-size:16px;">Select All</b>
<form name="content" action="sample.php" method="POST">
		
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

								echo "<select size=10 id='FromLB' name='FromLB[]' multiple style='width:180px; height:auto;'>";
								echo "<option value=''  disabled='' style='color:orange;'>Contacts</option>";
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
								
								echo "<option value='$f1'>$f1</option>";
								}
								
								 //echo "<option value='$f'>$f</option>";
								
										/*foreach($explodedmember as $T_array1)
																								  
									   {
									   if($row1['Name']==$T_array1)
									   {
									   }elseif($T_array1==""){}
									   else{
									   echo "<option value='$T_array1'>$T_array1</option>";
									   }
									   }*/
								
								//  echo "<option value='" . $explodedmember."'>" . $explodedmember ."</option>";
								// echo "<option value='" . $row1['Name'] ."'>" . $row1['Name'] ."</option>";
								
								 echo "</select>";
							?>
  </div>

<div class="col-md-1" style="margin-top:8%;"> 
 
    <br><br>
								
					<input type="button"  onClick="move(this.form.elements['FromLB[]'],this.form.elements['ToLB[]'])" value="->"></br></br>
					<input type="button"  onClick="move(this.form.elements['ToLB[]'],this.form.elements['FromLB[]'])" value="<-"> 
						
  </div>
  
 <div class="col-md-3" style="font-size:15px;margin-top:8%;text-align:justify;"> 
 
    <?php
							   
								
								/*echo"<input type='checkbox' name='check1' id='check1' onclick='selectLA()'><b style='font-size:16px;'>Select All</b>";*/
								 $sql=("select Members from list where lname='$listnm' " );
								$result=mysqli_query($conn,$sql);
								$fetch=mysqli_fetch_array($result);
							  $ToLB=$fetch['Members'];
								$ToLB_array=@explode("|",$ToLB);
								
								//$r=@count($result);
								
								echo"<center>";

							echo "<select name='ToLB[]' id='ToLB' size='10' multiple style='width:180px; height:auto;'>";
							   
								$_SESSION['lname']=$_GET['listname'];
							   if(isset($_GET['listname']))
							   {
							   $listnm=$_GET['listname'];

							   echo "<option value=''  disabled='' style='color:orange;'>$listnm</option>";
									   
									  /*  for($i=0;$i<$r;$i++)
			  
										 {		
											 echo"<option value='$ToLB_array[$i]'>".$ToLB_array[$i]."</option>";
			 
										 }	*/ 
										 //$name1=("select * from list where lname='$listnm' and Email='$user_check');
									   
									   
									   
										foreach($ToLB_array as $T_array)
									   {
									   echo "<option value='$T_array'>$T_array</option>";
									   }
													  
							  }
								

								echo "</select></center><input type='submit' id='save1' value='SAVE' style='background-color:orange; color:white; 'class='btn btn-default' name='s1' onclick='selectAll()' disabled='disabled'>";

echo" <a href='audience1.php'><button type='button' class='btn btn-default' data-dismiss='modal' style='background-color:orange;color:#fff;'>CLOSE</button></a>";
								?>
  	
<br>
					 <!-- /.projects-holder -->					  
		</div>

<div class="col-md-1"></div>
<div class="col-md-12"style="font-size:15px;">*Press Command or Ctrl to Select Multiple Contacts</div> 
					</form>
					</div>
            
</div>
</div>
 <div class="modal fade" id="myModal2" role="dialog"style="z-index:9999;">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        
        <div class="modal-body" >
        
        <div class="tab-pane fade active in" id="addcontact">
        <center>
		<form id="nameemail1"  name="nameemail1" method="post">
                        
                        <h4 style="color:#FF6600;"><b>Contact details<img id="close" src="images/close1.png"  data-dismiss="modal"></b></h4>
                        <div class="scrollit1" >
                             <input type="text" name="ffname" id="ffname" placeholder="Enter first name..."required >
                             <input type="text" name="eemail" id="eemail" placeholder="Enter email....."required >
                        </div>
                        <br>
                        <input type="submit"  class="btn btn-default" name="submit" value="Ok" style="background-color:orange; width:20%; color:#fff;" id="submit">
                       <input type="button"  value="Import contacts" class="btn btn-default"  style="background-color:orange; width:auto; color:#fff;" data-toggle="modal" href="#myModal5">
<button type="button" class="btn btn-default" data-dismiss="modal" style="background-color:orange;  width:22%; color:#fff;" ><b>Close</b></button>

                        </form>
         </center>
			        </div></div>
        </div>
        
      </div>
      
    </div>
	

<script>
$(document).ready(function(){
    $("#nameemail1").on('submit',function(event){
    event.preventDefault();
        
        data = $(this).serialize();

        $.ajax({
        type: "POST",
        url: "popup_insert1.php",
        data: data
        }).done(function( msg ) {
        
        if(msg=="")
        {
        alert( "Nothing Added" );
		 document.getElementById('ffname').value = "";
    document.getElementById('eemail').value = "";
        
        }else{
        alert( "Message : " + msg );
		 document.getElementById('ffname').value = "";
    document.getElementById('eemail').value = "";
        
        
        }
        });
    });
});
</script>


<!--EMAIL LIST POPUP-->		

<div class="modal fade" id="myModal1" role="dialog" style="z-index:9999;">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        
        <div class="modal-body" style="height:200px;">
          
        <center>
        <div class="tab-pane fade active in" id="emaillist">
            <form id="listform" name="listform" method="post">
                <h4 class="ll" style="margin-top:10px;"><b style="font-size:25px;">List details<img id="close" src="images/close1.png"  data-dismiss="modal"></b></h4>
                        <input type="text" name="lname" id="lname" placeholder="Enter list name..." required  style="margin-top:10px;"><br><br>
              <input type="submit" name="submit" value="Ok" class="btn btn-default" style="background-color:orange;  width:20%; color:#fff;" id="submit">
<button type="button" class="btn btn-default" data-dismiss="modal" style="background-color:orange;  width:22%; color:#fff;" ><b>Close</b></button>
                           </form>
            
       
        
      </div>
	</center>
         
        </div>
        </div>
        
      </div>
      
    </div>
  </div>



<script>
$(document).ready(function(){
    $("#listform").on('submit',function(event){
    event.preventDefault();
        
        data = $(this).serialize();

        $.ajax({
        type: "POST",
        url: "list_insert1.php",
        data: data
        }).done(function( msg ) {
        
        if(msg=="")
        {
        alert( "Nothing Added" );
		        document.getElementById('lname').value = "";
        }else{
        alert( "Message : " + msg );
                document.getElementById('lname').value = "";
        }
        });
    });
});
</script>



<!--ALL CONTACTS POPUP-->	

<div class="modal fade" id="myModal3" role="dialog"style="z-index:9999;">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        
        <div class="modal-body" >
        
        <div class="tab-pane fade active in" id="allcontacts">
            <!--<form class="form-horizontal" action="list_insert.php" id="formAllContact" method="post" name="formAllContact">-->
            <center>
			<fieldset>
			<center><h4 style="color:#FF6600;"><b style="font-size:24px;">All Contacts details<img id="close" src="images/close1.png"  data-dismiss="modal"></b></h4>

			
					
						 <div style="">
											  
														  <?php 
                                                                                                                  
                                                                                                                  
																include 'connect.php';
if(isset($paid_session))
{
$audience=mysqli_query($conn,"SELECT * FROM audience where User='$user_check1' ");
}
elseif(isset($login_session))
{
$audience=mysqli_query($conn,"SELECT * FROM audience where User='$user_check' ");
}

																
                                                                                                                                   
                                                                                                                                 $countervar=0;                                                                                                         
                                echo "<form id='allcon' method='POST'>";                                                                                                                                                                                                                                                              
									
                                   echo "<table id='twotable'  >";
                                  echo "<thead>";
                                  echo "<tr style='background-color:#CCCCCC;'>";
                                   echo " <th>&nbsp;&nbsp;&nbsp;<input type='checkbox' id='selecctall'> Select All</th>";
                                  echo "<th><h4>Name</h4></th>";
                                  echo " <th>&nbsp;&nbsp;&nbsp;&nbsp;</th>";
                                  echo "<th><h4>Emails</h4></th>";
                                  echo "<th>&nbsp;</th>";
                                  echo "<th>&nbsp;</th>";
                                  echo "<th>&nbsp;</th>";
                                  echo "</tr>";
                                  echo "</thead>";
                                  while($audadd=mysqli_fetch_array($audience))
                                        {
                                             $namech='somename'.$countervar;
                                             $idname='idmane'.$countervar;
                                             $emailch='emailch'.$countervar;
                                             $chkbox='chkboxx'.$countervar;
                                   echo "<tbody>";
                                  echo "<tr>";
                                  echo "<td>&nbsp;&nbsp;&nbsp;<input type='checkbox'  class='checkbox1' name='chkbox[]'  value='".$audadd['id']."'></td>";
                                  echo "<td><font size='2'><input type='text' size='9' class='form-control'name='".$namech."' style='text-align:left; border:0; background: transparent; width:100%;' value='".$audadd['Name']."'></font></td>";
                                  echo "<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>";
                                  echo "<input type='hidden' name='".$idname."' value='".$audadd['id']."'>";
                                  echo "<td><font size='2'><input type='text' size='9' name='".$emailch."'class='form-control' style='text-align:left; border:0; background: transparent; width:100%;' value='".$audadd['Email']."'></font></td>";
                                                                                                                                       //echo "<td align='right'><br><input  type='submit' class='btn success' value='update'/></td>";
                                                                                                                                        echo "<td>&nbsp;</td>";
                                                                                                                                        //echo "<td align='right'><br><a href='audiencedelete.php?del=$audadd[id]' onClick=\"javascript: return confirm('Are you sure want to delete');\">Delete</a></font></td>";

                                  echo "</tr>";
                                 
                                                                                                                                       
                                                                                                                                         $countervar++;
                                                                                                                                         
                                                                                                                                    }
                                                                                                                                     echo "</tbody>";
                                                                                                                                        
                                  echo "</table>";echo "</br>";echo "</br>";
echo "<input  type='submit' class='btn success' value='Update'/>";
									echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                                   echo "<input   type='button'  class='btn success' name='delete' id='delete' value='Delete' onClick=\"javascript: submitForm1('deletecontact.php');\"/>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo"<button type='button' class='btn btn-default' data-dismiss='modal' style='background-color:orange;   color:#fff;' ><b>Close</b></button>";
								   echo "</br>";
                                  
                                                                                                                                  echo "</form>";
                                                                                                                                 
                              ?>
                                                                                                                        
                                          </div>                                                                          
                                                                                                                                       
                    
                                                                                       


                                                                                                                                       
										
                                                                                       
                                                                                                                                                              

															
															
            </fieldset>
			
            <!--</form>-->
        </div></div>
        </div>
        
      </div>
      
    </div>
	

        
        
<script>
    function submitForm1(action)
    {
    var r = confirm("Are you sure want to delete ?");
if (r == true) {
   
        document.getElementById('allcon').action = action;
        document.getElementById('allcon').submit();
} 
    }
</script>


        
		<script>
$(document).ready(function(){
    $("#allcon").on('submit',function(event){
    event.preventDefault();
        
        data = $(this).serialize();

        $.ajax({
        type: "POST",
        url: "updateajax.php",
        data: data
        }).done(function( msg ) {
       
       if(msg=="")
        {
        alert("Nothing updated");
        
        }
                        else{
                        
                        if(msg=="deleted")
       {
       
       location.reload();
       
       }else{
        alert( "Message : " + msg );
        }
        }
        });
    });
});

</script>
<script>
$(document).ready(function() {
    $('#selecctall').click(function(event) {  //on click 
        if(this.checked) { // check select status
            $('.checkbox1').each(function() { //loop through each checkbox
                this.checked = true;  //select all checkboxes with class "checkbox1"               
            });
        }else{
            $('.checkbox1').each(function() { //loop through each checkbox
                this.checked = false; //deselect all checkboxes with class "checkbox1"                       
            });         
        }
    });
    
});
</script>

        
        

<!--VIEW LIST POPUP-->

<div class="modal fade" id="myModal4" role="dialog"style="z-index:9999;">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        
           <div class="tab-pane fade active in" id="viewlist">
           <!-- <form class="form-horizontal" action="#" id="formViewList" method="post" name="formViewList">-->
            <center>
			<fieldset>
			<center><h4 style="color:#FF6600;"><b style="font-size:24px;">View List details<img id="close" src="images/close1.png"  data-dismiss="modal"></b></h4></center>
						
                   
			<table class='table'>
														  
													<?php
										include 'connect.php';
if(isset($paid_session))
{
$audience=mysqli_query($conn,"SELECT * FROM list where Email='$user_check1'");
}
elseif(isset($login_session))
{
$audience=mysqli_query($conn,"SELECT * FROM list where Email='$user_check'");
}
										
                                                                                $countervar=0;
                                                                                echo "<form id='alllist' method='POST'>";
																				
                                                                                
                                                                                 echo "<table class'col-md-12'  >";
                                  echo "<thead>";
                                  echo "<tr style='background-color:#CCCCCC;'>";
                                   echo " <th>&nbsp;&nbsp;&nbsp;<input type='checkbox' id='selecctall1' > Select All</th>";
                                  echo "<th><h4>List Name</h4></th>";
                                                                                                                                        echo " <th>&nbsp;&nbsp;</th>";
                                                                                                                                        echo "<th><h4>Edit</h4></th>";
                                                                                                                                        echo "<th>&nbsp;</th>";
                                                                                                                                        echo "<th>&nbsp;</th>";
                                                                                                                                        echo "<th>&nbsp;</th>";
                                                                                                                                        echo "</tr>";
                    while($row=mysqli_fetch_array($audience))
                    {
                      
                                                                                        $listnm='somename'.$countervar;
                                                                                        $idname1='idmane'.$countervar;

                     echo "<tr>";
                                                                                          echo "<td>&nbsp;&nbsp;&nbsp;<input type='checkbox' class='checkbox11' name='chkbox1[]'  value='".$row['id']."'></td>";
                                                                                        echo "<td><font size='2'><input type='text' size='9' name='".$listnm."'class='form-control' style='text-align:left; border:0; background: transparent; width:100%;' value='".$row['lname']."'></font></td>";
                                                                                        echo "<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>";
                                                                                        echo "<input type='hidden' name='".$idname1."' value='".$row['id']."'>";
                                                                                         
                                                                                         
        
                     
                      echo "<td><a href='dash1.php?listname=$row[lname]'>Edit</a></td>";
                      echo "</tr>";
                      
                                                                                        $countervar++;

                    }
                    echo "</tbody>";
                      echo "</table>";
                      
echo "<br><input  type='submit' class='btn success' value='Update'/>";
																				echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                                                                                echo "<input   type='button'  class='btn success' name='delete1' id='delete' value='Delete' onClick=\"javascript: submitForm('deletelist.php');\"/>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo"<button type='button' class='btn btn-default' data-dismiss='modal' style='background-color:orange;   color:#fff;' ><b>Close</b></button>";
                                                                                echo "</br>";
echo "</center>";
                    echo "</form>";echo "</br>";

                    ?> 

				</table>
            </fieldset>
			</center>
            <!--</form>-->
        </div>

        </div>
        
      </div>
      
    </div>

		<script>
		function submitForm(action)
    {
    
    var rrr = confirm("Are you sure want to delete ?");
if (rrr== true) {
        document.getElementById('alllist').action = action;
        document.getElementById('alllist').submit();
    }
    
    }
</script>
    
         <script>
$(document).ready(function(){
    $("#alllist").on('submit',function(event){
    event.preventDefault();
        
        data = $(this).serialize();

        $.ajax({
        type: "POST",
        url: "updateajax1.php",
        data: data
        }).done(function( msg ) {
        
        if(msg=="")
        {
        alert("Nothing updated");
        
        }else{
                        
                        if(msg=="deleted")
       {
       
       location.reload();
       
       }else{
        alert( "Message : " + msg );
        }
        }
        });
    });
});
</script>
<script>
$(document).ready(function() {
    $('#selecctall1').click(function(event) {  //on click 
        if(this.checked) { // check select status
            $('.checkbox11').each(function() { //loop through each checkbox
                this.checked = true;  //select all checkboxes with class "checkbox1"               
            });
        }else{
            $('.checkbox11').each(function() { //loop through each checkbox
                this.checked = false; //deselect all checkboxes with class "checkbox1"                       
            });         
        }
    });
    
});
</script>


   
<!--UPLOAD CSV FILE POPUP-->



 <div class="modal fade" id="myModal5" role="dialog"style="z-index:9999;">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        
        <div class="modal-body" >
        
       <div class="tab-pane fade active in" id="uploadcsv">
              <!-- <form class="form-horizontal" action="#" id="formUploadCsv" method="post" name="formUploadCsv">-->
            <center>
			<fieldset>
			<h4 style="color:#FF6600;"><b>Upload CSV File<img id="close" src="images/close1.png"  data-dismiss="modal"></b></h4>
			<table>
			<?php


                                        if (isset($_POST['uploadcsv'])) {
                                                
                                               $mimes = array(
                                              
    'text/csv',
    'text/plain',
    'application/csv',
    'text/comma-separated-values',
    'application/excel',
    'application/vnd.ms-excel',
    'application/vnd.msexcel',
    'text/anytext',
    'application/octet-stream',
    'application/txt',
);

if(in_array($_FILES['filename']['type'],$mimes)){
  
                                                
                                                if (is_uploaded_file($_FILES['filename']['tmp_name'])) {
                                                
                                                
                                                        
                                                        readfile($_FILES['filename']['tmp_name']);
                                                }
                                        
                                        $linecount=0;
                                                //Import uploaded file to Database
                                                $handle = fopen($_FILES['filename']['tmp_name'], "r");
                                        
                                                while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                                                
                                                  $c=count($handle);
                                                        $linecount++;
                                               
                                               
 if(isset($paid_session))
{
                                                $uppp = mysqli_query($conn, "SELECT * FROM audience WHERE Email='".$data[1]."' and User='".$user_check1."' ");
}
 elseif(isset($login_session))
{
                                                $uppp = mysqli_query($conn, "SELECT * FROM audience WHERE Email='".$data[1]."' and User='".$user_check."' ");
}
                                                
                                                        
                                                if(mysqli_num_rows($uppp) > 0){
                                        
                                                
                                        }else{
                                        
                                        
                                        $emailval1=$data[1];
                                        
                                        $domain1=substr(strrchr($emailval1,"@"),1);
                                        
                                        
                                        $regex = "/^[A-Za-z0-9._]*\@[A-Za-z]*\.[A-Za-z]{2,5}$/"; 
                                        
                                        if ( preg_match( $regex, $data[1]) ) {
                                             
                                        
                                        if(filter_var(gethostbyname($domain1),FILTER_VALIDATE_IP)) {
                                        
 if(isset($paid_session))

{                                          $count=0;
                                         $import="INSERT into audience(id,Name,Email,User) values('','$data[0]','$data[1]','$user_check1')";
$count=$count + 1;
 
$sql5=mysqli_query($conn,"select * from used_contact where User='$user_check1'");

$row5=mysqli_fetch_assoc($sql5);
$oldused=$row5['usedcontact'];

$newused=$oldused + $count;

mysqli_query($conn,"update used_contact set usedcontact=$newused where User='$user_check1'");
}
elseif(isset($login_session))
{
$count1=0;
                                         $import="INSERT into audience(id,Name,Email,User) values('','$data[0]','$data[1]','$user_check')";
$count1=$count1 + 1;


$sql8=mysqli_query($conn,"select * from registered_members where email='$user_check' ");
$row8=mysqli_fetch_assoc($sql8);
$oldno1=$row8['no_contact'];

$newno1=$oldno1 + $count1;

mysqli_query($conn,"update registered_members set no_contact=$newno1 where email='$user_check'");

}

                                                        mysqli_query($conn,$import) or die(mysqli_error());
                                         
                                         }
                                        
                                        }
                                        
                                        
                                        
                                        }
                                                
                                           }     
                                                        
                                                
                                        
                                              fclose($handle);
                                        echo "<script>
                                              
                                          alert('Upload successful $linecount contacts added!!');
                                        window.location.href='audience1.php';
                                        </script>";
                                        
                                        } else {
  echo "<script>
                                              
                                          alert('Wrong file format only .csv fiel is allowed upload failed ');
                                        window.location.href='audience1.php';
                                        </script>";
                                        
                                        }
  
                                        
                                                        //view upload form
                                        }else {
                                        
                                        
                                                print "<form enctype='multipart/form-data' action='' method='post'>";
                                                
                                                
                                                print "File name to import:<br />\n";
                                                
                                                print "<input size='50' type='file' name='filename' style='width:250px;' accept='.csv' required></br>";
												
                                                print "Note : upload csv file in this format<br><br> name,name@domain.com<br>name,name@domain.com<br><br>";
												
                                                print "<input type='submit' name='uploadcsv' value='Upload' style='background-color:orange; color:#fff;'>&nbsp;&nbsp;&nbsp;&nbsp;";
print "<button type='button' class='btn btn-default' data-dismiss='modal' style='background-color:orange;   color:#fff;' ><b>Close</b></button>";
                                                
                                                //print "<input type='button'  value='Cancel' class='cls'  style='background-color:orange; color:#fff;'>";
                                        }

?>
</table>

            </fieldset>
			</center>
           <!-- </form>-->
</div></div>
        </div>
        
      </div>
      
    </div></div>
<hr style="margin-top:-60px;" >
<div class="col-md-12" style="margin-top:-35px;" >
        
          <div class="social-icons">
               
                     <div class="fb-like" data-href="https://www.facebook.com/pages/PyxyMail/952542731452333" data-layout="button_count" data-action="like"          data-show-faces="true" data-share="true">
                     </div>
                  				
         </div>
         <p style="float:left; ">&copy; Copyright PyxyMail - 2015.</p>
       </div>	</div>
						


       <!--wraper-->



       <script src="js/vendor/jquery-1.11.0.min.js"></script>
       <!-- <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>-->
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Preloader -->
      <!--  <script type="text/javascript">
            //<![CDATA[
            $(window).load(function() { 
                $('.loader-item').fadeOut(); 
                    $('#pageloader').delay(350).fadeOut('slow');
                $('body').delay(350).css({'overflow-y':'visible'});
            })
            //]]>
        </script>-->
		 
    <script src="http://malsup.github.com/jquery.form.js"></script> 
    <script> 
        // wait for the DOM to be loaded 
        $(document).ready(function() { 
            // bind 'myForm' and provide a simple callback function 
            $('#myForm').ajaxForm(function() { 
                alert("Updated!"); 
            }); 
        }); 
    </script> 
<script src="dist/vertical-responsive-menu.min.js"></script>
    </body>
</html>