<!DOCTYPE html>
<html lang="en">
	<head>
    	
		<meta charset="utf-8">
		<title>PyxyMail</title>
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="">
		<meta name="description" content="">

		<!-- animate css -->
		<link rel="stylesheet" href="css/animate.min.css">
		<!-- bootstrap css -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- font-awesome -->
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- google font -->
	 <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

		<!-- custom css -->
		<link rel="stylesheet" href="css/templatemo-style.css">
		
		<!--link rel="stylesheet" href="css/main.css"-->
		
		<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style_tabs.css"> <!-- Resource style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
        <script src="js/jquery-2.1.1.js"></script>
        <script src="js/main1.js"></script> <!-- Resource jQuery -->

<style>
</style>


<script type="text/javascript">
    function validateEmail(emailField){
        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

        if (reg.test(emailField.value) == false) 
        {
document.getElementById('error').innerHTML="<span style='color:red; font-weight:bold; font-size:14;'>Invalid Email-Id</span>";


            emailField.value="";
emailField.focus();
            return false;
        }
document.getElementById('error').innerHTML="";
        return true;

}

function validateAlpha(){
    var textInput = document.getElementById("name").value;
    textInput = textInput.replace(/[^A-Za-z\s-, ]+$/, "");
    document.getElementById("name").value = textInput;
}

function isNumberKey(){
    var textInput = document.getElementById("phone").value;
    textInput = textInput.replace(/[^0-9]/g, "");
    document.getElementById("phone").value = textInput;
if( textInput.length < 11) 
{  
document.getElementById('error2').innerHTML="";
return true;  
}
else
{
document.getElementById('error2').innerHTML="<span style='color:red; font-weight:bold; font-size:14;'>Invalid Phone Number</span>";
document.getElementById("phone").value="";
document.getElementById("phone").focus();
return false;
isNumberKey();
}
}



</script>
<style>

img#close {
position:absolute;
right:1px;
height:20px;
width:20px;
top:1px;
cursor:pointer;
//border-radius:7px 7px 7px 7px;
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
		<!-- start preloader -->
		<!--div class="preloader">
			<div class="sk-spinner sk-spinner-rotating-plane"></div-->
    	 </div>
		<!-- end preloader -->
		<!-- start navigation -->
		<div id="navigation" class="navbar navbar-default navbar-fixed-top" style=" background-color:white;">
			<div class="container">
				<div class="navbar-header">
					<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon icon-bar"></span>
						<span class="icon icon-bar"></span>
						<span class="icon icon-bar"></span>
					</button>
					<a href="index5.php" class="navbar-brand"><img src="images/pyxymail31.png"></a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right text-uppercase">
						<!--<li><a href="#home">Home</a></li>
						<li><a href="#feature">Features</a></li-->
						<li><a href="pricing_signups2.php">Pricing</a></li>
						<li><a href="paid_login_form.php">Login</a></li>
                                                <li><a href="paid_signup_form.php"><button type="button" class="btn btn-primary" >Sign up</button></a></li>
						
					</ul>
				</div>
			</div>
		</div>




<div class="container-fluid" style="margin-left:5%; margin-top:7%; width:90%;">
  <div class="row">
    <div class="col-sm-5" style=" height:500px;">
	<br>
		           <img src="images/audi7.png" style="height:50%; width:100%;" class="img-responsive">
			
						<!--a href="#">
							<img class="img-responsive" src="http://placehold.it/700x300" alt="">
						</a-->
						<div class="row">
							<div class="col-md-12" style="font-size:18px;text-align:justify;">
								<br>
							<center><h2 style="color:#FF6600;"><b>Welcome,Audience..!!</b></h2></center><br>
							<h3 style="color:white;">Add your audience member i.e. contacts by uploding a file or one at a time.PyxyMail allows you to either subscribe your company or add customers and members.
							Audience must bought something from you in past few days.</h3></div>
			  
							
						</div>
					
	</div>

<div class="col-sm-7" style="height:auto;">

		          
<div class="cd-tabs">
	<nav>
		<ul class="cd-tabs-navigation">
			<li><a data-content="add_contacts" class="selected" href="#0">Contacts</a></li>
                        <li><a data-content="create_list" href="#0">List</a></li>
                </ul> <!-- cd-tabs-navigation -->
	</nav>

	<ul class="cd-tabs-content">
		<li data-content="add_contacts" class="selected">

                                                
                                                 <div class="panel panel-default col-md-12" style="margin-top:-3%;">
                                                  <div class="panel-body">

                                                      <div class="container-fluid">
  
  <div class="row">
    <div class="col-sm-3">
       <label for="ffname" style="color:black;">Name&nbsp;&nbsp;&nbsp;</label>
    </div>
    <div class="col-sm-8">
         <input type="text" class="form-control" name="ffname" id="ffname" placeholder="Enter first name..."required style="text-align:center;" >  
    </div>
  </div><br>
  <div class="row">
    <div class="col-sm-3">
       <label for="eemail" style="color:black;">Email&nbsp;&nbsp;&nbsp;</label>
    </div>
    <div class="col-sm-8">
         <input type="text" class="form-control" name="eemail" id="eemail" placeholder="Enter email" required style="text-align:center;">
    </div>
  </div><br>
  <div class="row">
    <div class="col-sm-3">
       &nbsp;
    </div>
    <div class="col-sm-8">
     <div class="col-md-2">
         <input type="submit" class="btn btn-primary" name="submit" value="Ok" style="color:#fff;" id="submit">
    </div>
    <div class="col-md-5">
         <input type="button"  value="Import contacts" class="btn btn-primary"  style="color:#fff;" data-toggle="modal" href="#myModal5">
    </div>
    <div class="col-md-2">
         <input type="reset" value="Reset" class="btn btn-primary" style="color:#fff;" />
    </div>
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

</div>
</div>

                        
                                                 <div class="panel panel-default col-md-12" style="margin-top:-3%;">
                                                  <div class="panel-body">
						
            <!--<form class="form-horizontal" action="list_insert.php" id="formAllContact" method="post" name="formAllContact">-->
            
			<!--h4 style="color:#FF6600;"><b style="font-size:24px;">All Contacts details</b></h4-->
<br>					  <?php 
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
                                  echo "<div class='table-responsive'>";
                                  echo "<table class='table table-hover'>";
                                  echo "<thead>";
                                  echo "<tr style='background-color:#CCCCCC;'>";
                                  echo " <th class='col-md-4'>&nbsp;&nbsp;<input type='checkbox' id='selecctall'> Select All</th>";
                                  echo "<th class='col-md-4'>Name</th>";
                                  echo "<th class='col-md-6'>Emails</th>";
                                  
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
                                  echo "<td><font size='2'><input type='text' size='7' class='form-control'name='".$namech."' style=' border:0; background: transparent;' value='".$audadd['Name']."'></font></td>";

                                  echo "<input type='hidden' name='".$idname."' value='".$audadd['id']."'>";
                                  echo "<td><font size='2'><input type='text' size='7' name='".$emailch."'class='form-control' style=' border:0; background: transparent;' value='".$audadd['Email']."'></font></td>";
                                                                                                                                       //echo "<td align='right'><br><input  type='submit' class='btn btn-primary' value='update'/></td>";
                                                                                                                                        echo "<td>&nbsp;</td>";
                                                                                                                                        //echo "<td align='right'><br><a href='audiencedelete.php?del=$audadd[id]' onClick=\"javascript: return confirm('Are you sure want to delete');\">Delete</a></font></td>";

                                  echo "</tr>";
                                 
                                                                                                                                       
                                                                                                                                         $countervar++;
                                                                                                                                         
                                                                                                                                    }
                                                                                                                                     echo "</tbody>";
                                                                                                                                        
                                  echo "</table>";echo "</div>";echo "</br>";
								  
								  
								  
						echo "<div style='margin-left:20%;'>";		  
echo "<input  type='submit' class='btn btn-primary' value='Update'/>";
									
                                   echo "<input   type='button'  class='btn btn-primary' name='delete' id='delete' value='Delete' onClick=\"javascript: submitForm1('deletecontact.php');\"/>";

                                  echo "</div>";
                                    
                                                                                                                                 
                              ?>
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



		</li>

		

		<li data-content="create_list">

<div class="panel panel-default col-md-12" style="margin-top:-3%;">
    <div class="panel-body">


<div class="container-fluid">

  <div class="row">
    <div class="col-sm-2">
       <label for="lname" style="color:black;">Name&nbsp;&nbsp;&nbsp;</label>
    </div>
    <div class="col-sm-6">
       <input type="text" class="form-control" name="lname" id="lname" placeholder="Enter list name..." required  style="text-align:center;">
    </div>
    <div class="col-sm-2">
        <input type="submit" name="submit" value="Ok" class="btn btn-primary" style="color:#fff;" id="submit">
    </div>
    <div class="col-sm-2">
         <input type="reset" name="reset" value="Reset" class="btn btn-primary" style="color:#fff;" id="reset" >
    </div>
  </div>
</div>

          
    </div>
  </div>


<!--div class="container" style="margin-top:-5%;">
				
        <div class="tab-pane fade active in" id="emaillist">
            <form id="listform" name="listform" method="post">
			<!--h4 style="color:#FF6600;"><b style="font-size:24px;">List details</b></h4-->
             	<!--div class="form-group">
                    
                        <div class="col-md-4">
                            
                             <br>
                        </div>
                                           
		</div>		
			
            </form>
      </div>
</div-->
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


 <div class="panel panel-default col-md-12" style="margin-top:-3%;">
                                                  <div class="panel-body">	
			<!--center><h4 style="color:#FF6600;"><b style="font-size:24px;">View List details</b></h4></center-->
			
														  
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
																				
                                                                                echo "<div class='table-responsive'>";
                                                                                 echo "<table class='table'>";
                                  echo "<thead>";
                                  echo "<tr style='background-color:#CCCCCC;'>";
                                   echo " <th style='height:30px;'>&nbsp;&nbsp;&nbsp;<input type='checkbox' id='selecctall1' > Select All</th>";
                                  echo "<th>List Name</th>";
                                                                                                                                        echo " <th>&nbsp;&nbsp;</th>";
                                                                                                                                        echo "<th>Edit</th>";
                                                                                                                                       
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
					  echo "</div>";
                      echo "<div style='margin-left:20%;'>";
echo "<br><input  type='submit' class='btn btn-primary' value='Update'/>";
																				
                                                                                echo "<input   type='button'  class='btn btn-primary' name='delete1' id='delete' value='Delete' onClick=\"javascript: submitForm('deletelist.php');\"/>";

echo "</div>";

                    echo "</form>";echo "</br>";

                    ?> 
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
			
		</li>

		

		
	</ul> <!-- cd-tabs-content -->
</div> <!-- cd-tabs -->
					
	</div>





    </div>
</div>


<!-- Footer Starts Here -->
	<div class="footer" id="footer"  style="margin-top:25px;">
		<div class="container">
			<!--<a href="index.html"><img src="images/logo.png" /></a>-->
			<div class="row footer-row">
				<div class="col-md-4 footer-row-column">
						<div class="text1">
						<P style="color:#3bc492"><B>ADDRESS :</B></p>
						<p  >129 West 81st Street </p>
						<small>INDIA</small>
						</div>
				</div>
				<div class="col-md-4 footer-row-column">
					<div class="text1">
                                               <P style="color:#3bc492"><B>NAVIGATION :<B></p>
						<p><a href="about_new.php">About</a> </p>
						<p><a href="contactus1.php">Contact Us</a> </p>
						
<!--<p class="copyright" style="margin-left:75px; margin-top:35px;">2015 &copy; <a href="" style="color:orange">PyxyMail</a></p>-->
						</div>
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




        
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/wow.min.js"></script>
		<script src="js/jquery.singlePageNav.min.js"></script>
		<script src="js/custom.js"></script>
	</body>
</html>