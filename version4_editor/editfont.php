<!DOCTYPE html>

<html lang="en">
  <head>
    

    <title>Pyxymail-Editor</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="lineicons/style.css">    
	
	
	
   <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
	
	<!--editor section
	 <link rel="stylesheet" type="text/css" href="assets/css/style1.css">  -->  
    
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
	 <link href="css/style1.css" rel="stylesheet">
	
    <link href="css/style-responsive.css" rel="stylesheet">


 <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="js/gritter/css/jquery.gritter.css" />

  
	<!--tabs code-->
	
	<!--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">-->
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!--<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>-->
	
	
	<!-- end tabs code-->
    <script src="js/jscolor.js"></script>

<!--toobar css and js-->
 
    <!--<link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-responsive.min.css" rel="stylesheet">-->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
 <script src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
 <script src="bootstrap-wysiwyg.js"></script>
		
	
	
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
				autoPlay:false,
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
<script src="js/jscolor.js"></script>
<script>
	function setTextColor(picker) {
		document.getElementById('editor').style.backgroundColor = '#' + picker.toString()
	}
	</script>
	
	
  </head>

  <body >

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
     <header class="header black-bg">
             <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
           
            <a href="index.html" class="logo"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></a>
          
            <div class="nav notify-row" id="top_menu">
			    
              
                <ul class="nav top-menu ">
                 

                 <li class="dropdown" > <div class="col-md-12">
                           <input type="text" size=40 class="form-control" placeholder=" Save The Promotion As..">
                       
                       </div></li>
				
				<!--<li class="dropdown">
    
	
	
           
              
                
                     <div class="form-group">
                       <div class="col-md-6">
                           <input type="text" class="form-control" placeholder="Promotion Title">
                       
                       </div>
                        <div class="col-md-5">
                          <button type="button" class="jscolor {valueElement:'chosen-value', onFineChange:'setTextColor(this)'} btn btn-default">
		           Select Background Color</button>
                       
                       </div>
                       
                     </div>
                
       
	
	
	</li>-->
                    
					
                    
                </ul>
               
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
 <li><a class="logout btn btn-warning" href="login.html"><i class="fa fa-floppy-o">&nbsp;LOGOUT</i></a></li>
                    <li><a class="logout btn btn-success" href="login.html"><i class="fa fa-floppy-o">&nbsp;&nbsp;SAVE</i></a></li>
                   
            	</ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
             <!-- <ul class="sidebar-menu" id="nav-accordion">-->
              <div class="btn-toolbar sidebar-menu" data-role="editor-toolbar" data-target="#editor">
                 <ul class="sidebar-menu">
              	 <li class="mt"><div class="btn-group ">
                    <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font"><i class="icon-font"></i><b class="caret"></b>FONT</a>
                     <ul class="dropdown-menu">
                     </ul>
                     </div>
              	  </li>	
                 
              <!--</ul>-->
                         </div>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content" >
          <section class="wrapper">

              <div class="row">
                  <div class="col-md-8 main-chart" >

                          <!--  <div class="row mt">

                                 <div class="form-group">
                       <div class="col-md-6">
                           <input type="text" class="form-control" placeholder="Promotion Title">
                       
                       </div>
                        <div class="col-md-5">
                          <button type="button" class="jscolor {valueElement:'chosen-value', onFineChange:'setTextColor(this)'} btn btn-default">
		           Select Background Color</button>
                       
                       </div>
                       
                     </div>
                              

                            </div>-->
                  
                  
                      
                      <div class="row mt">
                      
                      	 <div class="row col-md-12">
						  
           
                   <div id="editor"  contenteditable="true" style="height:540px; overflow:scroll; border:15px solid  #989898;"><div class="col-md-11" style="font-size:23px;color:black;"><center>Create Your First Promo Here</center></div><br><br>
				  
                           <img class="img-responsive" src="uploads/banner2.jpg" style="width:700px; height:100px;"><br><br>
						   <table class="table ">
						    
						   <tbody>
						   <tr><td>
						   <div cols="50" rows="5" style="width:512px;height:115px;">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div></td>
						   <td> <img class="img-responsive" src="uploads/pi2.jpg" ></td>
						   </tr></tbody></table>
						  
                              
				   
				   </div>
				  
                          </div>
           


                    </div><!-- /row -->
                    
                    				
					<div class="row">
						
					</div><!-- /row -->
					
					<div class="row mt">
                     
					</div><!-- /row -->	
					
                  </div><!-- /col-lg-9 END SECTION MIDDLE -->
                  
                  
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                  
                  
                  <div class="col-md-4 ds" style="background:#424a5d;border-top:2px solid white;" >
                    <!--COMPLETED ACTIONS DONUTS CHART-->
						
                                        
                      
					  
					  <!--tabs code-->
					  
					   <ul class="nav nav-pills"  >
    <li class="active "><a data-toggle="tab" href="#home"style="width:165px;"><center>Images</center></a></li>
    <li><a data-toggle="tab" href="#menu1" style="width:165px;"><center>Templates</center></a></li>
   <!-- <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>-->
  
  </ul>
   <div class="tab-content" style="background-color:white;" >
    <div id="home" class="tab-pane fade in active">
      
      
	   <div class="page-nation pager">

	   
	      <h3 style="background-color:white; color:black;">Images</h3>
		  
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
<li class="next"><a href="#" style="color:black;margin-left:-20px;"><i class="fa fa-arrow-right"></i></a></li>
                                       <li class="previous"><a href="#" style="color:black"><i class="fa fa-arrow-left"></i></a></li>

   
				<ul id="flexiselDemo2">	
				           
                             	 <li>
								<img class="img-responsive" src="uploads/pi2.jpg">	
							</li>
							<li>
								<img class="img-responsive" src="uploads/pi3.jpg">	
							</li>
							<li>
								<img class="img-responsive" src="uploads/pi4.jpg">	
							</li>
							<li>
								<img class="img-responsive" src="uploads/pi5.jpg">	
							</li>
							<li>
								<img class="img-responsive" src="uploads/pi6.jpg">		
							</li>
				
				<!-- <?php $sql1 = "SELECT img_name FROM Pic where parentemail='sumitvilankar619@gmail.com'";  
				              $query1=mysqli_query($conn,$sql1);

					echo "<li><img src='uploads/acc.jpg' height='100' width='200'></li>";
                                        echo "<li><img src='uploads/pi1.jpg' height='100' width='200'></li>";
                                       echo "<li><img src='uploads/pi2.jpg' height='100' width='200'></li>";
                                        echo "<li><img src='uploads/pi3.jpg' height='100' width='200'></li>";
                                       echo "<li><img src='uploads/pi4.jpg' height='100' width='200'></li>";
				while($row1=mysqli_fetch_array($query1))
				{
					
					$images=$row1['img_name'];
					
                                        
					//echo "<li><img src=uploads/".$images." height='100' width='200'></li>";
                                       // echo "<a href=delete_img.php?del=".$image."><B>X</B></a>";
				}
                                 
                             ?> -->



                         
	</div>
<form action=" ImgUpload.php " method="post" enctype="multipart/form-data">
		 <table  >
		<tr>
                       <td>&nbsp;&nbsp;&nbsp;</td>
			<td >
                        
				<input type="file" id="name"   name="filep[]" size=45 style="width: 100% " class=" btn-default" multiple>
                       
			</td>
		
			<td>
                        <p align=center style="padding-top: 10px;"></p>
                              <!-- <label  for="phone" id="name_error" style="color:red;left:30px;position: relative;top: -17px;"><i class="fa fa-exclamation-circle"></i>Please select image first.</label>-->
				<input type="submit" id="upload_img" name="action" value="Upload Image" class="btn btn-default"  required>
			</td>
			
		</tr>
</table>
</form>

<hr style="color:#CCCCCC; ">

<!--header image-->


               
	<div class="page-nation pager">
	      <h3 style="background-color:white; color:black;">Banner Images</h3>
                                      <li class="next"><a href="#" style="color:black;margin-left:-20px;"><i class="fa fa-arrow-right"></i></a></li>
                                       <li class="previous"><a href="#" style="color:black"><i class="fa fa-arrow-left"></i></a></li>
		        <ul id="flexiselDemo3">	
	                                 
				                         <li>
								<img class="img-responsive" src="uploads/pi2.jpg">	
							</li>
							<li>
								<img class="img-responsive" src="uploads/pi3.jpg">	
							</li>
							<li>
								<img class="img-responsive" src="uploads/pi4.jpg">	
							</li>
							<li>
								<img class="img-responsive" src="uploads/pi5.jpg">	
							</li>
							<li>
								<img class="img-responsive" src="uploads/pi6.jpg">		
							</li>
                                     
				
				 <!--<?php $sql2 = "SELECT img_name FROM Pic where parentemail='sumitvilankar619@gmail.com'";  
				              $query2=mysqli_query($conn,$sql2);
                                        echo "<li><img src='uploads/acc.jpg' height='100' width='200'></li>";
                                        echo "<li><img src='uploads/pi1.jpg' height='100' width='200'></li>";
                                       echo "<li><img src='uploads/pi2.jpg' height='100' width='200'></li>";
                                        echo "<li><img src='uploads/pi3.jpg' height='100' width='200'></li>";
                                       echo "<li><img src='uploads/pi4.jpg' height='100' width='200'></li>";
				while($row2=mysqli_fetch_array($query2))
				{
					
					$images=$row2['img_name'];
					

					//echo "<li><img src=uploads/".$images." height='100' width='700'></li>";
                                       // echo "<a href=delete_img.php?del=".$image."><B>X</B></a>";
				}
                             ?> -->
							 </ul>
                              

</div>


 <form action=" ImgUpload.php " method="post" enctype="multipart/form-data">
		  <table >
		<tr>
                         <td>&nbsp;&nbsp;&nbsp;</td>
			<td>
                        
				<input type="file" id="name"   name="filep[]" size=45 style="width: 100%" multiple>
                       
			</td>
		
			<td>
                        <p align=center style="padding-top: 10px;"></p>
                               <!--<label  for="phone" id="name_error" style="color:red;left:30px;position: relative;top: -17px;"><i class="fa fa-exclamation-circle"></i>Please select image first.</label>-->
				<input type="submit" id="upload_img" name="action" value="Upload Banner" class="btn btn-default" style="  " required>
			</td>
			
		</tr>
</table>
</form>
<br>
                                 
	</div>
<!--//tabs-->
	  
	  
	  
    <div id="menu1" class="tab-pane fade">
       <h3 style="background-color:white; color:black;">Designs</h3>
      <p></p>
	  
    </div>
    <!--<div id="menu2" class="tab-pane fade">
      <h1>Menu 2</h1>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>-->
    
  
 </div>
  
  
					<!--tabs end-->
					  

                      
                  </div><!-- /col-lg-3 -->
              </div><! --/row -->
          </section>
      </section>


 <!--footer start-->
      <footer class="site-footer" style="margin-top:-20px;">
          <div class="text-center">
              &copy;2015 - PyxyMail
              <!--<a href="index.php" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>-->
          </div>
      </footer>
      <!--footer end-->


      
  </section>

      <script src="js/bootstrap.min.js"></script>
 
    


    <!--common script for all pages
    <script src="js/common-scripts.js"></script>-->
    
    <script type="text/javascript" src="js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="js/gritter-conf.js"></script>

 
    
   
    <!--<script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>-->
  
	
	
	
  

  </body>
</html>
