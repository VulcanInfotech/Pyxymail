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

		<!--link href="css/bootstrap.min.css" rel="stylesheet">

    
   
    
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
    <script src="js/smoothscroll.js"></script-->

<link href="css/bootstrap1.css" rel="stylesheet">

<!--for refresh-->
 <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
  <script type="text/javascript" src="js/jquery.form.js"></script>
  
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
		<div id="navigation" class="navbar navbar-default navbar-fixed-top" style=" background-color:white;">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <a href="#" class="navbar-brand"><img src="images/pyxymail31.png"></a>
	        </div>
	        <div class="navbar-collapse collapse" >
	          <ul class="nav navbar-nav" style="float:right;">
	           
	           <li style="margin-top:5px;"><a href="dashboard.php"><b>Dashboard</b></a></li>
						
						<li style="margin-top:5px;"><a href="audience1.php"><b>Audience</b></a></li>
						<li style="margin-top:5px;" ><a  href="campaign_dash.php"><b>Campaign</b></a></li>
                                                <!--li  style="margin-top:5px;"><a href="account.php"  style="color:#2ecc71";><b>My Account</b></a></li-->
                                              
<!--<?php
include 'session1.php';
if(isset($paid_session))
{
         echo "                  <li style='margin-top:5px;'><a href='pricing_signups.php'><b>Pricing</b></a>   </li>";
}
?>
<?php
include 'session1.php';
if(isset($login_session))
{
         echo "                  <li style='margin-top:5px;'><a href='pricing_signups.php'>Pricing </a>   </li>";
}
?> -->
<li style="margin-top:5px;"><a href="logout.php"> <b><?php include 'session1.php';  echo $paid_user;  echo $login_session;?></b>
 <i class="fa fa-sign-out fa-1x"></i></a></li>
						

	          </ul>

	        </div><!--/.nav-collapse -->
	      </div>
	    </div>
		<!-- end navigation -->

<div class="container-fluid" style="margin-left:5%; margin-top:7%;">
  <div class="row">
    
<div class="col-md-5 " style="height:600px; margin-top:-7%;">
	
		           <img src="images/audi7.png" class="img-responsive">
			
						<!--a href="#">
							<img class="img-responsive" src="http://placehold.it/700x300" alt="">
						</a-->
						<div class="row">
							<div class="col-md-12" style="font-size:16px;text-align:justify;">
								
							<center><h4 style="color:#FF6600;"><b>Welcome,Audience..!!</b></h4></center><br>
							<p style="color:white;">Add your audience member i.e. contacts by uploding a file or one at a time.PyxyMail allows you to either subscribe your company or add customers and members.
							Audience must bought something from you in past few days.</p></div>
			  
							
						</div>
					
	</div>

<div class="col-md-6">

    <div class="container" style=" margin-top:7%;">
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
                                                                                   <button type="button" id="savedata" class="form-control btn btn-primary"  tabindex="4" onclick="SaveData(ffname.value,eemail.value);">SAVE</button>
												
										 </div>
                                                                                <div class="col-sm-4">
                                                                                   <input type="button"  value="IMPORT CONTACTS" tabindex="4" class="form-control btn-primary" data-toggle="modal" href="#myModal5">
									 											</div>
                                                                                <div class="col-sm-3">
                                                                                  <input type="button" id="reset"  value="RESET" tabindex="4" class="form-control btn btn-primary" onclick="alert(eemail.value);" />
												
											</div>
										</div>
                                                                       </div>

<div>
<div class='form-group'>

          <input type='text' class='form-control' id='searchtext' placeholder='Search'>
     </div>                              
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



if(mysqli_num_rows($audience)==0)
{
echo "<center><b>No Records Found...</b></center>";
}
else
{     
		 
                                  
   echo "<form id='allcon' method='POST'>";                           
              
      echo "<div class='table-responsive' >";
                          echo "<table class='table'>";

                                  //echo "<thead style='border-bottom:0;'>";

                                  echo " <th><input type='checkbox' id='selecctall'> Select All</th>";

                                  echo "<th >Name</th>";
echo"<th></th>";
echo"<th></th>";

                                  echo "<th >Email</th>";
                                                                                                                                     
                                    //echo "</thead>";
                      echo "</table>";                                                                                                   
  echo "</div>"; 
                                                                                                                                       
            echo "<div id='datamy'>";  
echo "<div class='table-responsive' style='height:auto; overflow-y:scroll;'>";
echo "<table class='table' id='myTable'>";
                     while($audadd=mysqli_fetch_array($audience))
                                        {
                                             $namech='somename'.$countervar;
                                             $idname='idmane'.$countervar;
                                             $emailch='emailch'.$countervar;
                                             $chkbox='chkboxx'.$countervar;

                     echo "<tr >";
       echo "<td><input type='checkbox'  class='checkbox1' name='chkbox[]'  value='".$audadd['id']."'></td>";
echo"<td></td>";echo"<td></td>";
              echo "<td> <font size='2'><input type='text' size='9'class='form-control'name='".$namech."'  value='".$audadd['Name']."'></font></td>";
                                                                                        
                            echo "<input type='hidden' name='".$idname."' value='".$audadd['id']."'>";
                                                                                         
                                                                                         
        
                     
              echo "<td><font size='2'><input type='text' size='9' name='".$emailch."'class='form-control'  value='".$audadd['Email']."'></font></td>";
                      echo "</tr>";
                      
                                                                                        $countervar++;

                    }

                    
                      echo "</table>";
                                 echo "</div>";
	
echo "<br>";		  
							  
						echo "<div class='form-group'>";
						echo "<div class='row'>";
						echo "<div class='col-sm-4 col-md-offset-2'>";
   							  
echo "<input  type='submit' tabindex='4' class='form-control btn btn-primary ' id='updatebtn' value='Update'/>";
						 echo "</div>";	
                                                 echo "<div class='col-sm-4 '>";		
                                                 echo "<input   type='button' tabindex='4' class='form-control btn btn-primary' name='delete' id='delete' value='Delete' onClick=\"javascript: submitForm1('deletecontact.php');\"/>";
                                                   echo "</div>";
                                                 echo "</div>";
                                                 echo "</div>";
echo "</div>";

			
echo "<div id='show_search'>";
echo "</div>";
echo "</form>";

                  }                  
                                                                                                                                 
                              ?>
             
       </div></div></div>

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
             document.getElementById("show_status").innerHTML = xhttp.responseText;
             document.getElementById('ffname').value = "";
             document.getElementById('eemail').value = "";
             $("#datamy").load(location.href + " #datamy");
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
 <div class="col-sm-4 col-sm-offset-2">
<button type="button" id="submit1" class="form-control btn btn-primary"  tabindex="4" onclick="SaveData1(lname.value);">SAVE</button>
  
 </div>
 <div class="col-sm-4">
  <input type="reset" name="reset" value="Reset" tabindex="4" class="form-control btn btn-primary" id="reset1" >
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
             
             $("#showdata2").load(location.href + " #showdata2");
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
<div class='form-group'>

         <input type='text' class='form-control' id='searchtext1' placeholder='Search'>
</div>                              

</form>
<div class="panel panel-default col-md-12">
<div class="panel-body">
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



if(mysqli_num_rows($audience)==0)
{
echo "<center><b>No Records Found...</b></center>";
}
else
{
                                                             echo "<form id='alllist' method='POST'>";
                                                         
                            
																				
                                                         echo "<div class='table-responsive' >";
                                                                   echo "<table class='table'>";
                                  //echo "<thead>";
                                  echo "<tr>";
                                   echo " <th><input type='checkbox' id='selecctall1' > Select All</th>";
                                  echo "<th>List Name</th>";
                                                                                                                                       
                                                                                                                                      
  echo "<th>Edit</th>";
echo"<th></th>";
                                                                                                                                       
                                   echo "</tr>";
//echo"</thead>";
echo"</table>";
echo"</div>";
echo "<div id='show_listsearch'>";
 echo "<div class='table-responsive' style='height:auto; overflow-y:scroll;'>";
 echo "<table class='table' id='myTable'>";
                    while($row=mysqli_fetch_array($audience))
                    {
                      
                                                                                        $listnm='somename'.$countervar;
                                                                                        $idname1='idmane'.$countervar;

                     echo "<tr>";
                                                                                          echo "<td><input type='checkbox' class='checkbox11' name='chkbox1[]'  value='".$row['id']."'></td>";
                                                                                        echo "<td><font size='2'><input type='text' size='9' name='".$listnm."'class='form-control' value='".$row['lname']."'></font></td>";
                                                                                        
                                                                                        echo "<input type='hidden' name='".$idname1."' value='".$row['id']."'>";
                                                                                         
                                                                                         
        
                     
                      echo "<td> <a href='dash2.php?listname=$row[lname]'>Edit</a></td>";
                      echo "</tr>";
                      
                                                                                        $countervar++;

                    }
                    echo "</tbody>";
                      echo "</table>";
					  echo "</div>";

echo "<div class='form-group'>";
						echo "<div class='row'>";
						echo "<div class='col-sm-4 col-md-offset-2'>";
						echo "<input  type='submit' tabindex='4' class='form-control btn btn-primary' value='Update'/>";	  

						 echo "</div>";	
                                                 echo "<div class='col-sm-4'>";		
                                                 echo "<input   type='button' tabindex='4' class='form-control btn btn-primary' name='delete1' id='delete' value='Delete' onClick=\"javascript: submitForm('deletelist.php');\"/>";
                                                 
                                                   echo "</div>";
                                                 echo "</div>";
                                              echo "</div>";
echo "</div>";
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
document.getElementById("datamy").innerHTML = "";
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
<!--/div>-->





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
                                                print "<button type='button' class='btn btn-primary' data-dismiss='modal'>Close</button>";
                                                
                                                //print "<input type='button'  value='Cancel' class='cls'>";
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


		<!-- Footer Starts Here -->
	<div class="footer" id="footer"  >
		<div class="container">
			
			<div class="row footer-row" style="margin-left:50px;">
				<div class="col-md-4 footer-row-column" >
						<div class="text1">
                                               <P style="color:#3bc492"><B>NAVIGATION :<B></p>
						<p><a href="about_new1.php">About</a> </p>
						<p><a href="contactus2.php">Contact Us</a> </p>
<p><a href="account.php">My Account</a> </p>
                                               
						

						</div>
				</div>
				<div class="col-md-4 footer-row-column">
					
				</div>
				<div class="col-md-4 footer-row-column">
					<ul class="social">
                                               <div class="text1">
                                                <P style="color:#3bc492"><B>FOLLOWS :<B></p>
                                                 </div>
						<li><i class="fa"></i></li>
						<li><i class="tw"></i></li>
						<li><i class="ist"></i></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
			
                                            <p class="copyright" style="text-align:center;">2015 &copy; <a href="http://w3layouts.com/">PyxyMail</a></p>
		</div>
	</div>
	<!-- Footer Ends Here -->
		


                <script src="js/bootstrap.js"></script>
		<script src="js/jquery.js"></script>



 
	<script>
$.fn.pageMe = function(opts){
    var $this = this,
        defaults = {
            perPage: 3,
            showPrevNext: false,
            hidePageNumbers: false
        },
        settings = $.extend(defaults, opts);
    
    var listElement = $this;
    var perPage = settings.perPage; 
    var children = listElement.children();
    var pager = $('.pager');
    
    if (typeof settings.childSelector!="undefined") {
        children = listElement.find(settings.childSelector);
    }
    
    if (typeof settings.pagerSelector!="undefined") {
        pager = $(settings.pagerSelector);
    }
    
    var numItems = children.size();
    var numPages = Math.ceil(numItems/perPage);

    pager.data("curr",0);
    
    if (settings.showPrevNext){
        $('<li><a href="#" class="prev_link">«</a></li>').appendTo(pager);
    }
    
    var curr = 0;
    while(numPages > curr && (settings.hidePageNumbers==false)){
        $('<li><a href="#" class="page_link">'+(curr+1)+'</a></li>').appendTo(pager);
        curr++;
    }
    
    if (settings.showPrevNext){
        $('<li><a href="#" class="next_link">»</a></li>').appendTo(pager);
    }
    
    pager.find('.page_link:first').addClass('active');
    pager.find('.prev_link').hide();
    if (numPages<=1) {
        pager.find('.next_link').hide();
    }
  	pager.children().eq(1).addClass("active");
    
    children.hide();
    children.slice(0, perPage).show();
    
    pager.find('li .page_link').click(function(){
        var clickedPage = $(this).html().valueOf()-1;
        goTo(clickedPage,perPage);
        return false;
    });
    pager.find('li .prev_link').click(function(){
        previous();
        return false;
    });
    pager.find('li .next_link').click(function(){
        next();
        return false;
    });
    
    function previous(){
        var goToPage = parseInt(pager.data("curr")) - 1;
        goTo(goToPage);
    }
     
    function next(){
        goToPage = parseInt(pager.data("curr")) + 1;
        goTo(goToPage);
    }
    
    function goTo(page){
        var startAt = page * perPage,
            endOn = startAt + perPage;
        
        children.css('display','none').slice(startAt, endOn).show();
        
        if (page>=1) {
            pager.find('.prev_link').show();
        }
        else {
            pager.find('.prev_link').hide();
        }
        
        if (page<(numPages-1)) {
            pager.find('.next_link').show();
        }
        else {
            pager.find('.next_link').hide();
        }
        
        pager.data("curr",page);
      	pager.children().removeClass("active");
        pager.children().eq(page+1).addClass("active");
    
    }
};

$(document).ready(function(){
    
  $('#myTable').pageMe({pagerSelector:'#myPager',showPrevNext:true,hidePageNumbers:false,perPage:4});
    
});
</script>	
		
		
 
	</body>
</html>