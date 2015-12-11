<?php
include 'connect.php';
include 'session1.php';
?>

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

document.getElementById("save").disabled = false;
}



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
   width:300px; 
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
<!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->
        <section id="pageloader">
            <div class="loader-item fa fa-spin colored-border"></div>
        </section> <!-- /#pageloader -->

        <header class="site-header container-fluid">
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
                             <li  ><a href="dashboard.php">dashboard</a></li>
                            <li class="active" ><a href="audience1.php">Audience</a></li>
                            <li  ><a href="account.php">My Account</a></li>
                           <li><a href="pricing_signups.php">Upgrade</a>   </li>
                            <li><a href="help.php">Help</a >      </li>
                        </ul>
                    </div> <!-- /.menu-wrapper -->
                </div> <!-- /.row -->
            </div> <!-- /.main-header -->
             <div id="responsive-menu">
                <ul>
                               <li  ><a href="dashboard.php">dashboard</a></li>
                            <li class="active" ><a href="audience1.php">Audience</a></li>
                      <li  ><a href="account.php">My Account</a></li>
                           <li><a href="pricing_signups.php">Upgrade</a>   </li>
                            <li><a href="help.php">Help</a >      </li>
                            
                            <li><a><i class="fa fa-user"></i>&nbsp;&nbsp;<?php include 'session1.php';  echo $paid_session; echo $login_session;?></a>
                                    <ul>
                       
                              
                                          <li><a href="logout.php">&nbsp;&nbsp;Logout</a></li>
                            
                                    </ul>
                           </li>
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
									
<img src="images/dash.jpg">


<div class="dashright" style= "  margin-top:-250px;margin-right:-80px;"><br>
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
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><a href="#over"><button type="button" class="btn7"  >Create Email list</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;</td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<td align="right"><a href="#overlay"  ><button type="button" class="btn9" >Add Contacts</button></a></td></tr></table></div>
 <p>&nbsp;</p><br>
         <hr>
          
          
          
          <div class="leftpic2">

   <div id="leftside">
                         <p>&nbsp;</p>
                           <input class="toggle-box" id="identifier-1" type="checkbox">
                                        <label for="identifier-1"  style="background-color:#F0F0F0;"><font size="4">All Contacts</font></label>
                            <div id="listv">



                                <ul style="height:150px">

                                <li>

<div class="scrollit" style="overflow:auto;
    height:100px; width:280px;">
        <table>
         
          
                 <?php 
include 'session1.php';
 if(isset($paid_session))
{
$audience=mysqli_query($conn,"SELECT * FROM audience where User='$user_check1'");
}
elseif(isset($login_session))
{
$audience=mysqli_query($conn,"SELECT * FROM audience where User='$user_check'");
}
while($audadd=mysqli_fetch_array($audience))
{
	
	echo "<tr>";

	echo "<td><font size='2'>".$audadd['Name']."</font></td>";
                  echo "<td>&nbsp;</td>";
	echo "<td align='right'><font size='2'>".$audadd['Email']."</font></td>";
                 echo "<td>&nbsp;</td>";
                   echo "<td>&nbsp;</td>";
                 echo "<td align='right'><a href='edit1.php?edit=$audadd[Name]&id=$audadd[id]&email=$audadd[Email]'>Edit</a></font>&nbsp;&nbsp;</td><td align='right'><a href='audiencedelete2.php?del=$audadd[id]' onClick=\"javascript: return confirm('Are you sure want to delete');\">Delete</a></font></td>";
	
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
<form id="list_form" action="list_insert1.php" method="post">
<div style="line-height:60px;border-bottom: 1px solid black;text-align:left;background-color:#ddd">&nbsp;&nbsp; <u>List details</u></div><BR>
<fieldset style="border:solid 1px #000;width:90%;margin-left:20px; background-color:#fff; height:150px;"><br><br>
 List name &nbsp; &nbsp; <input type="text" name="lname" id="lname" placeholder="Enter list name..." required ><br><br><br>

</fieldset><br>
<div style="border-top: 1px solid black;"></div><br>
<input type="submit" name="submit" value="SAVE" style="background-color:orange; color:#fff;" onClick="validateList()" >&nbsp;&nbsp;&nbsp;
<input type="button"  value="Cancel" class="cls"  style="background-color:orange; color:#fff;"><BR>
</form>
</div>
      <br>
&nbsp;&nbsp;<br>

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
        
                 echo "<td align='right'><a href='delete2.php?del=$row[id]' onClick=\"javascript: return confirm('Please confirm deletion');\">Delete</a></font></td>";
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
<form id="email_form" action="popup_insert2.php" method="post">
<div style="line-height:40px;border-bottom: 1px solid black;text-align:left;background-color:#ddd">&nbsp;&nbsp; <u>Contact details</u></div><BR>
<fieldset style="border:solid 1px #000;width:90%;margin-left:20px; background-color:#fff; height:195px;"><br>
 First name &nbsp; &nbsp; <input type="text" name="fname" id="fname" placeholder="Enter first name..." required ><br><br><br>
Email &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; <input type="email" name="email" id="email" placeholder="Enter email....." required ><br><br>
</fieldset><br>
<div style="border-top: 1px solid black;"></div><br>
<input type="submit" name="submit" value="Ok" style="background-color:orange; color:#fff;"  >&nbsp;
<input type="button"  value="Cancel" class="cls"><BR>
</form>
</div>
        </div> <!-- /.row -->
               
                      

                                              
                       <div style="padding-left:55%; font-size:20px;color:#000;"><u>Add contacts to <?php echo $listnm=$_GET['listname'];?></u></div><BR>
<form name="content" action="sample.php" method="POST">




                        <div style="padding-left:45%;"><input type='checkbox' name='check' id='check' onclick='selectLB()'>Select All</div>
                        <div style="font-size:20px;color#:000;">
                        <table><tr><td>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>
                        
                      <?php
                        include 'session1.php';
                        $sql=("select `Name` from audience where User='$user_check'" );
                        $result=mysqli_query($conn,$sql);
                        echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo"<center>";

                                
                        echo "<select size=10 id='FromLB' name='FromLB[]' multiple>";
                       echo "<option value=''  disabled=''>Contacts</option>";
                       
                       
                        
                         $sql11=("select * from list where Email='$user_check' and lname='$_GET[listname]'" );
                        $result11=mysqli_query($conn,$sql11);
                       while( $row12=mysqli_fetch_array($result11))
                        {
                        
                        $listmembers= $row12['Members'];
                        }
                        $explodedmember=@explode(",",$listmembers);
                        
                        $_words = "'".@implode("','", $explodedmember)."'";
                        
                        $sql12=("select * from audience where User='$user_check' and Name NOT in ($_words)" );
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
                        
                                               
                       
                       
                        
                        
                        
                        echo "</select></center>";

                        ?>
                       

                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        
                        <td align="center" valign="middle">
                        <br><br><br>
                        <input type="button"  onClick="move(this.form.elements['FromLB[]'],this.form.elements['ToLB[]'])" 
value="->"><br><br>
                          <input type="button"  onClick="move(this.form.elements['ToLB[]'],this.form.elements['FromLB[]'])" 
value="<-"> </td> 
                        
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        
                        
                      
<td>
                  




                <?php
                       include 'session1.php';
                        echo "&nbsp;&nbsp;&nbsp;";
                        
                         $sql=("select Members from list where lname='$listnm' " );
                        $result=mysqli_query($conn,$sql);
                        $fetch=mysqli_fetch_array($result);
                      $ToLB=$fetch['Members'];
                        $ToLB_array=@explode(",",$ToLB);
                        
                        //$r=@count($result);
                        
                        echo"<center>";
                        echo "<select name='ToLB[]' id='ToLB' size='10' multiple>";
                       
                        $_SESSION['lname']=$_GET['listname'];
                       if(isset($_GET['listname']))
                       {
                       $listnm=$_GET['listname'];

                       echo "<option value=''  disabled='disabled' style='background:grey;color:white;'>$listnm</option>";
                               
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
                        

                        echo "</select></center><input type='submit' id='save' value='SAVE' style='background-color:orange; color:white;' name='s1' onclick='selectAll()' disabled='disabled'>";
                        ?>
                       
                          </td>
                        
                         </tr></table></div><br><br>
                         <div style="text-align:center;font-size:15px;padding-left:30%;">*Press Command or Ctrl to Select Multiple Contacts</div> <br>
               
                            </form><br>



                        
                        
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