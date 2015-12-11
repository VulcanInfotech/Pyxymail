<?php 
session_start(); 
include 'connect.php';
include 'session1.php';

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

		
           
                <link rel="stylesheet" href="css/templatemo-style.css">
                <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

              

              

<link rel="stylesheet" href="sunny/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    
    <!-- DataTables -->
    <link rel="stylesheet" href="sunny/plugins/datatables/dataTables.bootstrap.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="sunny/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="sunny/dist/css/skins/_all-skins.min.css">
            







                <!--script type="text/javascript" src="js/jquery.js"></script>
                <script src="js/jquery.min.js"></script>
                <script src="js/smoothscroll.js"></script>
                <script type="text/javascript" src="js/login.js"></script-->

                <link href="css/main.css" rel="stylesheet">
                

                <link href="popup/css/style2.css" rel='stylesheet' type='text/css' />

                <!--script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

                <script src="popup/js/jquery.magnific-popup.js" type="text/javascript"></script>
                <script type="text/javascript" src="popup/js/modernizr.custom.53451.js"></script--> 


                 <!--link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


<script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});

</script>


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


<script type="javascript">
function openRequestedPopup()
{
window.open('http://pyxymail.net/promosent.php'
'popup',
'width=545,height=326,resizable=no,scrollbars=yes,status=yes');
}
</script>





		<!-- start preloader -->
		<!--div class="preloader">
			<div class="sk-spinner sk-spinner-rotating-plane"></div-->
    	 </div>
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
	          <a href="index.php" class="navbar-brand"><img src="images/pyxymail31.png"></a>
	        </div>
	        <div class="navbar-collapse collapse" >
	          <ul class="nav navbar-nav" style="float:right;">
	           
	           <li style="margin-top:5px;"><a href="dashboard.php"><b>Dashboard</b></a></li>
						
						<li style="margin-top:5px;"><a href="audience1.php"><b>Audience</b></a></li>
						<!--li style="margin-top:5px;" ><a  href="campaign_dash.php"><b>Campaign</b></a></li-->
                                                <!--li  style="margin-top:5px;"><a href="account.php"  style="color:#2ecc71";><b>My Account</b></a></li-->
                                              
<?php
include 'session1.php';
if(isset($paid_session))
{
         echo "                  <li style='margin-top:5px;'><a href='pricing_signups.php'><b>Pricing</b></a>   </li>";
}
?>
<!--?php
include 'session1.php';
if(isset($login_session))
{
         echo "                  <li style='margin-top:5px;'><a href='pricing_signups3.php'>Pricing Plans</a>   </li>";
}
?> -->
<li style="margin-top:5px;"><a href="logout.php"> <b><?php include 'session1.php';  echo $paid_user;  echo $login_session;?></b>
 <i class="fa fa-sign-out fa-1x"></i></a></li>
						

	          </ul>

	        </div><!--/.nav-collapse -->
	      </div>
	    </div>
<!-------------- end navigation---------------------------------------------------------------------------------------------------------------------------------- -->
<!-------------- start pagination---------------------------------------------------------------------------------------------------------------------------------- -->







        

























































<div style="margin-top:5%;">
<p>&nbsp;</p>
</div>

<?php
              include 'session1.php';
              if(isset($login_session)){
                     $parentemail=$user_check;          
			$sql = "select * from save_promotion where user='$parentemail' ORDER BY id DESC ";
                        $query=mysqli_query($conn,$sql);
                        $count=mysqli_num_rows($qry);
			while($row=mysqli_fetch_array($query))
			{ 
			  $id=$row['id'];
                          $title=$row['promo_title'];
                          $content=$row['promo_content'];
 
                         
                           
                           echo '<div class="container">
    <div class="panel panel-default">
        <div class="panel-body">
			<div class="container-fluid">
			  <div class="row">
			     <div class="col-sm-1">
			       <img src="images/emailicon5.png" class="img-responsive">
			       
			     </div>
			    <input type="text" class="col-md-3" name="pro_name" value = "'.$title.'" readonly style="margin-top:2%;">
			  <div class="col-md-3" style="margin-top:2%;">
			    <div class="btn-group">
			    <button class="btn btn-default popup-with-zoom-anim" title="View Promotion"><a data-toggle="modal" data-target="#myModal" style="color:black;"><i class="fa fa-search-plus fa-2x"></i></a></button>
			    <button class="btn btn-default" title="Edit Promotion"><a href="promo_edit.php?id=$ids" style="color:black;"><i class="fa fa-pencil-square-o fa-2x"></i></a></button>
			    <button class="btn btn-default" title="Send Promotion"><a href="autocomplete.php?id=$id" style="color:black;"><i class="fa fa-paper-plane fa-2x"></i></a></button>
				<button class="btn btn-default" title="Delete Promotion" onclick="return del();"><a href="delete_pro.php?del=$ids" style="color:black;"><i class="fa fa-trash fa-2x"></i></a></button>
			 </div> 
		      </div>                                                            
			<div class="col-md-3" style="margin-top:2%;"><a><b>Last Sent On :&nbsp;</b>'.$sent_date.'</a></div>

                        <div class="col-md-2" style="margin-top:2%;"><a target="popup" onclick="window.open("", "popup", width=580,height=360,scrollbars=no, toolbar=no,status=no,resizable=yes,menubar=no,location=no,directories=no,top=10,left=10)" href="promosent.php?id='.$ids.'&promo_title='.$title.'"><b style="float:right;">See Details</b></a></div>
	            </div>
	 </div>
  </div>

</div>
</div>';



			     $ids = $row['id'];
			     $title = $row['promo_title'];
                                                            
			     $sql2="select * from promotion_sent where Promo_title='$title' order by date DESC";
                             $query2=mysqli_query($conn,$sql2);
                             $row3=mysqli_fetch_assoc($query2);
                             $sent=$row3['email'];
                             $sent_date=$row3['date'];
			     
												}  
                          }


                     elseif(isset($paid_session))
	             {
?>



<div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Table With Full Features</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Rendering engine</th>
                        <th>Browser</th>
                        <th>Platform(s)</th>
                        <th>Engine version</th>
                        <th>CSS grade</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Trident</td>
                        <td>Internet
                          Explorer 4.0</td>
                        <td>Win 95+</td>
                        <td> 4</td>
                        <td>X</td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet
                          Explorer 5.0</td>
                        <td>Win 95+</td>
                        <td>5</td>
                        <td>C</td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet
                          Explorer 5.5</td>
                        <td>Win 95+</td>
                        <td>5.5</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet
                          Explorer 6</td>
                        <td>Win 98+</td>
                        <td>6</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 7</td>
                        <td>Win XP SP2+</td>
                        <td>7</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>AOL browser (AOL desktop)</td>
                        <td>Win XP</td>
                        <td>6</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Gecko</td>
                        <td>Firefox 1.0</td>
                        <td>Win 98+ / OSX.2+</td>
                        <td>1.7</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Gecko</td>
                        <td>Firefox 1.5</td>
                        <td>Win 98+ / OSX.2+</td>
                        <td>1.8</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Gecko</td>
                        <td>Firefox 2.0</td>
                        <td>Win 98+ / OSX.2+</td>
                        <td>1.8</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Gecko</td>
                        <td>Firefox 3.0</td>
                        <td>Win 2k+ / OSX.3+</td>
                        <td>1.9</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Gecko</td>
                        <td>Camino 1.0</td>
                        <td>OSX.2+</td>
                        <td>1.8</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Gecko</td>
                        <td>Camino 1.5</td>
                        <td>OSX.3+</td>
                        <td>1.8</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Gecko</td>
                        <td>Netscape 7.2</td>
                        <td>Win 95+ / Mac OS 8.6-9.2</td>
                        <td>1.7</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Gecko</td>
                        <td>Netscape Browser 8</td>
                        <td>Win 98SE+</td>
                        <td>1.7</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Gecko</td>
                        <td>Netscape Navigator 9</td>
                        <td>Win 98+ / OSX.2+</td>
                        <td>1.8</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Gecko</td>
                        <td>Mozilla 1.0</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td>1</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Gecko</td>
                        <td>Mozilla 1.1</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td>1.1</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Gecko</td>
                        <td>Mozilla 1.2</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td>1.2</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Gecko</td>
                        <td>Mozilla 1.3</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td>1.3</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Gecko</td>
                        <td>Mozilla 1.4</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td>1.4</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Gecko</td>
                        <td>Mozilla 1.5</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td>1.5</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Gecko</td>
                        <td>Mozilla 1.6</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td>1.6</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Gecko</td>
                        <td>Mozilla 1.7</td>
                        <td>Win 98+ / OSX.1+</td>
                        <td>1.7</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Gecko</td>
                        <td>Mozilla 1.8</td>
                        <td>Win 98+ / OSX.1+</td>
                        <td>1.8</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Gecko</td>
                        <td>Seamonkey 1.1</td>
                        <td>Win 98+ / OSX.2+</td>
                        <td>1.8</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Gecko</td>
                        <td>Epiphany 2.20</td>
                        <td>Gnome</td>
                        <td>1.8</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Webkit</td>
                        <td>Safari 1.2</td>
                        <td>OSX.3</td>
                        <td>125.5</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Webkit</td>
                        <td>Safari 1.3</td>
                        <td>OSX.3</td>
                        <td>312.8</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Webkit</td>
                        <td>Safari 2.0</td>
                        <td>OSX.4+</td>
                        <td>419.3</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Webkit</td>
                        <td>Safari 3.0</td>
                        <td>OSX.4+</td>
                        <td>522.1</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Webkit</td>
                        <td>OmniWeb 5.5</td>
                        <td>OSX.4+</td>
                        <td>420</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Webkit</td>
                        <td>iPod Touch / iPhone</td>
                        <td>iPod</td>
                        <td>420.1</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Webkit</td>
                        <td>S60</td>
                        <td>S60</td>
                        <td>413</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Presto</td>
                        <td>Opera 7.0</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td>-</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Presto</td>
                        <td>Opera 7.5</td>
                        <td>Win 95+ / OSX.2+</td>
                        <td>-</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Presto</td>
                        <td>Opera 8.0</td>
                        <td>Win 95+ / OSX.2+</td>
                        <td>-</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Presto</td>
                        <td>Opera 8.5</td>
                        <td>Win 95+ / OSX.2+</td>
                        <td>-</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Presto</td>
                        <td>Opera 9.0</td>
                        <td>Win 95+ / OSX.3+</td>
                        <td>-</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Presto</td>
                        <td>Opera 9.2</td>
                        <td>Win 88+ / OSX.3+</td>
                        <td>-</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Presto</td>
                        <td>Opera 9.5</td>
                        <td>Win 88+ / OSX.3+</td>
                        <td>-</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Presto</td>
                        <td>Opera for Wii</td>
                        <td>Wii</td>
                        <td>-</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Presto</td>
                        <td>Nokia N800</td>
                        <td>N800</td>
                        <td>-</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Presto</td>
                        <td>Nintendo DS browser</td>
                        <td>Nintendo DS</td>
                        <td>8.5</td>
                        <td>C/A<sup>1</sup></td>
                      </tr>
                      <tr>
                        <td>KHTML</td>
                        <td>Konqureror 3.1</td>
                        <td>KDE 3.1</td>
                        <td>3.1</td>
                        <td>C</td>
                      </tr>
                      <tr>
                        <td>KHTML</td>
                        <td>Konqureror 3.3</td>
                        <td>KDE 3.3</td>
                        <td>3.3</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>KHTML</td>
                        <td>Konqureror 3.5</td>
                        <td>KDE 3.5</td>
                        <td>3.5</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Tasman</td>
                        <td>Internet Explorer 4.5</td>
                        <td>Mac OS 8-9</td>
                        <td>-</td>
                        <td>X</td>
                      </tr>
                      <tr>
                        <td>Tasman</td>
                        <td>Internet Explorer 5.1</td>
                        <td>Mac OS 7.6-9</td>
                        <td>1</td>
                        <td>C</td>
                      </tr>
                      <tr>
                        <td>Tasman</td>
                        <td>Internet Explorer 5.2</td>
                        <td>Mac OS 8-X</td>
                        <td>1</td>
                        <td>C</td>
                      </tr>
                      <tr>
                        <td>Misc</td>
                        <td>NetFront 3.1</td>
                        <td>Embedded devices</td>
                        <td>-</td>
                        <td>C</td>
                      </tr>
                      <tr>
                        <td>Misc</td>
                        <td>NetFront 3.4</td>
                        <td>Embedded devices</td>
                        <td>-</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Misc</td>
                        <td>Dillo 0.8</td>
                        <td>Embedded devices</td>
                        <td>-</td>
                        <td>X</td>
                      </tr>
                      <tr>
                        <td>Misc</td>
                        <td>Links</td>
                        <td>Text only</td>
                        <td>-</td>
                        <td>X</td>
                      </tr>
                      <tr>
                        <td>Misc</td>
                        <td>Lynx</td>
                        <td>Text only</td>
                        <td>-</td>
                        <td>X</td>
                      </tr>
                      <tr>
                        <td>Misc</td>
                        <td>IE Mobile</td>
                        <td>Windows Mobile 6</td>
                        <td>-</td>
                        <td>C</td>
                      </tr>
                      <tr>
                        <td>Misc</td>
                        <td>PSP browser</td>
                        <td>PSP</td>
                        <td>-</td>
                        <td>C</td>
                      </tr>
                      <tr>
                        <td>Other browsers</td>
                        <td>All others</td>
                        <td>-</td>
                        <td>-</td>
                        <td>U</td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Rendering engine</th>
                        <th>Browser</th>
                        <th>Platform(s)</th>
                        <th>Engine version</th>
                        <th>CSS grade</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
		









<div class="col-md-10 col-md-offset-1" >
<table id="" class="table table-bordered table-striped table-hover table-responsive">
        <thead>
               <tr>
                        <th style=" text-align:center;"></th>
                        <th style=" text-align:center;">Promotion Name</th>
                        <th style=" text-align:center;">Options</th>
                        <th style=" text-align:center;">Last Sent On</th>
                        <th style=" text-align:center;">See Details</th>

              </tr>
       </thead>
        <tbody>


<?php
                         $parentemail=$user_check1;
			$sql="select * from save_promotion where user='$parentemail' ORDER BY id DESC ";
                         $query=mysqli_query($conn,$sql);
                         $count=mysqli_num_rows($qry);

                                while($row=mysqli_fetch_array($query))
                                {
                                       
                                       
								$id=$row['id'];
                                $title=$row['promo_title'];
                                $content=$row['promo_content'];


 echo '
    
			  <tr>
			     <td style="width:4%;  text-align:center;"><img src="images/emailicon5.png" class="img-responsive"></td>

	<td style="width:20%;  text-align:center;"><input type="text" class="txt " name="pro_name" value = "'.$title.'" readonly style="margin-top:2%;"></td>
			  <td style="width:20%;  text-align:center;">
			    <div class="btn-group">
			    <a data-toggle="modal" data-target="#myModal'.$row['id'].'" style="color:black; margin-top:2%;"><button class="btn btn-default" title="View Promotion"><i class="fa fa-search-plus fa-2x"></i></button></a>';
$ids = $row['id'];
					$title = $row['promo_title'];

			  echo '<a href="promo_edit.php?id='.$ids.'" style="color:black; margin-top:2%;"><button class="btn btn-default" title="Edit Promotion"><i class="fa fa-pencil-square-o fa-2x"></i></button></a>';


			   echo ' <a href="autocomplete.php?id='.$id.'" style="color:black; margin-top:2%;"><button class="btn btn-default" title="Send Promotion"><i class="fa fa-paper-plane fa-2x"></i></button></a>';


 echo '<a href="delete_pro.php?del='.$ids.'" onclick="return del();" style="color:black; margin-top:2%;"><button class="btn btn-default" title="Delete Promotion"><i class="fa fa-trash fa-2x"></i></button></a>';
			echo ' </div> 
		      </td>                                                           
			<td  style="width:15%; margin-top:2%; text-align:center;"><a>'.$sent_date.'</a></td>
                        <td style="width:10%; margin-top:2%; text-align:center;" ><a target="popup" onclick="window.open("", "popup", width=580,height=360,scrollbars=no, toolbar=no,status=no,resizable=yes,menubar=no,location=no,directories=no,top=10,left=10)" href="promosent.php?id='.$ids.'&promo_title='.$title.'"><b style=" text-align:center">See Details</b></a></td>
	            </tr>
	
';

                                        
					     
                                                            $sql2="select * from promotion_sent where Promo_title='$title' order by date DESC";
                                                            $query2=mysqli_query($conn,$sql2);
                                                            $row3=mysqli_fetch_assoc($query2);
                                                            $sent=$row3['email'];
                                                            $sent_date=$row3['date'];
//$content=$row['.promo_content.'];
echo '<div class="container">
  

  <div class="modal fade" id="myModal'.$row['id'].'" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        
        <div class="modal-body" style="height:auto;">';
             
              echo "<center>".$row["promo_content"]."</center>";

      echo "  </div>
        
      </div>
      
    </div>
  </div>
  
</div>
";
						}         						
                                                
                                ?>

</tbody></table>









<?php
                         $parentemail=$user_check1;
			$sql="select * from save_promotion where user='$parentemail' ORDER BY id DESC ";
                         $query=mysqli_query($conn,$sql);
                         $count=mysqli_num_rows($qry);

                                while($row=mysqli_fetch_array($query))
                                {
                                       
                                       
								$id=$row['id'];
                                $title=$row['promo_title'];
                                $content=$row['promo_content'];


 echo '<div class="container">
    <div class="panel panel-default">
        <div class="panel-body">
			<div class="container-fluid">
			  <div class="row">
			     <div class="col-md-1">
			       <img src="images/emailicon5.png" class="img-responsive">
			       <!--a href="showpromo.php?id=$id&title=$title" target="_blank"-->
			     </div>
			    <input type="text" class="txt col-md-3" name="pro_name" value = "'.$title.'" readonly style="margin-top:2%;">
			  <div class="col-md-3" style="margin-top:2%;">
			    <div class="btn-group">
			    <a data-toggle="modal" data-target="#myModal'.$row['id'].'" style="color:black;"><button class="btn btn-default" title="View Promotion"><i class="fa fa-search-plus fa-2x"></i></button></a>';
$ids = $row['id'];
					$title = $row['promo_title'];

			  echo '<a href="promo_edit.php?id='.$ids.'" style="color:black;"><button class="btn btn-default" title="Edit Promotion"><i class="fa fa-pencil-square-o fa-2x"></i></button></a>';


			   echo ' <a href="autocomplete.php?id='.$id.'" style="color:black;"><button class="btn btn-default" title="Send Promotion"><i class="fa fa-paper-plane fa-2x"></i></button></a>';


 echo '<a href="delete_pro.php?del='.$ids.'" onclick="return del();" style="color:black;"><button class="btn btn-default" title="Delete Promotion"><i class="fa fa-trash fa-2x"></i></button></a>';
			echo ' </div> 
		      </div>                                                           
			<div class="col-md-3" style="margin-top:2%;"><a><b>Last Sent On :&nbsp;</b>'.$sent_date.'</a></div>
                        <div class="col-md-2" style="margin-top:2%;"><a target="popup" onclick="window.open("", "popup", width=580,height=360,scrollbars=no, toolbar=no,status=no,resizable=yes,menubar=no,location=no,directories=no,top=10,left=10)" href="promosent.php?id='.$ids.'&promo_title='.$title.'"><b style="float:right;">See Details</b></a></div>
	            </div>
	 </div>
  </div>

</div>
</div>';

                                        
					     
                                                            $sql2="select * from promotion_sent where Promo_title='$title' order by date DESC";
                                                            $query2=mysqli_query($conn,$sql2);
                                                            $row3=mysqli_fetch_assoc($query2);
                                                            $sent=$row3['email'];
                                                            $sent_date=$row3['date'];
//$content=$row['.promo_content.'];
echo '<div class="container">
  

  <div class="modal fade" id="myModal'.$row['id'].'" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        
        <div class="modal-body" style="height:auto;">';
             
              echo "<center>".$row["promo_content"]."</center>";

      echo "  </div>
        
      </div>
      
    </div>
  </div>
  
</div>
";


echo "<style>
.small-dialog".$row['id']."
{
  background: white;
    padding: 10px 0 10px 0;
  text-align: left;
  max-width: 1200px; 
    height:550px;
  margin: 40px auto;
  position: relative;
  text-align: center;
  border: 15px solid #eee;
//overflow:auto;
}
</style>";            
echo "<div id='small-dialog".$row['id']."' class='mfp-hide'>
<div class='pop_up'>
<div style='overflow:scroll;height:500px;'>";
    echo $row['promo_content'];
echo "</div>
</div>
</div>"; 
							        						


							}         						
                                               }  
                                ?>
  

<div class="container">
<center>
  <ul class="pagination">
    <li class="active"><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
  </ul>
</center>
</div>

		<!-- Footer Starts Here -->
	<div class="footer" id="footer">
		<div class="container">
			<!--<a href="index.html"><img src="images/logo.png" /></a>-->
			<div class="row footer-row">
				<div class="col-md-4 footer-row-column">
						<div class="text1">
						<P style="color:#3bc492"><B>ADDRESS :</B></p>
						<p  >129 West 81st Street,INDIA</p>
						
						</div>
				</div>
				<div class="col-md-4 footer-row-column">
					<div class="text1">
                                               <P style="color:#3bc492"><B>NAVIGATION :<B></p>
						<p><a href="about_new.php">About</a> </p>
						<p><a href="contactus1.php">Contact Us</a> </p>
						

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
 <script type="text/javascript">


      function del() {

    var txt;
    var r = confirm("Are you sure would you like to delete?");
    if (r == true) {
        window.location='delete_pro.php';
        return true;
        
    } else {
    return false;
        window.location='campaign_dash.php';
    }
}
 
          /*  //<![CDATA[
            $(window).load(function() { 
                $('.loader-item').fadeOut(); 
                    $('#pageloader').delay(350).fadeOut('slow');
                $('body').delay(350).css({'overflow-y':'visible'});
            })
            //]]>*/
         
</script>

<script>
$(document).ready(function(){
      
      $('#jump').click(function() {
             var loc = $(this).attr("href");
             window.open(loc, '_blank');
        });

}) ; 
       



<script src="sunny/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <!-- DataTables -->
    <script src="sunny/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="sunny/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    
    <!-- page script -->
    <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": true,
          "info": false,
          "autoWidth": true
        });
      });
    </script>


						
	</body>
</html>
