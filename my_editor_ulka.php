<?php

?>
<!DOCTYPE HTML>
<HTML>
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
        
        <title>Promotions</title>
        <meta name="description" content="">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width">


		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		
		<!--new design-->
		 <!-- Bootstrap core CSS -->
   <link href="version4_editor/css/bootstrap.css" rel="stylesheet">
	
	 <link href="css/imgtab.css" rel="stylesheet">
 
  
   <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
	
	<!-- Custom styles for this template -->
    <link href="version4_editor/css/style.css" rel="stylesheet">
	<link href="version4_editor/css/style1.css" rel="stylesheet">
	
    <link href="version4_editor/css/style-responsive.css" rel="stylesheet">	
	
<!--pop up-->


<link href="popup/css/style2.css" rel='stylesheet' type='text/css' />


<script src="popup/js/jquery.magnific-popup.js" type="text/javascript"></script>
<script type="text/javascript" src="popup/js/modernizr.custom.53451.js"></script> 




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
			



<!--end-->



<!-- Paritosh templates code start-->
<script type="text/javascript">
	function template(templateID)
	{
		document.getElementById("sortable").innerHTML="";
		var xhr= new XMLHttpRequest();
		if (!window.XMLHttpRequest && 'ActiveXObject' in window) 
		{
			window.XMLHttpRequest= function() 
			{
				return new ActiveXObject('MSXML2.XMLHttp');
			};
		}
		xhr.open('GET', 'Templates/template_'+templateID+'.html', true);
		xhr.onreadystatechange= function()
		{
			if (this.readyState!==4) return;
			if (this.status!==200) return; // or whatever error handling you want
			document.getElementById('sortable').innerHTML= this.responseText;
		};
		xhr.send();
	}
</script>

<!-- Paritosh templates code end-->

	



  
  <!--end-->


	
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
	<!--<link href="edi/fileinput.min.css" rel="stylesheet">-->
        <link href="edi/jquery-te-1.4.0.css" rel="stylesheet">
		
        
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	
	<script src="edi/jquery-te-1.4.0.min.js"></script>
        <script src="js/jquery.livequery.min.js"></script>
	<script src="edi/fileinput.min.js"></script>
	<script src="http://code.jquery.com/ui/1.9.1/jquery-ui.js"></script>
        <script src="js/html2canvas.js"></script>
	<script src="js/bootstrap-wysiwyg.js"></script>	 
		
    <script src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
	

  
		 <script type="text/javascript">
		 function setTextColor(picker) {
		document.getElementById('editor').style.color = '#' + picker.toString()
	}
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

/* var count=1;
function setColor(btn, color){
    var property = document.getElementById(btn);
    if (count == 0){
        property.style.backgroundColor = "#FFFFFF"
        count=1;        
    }
    else{
        property.style.backgroundColor = "#7FFF00"
        count=0;
    }

}
 */
 function setColor(e) {
  var target = e.srcElement,
      status = e.target.classList.contains('active');
  
  e.target.classList.add(status ? 'inactive' : 'active');
  e.target.classList.remove(status ? 'active' : 'inactive');
}
    </script>
	<style>
	.active {
  background-color: #0073e6;  
}

.inactive {
  background-color: #FFFFFF;
} 
</style>
	
		<link rel="stylesheet" href="css/dashboard.css">

	

<!--<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">-->


<link rel="shortcut icon" type="image/x-icon" href="Pmail.ico" />
    <link rel="icon" type="image/x-icon" href="Pmail.ico" />
<style>
</style>




 

    </head>
     <body style="background:#34495e;">
	 <br><br>
	  
	   <!--header start-->
     <header class="header black-bg">
            <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
           
            <a href="" class="logo"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></a>
          
            <div class="nav notify-row" id="top_menu">
			    
              
                <ul class="nav top-menu ">
                 

                 <li class="dropdown" > <div class="col-md-12">
                           <input type="text" size=40 class="form-control" placeholder=" Save The Promotion As.." style="background:#f2f2f2;" >
                       
                       </div></li>
				
				
                    
                </ul>
               
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
 <li><a class="logout btn btn-warning" href="login.html"><i class="fa fa-floppy-o">&nbsp;LOGOUT</i></a></li>
                    <li><a class="logout btn btn-success" href="index.php"><i class="fa fa-floppy-o">&nbsp;&nbsp;SAVE</i></a></li>
                   
            	</ul>
            </div>
        </header>
      <!--header end-->
	  
	  

 <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion" style="list-style: none;">
              
              	 
              	  	
                  <li class="mt">
                      <div class="btn-group" >
                          <button type="button" class="btn btn-default " style="background:#f2f2f2;" onclick="SetToBold();"><i class="fa fa-bold"></i></button>
  <button type="button"  class="btn btn-default" style="background:#f2f2f2;" onclick="SetToItalic()">&nbsp;&nbsp;<i class="fa fa-italic"></i></button></div>
                  </li>

                 <li class="mt">
                      <div class="btn-group" >
                         <button type="button"  class="btn btn-default" style="background:#f2f2f2;" onclick="SetToUnderline();"><i class="fa fa-underline"></i></button>
   <button type="button" class="btn btn-default " style="background:#f2f2f2;" onclick="left();"><i class="fa fa-align-left"></i></button></div>
                  </li>

                 <li class="mt">
                      <div class="btn-group">
                         <button type="button"  class="btn btn-default" style="background:#f2f2f2;" onclick="right();"><i class="fa fa-align-right"></i></button>
  <button type="button"  class="btn btn-default" style="background:#f2f2f2;" onclick="center();"><i class="fa fa-align-center"></i></button></div>
                  </li>
                 <li class="mt">
                      <div class="btn-group">
                          <button type="button" class="btn btn-default " style="background:#f2f2f2;" onclick="orderedList();"><i class="fa fa-list-ol"></i></button>
  <button type="button"  class="btn btn-default" style="background:#f2f2f2;" onclick="UnorderedList()"><i class="fa fa-list-ul"></i></button></div>
                  </li>
				  
				
				   <li class="mt">
                      <div class="btn-group">
                         <button type="button" class="btn btn-default " style="background:#f2f2f2;"><i class="fa fa-pencil-square-o"></i></button>
  <button type="button" class="jscolor {valueElement:'chosen-value', onFineChange:'setTextColor(this)'} btn btn-default " style="background:#f2f2f2;"><i class="fa fa-pencil-square"></i></button></div>
                  </li>
				   <li class="mt">
                      <div class="btn-group">
                         <button type="button"  class="btn btn-default" style="background:#f2f2f2;"><i class="fa fa-text-height"></i></button>
  <button type="button"  class="btn btn-default" style="background:#f2f2f2;"><i class="fa fa-font"></i></button></div>
                  </li>
                    
                     <li class="mt">
    <div class="btn-group">
 <button type="button" class="btn btn-default " style="background:#f2f2f2;" id="textimg"><i class="fa fa-text-width"></i>&nbsp; & &nbsp;<i class="fa fa-picture-o"></i> </button>
 
</div>
</li>
 <li class="mt">
    <div class="btn-group">
 <button type="button" class="btn btn-default " style="background:#f2f2f2;" id="imgtext"><i class="fa fa-picture-o"></i>&nbsp; & &nbsp;<i class="fa fa-text-width"></i></button>
</div>
</li>
<li class="mt">

 <button type="button" class="btn btn-default " style="background:#f2f2f2; width:37px;" id="imgonly"><i class="fa fa-picture-o"></i></button>
 <button type="button" class="btn btn-default " style="background:#f2f2f2; width:37px;" id="textonly"><i class="fa fa-text-width"></i></button>
 
</li>
<li class="mt">
<button type="button" class="btn btn-default " style="background:#f2f2f2; width:77px;" id="banner" >Banner</button>
 

</li>




                    

                 

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->




        


         
     
               
 
			
				
						<!--<input id="btn" type="button" value="bold" onclick="SetToBold();setColor(event);">
						<input type="button" value="italic" onclick="SetToItalic()">
						<input type="button" value="Underline" onclick="SetToUnderline()">
						<input type="button" value="copy" onclick="SetToCopy()">
						<input type="button" value="cut" onclick="SetToCut()">
						<input type="button" value="resize" onclick="SetToResize()">
						<input type="button" value="fontname" onclick="fontname()">
						<input type="button" value="justifyleft" onclick="left()">
                        <input type="button" value="justifyright" onclick="right()"> 
						<input type="button" value="justifycenter" onclick="center()"> 
						<input type="button" value="indent" onclick="indent()"> 
						<input type="button" value="outdent" onclick="outdent()"> 
						 <input type="button" value="orderedList" onclick="orderedList()"> 
						 <input type="button" value="UnorderedList" onclick="UnorderedList()"> 
						  <input type="button" value="CreateLink" onclick="SetToLink ()">
						 <div class="btn-group" data-role="editor-toolbar" data-target="#editor">
						 <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font"><i class="icon-font"></i><b class="caret"></b></a>
						<ul class="dropdown-menu">
						</ul>
						</div>
						 <select id="fontName" onchange="fontEditor()">
    <option value="Arial">Arial</option>
    <option value="Calibri">Calibri</option>
    <option value="Comic Sans MS">Comic Sans MS</option>
						</select> 
						 <form method="POST" action="" > -->
							
						<!-- pro body starts -->
						
						<section id="main-content"  >
         <section class="wrapper">

             <!-- <div class="row">-->
                  <div class="col-md-8 main-chart ">
				  
				   <div class="mt" >
				   
				    <div id="editor" style="height:490px;  overflow-y:scroll;overflow-x:hidden; border:2px solid #989898;background:#f2f2f2;">
				  
				    <div id="save_div" class="pro_body" >	

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
														
                                               
							<!--<div class="pro_footer">
								      
								&copy; &nbsp;
								2015 <span>PyxyMail </span> |
							</div>-->
        </div> 
		<!--pro body ends here -->
				</div><!--editor div-->  
				  
				  
				  
				  
				<!--</div>-->
		     </div>
			 </div>
			 
			 
			 <div class="col-md-4 ds" style="background:#424a5d;" >
                    <!--COMPLETED ACTIONS DONUTS CHART-->
						
                                        
                      <ul class="nav  nav-pills">
    <li class="active"><a data-toggle="tab" href="#home" style="width:200px;"><center>Images</center></a></li>
   <!-- <li><a data-toggle="tab" href="#menu1" style="width:130px;" ><center>Banners</center></a></li>-->
	 <li><a data-toggle="tab" href="#menu2" style="width:160px;" ><center>Templates</center></a></li>
  
   
  </ul>
   <div class="tab-content" >
    <div id="home" class="tab-pane fade in active"  style=" height:425px; background:#f2f2f2;">
	
	
	 <div id=frm style="margin-left:25px; overflow-y:scroll; overflow-x:hidden; height:325px;">
	<center>
 
 
   <img class=" file-preview-image" src="uploads/pi1.jpg">
   <a href=delete_img.php?del=""><button class="btn btn-default" title="Delete Image"><i class="fa fa-trash" style="color:red;"></i></button></a>
	 <img class=" file-preview-image" src="uploads/pi1.jpg">
	<a href=delete_img.php?del=""><button class="btn btn-default" title="Delete Image"><i class="fa fa-trash" style="color:red;"></i></button></a>
	
		
	
	  <img class=" file-preview-image" src="uploads/pi1.jpg">
	<a href=delete_img.php?del=""><button class="btn btn-default" title="Delete Image"><i class="fa fa-trash" style="color:red;"></i></button></a>
	   <img class=" file-preview-image" src="uploads/banner23.jpg">
	  <a href=delete_img.php?del=""><button class="btn btn-default" title="Delete Image"><i class="fa fa-trash" style="color:red;"></i></button></a>

	 
	   <img class=" file-preview-image" src="uploads/pi1.jpg">
	   <a href=delete_img.php?del=""><button class="btn btn-default" title="Delete Image"><i class="fa fa-trash" style="color:red;"></i></button></a>
	       <img class=" file-preview-image" src="uploads/pi1.jpg">
		 <a href=delete_img.php?del=""><button class="btn btn-default" title="Delete Image"><i class="fa fa-trash" style="color:red;"></i></button></a>
	   
</center>
	</div><hr>
	
	<div style="background-color:#B8B8B8 ; ">
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
				<input type="submit" id="upload_img" name="action" value="Upload Image" class="btn btn-default"  required style="margin-top:-20px;">
			</td>
			
		</tr>
</table>
</form>
<br>
	
	</div>
      
	  
	  
    

 </div>

<!-- <div id="menu1" class="tab-pane fade "  style=" height:425px; background:#f2f2f2;">
 
 <div id=frm2 style="margin-left:25px; overflow-y:scroll; overflow-x:hidden; height:325px; ">
	<center>
 
 
   <img class=" file-preview-image" src="uploads/pi1.jpg" style="width:260px;height:100px;" >
   <a href=delete_img.php?del=""><button class="btn btn-default"><i class="fa fa-trash" style="color:red;"></i></button></a>
	 <img class=" file-preview-image" src="uploads/pi1.jpg" style="width:260px;height:100px;" >
	<a href=delete_img.php?del=""><button class="btn btn-default"><i class="fa fa-trash" style="color:red;"></i></button></a>
	
		
	
	   <img class=" file-preview-image" src="uploads/pi1.jpg" style="width:260px;height:100px;" >
	<a href=delete_img.php?del=""><button class="btn btn-default"><i class="fa fa-trash" style="color:red;"></i></button></a>
	   <img class=" file-preview-image" src="uploads/pi1.jpg" style="width:260px;height:100px;" >
	  <a href=delete_img.php?del=""><button class="btn btn-default"><i class="fa fa-trash" style="color:red;"></i></button></a>

	 
	  <img class=" file-preview-image" src="uploads/pi1.jpg" style="width:260px;height:100px;" >
	   <a href=delete_img.php?del=""><button class="btn btn-default"><i class="fa fa-trash" style="color:red;"></i></button></a>
	       <img class=" file-preview-image" src="uploads/pi1.jpg" style="width:260px;height:100px;" >
		 <a href=delete_img.php?del=""><button class="btn btn-default"><i class="fa fa-trash" style="color:red;"></i></button></a>
	   
</center>
	</div><hr>
	
	<div  style="background-color:#B8B8B8 ; ">
	<form action=" ImgUpload.php " method="post" enctype="multipart/form-data">
		 <table >
		<tr>
                       <td>&nbsp;&nbsp;&nbsp;</td>
			<td >
                        
				<input type="file" id="name"   name="filep[]" size=45 style="width: 100% "  multiple>
                       
			</td>
		
			<td>
                        <p align=center style="padding-top: 10px;"></p>
                              <!-- <label  for="phone" id="name_error" style="color:red;left:30px;position: relative;top: -17px;"><i class="fa fa-exclamation-circle"></i>Please select image first.</label>
				<input type="submit" id="upload_img" name="action" value="Upload Image" class="btn btn-default"  required>
			</td>
			
		</tr>
</table>
</form>
	
	</div>
 
 
 </div>-->

	
	
	
	
   
    <div id="menu2" class="tab-pane fade"  style=" margin-left:25px; overflow-y:scroll; overflow-x:hidden; height:425px; margin-left:-2px; background:#f2f2f2;">
	
	
	<div class="col-md-10">

<img src="images/compose.png" width="100px" height="100px">
<div class="btn-group">
  <a id="1" onclick="template(this.id);"><button class="btn btn-success">Apply</button></a>
  <a  href="#"><button class="btn btn-default" data-toggle="modal" data-target="#myModal1">View</button></a>
</div>
<img src="images/compose.png" width="100px" height="100px">
<div class="btn-group">
  <a id="2" onclick="template(this.id);"><button class="btn btn-success">Apply</button></a>
  <a  href="#"><button class="btn btn-default" data-toggle="modal" data-target="#myModal2">View</button></a>
</div>
</div>

	
<div class="col-md-10">

<img src="images/compose.png" width="100px" height="100px">
<div class="btn-group">
	<a id="3" onclick="template(this.id);"><button class="btn btn-success">Apply</button></a>
	<a href="#"><button class="btn btn-default" data-toggle="modal" data-target="#myModal3">View</button></a>
</div>
	<img src="images/compose.png" width="100px" height="100px">
<div class="btn-group">
        <a id="4" onclick="template(this.id);"><button class="btn btn-success">Apply</button></a>
         <a href="#"><button class="btn btn-default" data-toggle="modal" data-target="#myModal4">View</button></a>
</div>
</div>
   <!-- <div id="menu2" class="tab-pane fade">
     
      <p></p>
    </div>-->
    
  </div>

	</div>				  
					  <!--tabs code-->
					  
					 <!--  <ul class="nav nav-pills" >
    <li class="active col-md-2"><a data-toggle="tab" href="#home"><center>Images</center></a></li>
    <li class="col-md-2"><a data-toggle="tab" href="#menu1"><center>Templates</center></a></li>
   
  
  </ul>
   <div class="tab-content" style="background:#f2f2f2;" >
    <div id="home" class="tab-pane fade in active" style="overflow-y:scroll; overflow-x:hidden; height:525px;">
      
      <h3 style="background:#f2f2f2; color:black;">Images</h3>
    
	 
                                 
	</div>

	  
	  
	  
    <div id="menu1" class="tab-pane fade"  style="overflow-y:scroll; overflow-x:hidden; height:525px;">
       <h3 style="background:#f2f2f2; color:black;">Designs</h3>
    
	 
    </div>
   
    
  
 </div>-->
  
  
					<!--tabs end-->
					  

                      
                  </div><!-- /col-lg-3 -->
			 
			 
			 
			 
			 
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
	  
	  
	  
    


    <!--common script for all pages-->
   <!-- <script src="version4_editor/js/common-scripts.js"></script>-->
    
   

						
      <!--  <div id="save_div" class="pro_body">	

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
                                               
							<div class="pro_footer">
								      
								&copy; &nbsp;
								2015 <span>PyxyMail </span> |
							</div>
        </div> 
		<!--pro body ends here -->
							<!--<div id="tabdown2" >
								<a href="#"  id="textimg" class="btn1"><i class="fa fa-align-left"></i><i class="fa fa-picture-o"></i>&nbsp;Text & Image&nbsp;</a>
								<a href="#" id="imgtext" class="btn1"><i class="fa fa-picture-o"><i class="fa fa-align-left"></i></i>&nbsp;Image & Text&nbsp;</a>
								<a href="#" id="textonly" class="btn1"><i class="fa fa-align-left"></i>&nbsp;&nbsp;Text&nbsp;&nbsp;</a>
								<a href="#" id="imgonly" class="btn1"><i class="fa fa-picture-o"></i>&nbsp;&nbsp;Image&nbsp;&nbsp;</a>
								<a href="#" id="divider1" class="btn1">&nbsp;- Divider&nbsp;</a>
							</div>
                                                     
							<div class="actionfooter">
								<div style="background: #e9e9e9;padding: 16px;border-radius: 4px;"> 
									
                                                                      
									<button name="preview" id="prv"  class="btn btn-success" value="Send Later"><span>Save and Preview </span> </button>
                                                                        <span class="btn btn-success" id="cancel">Cancel</span>
								</div>
							</div>
                                                     
                                                    </form>
						

			     

		
			







   

       

 
<button id="btn" onclick="sendPromotion()"; >click</button>
<div id="display"></div>-->

                                                 <div id="small-dialog" class="mfp-hide">
									<div class="pop_up">
									 Hello	
						  			</div>
								</div>
								<!--pop-up-grid-->

 
    


    <!--common script for all pages
    <script src="version4_editor/js/common-scripts.js"></script>-->
    
   


<script>
  $(function(){
    function initToolbarBootstrapBindings() {
      var fonts = ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier', 
            'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Lucida Sans', 'Tahoma', 'Times',
            'Times New Roman', 'Verdana'],
            fontTarget = $('[title=Font]').siblings('.dropdown-menu');
      $.each(fonts, function (idx, fontName) {
          fontTarget.append($('<li><a data-edit="fontName ' + fontName +'" style="font-family:\''+ fontName +'\'">'+fontName + '</a></li>'));
      });
      $('a[title]').tooltip({container:'body'});
    	$('.dropdown-menu input').click(function() {return false;})
		    .change(function () {$(this).parent('.dropdown-menu').siblings('.dropdown-toggle').dropdown('toggle');})
        .keydown('esc', function () {this.value='';$(this).change();});

      $('[data-role=magic-overlay]').each(function () { 
        var overlay = $(this), target = $(overlay.data('target')); 
        overlay.css('opacity', 0).css('position', 'absolute').offset(target.offset()).width(target.outerWidth()).height(target.outerHeight());
      });
      
	};
	
    initToolbarBootstrapBindings();  
	$('.jqte_editor').wysiwyg( );
    //window.prettyPrint && prettyPrint();
  });
</script>

<script>
function sendPromotion() {
//var edit = encodeURIComponent(CKEDITOR.instances.editor.getData());
//var Editor = edit.replace(/\u200/g,"");

//var title=document.getElementById('pro_title').value;
var edit=document.getElementById('save_div').innerHTML;
var edi=encodeURIComponent(edit);
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
  document.getElementById('display').innerHTML = xhttp.responseText;
    }
  }
  xhttp.open("POST", "save_promotion.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("Editor="+edi);
} 
</script>




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
                                 
                                    var $img = $(".file-preview-image").length;
                                        $(".file-preview-image:last").attr("id","img"+$img++); 
                });
      
        	$("#imgtext").click(function(){
				
				 helper: 'clone',
                                  
                                  
				$("#sortable").append('<div class="imgtextdiv" style="cursor:auto;margin: 20px 0px 40px 0px;"><div class="dragdiv"><span class="drag"><i class="fa fa-arrows"></i>&nbsp;Drag </span></div><span ><button type="button" class="saveme" name="save1" onclick="return myFunction(this.id)" style="float:right"><a href="#" >SAVE</a></button></span><span class="close" ><i class="fa fa-trash-o"></i>&nbsp; Delete</span><div class="row" style="width: 100%;margin: 5px;"><div class="drop" style="margin-top: 43px;float:left;margin-left: 0px;"><span class="tool1" style="display:none;"><a href="#"> <i class="fa fa-trash-o" id="trash1"></i></a> </span></div><div class="edi1" style="width: 56%;margin: 24px 0px 0px 58px;cursor: pointer" ><div class="col-md-12 nopadding"  style="margin-left:-60px;"><div id="txtEditor2" class="editor" contenteditable="true"></div></div></div></div></div>');
				
                                 $(".jqte_editor").focus(); 
                                
				$('.tool1').click(function(){
                                        $(this).parent().find('img').detach(); 
                                });
                                
  				
                                
                                var $drp = $(".drop").length;
				$(".drop:last").attr("id","drop_"+$drp++);   
                                
                                  var $img = $(".file-preview-image").length;
                                        $(".file-preview-image:last").attr("id","img_"+$img++); 
  
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
				$("#sortable").append('<div class="textdiv" style="cursor:auto;margin: 20px 0px 20px 0px; margin-bottom: 45px;"><div class="dragdiv"><span class="drag"><i class="fa fa-arrows"></i>&nbsp;Drag </span></div><span ><button type="button" class="saveme" name="save1" style="float:right" onclick="return myFunction(this.id)"><a href="#" >SAVE</a></button></span><span class="close" ><i class="fa fa-trash-o"></i>&nbsp; Delete</span><div class="row" style=" width: 100%;margin: 5px;"><div class="drop" style="display:none"><span class="tool2" style="display:none;"><a href="#"> <i class="fa fa-trash-o" id="trash2"></i></a> </span></div><div class="edi3" style="margin-left: 150px;width: 98%;cursor: pointer"><div class="col-lg-12 nopadding" id="col-md-12edi" style="margin-left:-170px;"><div id="txtEditor3" class="editor"></div></div></div></div></div>').show('slow');
				
                                
                                 $(".jqte_editor").focus(); 
				 
                                 var $drp = $(".drop").length;
				$(".drop:last").attr("id","drop_"+$drp++);    
                                
                                   var $img = $(".file-preview-image").length;
                                        $(".file-preview-image:last").attr("id","img"+$img++); 
                                
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
                                
                                   var $img = $(".file-preview-image").length;
                                        $(".file-preview-image:last").attr("id","img"+$img++); 
                                
                                //  $(".classy-editor:last").ClassyEdit();
                           
                           var $save = $(".saveme").length;
				$(".saveme:last").attr("id","save_"+$save++);                        

				var $lenOfEditors = $(".editor").length;
				$(".editor:last").attr("id","txtEditor"+$lenOfEditors++);
				$(".editor:last").jqte();
                        });
						
						//banner image
						
						$("#banner").click(function(){
				$('#sortable').append('<div class="imgdiv" style="cursor: auto;margin: 20px 0px 20px 0px;padding-bottom: 29px;"><div class="dragdiv"><span class="drag"><i class="fa fa-arrows"></i>&nbsp;Drag </span></div><span ><button type="button" class="saveme" name="save1" onclick="return myFunction(this.id)" style="float:right" ><a href="#" >SAVE</a></button></span><span class="close" ><i class="fa fa-trash-o"></i>&nbsp; Delete</span><div class="row" style="  width: 100%;margin: 5px;"><div class="drop" style="margin-left: 20px;width: 90%;height: 100px;"><span class="tool2" style="display:none;"><a href="#"> <i class="fa fa-trash-o" id="trash2"></i></a> </span></div><div class="edi1" style="display:none"><div class="col-lg-12 nopadding" ><textarea id="txtEditor4" class="editor"></textarea></div></div></div></div>');
			
                                 
                                 $('.tool2').click(function(){
                                        $(this).parent().find('img').detach();        
			         });
				 
                                var $drp = $(".drop").length;
				$(".drop:last").attr("id","drop_"+$drp++); 
                                
                                   var $img = $(".file-preview-image").length;
                                        $(".file-preview-image:last").attr("id","img"+$img++); 
                                
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
                          
                          var $img = $('.file-preview-image').length;
                                        $('.file-preview-image:last').attr("id","img"+$img++); 
                        
				 
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
		        
				$('.promotion_banner_placeholder .file-preview-image').remove();
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
        
	$('.file-preview-image').livequery(function(){
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
	                       accept: '.file-preview-image',
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

	$('.file-preview-image').livequery(function(){
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
	            accept: '.file-preview-image',
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
              <!--  <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script> -->
        
  <div class="container">

  <!-- Modal -->
  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">

        <div class="modal-body">
          <img src="images/compose.png" width="100%" height="100%">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>


 <div class="container">

 <!-- Modal -->
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">

        <div class="modal-body">
          <img src="images/compose.png" width="100%" height="100%">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
 
</div>
      

 <div class="container">

 <!-- Modal -->
  <div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">

        <div class="modal-body">
          <img src="images/compose.png" width="100%" height="100%">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
 
</div>


 <div class="container">

 <!-- Modal -->
  <div class="modal fade" id="myModal4" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">

        <div class="modal-body">
          <img src="images/compose.png" width="100%" height="100%">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  
</div>
    </body>
</html>