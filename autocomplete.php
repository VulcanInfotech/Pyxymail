<?php 

include 'session1.php';

include 'connect1.php';

if(isset($login_session))
{


$query = mysql_query("SELECT * FROM audience WHERE User = '$user_check'");


$count5=mysql_num_rows($query);
if($count5==0)
{
echo "<script>
alert('You Dont Have any Contacts plz save some contacts');
window.location.href='audience1.php';
</script>";

}

}


elseif(isset($paid_session))
{


$query = mysql_query("SELECT * FROM audience WHERE User = '$user_check1'");


$count5=mysql_num_rows($query);
if($count5==0)
{
echo "<script>
alert('You Dont Have any Contacts plz save some contacts');
window.location.href='audience1.php';
</script>";

}

}

?>

<!DOCTYPE html>
<html lang="en">
	<head>
    	
		<meta charset="utf-8">
		<title>PyxyMail</title>
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="">
		<meta name="description" content="">

		

<!--code for auto



 
  

<!--end-->
 <link href="css/bootstrap1.css" rel="stylesheet">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

    <!-- Custom styles for this template -->
   
    
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="css/templatemo-style.css">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

<link href="css1/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style1.css" rel="stylesheet" type="text/css" media="all"/>
<!--<script type="text/javascript" src="js/jquery.js"></script>
                <script type="text/javascript" src="js/login.js"></script>-->
     <link href="css/main.css" rel="stylesheet">
   <!-- <script src="js/jquery.min.js"></script>-->
   <!-- <script src="js/smoothscroll.js"></script>-->
<link rel="shortcut icon" type="image/x-icon" href="favicon (12).ico" />
    <link rel="icon" type="image/x-icon" href="favicon (12).ico" />

<script>
window.onload = function()
 {

document.getElementById('by_list').onchange = disablefield;
document.getElementById('by_contact1').onchange = disablefield;
document.getElementById('search').disabled = true;
}

function disablefield()
{

if ( document.getElementById('by_list').checked == true )
{
document.getElementById('search2').value = '';
document.getElementById('search2').disabled = true;
document.getElementById('search').disabled = false;

}
else if (document.getElementById('by_contact1').checked == true ){
document.getElementById('search').value = '';
document.getElementById('search').disabled = true;
document.getElementById('search2').disabled = false;

}
}


</script>



  <script>

  $(function() {
    function split( val ) {
      return val.split( /,\s*/ );
    }
    function extractLast( term ) {
      return split( term ).pop();
    }
 
    $( "#search" )
      // don't navigate away from the field on tab when selecting an item
      .bind( "keydown", function( event ) {
        if ( event.keyCode === $.ui.keyCode.TAB &&
            $( this ).autocomplete( "instance" ).menu.active ) {
          event.preventDefault();
        }
      })
      .autocomplete({
        source: function( request, response ) {
          $.getJSON( "search.php", {
            term: extractLast( request.term )
          }, response );
        },
        search: function() {
          // custom minLength
          var term = extractLast( this.value );
          if ( term.length < 1 ) {
            return false;
          }
        },
        focus: function() {
          // prevent value inserted on focus
          return false;
        },
        select: function( event, ui ) {
          var terms = split( this.value );
          // remove the current input
          terms.pop();
          // add the selected item
          terms.push( ui.item.value );
          // add placeholder to get the comma-and-space at the end
          terms.push( "" );
          this.value = terms.join( "," );
          return false;
        }
      });
  });
  </script>
  <script>
  $(function() {
    function split( val ) {
      return val.split( /,\s*/ );
    }
    function extractLast( term ) {
      return split( term ).pop();
    }
 
    $( "#search1" )
      // don't navigate away from the field on tab when selecting an item
      .bind( "keydown", function( event ) {
        if ( event.keyCode === $.ui.keyCode.TAB &&
            $( this ).autocomplete( "instance" ).menu.active ) {
          event.preventDefault();
        }
      })
      .autocomplete({
        source: function( request, response ) {
          $.getJSON( "search1.php", {
            term: extractLast( request.term )
          }, response );
        },
        search: function() {
          // custom minLength
          var term = extractLast( this.value );
          if ( term.length < 1 ) {
            return false;
          }
        },
        focus: function() {
          // prevent value inserted on focus
          return false;
        },
        select: function( event, ui ) {
          var terms = split( this.value );
          // remove the current input
          terms.pop();
          // add the selected item
          terms.push( ui.item.value );
          // add placeholder to get the comma-and-space at the end
          terms.push( "" );
          this.value = terms.join( "," );
          return false;
        }
      });
  });
  </script>
  <script>
  $(function() {
    function split( val ) {
      return val.split( /,\s*/ );
    }
    function extractLast( term ) {
      return split( term ).pop();
    }
 
    $( "#search2" )
      // don't navigate away from the field on tab when selecting an item
      .bind( "keydown", function( event ) {
        if ( event.keyCode === $.ui.keyCode.TAB &&
            $( this ).autocomplete( "instance" ).menu.active ) {
          event.preventDefault();
        }
      })
      .autocomplete({
        source: function( request, response ) {
          $.getJSON( "search2.php", {
            term: extractLast( request.term )
          }, response );
        },
        search: function() {
          // custom minLength
          var term = extractLast( this.value );
          if ( term.length < 1 ) {
            return false;
          }
        },
        focus: function() {
          // prevent value inserted on focus
          return false;
        },
        select: function( event, ui ) {
          var terms = split( this.value );
          // remove the current input
          terms.pop();
          // add the selected item
          terms.push( ui.item.value );
          // add placeholder to get the comma-and-space at the end
          terms.push( "" );
          this.value = terms.join( "," );
          return false;
        }
      });
  });



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

<li style="margin-top:10px;"><a href="account.php"  style="font-family: Helvetica Neue,Arial,Helvetica,sans-serif;font-size: 12px;font-weight: bold;line-height: 1.75;letter-spacing: 0.04em;color: #3a3a3a; text-align: center;height: 62px;line-height: 62px;padding: 0 28px;"> &nbsp;&nbsp;&nbsp;&nbsp;<b>My Account</b></a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
         <li style="margin-top:10px;"><b  style="font-family: Helvetica Neue,Arial,Helvetica,sans-serif;font-size: 12px;font-weight: bold;line-height: 1.75;letter-spacing: 0.04em;color: #3a3a3a; text-align: center;height: 62px;line-height: 62px;"><?php include 'session1.php';  echo $paid_user;  echo $login_session;?></b>

<a href="logout.php"><b style="font-family: Helvetica Neue,Arial,Helvetica,sans-serif;font-size: 12px;font-weight: bold;line-height: 1.75;letter-spacing: 0.04em;color: #3a3a3a; text-align: center;height: 62px;line-height: 62px;">Logout</b></a>
 <!--i class="fa fa-sign-out fa-1x"></i--></li>
        
      </ul>
    </div>
  </div>
</nav>
		<!-- end navigation -->
		<!-- start home -->
<div class="section" style="background:#485b6e; margin-top:60px;">
		<div class="content-wrapper"> 
<div class="col-md-3">
		 
		 </div>
  <div class="">
<div class="container"  >
    <div class="row">
       <div class="col-md-7 col-sm-6 col-xs-12" >

            <div class="well well-sm"style="float:center; box-shadow:2px 2px 2px 2px gray; margin-top:40px;" >
                <form class="form-horizontal" name="list" action="" method="POST"  >
                    <fieldset>
                        <div class="plans_head" style="background: rgba(61, 61, 61, 0.81);">
						
								<center><h3 style="color:white; padding: 1em 0;"> Select Your Audience <a> By List</a> or <a>By Contact</a></h3></center>
				</div>
</br>
                        <div class="form-group">

                            <span class="col-md-1 col-md-offset-1 text-center"><i class="fa fa-list-alt fa-2x" style="margin-top:70px; color:#6b7784;"></i></span>
<br>                            <div class="col-md-3">
                           <label for="name">
<input type="radio" name="by_contact" id="by_list" >&nbsp;&nbsp;&nbsp;&nbsp;By List</label>&nbsp;&nbsp;&nbsp;<br><br>
 <input name='list' id="search" placeholder="list name" size="20" title="Enter First Letter of List" class="form-control" />
</div>

<span class="col-md-1 col-md-offset-0 text-center"><i class="fa fa-user fa-2x" style="margin-top:45px;color:#6b7784;"></i></span>
<div class="col-md-3">
<label for="name"> <input type="radio" name="by_contact" id="by_contact1" checked >By Contact</label><br><br>
  <input name='contact' id="search2" placeholder="contact name"  size="20" title="Enter First Letter of contact" class="form-control"/>
</div>&nbsp;
<br>
<input type="submit" value="Add" class="btn btn-success " style="margin-top:20px; margin-left:20px;"  >


</div>
  <br>

 
  
  </form>
<!-- contact form-->
     
</body>
</html>
<?php
include 'db.php';
//include 'session1.php';

//LIST PART
         $listname=$_POST['list'];

     //   $listname=rtrim($_POST['list'],' ,');
      // $trim_whitespace=preg_replace('/\s+/', '', $listname);

        $list="'" . str_replace(",", "','", $listname) . "'";
 

 
//echo $listname1 = rtrim($listname1, ',');
//echo $listname = @preg_replace("/,$/", "", $listname1);

if(isset($paid_session))
{
$a=$user_check1;
}
elseif(isset($login_session))
{
$a=$user_check;
}
$res=mysql_query("select Members from list where lname in ($list) AND Email='" . $a ."'"); //AND Email='$user_check'...this will be used at time of implementation
while ($row = mysql_fetch_assoc($res)) {
   $n[$j]= $row["Members"];
  $j++;
    }


/*$n=trim($n,"|");
echo $replace="'" . str_replace("|", "','", $n) . "'";*/


 $implode_member=@implode("", $n);
 $replace="'" . str_replace("|", "','", $implode_member) . "'";

//$explode_member=@explode("|",$n);



//echo $implode_member="'".@implode("','", $n)."'";

$res1=mysql_query("select Email from audience where User='" . $a ."' and Name in ($replace)" );
while ($row1 = mysql_fetch_assoc($res1)) {
     $m[$i]= $row1["Email"];
    $i++;
    }
   
    
   $new_implode = @implode(",",$m);
    
    
//EMAIL-ID PART

$email=$_POST['email'];
 $contact_trim=rtrim($email,',');
    
//CONTACT PART    
 
 $contact=$_POST['contact'];
 
  //$c_trim=rtrim($contact,' ,');



 

//$t_whitespace=preg_replace('/\s+/','', $c_trim);



       

$c="'" .str_replace(",", "','", $contact) . "'";


        
        
 $res2=mysql_query("select Email from audience where User='" . $a ."' and Name in ($c)" );
while ($row2 = mysql_fetch_assoc($res2)) {
     $l[$k]= $row2["Email"];
    $k++;
    }
  $n_implode = @implode(",",$l);

   
//all    
    
    ?>
                        
<form name="all" action="" method="POST" onsubmit="checkEmail()">
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-1 text-center"><i class="fa fa-envelope-o fa-2x" style="margin-top:25px; color:#6b7784;"></i></span>
                            <div class="col-md-9">
                                  
                                  <label for="name" ><b>To:</b></label>
<textarea name="all" id="output" required class="form-control" >
    <?php 

if($new_implode!="" and $contact_trim!="" and $n_implode!="")
    {
    echo ltrim($new_implode).",".ltrim($contact_trim).",".ltrim($n_implode);
    }
    elseif($new_implode!="" and $contact_trim!=""){
    echo ltrim($new_implode).",".ltrim($contact_trim);
    }
    elseif($new_implode!="" and $n_implode!="")
    {
    echo ltrim($new_implode).",".ltrim($n_implode);
    }
    elseif ($contact_trim!="" and $n_implode!="")
    {
    echo ltrim($contact_trim).",".ltrim($n_implode);
    }
    else
    {
    echo ltrim($new_implode).ltrim($contact_trim).ltrim($n_implode);
    }

       
       

   
    

    ?></textarea>

 </div><br/>

</div>
 <div class="form-group">
                            <span class="col-md-1 col-md-offset-1 text-center"><i class="fa fa-list-alt fa-2x" style="margin-top:25px;color:#6b7784;" ></i></span>
                                 <div class="col-md-9">
                          <label for="name"><b>Subject:</b></label>
 <input type="text" name="subject" class="form-control" required>
</div><br><br>

                       <div class="form-group"><br><br>
                            <span class="col-md-3  "></span>

                              
                            <input type="submit" name="submit1"  value="Send Promotion" class="btn btn-success "/>
 <span class="col-md-offset-1"></span>
<input type="button" value="Clear" name="s1" class="btn btn-danger " onclick="javascript:eraseText();" />
    <script>
function eraseText() {
    document.getElementById("output").value = "";
}
function checkEmail()
{
var arr = 
document.getElementById("showmsg").value=arr;
for (var i = 0; i < arr.length; i++)
 {
var email1=arr[i];

 var domain=substr(strrchr(email1,"@"),1);
                                        
                                        
                                        var regex1 = "/^[A-Za-z0-9._]*\@[A-Za-z]*\.[A-Za-z]{2,5}$/"; 
                                        
                                        if ( preg_match( regex1, email1) ) {
                                             
                                        
                                        if(filter_var(gethostbyname(domain),FILTER_VALIDATE_IP)) {




                                        
}
else
{
document.getElementById("showmsg").value = "Please provide a valid email address";
return false;
}
}
else
{
document.getElementById("showmsg").value = "Please provide a valid email address";
return false;
}
}

}
</script> 
<?php
include 'connect.php';
//include 'session1.php';

if(isset($paid_session))
{
$from=$user_check1;

}
elseif(isset($login_session))
{
$from=$user_check;

}

$to=$_POST["all"];

$mail_subject=$_POST["subject"];

if (isset($_POST['submit1']))
{

$id=$_GET['id'];
//$image=$_GET['image'];

/*$sql = "SELECT id, Img, pro_title FROM promotion WHERE Img='$image' and pro_title='$pro_title'";*/

  $sql = "SELECT  Img, pro_title FROM promotion WHERE id='$id' ";
                                    
                                            $query=mysqli_query($conn,$sql);
                                          
					 $row=mysqli_fetch_assoc($query);
                                            
                                                    //$id=$row['id'];
                                                    $image=$row['Img'];
                                                     $title=$row['pro_title'];








//$message=$_POST["message"];

//echo "<img src='.$image.'>";





//$to = $email;
//$from="no_reply@vulcaninfotech.com";	
$subject =$mail_subject;

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
//$headers .= 'From:no-reply' . "\r\n";
                                        

$Body  = "" ;

ob_start();

echo   "<center><h3> ".$title. " </h3></center>";
echo  "<center><img src='http://pyxymail.net/version4/$image'><br></center>";
echo  '<img src="http://pyxymail.net/emailtracker.php?to='.$to.' & from='.$from.'"  />';
echo  "<center><a href='http://pyxymail.net/version4/unsubscribe.php?from=$from&id=$id'>unsubscribe</a></center>";

$body .= ob_get_contents();
ob_end_clean();

mail($to,$subject,$body,$headers);




echo "<script>
                 alert('Promotion has been sent');
                window.location.href='campaign_dash.php';
                </script>";



//save promotion recipient 

if(isset($login_session))
{
$sql6="select * from promotion where id='$id' and parentemail='$user_check'";
                         $query1=mysqli_query($conn,$sql6);
                         
                                $row1=mysqli_fetch_assoc($query1);
$ids=$row1['id'];

 mysqli_query($conn,"INSERT INTO promotion_sent(email,promo_title,promo_id,User) VALUES('$to','$title',$ids,'$user_check')")or die ("Could not INSERT VALUES ");
}

elseif(isset($paid_session))
{
$sql7="select * from promotion where id='$id'and parentemail='$user_check1'";
                         $query2=mysqli_query($conn,$sql7);
                         
                                $row2=mysqli_fetch_assoc($query2);
$idw=$row2['id'];

 mysqli_query($conn,"INSERT INTO promotion_sent(email,promo_title,promo_id,User) VALUES('$to','$title',$idw,'$user_check1')")or die ("Could not INSERT VALUES ");
}

}
 
           








?>

<!--<input type="hidden" name="image" value="<?php echo $image;?>"/>
<input type="hidden" name="title" value="<?php echo $title;?>"/>-->






 

</div>

</div>  
    </form>
</div>
   
    <?php //echo $_POST['all'];?>

</div>


</div><!-- /.box content -->

</div> <!-- /inner -->
         </div> <!-- /.content-wrapper -->

		
		
		<!-- end home -->
		<!-- start divider -->
		
		<!-- end contact -->

		<!-- start footer -->
		<!--<footer>
			<div class="container">
				<div class="row">
					<p>Copyright © 2084 Your Company Name</p>
				</div>
			</div>
		</footer>-->
		<!-- end footer -->
		
		<!-- Footer Starts Here -->
	<div class="footer" id="footer"  >
		<div class="container" style="padding-right:0;margin-right:0;margin-left:auto;">
			<!--<a href="index.html"><img src="images/logo.png" /></a>-->
			
				<div class="col-md-4 footer-row-column">
                                      <ul class="social" style="padding:0px;">
                                               
						<li style="margin-top:25px;"><a href="about_new1.php"  >About</a></li>
						<li><a href="contactus2.php" >Contact Us</a></li>
						
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
	<!-- <script src="js/bootstrap.js"></script>-->
	
		
		
        
		
	