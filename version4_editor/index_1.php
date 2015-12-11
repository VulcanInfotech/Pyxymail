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
	<link href="edi/jquery-te-1.4.0.css" rel="stylesheet">
		<link rel="stylesheet" href="css/dashboard.css">
        
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	
	<script src="edi/jquery-te-1.4.0.min.js"></script>
        <script src="js/jquery.livequery.min.js"></script>
	<script src="edi/fileinput.min.js"></script>
	<script src="http://code.jquery.com/ui/1.9.1/jquery-ui.js"></script>
        <script src="js/html2canvas.js"></script>
	
	<!-- end tabs code-->
    <script src="js/jscolor.js"></script>

	<script src="js/main.js"></script>	
	<script src="js/plugins.js"></script>
	<script>
	
		 
        function SetToBold () {
            document.execCommand ('bold', false, null);
        }
		 function SetToItalic () {
            document.execCommand ('italic', false, null);
        }
		function SetToUnderline () {
            document.execCommand ('underline', false, null);
        }
		function SetToCopy () {
            document.execCommand ('copy', false, null);
        }
		function SetToCut () {
            document.execCommand ('cut', false, null);
        }
		function SetToResize () {
            document.execCommand ('', false, 'Tahoma');
        }
		function SetToLink () {
            document.execCommand ('createLink', false, 'null');
        }
     function fontEditor() {
         var e = document.getElementById("fontName");
	var name = e.options[e.selectedIndex].value;
	
	var txt=document.getElementById("txtEditor1");
	document.execCommand('fontName',true,name);
	
    
}
function fontname()
{var sText = document.selection.createRange();
	var name="Arial";
sText.execCommand ("FontName", 1, name);
}
function left()
{
document.execCommand("JustifyLeft");
}
function center()
{
	document.execCommand("JustifyCenter");
}
function right()
{
document.execCommand("JustifyRight");
}
function indent()
{
document.execCommand("Indent");
}
function outdent()
{
	document.execCommand("outdent");
}
function orderedList()
{
document.execCommand("InsertOrderedList");
}
function UnorderedList()
{
document.execCommand("InsertUnorderedList");
}
</script>
	
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
                           <input type="text" size=40 class="form-control" placeholder=" Save The Promotion As.." style="background:#f2f2f2;" >
                       
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
              <ul class="sidebar-menu" id="nav-accordion">
              
              	 
              	  	
                  <li class="mt">
                      <div class="btn-group" >
                          <button onclick="SetToBold()" title="bold" type="button" class="btn btn-default " style="background:#f2f2f2;"><i class="fa fa-bold"></i></button>
  <button onclick="SetToItalic()" type="button" title="italic" class="btn btn-default" style="background:#f2f2f2;">&nbsp;&nbsp;<i class="fa fa-italic"></i></button></div>
                  </li>

                 <li class="mt">
                      <div class="btn-group" >
                         <button onclick="SetToUnderline()" title="underline" type="button"  class="btn btn-default" style="background:#f2f2f2;"><i class="fa fa-underline"></i></button>
   <button onclick="center()" type="button" class="btn btn-default " style="background:#f2f2f2;"><i class="fa fa-align-center"></i></button></div>
                  </li>

                 <li class="mt">
                      <div class="btn-group">
                         <button onclick="left()" type="button"  class="btn btn-default" style="background:#f2f2f2;"><i class="fa fa-align-left"></i></button>
  <button onclick="right()" type="button"  class="btn btn-default" style="background:#f2f2f2;"><i class="fa fa-align-right"></i></button></div>
                  </li>
                 <li class="mt">
                      <div class="btn-group">
                          <button onclick="orderedList()" type="button" class="btn btn-default " style="background:#f2f2f2;"><i class="fa fa-list-ol"></i></button>
  <button onclick="UnorderedList()" type="button"  class="btn btn-default" style="background:#f2f2f2;"><i class="fa fa-list-ul"></i></button></div>
                  </li>
				  
				  <li class="mt">
                      <div class="btn-group">
                         <button onclick="SetToLink ()" type="button" class="btn btn-default " style="background:#f2f2f2;"><i class="fa fa-link"></i></button>
  <button type="button"  class="btn btn-default" style="background:#f2f2f2;"><i class="fa fa-chain-broken"></i></button></div>
                  </li>
				   <li class="mt">
                      <div class="btn-group">
                         <button type="button" class="btn btn-default " style="background:#f2f2f2;"><i class="fa fa-picture-o"></i></button>
  <button type="button" class="btn btn-default " style="background:#f2f2f2;"><i class="fa fa-font"></i></button></div>
                  </li>
				   <li class="mt">
                      <div class="btn-group">
                         <button type="button"  class="btn btn-default" style="background:#f2f2f2;"><i class="fa fa-text-height"></i></button>
  <button type="button"  class="btn btn-default" style="background:#f2f2f2;"><i class="fa fa-paint-brush"></i></button></div>
                  </li>
                    
                     <li class="mt">
    <div class="btn-group">
 <button id="textimg" type="button" class="btn btn-default " style="background:#f2f2f2;"><i class="fa fa-text-width"></i>&nbsp; & &nbsp;<i class="fa fa-picture-o"></i> </button>
 
</div>
</li>
 <li class="mt">
    <div class="btn-group">
 <button id="imgtext" type="button" class="btn btn-default " style="background:#f2f2f2;"><i class="fa fa-picture-o"></i>&nbsp; & &nbsp;<i class="fa fa-text-width"></i></button>
</div>
</li>
<li>
<div class="btn-group">
 <button id="textonly" type="button" class="btn btn-default " style="background:#f2f2f2;"><i class="fa fa-picture-o"></i></button>
 <button id="imgonly"type="button" class="btn btn-default " style="background:#f2f2f2;"><i class="fa fa-text-width"></i></button>
</div>
</li>




                    

                 

              </ul>
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
						  
           
 <div id="editor1"   style="height:540px; overflow:scroll; border:15px solid  #989898;"><div class="col-md-11" style="font-size:23px;color:black;"><center>Create Your First Promo Here</center></div><br><br>
				  
 <!-- pro body starts -->
        <div id="save_div" class="pro_body">	

			<div id="sortable">
				<div id="txtimg" class="textimgdiv" style="cursor: auto;margin-bottom: 40px;">
					<div class="dragdiv"><span class="drag"><i class="fa fa-arrows"></i>&nbsp;Drag </span></div>
					<span ><button type="button" class="saveme" name="save1" onclick="myFunction(this.id)" style="float:right;" ><a href="#" >SAVE</a></button></span>
						<span class="close" ><i class="fa fa-trash-o"></i>&nbsp; Delete</span>
							<div class="row" style="  width: 100%;margin: 5px;"><div class="edi" style="width: 56%;cursor: pointer;">
											<div class="col-lg-12 nopadding"><div id="txtEditor1" class="editor"></div></div>
									   </div><div class="drop"><span class="tool" style="display:none;"><a href="#"> <i class="fa fa-trash-o" id="trash"></i></a> </span></div>
							</div>
				</div>
             </div> 
                                               
							
        </div> 
<!--pro body ends here -->
		
                              
				   
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
					  
					   <ul class="nav nav-pills" >
    <li class="active "><a data-toggle="tab" href="#home"style="width:165px;"><center>Images</center></a></li>
    <li><a data-toggle="tab" href="#menu1" style="width:165px;"><center>Templates</center></a></li>
   <!-- <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>-->
  
  </ul>
   <div class="tab-content" style="background:#f2f2f2;" >
    <div id="home" class="tab-pane fade in active">
      
      
	   <div class="page-nation pager">

	   
	      <h3 style="background:#f2f2f2; color:black;">Images</h3>
		  
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
                        
				<input type="file" id="name"   name="filep[]" size=45 style="width: 100% "  multiple>
                       
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
	      <h3 style="background:#f2f2f2; color:black;">Banner Images</h3>
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
       <h3 style="background:#f2f2f2; color:black;">Designs</h3>
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
          <div class="text-center" style="margin-top:23px;">
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
  <script type="text/javascript">




$(document).ready(function(){
  
	         $("#txtEditor1").jqte();
	         $('#txtEditor2').jqte();
	         $('#txtEditor3').jqte();
                 $('#txtEditor4').jqte();
                 $('#txtEditor5').jqte();
                  $(".jqte_editor").focus();
       //$('.jqte_toolbar').css('display','none');                          

$(".jqte_editor").focus(); 
/*
$(".jqte_editor").click(function(){
$(".jqte_editor").focus(); 
$(".jqte_toolbar").css('display','block');
});
    */   
       $("#myfiles").fileinput({
				uploadUrl: "upload",
				uploadAsync: true,
				maxFileCount: 5
	});
        
       $( "#sortable" ).sortable({   
            placeholder: "ui-sortable-placeholder"  ,
            cancel: '#drop',
            cancel: '.row',
            
            
        });  
        
        
        $(".jqte_editor").click(function() {
                $(this).focus();
                //$('.jqte_toolbar').css('display','block');
	});
	
   
//$('.drop').resizable({containment: 'parent'});



 $('#cancel').click(function(){
         $( "#sortable" ).empty();
         //$(".imgtextdiv").show();
 });       
        	
                
        	$("#textimg").click(function(){
        		helper: 'clone',
                      
				//$('.textimgdiv').appendTo('#sortable').show('slow');
				$("#sortable").append('<div class="textimgdiv" style="cursor: auto;margin-bottom: 40px;"><div class="dragdiv"><span class="drag"><i class="fa fa-arrows"></i>&nbsp;Drag </span></div><span ><button type="button" class="saveme" name="save1" onclick="myFunction(this.id)" style="float:right;" ><a href="#" >SAVE</a></button></span><span class="close" ><i class="fa fa-trash-o"></i>&nbsp; Delete</span><div class="row" style="  width: 100%;margin: 5px;"><div class="edi" style="width: 56%;cursor: pointer;"><div class="col-lg-12 nopadding"><div contenteditable="true"	class="editor"></div></div></div><div class="drop"><span class="tool" style="display:none;"><a href="#"> <i class="fa fa-trash-o" id="trash"></i></a> </span></div></div></div>');
				var $lenOfEditors = $(".editor").length;
				$(".editor:last").attr("id","txtEditor"+$lenOfEditors++);
				$(".editor:last").jqte();
                                
                                 $(".jqte_editor").focus(); 
                                
                                var $save = $(".saveme").length;
				$(".saveme:last").attr("id","save_"+$save++);
                                  
                                //$('.editor').attr("id","edi_");

                                 var $drp = $('.drop').length;
				$('.drop:last').attr("id","drop_"+$drp++); 
                   
                                 $('.tool').click(function(){
                                        $(this).parent().find('img').detach();        
			         });
                                 
                                    var $img = $(".nbs-flexisel-item").length;
                                        $(".nbs-flexisel-item:last").attr("id","img"+$img++); 
                });
      
        	$("#imgtext").click(function(){
				
				 helper: 'clone',
                                  
                                  
				$("#sortable").append('<div class="imgtextdiv" style="cursor:auto;margin: 20px 0px 40px 0px;"><div class="dragdiv"><span class="drag"><i class="fa fa-arrows"></i>&nbsp;Drag </span></div><span ><button type="button" class="saveme" name="save1" onclick="return myFunction(this.id)" style="float:right"><a href="#" >SAVE</a></button></span><span class="close" ><i class="fa fa-trash-o"></i>&nbsp; Delete</span><div class="row" style="width: 100%;margin: 5px;"><div class="drop" style="margin-top: 43px;float:left;margin-left: 0px;"><span class="tool1" style="display:none;"><a href="#"> <i class="fa fa-trash-o" id="trash1"></i></a> </span></div><div class="edi1" style="width: 48%;margin: 24px 0px 0px 58px;cursor: pointer"><div class="col-lg-12 nopadding"><textarea id="txtEditor2" class="editor"></textarea></div></div></div></div>');
				
                                 $(".jqte_editor").focus(); 
                                
				$('.tool1').click(function(){
                                        $(this).parent().find('img').detach(); 
                                });
                                
  				
                                
                                var $drp = $(".drop").length;
				$(".drop:last").attr("id","drop_"+$drp++);   
                                
                                  var $img = $(".nbs-flexisel-item").length;
                                        $(".nbs-flexisel-item:last").attr("id","img_"+$img++); 
  
				// $(".classy-editor:last").ClassyEdit();
                              
                             var $save = $(".saveme").length;
				$(".saveme:last").attr("id","save_"+$save++); 
                                
				var $lenOfEditors = $(".editor").length;
				$(".editor:last").attr("id","txtEditor"+$lenOfEditors++);
				$(".editor:last").jqte();                              
                                 
			});		
	
	

			
        	$("#textonly").click(function(){
				 helper: 'clone',
                                  
                                 
                             
				//$('.textimgdiv').appendTo('#sortable').show('slow');
				$("#sortable").append('<div class="textdiv" style="cursor:auto;margin: 20px 0px 20px 0px; margin-bottom: 45px;"><div class="dragdiv"><span class="drag"><i class="fa fa-arrows"></i>&nbsp;Drag </span></div><span ><button type="button" class="saveme" name="save1" style="float:right" onclick="return myFunction(this.id)"><a href="#" >SAVE</a></button></span><span class="close" ><i class="fa fa-trash-o"></i>&nbsp; Delete</span><div class="row" style=" width: 100%;margin: 5px;"><div class="drop" style="display:none"><span class="tool2" style="display:none;"><a href="#"> <i class="fa fa-trash-o" id="trash2"></i></a> </span></div><div class="edi3" style="margin-left: 150px;width: 98%;cursor: pointer"><div class="col-lg-12 nopadding" id="col-lg-12edi"><textarea id="txtEditor3" class="editor"></textarea></div></div></div></div>').show('slow');
				
                                
                                 $(".jqte_editor").focus(); 
				 
                                 var $drp = $(".drop").length;
				$(".drop:last").attr("id","drop_"+$drp++);    
                                
                                   var $img = $(".nbs-flexisel-item").length;
                                        $(".nbs-flexisel-item:last").attr("id","img"+$img++); 
                                
				// $(".classy-editor:last").ClassyEdit();
				 

                            var $save = $(".saveme").length;
				$(".saveme:last").attr("id","save_"+$save++);	         
				 
				var $lenOfEditors = $(".editor").length;
				$(".editor:last").attr("id","txtEditor"+$lenOfEditors++);
				$(".editor:last").jqte();
                        });
						
        	$("#imgonly").click(function(){
				$('#sortable').append('<div class="imgdiv" style="cursor: auto;margin: 20px 0px 20px 0px;padding-bottom: 29px;"><div class="dragdiv"><span class="drag"><i class="fa fa-arrows"></i>&nbsp;Drag </span></div><span ><button type="button" class="saveme" name="save1" onclick="return myFunction(this.id)" style="float:right" ><a href="#" >SAVE</a></button></span><span class="close" ><i class="fa fa-trash-o"></i>&nbsp; Delete</span><div class="row" style="  width: 100%;margin: 5px;"><div class="drop" style="margin-left: 100px;width: 66%;height: 240px;"><span class="tool2" style="display:none;"><a href="#"> <i class="fa fa-trash-o" id="trash2"></i></a> </span></div><div class="edi1" style="display:none"><div class="col-lg-12 nopadding"><textarea id="txtEditor4" class="editor"></textarea></div></div></div></div>');
			
                                 
                                 $('.tool2').click(function(){
                                        $(this).parent().find('img').detach();        
			         });
				 
                                var $drp = $(".drop").length;
				$(".drop:last").attr("id","drop_"+$drp++); 
                                
                                   var $img = $(".nbs-flexisel-item").length;
                                        $(".nbs-flexisel-item:last").attr("id","img"+$img++); 
                                
                                //  $(".classy-editor:last").ClassyEdit();
                           
                           var $save = $(".saveme").length;
				$(".saveme:last").attr("id","save_"+$save++);                        

				var $lenOfEditors = $(".editor").length;
				$(".editor:last").attr("id","txtEditor"+$lenOfEditors++);
				$(".editor:last").jqte();
                        });

			
        	$("#divider1").click(function(){
				$('#sortable').append('<div class="divider"><div class="dragdiv"><span class="drag"><i class="fa fa-arrows"></i>&nbsp;Drag </span></div><span ><button type="button" class="saveme" name="save1" style="float:right" onclick="return myFunction(this.id)"><a href="#" >SAVE</a></button></span><span class="close" ><i class="fa fa-trash-o"></i>&nbsp; Delete</span><hr><div class="row" style="display:none"><div style="display:none"><div class="col-lg-12 nopadding"><textarea id="txtEditor5" class="editor"></textarea></div></div><div class="drop" style="display:none"><span class="tool" style="display:none;"><a href="#"> <i class="fa fa-trash-o" id="trash"></i></a> </span></div></div></div>');	
			
                        //$(".classy-editor:last").ClassyEdit();
                          
                          var $img = $('.nbs-flexisel-item').length;
                                        $('.nbs-flexisel-item:last').attr("id","img"+$img++); 
                        
				 
                                var $drp = $(".drop").length;
				$(".drop:last").attr("id","drop_"+$drp++); 
                                
                            var $save = $(".saveme").length;
				$(".saveme:last").attr("id","save_"+$save++);
				var $lenOfEditors = $(".editor").length;
				$(".editor:last").attr("id","txtEditor"+$lenOfEditors++);
				$(".editor:last").jqte();
                }); 
			
			
			$('.tool').click(function(){
                                
				$(this).parent().find('img').detach();        
			});
	         
			$('.fa fa-trash-o').click(function(){
                                
				$(".drop").find('img').remove();	        
			});

                        $('.pro_tool').click(function(){
		        
				$('.promotion_banner_placeholder .nbs-flexisel-item').remove();
                                $('.pro_tool').css('display','none');
                                $('.promotion_banner_placeholder').append('<img class="banner_img" src="images/dragimg.png" width="575px">');
			});
                        
         // trying preview of divs starts
			$("#prv").click(function(){
                                $('.dragdiv').hide();
                                $('.close').hide();
				$('.drop').css('border', 'none');
				$('.drop1').css('border', 'none');
				$('.drop2').css('border', 'none');
                                $('.saveme').hide();
                                $('#trash').hide();
                                $('#trash1').hide();
                                $('#trash2').hide();
                                $('.classyedit').css('border', 'none');
                                $('.toolbar').hide();
                                $('.jqte').css('border','none');
			   //var canvas = document.createElement('canvas');
				html2canvas($(".pro_body"), {
					onrendered: function(canvas) {
						document.body.appendChild(canvas);
						canvas.id     = "canvas";

              
					} 
                                        
				});
			});
         // trying preview of divs ends  
            
            
});
//$(".classy-editor").ClassyEdit();

$('.editor').focus();
	$('.close').livequery(function(){
			$(this).click(function(){
				$(this).parent().detach();
				//console.log("adasd");

				})
	});
        
	$('.nbs-flexisel-item').livequery(function(){
			$(this).draggable({
				appendChild: 'body',
                helper: 'clone',
				drag: function( event, ui ){
					ui.helper.addClass("draggable");
      
                                       
				}
					
                        });
          });
		
                
          $('.drop ').livequery(function(){
			$(this).droppable({
	                       accept: '.nbs-flexisel-item',
				drop: function (event, ui) { 
                                        $(this).find('img').remove();
					$(this).append($(ui.draggable).clone());
                                        $('.tool').show();
                                        $('.tool1').show();
                                        $('.tool2').show();
      
                        
                                        //alert($(this).find('img').attr('src'));
				}										

                       });
        });

	$('.nbs-flexisel-item').livequery(function(){
			$(this).draggable({
                        
				appendChild: 'body',
 
                                helper: 'clone',
				drag: function( event, ui ){
					ui.helper.addClass("draggable");
                                      
                                        
				}                                        
					
			});
        });

        $('.promotion_banner_placeholder').livequery(function(){
                $(this).droppable({
	            accept: '.nbs-flexisel-item',
				drop: function (event, ui) { 
                   $('.promotion_banner_placeholder img').remove();
		    $(this).append($(ui.draggable).clone());
		    $('.pro_tool').css('display','block');		
				}	
                     

	        });
	 
        });

		$( "#tabs" ).tabs();
		$( "#dialog-link, #icons li" ).hover(
			function() {
				$( this ).addClass( "ui-state-hover" );
			},
			function() {
				$( this ).removeClass( "ui-state-hover" );
			}
		);
		
		$( "#ch" ).click(
			function() {
		
		$("#tabs-2").css("display","none");
			}
		);
		$( "#ch2" ).click(function() {$("#tabs-2").css("margin-top","-550px");$("#tabs-2").css("display","block");}
		);
	
	

		

		/*  crzyscript         $(window).load(function() { 
		                $('.loader-item').fadeOut(); 
		                    $('#pageloader').delay(350).fadeOut('slow');
		                $('body').delay(350).css({'overflow-y':'visible'});
                                 
		            });
		            //]]>*/ 
	
	
        
    $("#sv").attr("disabled", "disabled");
    $("#prv").click(function(){
        $("#sv").removeAttr("disabled");
    });

	 
		            
	
		            
	</script>

	
	
	
  

  </body>
</html>
