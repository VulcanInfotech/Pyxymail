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



<!--U Css & Js-->

    <style type="text/css">
      body, html {
          //height: auto;
          margin-top: 8px;
          margin-left: -13%;
          //overflow:hidden;
          font-family: helvetica;
          font-weight: 100;
      }
      .container {
          position: relative;
          //height: 100%;
          width: 100%;
          left: -30px;
          -webkit-transition:  left 0.4s ease-in-out;
          -moz-transition:  left 0.4s ease-in-out;
          -ms-transition:  left 0.4s ease-in-out;
          -o-transition:  left 0.4s ease-in-out;
          transition:  left 0.4s ease-in-out;
      }
      .container.open-sidebar {
          left: 240px;
      }
      
      .swipe-area {
          position: absolute;
          width: 50px;
          left: 10;
          top: 0;
          height: 100%;
          //background: #f3f3f3;
          z-index: 0;
      }
      #sidebar {
          background: #34495e;
          position: absolute;
          width: 300px;
          height: 100%;
          left: -160px;
          box-sizing: border-box;
          -moz-box-sizing: border-box;
      }
      #sidebar ul {
          margin: 0;
          padding: 0;
          list-style: none;
      }
      #sidebar ul li {
          margin: 0;
      }
      #sidebar ul li a {
          padding: 15px 20px;
          font-size: 16px;
          font-weight: 100;
          //color: white;
          text-decoration: none;
          display: block;
          //border-bottom: 1px solid #C9223D;
          -webkit-transition:  background 0.3s ease-in-out;
          -moz-transition:  background 0.3s ease-in-out;
          -ms-transition:  background 0.3s ease-in-out;
          -o-transition:  background 0.3s ease-in-out;
          transition:  background 0.3s ease-in-out;
      }
      #sidebar ul li:hover a {
          //background: #C9223D;
      }
      .main-content {
          width: 100%;
          height: 100%;
          padding: 10px;
          box-sizing: border-box;
          -moz-box-sizing: border-box;
          position: relative;
      }
      .main-content .content{
          box-sizing: border-box;
          -moz-box-sizing: border-box;
      padding-left: 60px;
      width: 100%;
      }
      .main-content .content h1{
          font-weight: 100;
      }
      .main-content .content p{
          width: 100%;
          line-height: 160%;
      }
      .main-content #sidebar-toggle {
          background: #34495e;
          border-radius: 3px;
          display: block;
          position: relative;
          padding: 10px 7px;
          float: left;
          margin-left:8%;
      }
      .main-content #sidebar-toggle .bar{
           display: block;
          width: 18px;
          margin-bottom: 3px;
          height: 2px;
          background-color: #fff;
          border-radius: 1px;   
      }
      .main-content #sidebar-toggle .bar:last-child{
           margin-bottom: 0;   
      }
    </style>
    <script type="text/javascript">
      $(window).load(function(){
        $("[data-toggle]").click(function() {
          var toggle_el = $(this).data("toggle");
          $(toggle_el).toggleClass("open-sidebar");
        });
         $(".swipe-area").swipe({
              swipeStatus:function(event, phase, direction, distance, duration, fingers)
                  {
                      if (phase=="move" && direction =="right") {
                           $(".container").addClass("open-sidebar");
                           return false;
                      }
                      if (phase=="move" && direction =="left") {
                           $(".container").removeClass("open-sidebar");
                           return false;
                      }
                  }
          }); 
      });
      
    </script>
$(function () {			
                    $('a[data-toggle="collapse"]').on('click',function(){
				
				var objectID=$(this).attr('href');
				
				if($(objectID).hasClass('in'))
				{
                                    $(objectID).collapse('hide');
				}
				
				else{
                                    $(objectID).collapse('show');
				}
                    });
                    
                    
                    $('#expandAll').on('click',function(){
                        
                        $('a[data-toggle="collapse"]').each(function(){
                            var objectID=$(this).attr('href');
                            if($(objectID).hasClass('in')===false)
                            {
                                 $(objectID).collapse('show');
                            }
                        });
                    });
                    
                    $('#collapseAll').on('click',function(){
                        
                        $('a[data-toggle="collapse"]').each(function(){
                            var objectID=$(this).attr('href');
                            $(objectID).collapse('hide');
                        });
                    });
                    
		});
<!--end U css & js--> 
<style>
body {
    background-color:#f2f2f2;
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



.paging-nav {
  text-align: right;
  padding-top: 2px;
}

.paging-nav a {
  margin: auto 1px;
  text-decoration: none;
  display: inline-block;
  padding: 1px 7px;
  background: #91b9e6;
  color: white;
  border-radius: 3px;
}

.paging-nav .selected-page {
  background: #187ed5;
  font-weight: bold;
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
                <link rel="stylesheet" href="sunny/plugins/datatables/dataTables.bootstrap.css">
                <link rel="stylesheet" href="sunny/dist/css/skins/_all-skins.min.css">
	</head>
	<body style="overflow-x:hidden; background-color:#34495e; color: #484848;
    font-family: Arial,Helvetica,Verdana,sans-serif;">
		
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

<!--HelpBar-->
<div class="container">
      <div id="sidebar">
          
         
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                         <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="">
                                Collapsible Group Item #1
                              </a>
                            </h4>

                    </div>
                    <div id="collapseOne" class="panel-collapse collapse">
                        <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                            richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                            dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf
                            moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                            assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                            wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                            vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic
                            synth nesciunt you probably haven't heard of them accusamus labore sustainable
                            VHS.</div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                         <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="">
                                Collapsible Group Item #2
                              </a>
                            </h4>

                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                            richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                            dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf
                            moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                            assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                            wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                            vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic
                            synth nesciunt you probably haven't heard of them accusamus labore sustainable
                            VHS.</div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                         <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="">
                                Collapsible Group Item #3
                              </a>
                            </h4>

                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                            richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                            dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf
                            moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                            assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                            wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                            vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic
                            synth nesciunt you probably haven't heard of them accusamus labore sustainable
                            VHS.</div>
                    </div>
                </div>
            </div>
        </div>
      </div><!--end sidebar-->
      <div class="main-content">
          <div class="swipe-area"></div>
          <a href="#" data-toggle=".container" id="sidebar-toggle">
              <span class="bar"></span>
              <span class="bar"></span>
              <span class="bar"></span>
          </a>
          <div class="content">
              <div class="container-fluid" >
  <div class="row" style=" margin-top:2%;">


<div class="col-md-9 col-md-offset-2">

    
    	<div class="row">
			
				<div class="panel panel-contact">
					<div class="panel-heading">
						<div class="row"><br>
							<div class="col-xs-6">
								<a href="#" class="active" id="contact-form-link">CONTACTS</a>
							</div>
							<div class="col-xs-6">
								<a href="#" id="list-form-link">LIST</a>
							</div>
						</div>
						<hr>
					</div>

<script>
$(document).ready(function(){
$("#savedata").hide();
$("#reset").hide();
 $("#ffname").keyup(function () {
       if ($(this).val()) {
          $("#savedata").show();
$("#reset").show();
       }
       else {
          $("#savedata").hide();
$("#reset").hide();
       }
    });
$("#eemail").keyup(function () {
       if ($(this).val()) {
          $("#savedata").show();
$("#reset").show();
       }
       else {
          $("#savedata").hide();
$("#reset").hide();
       }
    });

    $("#savedata").click(function () {
      
       $(this).hide();
$("#reset").hide();
    });
$("#reset").click(function () {
       
       $(this).hide();
$("#savedata").hide();
    });
});
</script>



<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript">
function validatechk()
{
var chks = document.getElementsByName('chkbox[]');
        var hasChecked = false;
        for (var i = 0; i < chks.length; i++)
        {
            if (chks[i].checked)
            {
$('#btnApprovepo').css("visibility","visible");
                $('#btndelete').css("visibility","visible");
            break;
            }
            else
            {
            $('#btnApprovepo').css("visibility","hidden");
                $('#btndelete').css("visibility","hidden");
            }
        }
        

}

function validatechk1()
{
var chks = document.getElementsByName('chkbox1[]');
        var hasChecked = false;
        for (var i = 0; i < chks.length; i++)
        {
            if (chks[i].checked)
            {
$('#btnApprovepo1').css("visibility","visible");
                $('#btndelete1').css("visibility","visible");
            break;
            }
            else
            {
            $('#btnApprovepo1').css("visibility","hidden");
                $('#btndelete1').css("visibility","hidden");
            }
        }
        

}
function validatetext()
{
           
       
                $('#btnApprovepo').css("visibility","visible");
                $('#btndelete').css("visibility","hidden");
            
           
 }

function validatetext1()
{
           
       
                $('#btnApprovepo1').css("visibility","visible");
                $('#btndelete1').css("visibility","hidden");
            
           
 }
        
function validateemail(c)
{
           
       
                $('#btnApprovepo').css("visibility","visible");
                $('#btndelete').css("visibility","hidden");
            
           
        }
        

</script>
<script type="text/javascript">
    $(document).ready(function(){
  $('#btnApprovepo').css("visibility","hidden");
 $('#btndelete').css("visibility","hidden");
$('#btnApprovepo1').css("visibility","hidden");
 $('#btndelete1').css("visibility","hidden");

      
  /*$('#draft').click(function()
        {
            if($(this).is(':checked'))
             {
                $('#btnApprovepo').css("visibility","visible");
                $('#btndelete').css("visibility","visible");
             }
            else
             {
                $('#btnApprovepo').css("visibility","hidden");
                $('#btndelete').css("visibility","hidden");
            }
        });*/

 $("#selecctall").click(function()
        {
            if($(this).is(':checked'))
             {
                $('#btnApprovepo').css("visibility","visible");
                $('#btndelete').css("visibility","visible");
             }
            else
             {
                $('#btnApprovepo').css("visibility","hidden");
                $('#btndelete').css("visibility","hidden");
            }
        });

$("#selecctall1").click(function()
        {
            if($(this).is(':checked'))
             {
                $('#btnApprovepo1').css("visibility","visible");
                $('#btndelete1').css("visibility","visible");
             }
            else
             {
                $('#btnApprovepo1').css("visibility","hidden");
                $('#btndelete1').css("visibility","hidden");
            }
        });



 $("#btnApprovepo").click(function()
        {
            
                $('#btnApprovepo').css("visibility","hidden");
                $('#btndelete').css("visibility","hidden");
             
        });


$("#btndelete").click(function()
        {
            
                $('#btnApprovepo').css("visibility","hidden");
                $('#btndelete').css("visibility","hidden");
             
        });


    });
</script>


					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
                                                <p id="show_status"></p>
						<form id="contact-form" class="myform">
									<div class="form-group">
                                                                                <input type="text" class="form-control" tabindex="1" name="ffname" id="ffname" placeholder="Enter first name" required style="text-align:center;" >  
										
									</div>
									<div class="form-group">
                                                                                <input type="email" class="form-control" tabindex="2" name="eemail" id="eemail" placeholder="Enter email" required style="text-align:center;">
										
				 					</div>
									
									<div class="form-group">
										<div class="row">
										 <div class="col-sm-3 col-md-offset-1">
                                                                                   <button type="button" id="savedata" class="form-control btn btn-default"  tabindex="4" style="background-color:#485b6e;color:white;font-weight:bold;" onclick="SaveData(ffname.value,eemail.value);">SAVE</button>
												
										 </div>
                                                                                <div class="col-sm-4">
                                                                                   <input type="button"  value="IMPORT CONTACTS" tabindex="4" class="form-control " style="background-color:#485b6e;color:white; font-weight:bold;" data-toggle="modal" href="#myModal5">
									 											</div>
                                                                                <div class="col-sm-3">
                                                                                  <input type="button" id="reset"  value="RESET" tabindex="4" class="form-control btn " style="background-color:#485b6e;color:white;font-weight:bold;" onclick="alert(eemail.value);" />
												
											                                    </div>
										</div>
                                  </div>

<div>
                             
</div>

<div class="panel panel-default col-md-12">
                                                  <div class="panel-body">
						
            <!--<form class="form-horizontal" action="list_insert.php" id="formAllContact" method="post" name="formAllContact">-->
            
			<!--h4 style="color:#FF6600;"><b style="font-size:24px;">All Contacts details</b></h4-->





</form>

 <div id="showdata">
    



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

echo"</form>";

if(mysqli_num_rows($audience)==0)
{
echo "<center><b>No Records Found...</b></center>";
}
else
{     
		 
                                  
   echo "<form id='allcon' method='POST'>";                           
              
                                                                   
  

echo "<div id='datamy'>";
//echo"<i class='fa fa-trash fa-2x col-md-offset-11' id='btndelete' ></i>";
echo "<table id='example1' class='table table-bordered table-striped table-res['>";
         echo " <thead>";
    echo "<tr>";
              echo "<th width='10px'><center><input type='checkbox' id='selecctall' style='margin-left:21px;'></center></th>";
              echo "<th><center>Name</center></th>";
              echo "<th><center>Email</center></th>";
             
           echo " </tr>";
  echo "</thead>";
                     while($audadd=mysqli_fetch_array($audience))
                                        {
                                             $namech='somename'.$countervar;
                                             $idname='idmane'.$countervar;
                                             $emailch='emailch'.$countervar;
                                             $chkbox='chkboxx'.$countervar;

                     echo "<tr >";
       echo "<td><center><input type='checkbox'  id='draft'  class='checkbox1' name='chkbox[]'  value='".$audadd['id']."' onclick='validatechk()'></center></td>";
           echo "<td style='width:50%;text-align:center;'><div contenteditable='true' onclick='validatetext()' id='audname'>".$audadd['Name']."</div><input type='hidden' name='".$namech."'  value='".$audadd['Name']."'></td> ";
           
                 
		              echo "<input type='hidden' name='".$idname."' value='".$audadd['id']."' id='audid'>";
                                        
echo "<td style='width:50%; text-align:center;'><div contenteditable='true' id='audemail'>".$audadd['Email']."</div></td>";
echo "<input type='hidden' name='".$emailch."' value='".$audadd['Email']."'>";

?>

                                                 
                                                                                        
       
                  		
                     <?php echo "</tr>";
                      
                                                                                        $countervar++;

                    }

                    
                      echo"</table>";
		echo"</tbody>";
		 
                                
	
echo "<br>";		  
							  
						echo "<div class='form-group'>";
						echo "<div class='row'>";
						echo "<div class='col-sm-4 col-md-offset-2'>";
   							  
echo "<input  type='submit' tabindex='4' class='form-control btn btn-default 'style='background-color:#485b6e;color:white;font-weight:bold;' id='btnApprovepo' value='Update'/>";
						 echo "</div>";	
                                                 echo "<div class='col-sm-4 '>";		
                                                 echo "<input   type='button' tabindex='4' class='form-control btn btn-default'style='background-color:#485b6e;color:white;font-weight:bold;' name='delete' id='btndelete' value='Delete' onClick=\"javascript: submitForm1('deletecontact.php');\"/>";
                                                   echo "</div>";
                                                 echo "</div>";
                                                 echo "</div>";




echo "</div>";
			
echo "</form>";
}                  
                                                                                                                                 
                              ?>

</div>

             <!--</form>-->
       </div></div>
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
        
        data =$(this).serialize();
       
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

									
							<!--</form>-->
<script type="text/javascript">
function SaveData(name,email)
{
    if(name != "" && email != "")
    {
       var xhttp = new XMLHttpRequest();
    if (window.XMLHttpRequest) 
    {
    xhttp = new XMLHttpRequest();
    } 
    else 
    {
       xhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xhttp.onreadystatechange=function()
    {
        if(xhttp.readyState == 4 && xhttp.status == 200)
        {
document.getElementById("show_status").innerHTML = "";
             document.getElementById("show_status").innerHTML = xhttp.responseText;
             document.getElementById('ffname').value = "";
   
          document.getElementById('eemail').value = "";
             //$("#datamy").load(location.href + " #datamy");
location.reload();

        }
    }
    xhttp.open("POST","popup_insert1.php",true);
    xhttp.setRequestHeader("content-type","application/x-www-form-urlencoded");
    xhttp.send("ffname="+name+"&eemail="+email);
    }
}

/*  Save the form data of add contact
    $("#contact-form").on('submit',(function(event){
    event.preventDefault();        
        data = $(this).serialize();
        $.ajax({
        type: "POST",
        url: "popup_insert1.php",
        data: data
        }).done(function( msg )
        {
        if(msg=="")
        {
        alert( "Nothing Added" );
	document.getElementById('ffname').value = "";
        document.getElementById('eemail').value = "";
        }
        else
        {
        alert( "Message : " + msg );
	document.getElementById('ffname').value = "";
        document.getElementById('eemail').value = "";
        }
        });
});

*/
</script>

<script>
$(document).ready(function(){
$("#submit1").hide();
$("#reset1").hide();
 $("#lname").keyup(function () {
       if ($(this).val()) {
          $("#submit1").show();
$("#reset1").show();
       }
       else {
          $("#submit1").hide();
$("#reset1").hide();
       }
    });

    $("#submit1").click(function () {
    
       $(this).hide();
$("#reset1").hide();
    });
$("#reset1").click(function () {
   
       $(this).hide();
$("#submit1").hide();
    });
});
</script>

 <script type="text/javascript">
$("#searchtext").keyup(function(){
document.getElementById("show_search").innerHTML = "";
   var searchtext = document.getElementById("searchtext").value;
//alert(searchtext);

    var xhttp = new XMLHttpRequest();
    if(window.XMLHttpRequest) 
    {
    xhttp = new XMLHttpRequest();
    } 
    else 
    {
       xhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xhttp.onreadystatechange=function()
    {
        if(xhttp.readyState == 4 && xhttp.status == 200)
        {
document.getElementById("datamy").innerHTML = "";
             document.getElementById("show_search").innerHTML = xhttp.responseText;
             //document.getElementById('search').value = "";
            
             //$("#showdata").load(location.href + " #showdata");
        }
    }
    xhttp.open("POST","search_audience.php",true);
    xhttp.setRequestHeader("content-type","application/x-www-form-urlencoded");
    xhttp.send("search="+searchtext);
});
</script>


<form id="list-form" action="" method="post" role="form" style="display: none;">
 <p id="show_status1"></p>
<div class="form-group">
<input type="text" class="form-control" tabindex="1" name="lname" id="lname" placeholder="Enter list name..." required  style="text-align:center;">
</div>
<div class="form-group">
<div class="row">
 <div class="col-sm-4">
<button type="button" id="submit1" class="form-control btn btn-default" style="background-color:#485b6e;color:white;font-weight:bold;" tabindex="4" onclick="SaveData1(lname.value);">SAVE</button>
  
 </div>
<div class="col-sm-4">
                                                                                   <input type="button"  value="IMPORT CONTACTS" tabindex="4" class="form-control btn-default"style="background-color:#485b6e;color:white;font-weight:bold;" data-toggle="modal" href="#myModal6">
									 											</div>
 <div class="col-sm-4">
  <input type="reset" name="reset" value="Reset" tabindex="4" class="form-control btn btn-default"style="background-color:#485b6e;color:white;font-weight:bold;" id="reset1" >
 </div>
</div><!--end row-->
</div><!--end form-group-->


<script type="text/javascript">
function SaveData1(name)
{
    if(name != "")
    {
       var xhttp = new XMLHttpRequest();
    if (window.XMLHttpRequest) 
    {
    xhttp = new XMLHttpRequest();
    } 
    else 
    {
       xhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xhttp.onreadystatechange=function()
    {
        if(xhttp.readyState == 4 && xhttp.status == 200)
        {
             document.getElementById("show_status1").innerHTML = xhttp.responseText;
             document.getElementById('lname').value = "";
             
             //$("#datamy1").load(location.href + " #datamy1");
location.reload();
        }
    }
    xhttp.open("POST","list_insert1.php",true);
    xhttp.setRequestHeader("content-type","application/x-www-form-urlencoded");
    xhttp.send("lname="+name);
    }
}

/*$(document).ready(function(){
    $("#list-form").on('submit',function(event){
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
});*/
</script>


<div class="panel panel-default col-md-12">
<div class="panel-body">
</form>
<div id="showdata2">	
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

echo"</form>";

if(mysqli_num_rows($audience)==0)
{
echo "<center><b>No Records Found...</b></center>";
}
else
{
                                                             echo "<form id='alllist' method='POST'>";
                                                               
                            echo "<div id='datamy1'>";
							
							echo "<table id='example2' class='table table-bordered table-striped'>";
         echo " <thead>";
    echo "<tr>";
              echo "<th width='10px'><center><input type='checkbox' id='selecctall1' style='margin-left:21px;'></center></th>";
              echo "<th><center>List Name</center></th>";
               echo "<th><center>Edit</center></th>";
             
           echo " </tr>";
  echo "</thead>";
																				
                                                         
                    while($row=mysqli_fetch_array($audience))
                    {
                      
                                                                                        $listnm='somename'.$countervar;
                                                                                        $idname1='idmane'.$countervar;
$modalno='modal'.$countervar;

                     echo "<tr>";
                           echo "<td><center><input type='checkbox' class='checkbox11' name='chkbox1[]' onclick='validatechk1()' value='".$row['id']."'></center></td>";
                           echo "<td style='width:50%;  text-align:center;'><font size='2'><input type='text' size='9' onclick='validatetext1()' name='".$listnm."' class='form-control' value='".$row['lname']."'></font></td>";
                                                                                        
		?>
<?php

                                                                                        
               echo "<input type='hidden' name='".$idname1."' value='".$row['id']."'>";
               echo "<input type='hidden' name='".$listnm."' value='".$row['lname']."' id='". $idname1 ."'>";
                                     
        
                     
                      echo "<td><center> <a href='dash2.php?listname=$row[lname]' style='color: #2952a3;'>Edit</a></center></td>";

                      echo "</tr>";

                      
                                                                                        $countervar++;

                    }
                   echo "</tbody>";
                      echo "</table>";
					 
echo "<div class='form-group'>";
						echo "<div class='row'>";
						echo "<div class='col-sm-4 col-md-offset-2'>";
						echo "<input  type='submit' tabindex='4' class='form-control btn btn-default' id='btnApprovepo1'style='background-color:#485b6e;color:white;font-weight:bold;' value='Update'/>";	  

						 echo "</div>";	
                                                 echo "<div class='col-sm-4'>";		
                                                 echo "<input   type='button' tabindex='4' class='form-control btn btn-default'id='btndelete1' name='delete1'  style='background-color:#485b6e;color:white;font-weight:bold;' value='Delete' onClick=\"javascript: submitForm('deletelist.php');\"/>";
                                                 
                                                   echo "</div>";
                                                 echo "</div>";
                                              echo "</div>";
 echo "</div>";
//echo "</div>";

                  //echo "</div>";
echo "<div id='show_listsearch'>";
echo "</div>";

                    echo "</form>";
}

                    ?>
 <script type="text/javascript">
$("#searchtext1").keyup(function(){
document.getElementById("show_listsearch").innerHTML = "";
   var searchtext1 = document.getElementById("searchtext1").value;
//alert(searchtext);

    var xhttp = new XMLHttpRequest();
    if(window.XMLHttpRequest) 
    {
    xhttp = new XMLHttpRequest();
    } 
    else 
    {
       xhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xhttp.onreadystatechange=function()
    {
        if(xhttp.readyState == 4 && xhttp.status == 200)
        {
document.getElementById("datamy1").innerHTML = "";
             document.getElementById("show_listsearch").innerHTML = xhttp.responseText;
             //document.getElementById('search').value = "";
            
             //$("#showdata").load(location.href + " #showdata");
        }
    }
    xhttp.open("POST","search_audience_list.php",true);
    xhttp.setRequestHeader("content-type","application/x-www-form-urlencoded");
    xhttp.send("search="+searchtext1);
});
</script>
<script>

$(document).ready(function(){
    $('#selecctall').change(function(event) {  //on click 
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

 
</div>
</div></div>
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
	</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	
</div>





    </div>
</div>





	<!--UPLOAD CSV FILE POPUP-->
<div class="modal fade" id="myModal5" role="dialog" style="z-index:9999;">
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
												
                                                print "<input type='submit'class='btn btn-primary' name='uploadcsv' value='Upload'>";
                                                print "<button type='button' class='btn btn-primary col-md-offset-1' data-dismiss='modal'>Close</button>";
                                                
                                                //print "<input type='button'  value='Cancel' class='cls'>";
print "</form>";
                                        }

?>
</table>

            </fieldset>
			</center>
           <!-- </form>-->
</div></div>
        </div>
        
      </div>
      
    </div>
<!--UPLOAD CSV FILE (list) POPUP-->


<div class="modal fade" id="myModal6" role="dialog" style="z-index:9999;">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        
        <div class="modal-body" >
        
       <div class="tab-pane fade active in" id="uploadcsvlist">
              <!-- <form class="form-horizontal" action="#" id="formUploadCsvList" method="post" name="formUploadCsvList">-->
            <center>
			<fieldset>
			<h4 style="color:#FF6600;"><b>Upload CSV File<img id="close" src="images/close1.png"  data-dismiss="modal"></b></h4>
			<table>
			<?php


                                        if (isset($_POST['uploadcsvlist'])) {
                                                
                                               $mimes1 = array(
                                              
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

if(in_array($_FILES['filename1']['type'],$mimes1)){
  
                                                
                                                if (is_uploaded_file($_FILES['filename1']['tmp_name'])) {
                                                
                                                
                                                        
                                                        readfile($_FILES['filename1']['tmp_name']);
                                                }
                                        
                                        $linecountn=0;
                                                //Import uploaded file to Database
                                                $handle1 = fopen($_FILES['filename1']['tmp_name'], "r");
                                 $t="";
                                                while (($datal = fgetcsv($handle1, 1000, ",")) !== FALSE) {
                                                
                                                  $c1=count($handle1);
                                                        $linecountn++;
                                               
                                               
 if(isset($paid_session))
{
                                                $uppp1 = mysqli_query($conn, "SELECT * FROM audience WHERE Email='".$datal[1]."' and User='".$user_check1."' ");
}
 elseif(isset($login_session))
{
                                                $uppp1 = mysqli_query($conn, "SELECT * FROM audience WHERE Email='".$datal[1]."' and User='".$user_check."' ");
}
                                                
                                                        
                                                if(mysqli_num_rows($uppp1) > 0){
                                        
                                                
                                        }else{
                                        
                                        
                                        $emailval1=$datal[1];
                                        
                                        $domain2=substr(strrchr($emailval1,"@"),1);
                                        
                                        
                                        $regex1 = "/^[A-Za-z0-9._]*\@[A-Za-z]*\.[A-Za-z]{2,5}$/"; 
                                        
                                        if ( preg_match( $regex1, $datal[1]) ) {
                                             
                                        
                                        if(filter_var(gethostbyname($domain2),FILTER_VALIDATE_IP)) {
                                        
 if(isset($paid_session))

{                                          $countl=0;
                                         $import1="INSERT into audience(id,Name,Email,User) values('','$datal[0]','$datal[1]','$user_check1')";
$countl=$countl + 1;
 
$sql7=mysqli_query($conn,"select * from used_contact where User='$user_check1'");

$row7=mysqli_fetch_assoc($sql7);
$oldused1=$row7['usedcontact'];

$newused1=$oldused1 + $countl;

mysqli_query($conn,"update used_contact set usedcontact=$newused1 where User='$user_check1'");




}
elseif(isset($login_session))
{
$countl=0;
                                         $import1="INSERT into audience(id,Name,Email,User) values('','$datal[0]','$datal[1]','$user_check')";
$countl=$countl + 1;


$sql7=mysqli_query($conn,"select * from registered_members where email='$user_check' ");
$row7=mysqli_fetch_assoc($sql7);
$oldno2=$row7['no_contact'];

$newno2=$oldno2 + $count1;

mysqli_query($conn,"update registered_members set no_contact=$newno2 where email='$user_check'");
}

 mysqli_query($conn,$import1) or die(mysqli_error());
$tl=$datal[0];
if($tl != NULL)
{
$t.="|".$tl;
}

                                  
                                        }
                                        
                                        
                                        
                                        }
                                                
                                           }  




        
}

                            
      
 $lname=$_POST['Txtlistname'];
                                        
                                              fclose($handle1);
if(isset($paid_session))
{
$userlog=$user_check1;
}
else
{
$userlog=$user_check;
}
mysqli_query($conn,"UPDATE list set Members='$t' where lname='$lname' and Email='$userlog'");
 
                                        echo "<script>
                                              
                                          alert('Upload successful $linecountn contacts added!!');
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
print "<table class='table'>";
print "<tr >";
print "<td style='border-top:none;'>";
print "Select List Name :";
print "</td>";
  print "<td style='border-top:none;'>";
if(isset($paid_session)) 
{
$userlogin=$user_check1;
}
else
{
$userlogin=$user_check;
}   
$sql9=mysqli_query($conn,"select lname from list where Email='$userlogin'");
                                       
print "<select name='listname' onchange='showList(this.value)'>";
    print "<option> Select List Name </option>";


 while($row2=mysqli_fetch_assoc($sql9))
                    {
     print "<option value='";echo $row2['lname'];print"'>";  echo $row2['lname']; print "</option>";
}
      
   print "
  </select><br/><br/>";
print" You Selected List Name: <div id='listname'> </div>"; 
print "</td>";
print "</tr>";
print "<tr>";
print "<td style='border-top:none;'>";
                                             
print "File name to import:<br />\n";

print "</td>";
print "<td style='border-top:none;'>";
print "<input size='50' type='file' name='filename1' style='width:250px;' accept='.csv' required></br>";
print "</td>";
print "</tr>";
print "<tr>";
print "<td colspan='2' style='border-top:none;'>";
print " <center>Note : upload csv file in this format<br><br> name,name@domain.com<br>name,name@domain.com<br><br></center>";
print "</td>";	
print "</tr>";	
print "</table>";
							
                                                print "<input type='submit'class='btn btn-primary' name='uploadcsvlist' value='Upload'>";

                                                print "<button type='button' class='btn btn-primary col-md-offset-1 ' data-dismiss='modal'>Close</button>";
}
?>
<input type='hidden' id='Txtlistname' name='Txtlistname' />
</form>

</table>

            </fieldset>
			</center>
           <!-- </form>-->
</div></div>
        </div>
        
      </div>
      
    </div>  </div>  </div>
<script>
function showList(str) {
document.getElementById("listname").innerHTML=str;
document.getElementById("Txtlistname").value=str;
}
</script>





<!--Pagination-->


          </div><!--end content-->
      </div>
    </div>
<!-- end HelpBar-->



				


<script src="sunny/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <!-- DataTables -->
    <script src="sunny/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="sunny/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    
    <!-- AdminLTE App -->
    
    <!-- page script -->
    <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": false,
          "info": true,
          "autoWidth": true
        });
      });
    </script>

 


 <script src="js/bootstrap.js"></script>
 
	<script>
	$('.carousel').carousel({
	  interval: 3500
	})
	</script>
		
 
	</body>
</html>