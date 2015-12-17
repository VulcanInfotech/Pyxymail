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
<link href="css/bootstrap1.css" rel="stylesheet">
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
                
<!--<script>
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

</script>-->
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
         <li style="margin-top:10px;"><center><b  style="font-family: Helvetica Neue,Arial,Helvetica,sans-serif;font-size: 12px;font-weight: bold;line-height: 1.75;letter-spacing: 0.04em;color: #3a3a3a; text-align: center;height: 62px;line-height: 62px;"><?php include 'session1.php';  echo $paid_user;  echo $login_session;?>,&nbsp;
<a href="logout.php" style="color:green;">Logout</a></b>

 <!--i class="fa fa-sign-out fa-1x"></i--></center></li>
        <li>&nbsp;&nbsp;&nbsp;&nbsp;</li>
        
      </ul>
    </div>
  </div>
</nav>
		<!-- end navigation -->


<div >
<p>&nbsp;</p>
</div>
<div class="panel panel-default" style="margin-left:3%; width:95%; margin-top:100px; ">
  <div class="panel-body">
  
       <div class="container">

            
                <div class="table-responsive" >
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
			/*$sql = "select * from promotion where user='$parentemail' ORDER BY id DESC ";
                        $query=mysqli_query($conn,$sql);
                        $count=mysqli_num_rows($qry);*/


                                     $sql = "SELECT id,Img, pro_title FROM promotion WHERE parentemail = '$parentemail' ORDER BY id DESC";
                                            $query=mysqli_query($conn,$sql);
                                           $count=mysqli_num_rows($qry);


			while($row=mysqli_fetch_array($query))
			{ 
			  
                               // $title=$row['promo_title'];
                               // $content=$row['Img'];
                                $id=$row['id'];
                               $image=$row['Img'];
                               $pro_title=$row['pro_title'];
 $sql2="select * from promotion_sent where promo_id='$id' and User='$parentemail' order by date DESC";
                             $query2=mysqli_query($conn,$sql2);
                             $row3=mysqli_fetch_assoc($query2);
                             $sent=$row3['email'];
                             $sent_date=$row3['date'];


 
                         
 echo '
    
			  <tr>
			     <td style="width:4%;  text-align:center;"><img src="images/emailicon5.png" class="img-responsive" height="60%" width="60%"></td>

	<td style="width:20%;  text-align:center;"><a>'.$pro_title.'</a></td>
			  <td style="width:20%;  text-align:center;">
			    <div class="btn-group">
			    <a data-toggle="modal" data-target="#myModal'.$row['id'].'" style="color:black; margin-top:2%;"><button class="btn btn-default" title="View Promotion"><i class="fa fa-search-plus"></i></button></a>';
                                         $ids = $row['id'];
					 $pro_title = $row['promo_title'];

			  echo '<a href="promo_edit.php?id='.$id.'" style="color:black; margin-top:2%;"><button class="btn btn-default" title="Edit Promotion"><i class="fa fa-pencil-square-o"></i></button></a>';


			   echo ' <a href="autocomplete.php?id='.$id.'" style="color:black; margin-top:2%;"><button class="btn btn-default" title="Send Promotion"><i class="fa fa-paper-plane"></i></button></a>';


 echo '<a href="delete_pro.php?del='.$ids.'" onclick="return del();" style="color:black; margin-top:2%;"><button class="btn btn-default" title="Delete Promotion"><i class="fa fa-trash"></i></button></a>';
			echo ' </div> 
		      </td>                                                           
			<td  style="width:15%; margin-top:2%; text-align:center;"><a style=" text-decoration:none;">'.$sent_date.'</a></td>
                        <td style="width:10%; margin-top:2%; text-align:center;" ><a target="popup" onclick="window.open("", "popup", width=580,height=360,scrollbars=no, toolbar=no,status=no,resizable=yes,menubar=no,location=no,directories=no,top=10,left=10)" href="promosent.php?id='.$id.'" title="See Details"><i class="fa fa-eye"></i></a></td>
	            </tr>
	
';	     

                             $ids = $row['id'];
			     $title = $row['promo_title'];




echo '<div class="container">
  

  <div class="modal fade" id="myModal'.$row['id'].'" role="dialog">
    <div class="modal-dialog modal-lg" style="width:830px;">
      <div class="modal-content" >
        
        <div class="modal-body" style="height:auto; ">';
             
              //echo "<center>".$row["Img"]."</center>";
               echo " <img src='".$image."' >
            <div class='modal-footer' style='width:780px;'>
          <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
        </div>";

      echo "  </div>

        
        
      </div>
      
    </div>
  </div>
  
</div>
";
	
                                                            
			    
			     }  
}


                     elseif(isset($paid_session))
	             {
                         $parentemail=$user_check1;
			/*$sql="select * from promotion where user='$parentemail' ORDER BY id DESC ";
                         $query=mysqli_query($conn,$sql);
                         $count=mysqli_num_rows($qry);*/

                           $sql = "SELECT id,Img, pro_title FROM promotion WHERE parentemail = '$parentemail' ORDER BY id DESC";
                                            $query=mysqli_query($conn,$sql);
                                           $count=mysqli_num_rows($qry);


 

                                while($row=mysqli_fetch_array($query))
                                {
                                       
                                       
				
                               // $title=$row['promo_title'];
                               // $content=$row['Img'];
                                $id=$row['id'];
                               $image=$row['Img'];
                               $pro_title=$row['pro_title'];
$sql2="select * from promotion_sent where promo_id='$id' and User='$parentemail' order by date DESC";
                                                            $query2=mysqli_query($conn,$sql2);
                                                            $row3=mysqli_fetch_assoc($query2);
                                                            $sent=$row3['email'];
                                                            $sent_date=$row3['date'];


 echo '
    
			  <tr>
			     <td style="width:4%;  text-align:center;"><img src="images/emailicon5.png" class="img-responsive" height="60%" width="60%"></td>

	<td style="width:20%;  text-align:center;"><a>'.$pro_title.'</a></td>
			  <td style="width:20%;  text-align:center;">
			    <div class="btn-group">
			    <a data-toggle="modal" data-target="#myModal'.$row['id'].'" style="color:black; margin-top:2%;"><button class="btn btn-default" title="View Promotion"><i class="fa fa-search-plus"></i></button></a>';
                                         $ids = $row['id'];
					 $pro_title = $row['promo_title'];

			  echo '<a href="promo_edit.php?id='.$id.'" style="color:black; margin-top:2%;"><button class="btn btn-default" title="Edit Promotion"><i class="fa fa-pencil-square-o"></i></button></a>';


			   echo ' <a href="autocomplete.php?id='.$id.'" style="color:black; margin-top:2%;"><button class="btn btn-default" title="Send Promotion"><i class="fa fa-paper-plane"></i></button></a>';


 echo '<a href="delete_pro.php?del='.$ids.'" onclick="return del();" style="color:black; margin-top:2%;"><button class="btn btn-default" title="Delete Promotion"><i class="fa fa-trash"></i></button></a>';
			echo ' </div> 
		      </td>                                                           
			<td  style="width:15%; margin-top:2%; text-align:center;"><a style=" text-decoration:none;">'.$sent_date.'</a></td>
                        <td style="width:10%; margin-top:2%; text-align:center;" ><a target="popup" onclick="window.open("", "popup", width=580,height=360,scrollbars=no, toolbar=no,status=no,resizable=yes,menubar=no,location=no,directories=no,top=10,left=10)" href="promosent.php?id='.$id.'" title="See Details"><i class="fa fa-eye"></i></a></td>
	            </tr>
	
';	     
                                                           
//$content=$row['.Editor.'];



echo '<div class="container">
  

  <div class="modal fade" id="myModal'.$row['id'].'" role="dialog">
    <div class="modal-dialog modal-lg" style="width:882px;">
      <div class="modal-content" >
        
        <div class="modal-body" style="height:auto; ">';
             
              //echo "<center>".$row["Img"]."</center>";
               echo " <img src='".$image."' >
            <div class='modal-footer' style='width:820px;'>
          <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
        </div>";

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


 <script type="text/javascript">


      function del() {

    var txt;
    var r = confirm("Are you sure would you like to delete?");
    if (r == true) {
        window.location='delete_pro.php';
        return true;
        
    } else {
    return false;
        window.location='campaign_nav.php';
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