<!DOCTYPE html>
<!--?php include 'connect.php';?-->
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
  
</div></li>


<li><div class="btn-group">
  <button type="button" class="btn btn-primary "><i class="fa fa-italic"></i></button>
  </div></li>

<li><div class="btn-group">
  <button type="button" class="btn btn-primary "><i class="fa fa-underline"></i></button>
  
  
</div></li>

<li><div class="btn-group">
  <button type="button" class="btn btn-primary "><i class="fa fa-link"></i></button>
  
  
</div></li>

<li><div class="btn-group">
  <button type="button" class="btn btn-primary "><i class="fa fa-chain-broken"></i></button>
  
  
</div></li>

 					
											
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
					
					<!--<li>
						 <button onclick="white()"  type="button" style="background-color:white"  class="btn btn-default"></button>
					</li>
					<li>
						<button onclick="green()"  type="button" style="background-color:green" class="btn btn-primary"></button>
					</li>
					<li>
						<button onclick="sky_blue()" type="button" style="background-color:skyblue"class="btn btn-primary"></button>
					</li>
					<li>
						<button onclick="orange()"  type="button"style="background-color:orange"class="btn btn-primary"></button>
					</li>	
                                         <li>
                                                    <button onclick="red()"  type="button" style="background-color:red"class="btn btn-primary"></button>

                                         </li>
                                         <li>
                                                   <button onclick="dark_red()"  type="button" style="background-color:#900000"class="btn btn-primary"></button>

                                         </li>
                                         <li>
                                                   <button  onclick="dark_grey()"  type="button"style="background-color:#808080"class="btn btn-primary"></button>

                                         </li>

                                          <li>
                                                  <button onclick="dark_pink()"  type="button" style="background-color:#990066"class="btn btn-primary"></button>

                                         </li>-->
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



		 <!-- <div class="slider">
                  <section class="slider">
                      <div class="flexslider">
                      <ul class="slides">
                      <li>
                      	<div class="mid">
                      	<div class="mid1">
    	                <h2>IPSUM DOLOR SIT</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                        <a href="#"><i></i>Read More</a>
                        </div>
                        <div class="mid2">
                        	<div class="content-main">
						<div class=" content-main-left">
							<div class="upload">
								
								<div class="diagram">
									<canvas id="canvas" height="220" width="220"> </canvas>
									<h4>75%</h4>   
								</div>
							</div>
							<script>
						var doughnutData = [
								
								{
									value : 25,
									color : "#ffffff"
								},
								{
									value: 75,
									color:"#025a85"
								},	
													
							];				
							var myDoughnut = new Chart(document.getElementById("canvas").getContext("2d")).Doughnut(doughnutData);					
					</script>
							
</div>
                        </div>
                        </div>
                        <div class="clear"> </div>
                        </div>
  	    		</li>
 	    		<li>
                      	<div class="mid">
                      	<div class="mid1">
    	                <h2>IPSUM DOLOR SIT</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                        <a href="#"><i></i>Read More</a>
                        </div>
                        <div class="mid2">
                        	<div class="content-main">
						<div class=" content-main-left">
							<div class="upload">
								
								<div class="diagram">
									<canvas id="canvas1" height="220" width="220"> </canvas>
									<h4>75%</h4>   
								</div>
							</div>
							<script>
						var doughnutData = [
								{
									value : 25,
									color : "#ffffff"
								},
								{
									value: 75,
									color:"#025a85"
								},	
										
													
							];				
							var myDoughnut = new Chart(document.getElementById("canvas1").getContext("2d")).Doughnut(doughnutData);					
					</script>
							
</div>
                        </div>
                        </div>
                        <div class="clear"> </div>
                        </div>
  	    		</li>
  	    		<li>
                      	<div class="mid">
                      	<div class="mid1">
    	                <h2>IPSUM DOLOR SIT</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                        <a href="#"><i></i>Read More</a>
                        </div>
                        <div class="mid2">
                        	<div class="content-main">
						<div class=" content-main-left">
							<div class="upload">
								
								<div class="diagram">
									<canvas id="canvas2" height="220" width="220"> </canvas>
									<h4>75%</h4>   
								</div>
							</div>
							<script>
						var doughnutData = [
								{
									value : 25,
									color : "#ffffff"
								},
								{
									value: 75,
									color:"#025a85"
								},	
																
								
													
							];				
							var myDoughnut = new Chart(document.getElementById("canvas2").getContext("2d")).Doughnut(doughnutData);					
					</script>
							
</div>
                        </div>
                        </div>
                        <div class="clear"> </div>
                        </div>
                        
  	    		</li>
          </ul>
        </div>
      </section>
  
  <script defer src="js/jquery.flexslider.js"></script>
  <script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>
</div>-->
</div>
<!--content-mid-->
<!--content-midddle-->
<div class="content-middle">
	<!--<div class="content-middle1">
		<div class="content-middle2">
		
		<h3>Login</h3>
		<form>
			<div class="user">
				<i> </i>
				<input type="text" placeholder="User Name">		
			</div>			
			<div class="user1">	
				<i> </i>		
			<input type="password" placeholder="password">
			</div>
			<div class="user2">							
				<input type="submit" value="Login">
			</div>
		</form>
	</div>
	</div>-->
	<!--<div class="content-middle3">
		<div class=" content-cal1">
				
					<div class="column_right_grid calender">
                      <div class="cal1"><div class="clndr"><div class="clndr-controls"><div class="clndr-control-button"><p class="clndr-previous-button">previous</p></div><div class="month">November 2013</div><div class="clndr-control-button rightalign"><p class="clndr-next-button">next</p></div></div><table class="clndr-table" border="0" cellspacing="0" cellpadding="0"><thead><tr class="header-days"><td class="header-day">S</td><td class="header-day">M</td><td class="header-day">T</td><td class="header-day">W</td><td class="header-day">T</td><td class="header-day">F</td><td class="header-day">S</td></tr></thead><tbody><tr><td class="day past adjacent-month last-month calendar-day-2013-10-27"><div class="day-contents">27</div></td><td class="day past adjacent-month last-month calendar-day-2013-10-28"><div class="day-contents">28</div></td><td class="day past adjacent-month last-month calendar-day-2013-10-29"><div class="day-contents">29</div></td><td class="day past adjacent-month last-month calendar-day-2013-10-30"><div class="day-contents">30</div></td><td class="day past adjacent-month last-month calendar-day-2013-10-31"><div class="day-contents">31</div></td><td class="day past calendar-day-2013-11-01"><div class="day-contents">1</div></td><td class="day past calendar-day-2013-11-02"><div class="day-contents">2</div></td></tr><tr><td class="day past calendar-day-2013-11-03"><div class="day-contents">3</div></td><td class="day past calendar-day-2013-11-04"><div class="day-contents">4</div></td><td class="day past calendar-day-2013-11-05"><div class="day-contents">5</div></td><td class="day past calendar-day-2013-11-06"><div class="day-contents">6</div></td><td class="day past calendar-day-2013-11-07"><div class="day-contents">7</div></td><td class="day past calendar-day-2013-11-08"><div class="day-contents">8</div></td><td class="day past calendar-day-2013-11-09"><div class="day-contents">9</div></td></tr><tr><td class="day past event calendar-day-2013-11-10"><div class="day-contents">10</div></td><td class="day past event calendar-day-2013-11-11"><div class="day-contents">11</div></td><td class="day past event calendar-day-2013-11-12"><div class="day-contents">12</div></td><td class="day past event calendar-day-2013-11-13"><div class="day-contents">13</div></td><td class="day past event calendar-day-2013-11-14"><div class="day-contents">14</div></td><td class="day past calendar-day-2013-11-15"><div class="day-contents">15</div></td><td class="day past calendar-day-2013-11-16"><div class="day-contents">16</div></td></tr><tr><td class="day past calendar-day-2013-11-17"><div class="day-contents">17</div></td><td class="day past calendar-day-2013-11-18"><div class="day-contents">18</div></td><td class="day past calendar-day-2013-11-19"><div class="day-contents">19</div></td><td class="day past calendar-day-2013-11-20"><div class="day-contents">20</div></td><td class="day past event calendar-day-2013-11-21"><div class="day-contents">21</div></td><td class="day past event calendar-day-2013-11-22"><div class="day-contents">22</div></td><td class="day today event calendar-day-2013-11-23"><div class="day-contents">23</div></td></tr><tr><td class="day calendar-day-2013-11-24"><div class="day-contents">24</div></td><td class="day calendar-day-2013-11-25"><div class="day-contents">25</div></td><td class="day calendar-day-2013-11-26"><div class="day-contents">26</div></td><td class="day calendar-day-2013-11-27"><div class="day-contents">27</div></td><td class="day calendar-day-2013-11-28"><div class="day-contents">28</div></td><td class="day calendar-day-2013-11-29"><div class="day-contents">29</div></td><td class="day calendar-day-2013-11-30"><div class="day-contents">30</div></td></tr></tbody></table></div></div>
					</div>
			
</div>

	</div>-->
	<!--<div class="content-middle4">
		 <div class="slider">
	
		  <div class="callbacks_container">
	      <ul class="rslides" id="slider">
	        <li>
	          <img src="images/pi1.jpg" alt="">
	         
	        </li>
	        <li>
	          <img src="images/pi7.jpg" alt="">
	        	 
	        </li>
	        <li>
	          <img src="images/pi8.jpg" alt="">
	          
	        </li>
	      </ul>

	</div>
	</div>
	</div>-->
	<div class="clear"> </div>
</div>
<!--//content-midddle-->
<!--content-middle-top-->
<!--<div class="content-middle-top">
	<div class="content-middle-top1">
		<div class="content-middle-top3">
		<div class="flow">
			<ul>
				<li><a class="flow1" href="#">2k<span>Followers</span></a></li>
				<li><a href="#"><i> </i></a></li>
			</ul>
		</div>
		<div class="flow flow2">
			<ul>
				<li><a class="flow1" href="#">2k<span>Followers</span></a></li>
				<li><a href="#"><i> </i></a></li>
			</ul>
		</div>
		<div class="flow flow3">
			<ul>
				<li><a class="flow1" href="#">2k<span>Members</span></a></li>
				<li><a href="#"><i> </i></a></li>
			</ul>
		</div>
		<div class="flow flow4">
			<ul>
				<li><a class="flow1" href="#">2k<span>Followers</span></a></li>
				<li><a href="#"><i> </i></a></li>
			</ul>
		</div>
		<div class="clear"> </div>
	</div>
	<div class="content-middle-top4">
		<h4>Lorem Ipsum</h4>
		<p>Lorem IpsumLorem Ipsum</p>
		<div class="follow">
			<div class="follow-img"><img src="images/co1.png" alt=""></div>
			<div class="follow-text">
				<a href="#"><i></i>Follow</a>
			</div>
			<div class="clear"> </div>
		</div>
	</div>
	</div>
	<!--<div class="content-middle-top2">
		<div class=" video-grid">
					<div id="jp_container_1" class="jp-video jp-video-360p" role="application" aria-label="media player">
						<div class="jp-type-single">
							<div id="jquery_jplayer_1" class="jp-jplayer"></div>
							<div class="jp-gui">
								<div class="jp-video-play">
									<button class="jp-video-play-icon" role="button" tabindex="0">play</button>
								</div>
								<div class="jp-interface">
									<div class="jp-progress">
										<div class="jp-seek-bar">
											<div class="jp-play-bar"></div>
										</div>
									</div>
									<div class="jp-current-time" role="timer" aria-label="time">&nbsp;</div>
									<div class="jp-duration" role="timer" aria-label="duration">&nbsp;</div>
									<div class="jp-controls-holder">
										<div class="jp-controls">
											<button class="jp-play" role="button" tabindex="0">play</button>
											<button class="jp-stop" role="button" tabindex="0">stop</button>
										</div>
										<div class="jp-volume-controls">
											<button class="jp-mute" role="button" tabindex="0">mute</button>
											<button class="jp-volume-max" role="button" tabindex="0">max volume</button>
											<div class="jp-volume-bar">
												<div class="jp-volume-bar-value"></div>
											</div>
										</div>
										<div class="jp-toggles">
											<button class="jp-repeat" role="button" tabindex="0">repeat</button>
											<button class="jp-full-screen" role="button" tabindex="0">full screen</button>
										</div>
									</div>
									
								</div>
							</div>
							<div class="jp-no-solution">
								<span>Update Required</span>
								To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
							</div>
						</div>
					</div>
				</div>

	</div>
	<div class="clear"> </div>
</div>-->
<!--//content-middle-top-->
<!--pricing-->
 	<!--<div class="plans">
        <div class="col-md1">
			 <div class="pricing-table-grid">
				<div class="plans_head">
						<h3>START </h3>
				</div>
				<ul>
					<li> <h4 class="m_4"><small class="m_2">$</small>10.90<small  class="m_3">/mo</small></h4></li>
					<li><span>60 GB Bandwidth</span></li>
					<li><span> 100 GB Disk Space</span></li>
					<li><span> 10 Databases</span></li>
				</ul>
					
				 <a class=" button" href="#"><i> </i>Add to cart</a>			   
		         </div>
		     </div>
             <div class="col-md1">
			 <div class="pricing-table-grid">
				<div class="plans_head">
						<h3>START </h3>
				</div>
				<ul>
					<li> <h4 class="m_4"><small class="m_2">$</small>10.90<small  class="m_3">/mo</small></h4></li>
					<li><span>60 GB Bandwidth</span></li>
					<li><span> 100 GB Disk Space</span></li>
					<li><span> 10 Databases</span></li>
				</ul>
					
				 <a class=" button" href="#"><i> </i>Add to cart</a>			   
		         </div>
		     </div>
			 <div class="col-md1">
			 <div class="pricing-table-grid">
				<div class="plans_head">
						<h3>START </h3>
				</div>
				<ul>
					<li> <h4 class="m_4"><small class="m_2">$</small>10.90<small  class="m_3">/mo</small></h4></li>
					<li><span>60 GB Bandwidth</span></li>
					<li><span> 100 GB Disk Space</span></li>
					<li><span> 10 Databases</span></li>
				</ul>
					
				 <a class=" button" href="#"><i> </i>Add to cart</a>			   
		         </div>
		     </div>
		    <div class="clear"> </div>								
       </div>-->

<!--//pricing-->
<!--comments-->
<!--<div class="comments">
	<div class="comment"> 
		
		<div class="comment-top">
			<div class="comments-top-top">
				<div class="top-comment-left">
						<img class="img-responsive" src="images/co.png" alt="">
				</div>
				<div class="top-comment-right">
					<h5>Contrary to popular</h5>
					<span>Lorem Ipsum is not simply random text. It has roots in a piece</span>	
					<div class="three">
						<a href="#">3<i> </i></a>
					</div>
					<div class="clear"> </div>
				</div>
				<div class="clear"> </div>
			</div>
			<div class="comments-top-top">
				<div class="top-comment-left">
						<img class="img-responsive" src="images/co.png" alt="">
				</div>
				<div class="top-comment-right">
					<h5>Contrary to popular</h5>
					<span>Lorem Ipsum is not simply random text. It has roots in a piece</span>	
					<div class="three">
						<a href="#">5<i> </i></a>
					</div>
					<div class="clear"> </div>
				</div>
				<div class="clear"> </div>
			</div>
			<div class="comments-top-top">
				<div class="top-comment-left">
						<img class="img-responsive" src="images/co.png" alt="">
				</div>
				<div class="top-comment-right">
					<h5>Contrary to popular</h5>
					<span>Lorem Ipsum is not simply random text. It has roots in a piece</span>	
					<div class="three">
						<a href="#">1<i> </i></a>
					</div>
					<div class="clear"> </div>
				</div>
				<div class="clear"> </div>
			</div>
		</div>
		
		<div class="comment-form">
			<form>
				<div class="form-top">
					<div class="form-top1">
						<input type="text" placeholder="Name">
					</div>
					<div class="form-top2">
						<input type="text" placeholder="Email">
					</div>
					<div class="clear"> </div>
				</div>
				<textarea placeholder="Message" required=""></textarea>
				<input type="submit" value="Send">
			</form>
		</div>
		
	</div>
	<div class="comment1"> 
		<div class="twitt">
			<a href="#"><i> </i></a>
			<span>Latest tweet</span>
			<div class="twitt-top">
				<p>It is a long established fact that a reader will be distracted by the readable </p>
				<a href="#">http://w3layouts.com/</a>
				<a href="#">bic/220-8948877</a>
			</div>
			<div class="twitt-top">
				<p>It is a long established fact that a reader will be distracted by the readable </p>
				<a href="#">http://w3layouts.com/</a>
				<a href="#">bic/220-8948877</a>
			</div>
		</div>
		
		 <div class="slider">
			 <div class="callbacks_container">
		      <ul class="rslides" id="slider1">
		        <li>
		          <img src="images/pi.jpg" alt="">
		         
		        </li>
		        <li>
		          <img src="images/pi9.jpg" alt="">
		        	 
		        </li>
		        <li>
		          <img src="images/pi.jpg" alt="">
		          
	        </li>
	      </ul>
			</div>
		</div>
	</div>
	<div class="clear"> </div>
</div>-->
<!--//comments-->

	<!--//content-->

<!-- <div class="theme" style="margin-top:5%;margin-left:120px;">

                       <div class="btn-group" id="panel" role="group" aria-label="...">
		
			
                        <button onclick="white()"  type="button" style="background-color:white"><span class="glyphicon glyphicon-tint"></span></button>
			<button  onclick="blue()"  type="button" style="background-color:blue"><span class="glyphicon glyphicon-tint"></span></button>
			<button onclick="green()"  type="button" style="background-color:green"><span class="glyphicon glyphicon-tint"></span></button>
			<button onclick="sky_blue()" type="button" style="background-color:skyblue"><span class="glyphicon glyphicon-tint"></span></button>
			<button onclick="orange()"  type="button"style="background-color:orange"><span class="glyphicon glyphicon-tint"></span></button>
			<button onclick="red()"  type="button" style="background-color:red"><span class="glyphicon glyphicon-tint"></span></button>


                         <button onclick="dark_red()"  type="button" style="background-color:#900000"><span class="glyphicon glyphicon-tint"></span></button>
			<button  onclick="dark_grey()"  type="button"style="background-color:#808080"><span class="glyphicon glyphicon-tint"></span></button>
			<button onclick="dark_pink()"  type="button" style="background-color:#990066"><span class="glyphicon glyphicon-tint"></span></button>
			<button onclick="light_pink()" type="button" style="background-color:#ff3366"><span class="glyphicon glyphicon-tint"></span></button>
			<button onclick="light_yellow()"  type="button" style="background-color:#ffff66"><span class="glyphicon glyphicon-tint"></span></button>
			<button onclick="dark_yellow()"  type="button"style="background-color:#ffff00"><span class="glyphicon glyphicon-tint"></span></button>
		
				</div>
                        </div>
   </div> -->





</div>
</body>
</html>