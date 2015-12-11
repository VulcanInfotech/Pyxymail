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
                <!--sunny css-->
                <!--link rel="stylesheet" href="sunny/bootstrap/css/bootstrap.min.css"-->
                <link rel="stylesheet" href="sunny/plugins/datatables/dataTables.bootstrap.css">
                <link rel="stylesheet" href="sunny/dist/css/skins/_all-skins.min.css">
                <!--campaign css-->
                <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
	        <link rel="stylesheet" href="css/templatemo-style.css">
                <link href="css1/style.css" rel="stylesheet" type="text/css" media="all" />
                <link href="popup/css/style2.css" rel='stylesheet' type='text/css' />
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
                <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
                <link href="css/bootstrap1.css" rel="stylesheet">
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

<body style="background-color:#f2f2f2;">
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
		<!-- end navigation -->


<div style="margin-top:5%;">
<p>&nbsp;</p>
</div>
<div class="panel panel-default" style="margin-left:3%; width:95%;">
  <div class="panel-body">
  
       <div class="container">

            
                <div class="table-responsive">
                  <table id="example2" class="table">
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
 
                         
 echo '
    
			  <tr>
			     <td style="width:4%;  text-align:center;"><img src="images/emailicon5.png" class="img-responsive" height="50%" width="50%"></td>

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
			<td  style="width:15%; margin-top:2%; text-align:center;"><a style=" text-decoration:none;">'.$sent_date.'</a></td>
                        <td style="width:10%; margin-top:2%; text-align:center;" ><a target="popup" onclick="window.open("", "popup", width=580,height=360,scrollbars=no, toolbar=no,status=no,resizable=yes,menubar=no,location=no,directories=no,top=10,left=10)" href="promosent.php?id='.$ids.'&promo_title='.$title.'"><i class="fa fa-eye"></i></a></td>
	            </tr>
	
';

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
			     <td style="width:4%;  text-align:center;"><img src="images/emailicon5.png" class="img-responsive" height="60%" width="60%"></td>

	<td style="width:20%;  text-align:center;"><a>'.$title.'</a></td>
			  <td style="width:20%;  text-align:center;">
			    <div class="btn-group">
			    <a data-toggle="modal" data-target="#myModal'.$row['id'].'" style="color:black; margin-top:2%;"><button class="btn btn-default" title="View Promotion"><i class="fa fa-search-plus"></i></button></a>';
$ids = $row['id'];
					$title = $row['promo_title'];

			  echo '<a href="promo_edit.php?id='.$ids.'" style="color:black; margin-top:2%;"><button class="btn btn-default" title="Edit Promotion"><i class="fa fa-pencil-square-o"></i></button></a>';


			   echo ' <a href="autocomplete.php?id='.$id.'" style="color:black; margin-top:2%;"><button class="btn btn-default" title="Send Promotion"><i class="fa fa-paper-plane"></i></button></a>';


 echo '<a href="delete_pro.php?del='.$ids.'" onclick="return del();" style="color:black; margin-top:2%;"><button class="btn btn-default" title="Delete Promotion"><i class="fa fa-trash"></i></button></a>';
			echo ' </div> 
		      </td>                                                           
			<td  style="width:15%; margin-top:2%; text-align:center;"><a style=" text-decoration:none;">'.$sent_date.'</a></td>
                        <td style="width:10%; margin-top:2%; text-align:center;" ><a target="popup" onclick="window.open("", "popup", width=580,height=360,scrollbars=no, toolbar=no,status=no,resizable=yes,menubar=no,location=no,directories=no,top=10,left=10)" href="promosent.php?id='.$ids.'&promo_title='.$title.'" title="See Details"><i class="fa fa-eye"></i></a></td>
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
} 
                                                
                                ?>

</tbody>
                    
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
</div>
</div>
		<!-- Footer Starts Here -->
	<div class="footer" id="footer">
		<div class="container">
			<!--<a href="index.html"><img src="images/logo.png" /></a>-->
			<div class="row footer-row" style="margin-left:50px;">
				<div class="col-md-4 footer-row-column">
						<div class="text1">
                                               <P style="color:#3bc492"><B>NAVIGATION :<B></p>
						<p><a href="about_new1.php">About</a> </p>
						<p><a href="contactus2.php">Contact Us</a> </p>
                                                

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
        </script>								
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



	</body>
</html>