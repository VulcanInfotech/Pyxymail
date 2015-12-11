<!DOCTYPE html>
<?php include 'connect.php';?>
<html>
<head>
<title>PyxyMail</title>

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Funky Ui kit Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  
  <!---editor css-->
  <link href="css/jquery-ui.min.css" rel="stylesheet">
	<link href="css/jquery-ui.css" rel="stylesheet">
   	<link href="css/style_n.css" rel="stylesheet"> 
  <link href="edi/jquery-te-1.4.0.css" rel="stylesheet">
  <link rel="stylesheet" href="css/dashboard.css">
  <script src="http://code.jquery.com/jquery-latest.min.js"></script>
 
  <script src="edi/jquery-te-1.4.0.min.js"></script>
        <script src="js/jquery.livequery.min.js"></script>
	<script src="edi/fileinput.min.js"></script>
	<script src="http://code.jquery.com/ui/1.9.1/jquery-ui.js"></script>
        <script src="js/html2canvas.js"></script>

<!-- paritosh editor start -->
	 <meta charset="utf-8">
	<!-- <script src="ckedit2/ckeditor.js"></script> -->
	 <!--<script src="ckedit2/samples/js/sample.js"></script>-->
	<!--<link rel="stylesheet" href="ckedit2/samples/css/samples.css">-->
	
<!-- paritosh editor ends-->


<script src="js/jscolor.js"></script>

<script>
	function setTextColor(picker) {
		document.getElementById('editor').style.backgroundColor = '#' + picker.toString()
	}
	</script>


	<style>

  B{
  cursor: auto;
  }

 </style>


<script src="drag_sort.js"></script>

</head>
<body>
<div class="wrap">
	<h1 class="new">PyxyMail Tool</h1>
	<!--header-->
	<div class="header">
		<div class=" nav">
			<span class="menu"><img src="images/menu.png" alt=""> </span>	
				<ul>
					<li><div class="btn-group">
  <button type="button" class="btn btn-primary "><i class="fa fa-bold"></i></button>
  <button type="button"  class="btn btn-primary"><i class="fa fa-italic"></i></button>
  <button type="button"  class="btn btn-primary"><i class="fa fa-underline"></i></button>
</div></li>


<li><div class="btn-group">
  <button type="button" class="btn btn-primary "><i class="fa fa-align-left"></i></button>
  <button type="button"  class="btn btn-primary"><i class="fa fa-align-center"></i></button>
  <button type="button"  class="btn btn-primary"><i class="fa fa-align-right"></i></button>
</div></li>

<li><div class="btn-group">
  <button type="button" class="btn btn-primary "><i class="fa fa-list-ol"></i></button>
  <button type="button"  class="btn btn-primary"><i class="fa fa-list-ul"></i></button>
  
</div></li>

<li><div class="btn-group">
  <button type="button" class="btn btn-primary "><i class="fa fa-link"></i></button>
  <button type="button"  class="btn btn-primary"><i class="fa fa-chain-broken"></i></button>
  <button type="button" class="btn btn-primary "><i class="fa fa-picture-o"></i></button>

  
</div></li>

<li><div class="btn-group">
  <button type="button" class="btn btn-primary "><i class="fa fa-font"></i></button>
  <button type="button"  class="btn btn-primary"><i class="fa fa-text-height"></i></button>
  <button type="button"  class="btn btn-primary"><i class="fa fa-paint-brush"></i></button>
  
</div></li>

 <li class="divider"></li>
<li class="divider"></li>
		
<li>
 <button type="button" id="textimg" class="btn btn-primary "><i class="fa fa-text-width"></i>&nbsp; | &nbsp;<i class="fa fa-picture-o"></i></button>
</li>

<li>
 <button type="button" id="imgtext" class="btn btn-primary "><i class="fa fa-picture-o"></i>&nbsp; | &nbsp;<i class="fa fa-text-width"></i></button>
</li>

<li>
 <button type="button" id="textonly" class="btn btn-primary "><i class="fa fa-text-width"></i></button>
</li>	

<li>
 <button type="button" id="imgonly" class="btn btn-primary "><i class="fa fa-picture-o"></i></button>
</li>		
					
											
				</ul>
				<script>
					$("span.menu").click(function(){
						$(".nav ul").slideToggle(500, function(){
						});
					});
				</script>
		</div>
		<div class="header-top">
		<div class=" top-menu">
				<span class="menu1">Menu </span>
				<ul>
					
                            <li style="margin-left:50px;" ></a><input type="text" class="user" placeholder="Promotiopn Title"></li>
                         
                        

					
				</ul>
				<script>
					$("span.menu1").click(function(){
						$(".top-menu ul").slideToggle(500, function(){
						});
					});
				</script>
				
		</div>
		<div class=" search">
					
				</div>	
				<div class="clear"> </div>
		
</div>
<div class="clear"> </div>
	</div>
	<!--//header-->
	<!--content-->
	<!--content-top-->
	<div class="content-top">
		<div class="col"></div>
		<div class="col1">
			<!----- tabs-box ---->
                   <!--  <div id="editor" contenteditable="true"  class="jscolor" style="height:460px; overflow-y:scroll; border-top: 2px solid #4BB9E9;border-left: 2px solid #4BB9E9;border-bottom: 2px solid #4BB9E9;border-right: 2px solid #4BB9E9;">

</div>--><div id="save_div" class="pro_body">	

							<div id="sortable">
 <div id="txtimg" class="textimgdiv" style="cursor: auto;margin-bottom: 40px;"><div class="dragdiv"><span class="drag"><i class="fa fa-arrows"></i>&nbsp;Drag </span></div><span ><button type="button" class="saveme" name="save1" onclick="myFunction(this.id)" style="float:right;" ><a href="#" >SAVE</a></button></span><span class="close" ><i class="fa fa-trash-o"></i>&nbsp; Delete</span><div class="row" style="  width: 100%;margin: 5px;"><div class="edi" style="width: 56%;cursor: pointer;">
											<div class="col-lg-12 nopadding"><div id="txtEditor1" class="editor"></div></div>
									   </div><div class="drop"><span class="tool" style="display:none;"><a href="#"> <i class="fa fa-trash-o" id="trash"></i></a> </span></div></div></div>
                                                        </div> 
                                               
							
                            
                                              </div> <!--pro body ends here -->
			
			


    

		

		</div>
		<div class="col2">
			<div class="tool">
				
				
			<div class="clear"> </div>
			</div>
			<!--page-->
			<!--pagenation start here-->
			<div class="page-nation"style=" background:#F0F0F0 ;">
			      
				<ul>	
				<li><button type="button" class="jscolor {valueElement:'chosen-value', onFineChange:'setTextColor(this)'}">
		Select Background Color
	</button></li>
					
					
				</ul>

			</div><br>
	<!--//page-->
	<!--men-->
	<div class="page-nation1">
	      <h2>Images</h2>
		  <form action=" ImgUpload.php " method="post" enctype="multipart/form-data">
		 <table bordercolor="#cccccc">
		<tr>
			<td  >
                        
				<input type="file" id="name"   name="filep[]" size=45 style="width: 100%" multiple>
                       
			</td>
		</tr>
		<tr>
			<td>
                        <p align=center style="padding-top: 10px;"></p>
                              <!-- <label  for="phone" id="name_error" style="color:red;left:30px;position: relative;top: -17px;"><i class="fa fa-exclamation-circle"></i>Please select image first.</label>-->
				<input type="submit" id="upload_img" name="action" value="Upload Image" class="btn btn-primary" style="  " required>
			</td>
			
		</tr>
</table>
</form>
<script>
  $(function() {
    $('.error').hide();
    $("#upload_img").click(function() {
      // validate and process form here
      
      $('.error').hide();
  	  var name = $("input#name").val();
  		if (name == "") {
        $("label#name_error").show();
        $("input#name").focus();
        return false;
      }
      })
    });
</script>

   
				<ul id="flexiselDemo2">		
				
				 <?php $sql1 = "SELECT img_name FROM pic where parentemail='sumitvilankar619@gmail.com'";  
				              $query1=mysqli_query($conn,$sql1);
				while($row1=mysqli_fetch_array($query1))
				{
					
					$images=$row1['img_name'];
					

					echo "<li><img src=uploads/".$images." height='110' width='200'></li>";
                                       // echo "<a href=delete_img.php?del=".$image."><B>X</B></a>";
				}
                             ?> 
							 </ul>
						<!--	<li>
								<img class="img-responsive" src="images/pi2.jpg">	
							</li>
							<li>
								<img class="img-responsive" src="images/pi3.jpg">	
							</li>
							<li>
								<img class="img-responsive" src="images/pi4.jpg">	
							</li>
							<li>
								<img class="img-responsive" src="images/pi5.jpg">	
							</li>
							<li>
								<img class="img-responsive" src="images/pi6.jpg">		
							</li>-->
							
							
						<br/><br/>
						     <h2> Header Images</h2>
							  <form action=" ImgUpload.php " method="post" enctype="multipart/form-data">
		 <table bordercolor="#cccccc">
		<tr>
			<td  >
                        
				<input type="file" id="name"   name="filep[]" size=45 style="width: 100%" multiple>
                       
			</td>
		</tr>
		<tr>
			<td>
                        <p align=center style="padding-top: 10px;"></p>
                               <!--<label  for="phone" id="name_error" style="color:red;left:30px;position: relative;top: -17px;"><i class="fa fa-exclamation-circle"></i>Please select image first.</label>-->
				<input type="submit" id="upload_img" name="action" value="Upload Image" class="btn btn-primary" style="  " required>
			</td>
			
		</tr>
</table>
</form>
                                        <ul id="flexiselDemo3">		
				
				 <?php $sql2 = "SELECT img_name FROM pic where parentemail='sumitvilankar619@gmail.com'";  
				              $query2=mysqli_query($conn,$sql2);
				while($row2=mysqli_fetch_array($query2))
				{
					
					$images=$row2['img_name'];
					

					echo "<li><img src=uploads/".$images." height='110' width='700'></li>";
                                       // echo "<a href=delete_img.php?del=".$image."><B>X</B></a>";
				}
                             ?> 
							 </ul>

					
<script type="text/javascript">
		$(window).load(function() {
			$("#flexiselDemo2").flexisel({
				visibleItems: 2,
				animationSpeed: 1000,
				autoPlay: false,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 2
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 3
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 4
		    		}
		    	}
		    });
		    
		});
	</script>

<script type="text/javascript">
		$(window).load(function() {
			$("#flexiselDemo3").flexisel({
				visibleItems: 2,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 2
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 3
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 4
		    		}
		    	}
		    });
		    
		});
	</script>



	<script type="text/javascript" src="js/jquery.flexisel.js"></script>
	</div>






	<!--men-->
		</div>
		<div class="clear"> </div>








	</div>
	<!--//content-top-->
	<div class="content-mid">
	<div class="col"></div>
	<div class="col"></div>
	
	 
	  <button onclick="myFunction()" name="preview" id="prv"  class="btn btn-primary" value="Send Later" >Save and Preview  </button>
                                                                       <button class="btn btn-primary" id="cancel">Cancel</button>
<script>
$(document).ready(function(){
    $("#cancel").click(function(){
        $("#editor").empty();
    });
});
</script>

</div>
<div class="content-middle">
	
	<div class="clear"> </div>
</div>


</div>
</body>
</html>