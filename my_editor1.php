<?php
include 'session1.php';
include 'connect.php';
  
 $user=$paid_session;

     if(isset($login_session)) 
{      
   $parentemail=$user_check;
}
elseif(isset($paid_session)) 
{      
   $parentemail=$user_check1;
}
// Retrieve data from Query String
$Editor=$_POST['Editor'];
$promotion_no =rand();
$pro_title=$_POST['pro_title'];
$save_div=$_POST['Edi'];

// Escape User Input to help prevent SQL Injection
$Editor = mysqli_real_escape_string($conn,$Editor);
$Img = mysqli_real_escape_string($conn,$Img);
$pro_title = mysqli_real_escape_string($conn,$pro_title);
$UserId = mysqli_real_escape_string($conn,$userId); 


?>
<HTML>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Promotions</title>
<meta name="description" content="">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width">
<link rel="shortcut icon" type="image/x-icon" href="Pmail.ico" />
<link rel="icon" type="image/x-icon" href="Pmail.ico" />

<!--CSS start-->
<link href="version4_editor/css/bootstrap.css" rel="stylesheet">
<link href="css/imgtab.css" rel="stylesheet">
<link href="version4_editor/css/bootstrap.css" rel="stylesheet">
<link href="version4_editor/css/style.css" rel="stylesheet">
<link href="version4_editor/css/style1.css" rel="stylesheet">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
<link href="version4_editor/css/style-responsive.css" rel="stylesheet">	
<link href="popup/css/style2.css" rel='stylesheet' type='text/css' />
<link href="css/imgtab.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/dashboard.css">
<link href="edi/jquery-te-1.4.0.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/uploadify.css">
<link rel="stylesheet" type="text/css" href="css/spectrum.css">

<style>
.active {
background-color: #0073e6;  
}
.inactive {
background-color: #FFFFFF;
} 
.fadebox { position:relative; }
.fadebox p { position:absolute; left:0; top:0; width: 300px; display:none;}

</style>

<!--CSS end-->


<!--JS Start-->
<!--<script src="popup/js/jquery.magnific-popup.js" type="text/javascript"></script>
<script type="text/javascript" src="popup/js/modernizr.custom.53451.js"></script>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
        // We need to turn off the automatic editor creation first.
        CKEDITOR.disableAutoInline = true;

        var activeEditor = 0;
        var activeEditorElement = 0;
        var activeId = '';

        function editorInit(id) {

            // Is there already an editor active?
            if (activeEditor) {

                // Is the active editor the same
                // as the one being requested?
                if (activeEditor.element.getId() == activeId) {

                    // Then our editor is already running
                    // so there's nothing to do!
                    return;
                }
                activeEditor.destroy();
            }

            // Find the element that we want to
            // attach the editor to
            if (! (activeEditorElement = document.getElementById(id))) {    
                return;
            }

            // TODO - verify that the element is either a
            // div or a textarea which are the only two
            // element types supporting contenteditable=true

            // Make the element editable
            activeEditorElement.setAttribute('contenteditable', 'true');

            // Create a new inline editor for this div
            activeEditor = CKEDITOR.inline(id);

            // Set up a destruction function that will occur
            // when the user clicks out of the editable space
            activeEditor.on('blur', function() {
                this.element.setAttribute('contenteditable', 'false');
                activeId = '';
                activeEditor = 0;
                activeEditorElement = 0;
                this.destroy();
            });

            // Now set the focus to our editor so
            // that it will open up for business
            activeEditorElement.focus();
        }
		/*$(document).ready(function()
		{
		var editnum=1;
			$('#getv').click(function()
			{
				$('body').append("<div id='editable"+editnum+"' contenteditable='false' onClick=editorInit('editable"+editnum+"');>Your editable text goes here</div><br>");
				editnum++;
			});
		});*/
    </script>
<!-- CKEDITOR -->
<script src="ckeditor/ckeditor.js"></script>
<script src="ckeditor/samples/js/sample.js"></script>
<link rel="stylesheet" href="ckeditor/samples/css/samples.css">
<!-- CKEDITOR -->
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
xhr.open('GET', 'Templates/templates_'+templateID+'.php', true);
xhr.onreadystatechange= function()
{
if (this.readyState!==4) return;
if (this.status!==200) return; // or whatever error handling you want
document.getElementById('sortable').innerHTML= this.responseText;
};
xhr.send();
}

function DelImg(Banr,imagNm,type)
{
var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
if (xhttp.readyState == 4 && xhttp.status == 200) {
var stat= xhttp.responseText;

window.location.reload();
}
}
xhttp.open("POST", "delete_img.php", true);
xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xhttp.send("del="+imagNm+"&banner="+Banr+"&ext="+type);
}
</script>
<!-- Paritosh templates code end-->
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="edi/jquery-te-1.4.0.min.js"></script>
<script src="js/jquery.livequery.min.js"></script>
<script src="edi/fileinput.min.js"></script>
<script src="http://code.jquery.com/ui/1.9.1/jquery-ui.js"></script>
<script src="js/html2canvas.js"></script>

<script type='text/javascript'>
  $(document).ready(function(){
   $('#error').hide();
   $('#prv').on('click', function(e){

      $('.toolbar').hide();
     $('#error').hide();
     var name = $("input#pro_title").val();
     
     if (name == "") {
        $("label#error").show();
        $("input#pro_title").focus();
        return false;
      }
      else
      {
var edit=document.getElementById('save_div').innerHTML;
 $('.fadebox p').hide().fadeIn(2000);
 setTimeout(function(){$('.fadebox p').fadeOut(2000);}, 5000);
             e.preventDefault();
                html2canvas($('.pro_body'), {
                    onrendered: function(canvas){
                        var imgString = canvas.toDataURL();
                        
                        var pro_title = document.getElementById("pro_title").value;
						
						//var edi=encodeURIComponent(edit);
						//alert(edit);
                      // window.open(imgString);
                        $.ajax({
                            url: '',
                            type: 'POST',
                            data: {   
                                'file' : imgString,
                                'pro_title' : pro_title,
								'Edi':edit
								
                            },
                            success: function(response){
								window.location.href = 'campaign_dash.php';
                                return false;
                            
     
                  <?php

                                   //$promotion_no="23";
                                   $Img = 'upload/file_'.$promotion_no.'.png';
                                    if(($_POST['file'] != "") )
                                    {
                                    //@header('Content-Type: application/json');
                                    $file = base64_decode(str_replace('data:image/png;base64,','',$_POST['file']));
                                    $im = imageCreateFromString($file);
                                    
                                    if(($im)) 
                                    {
                                        $save = imagepng($im, 'upload/file_'.$promotion_no.'.png');
                          
                          // if(isset($_post['saveme'])){
   
                              $qry= "INSERT INTO promotion VALUES ('','$parentemail','$save_div','$Img','','$promotion_no','$pro_title','$pro_id')";
                              $res = mysqli_query($conn,$qry);
                           //} 
                                     
                                        // echo $pro_title=$_POST['pro_title'];  
                                        

                                        
                                        echo json_encode(array('file' => true));
                                    }
                                    else
                                    {
                                        echo json_encode(array('error' => 'Could not parse image string.'));
                                    }
                                           
                                          
                                    //exit();

                                }
                                
                             

                            ?>	
                                //alert('Everything works fine.');
                            },
                            error: function(response){
                                //alert('Server response error.');
                            }
                        });
                    }
                });
             
             
            
               
          }  
            });
        });
</script>
<!--JS End-->
</head>
<body style="background:#424a5d;">
<header class="header black-bg">
<a href="" class="logo"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></a>
          
            <div class="nav notify-row" id="top_menu">
			    
              
                <ul class="nav top-menu ">
                 

                 <li class="dropdown" > <div class="col-md-12">
                            <input type="text" name="pro_title" id="pro_title" size="40" class="form-control" placeholder=" Save The Promotion As.." style="background:#f2f2f2; height:45px;" >
                       
                       </div></li>
            <li class="dropdown">
              
                <div style="margin-left:2px;background:#f2f2f2;" class="btn btn-default"><input id="full" title="Background" / ></div>
            </li>
                </ul>
               
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
 <li><a class="logout btn btn-warning" href="login.html"><i class="fa fa-floppy-o">&nbsp;LOGOUT</i></a></li>
                    <li><a id="prv" class="logout btn btn-success" ><i class="fa fa-floppy-o">&nbsp;&nbsp;SAVE</i></a></li>
                   
            	</ul>

<div id="display"><div class='fadebox'>
<p class='alert alert-success'>
  <strong>Promotionis ready!</strong> Redirecting you to campaigns...
</p>
    
</div>
            </div>
        </header>
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion" style="list-style: none;">
              
                 <!--  <li class="mt">
                      <div class="btn-group" >
                          <button type="button" class="btn btn-default " style="background:#f2f2f2; height:34px;" onclick="SetToBold();" title="Bold"><i class="fa fa-bold"></i></button>
  <button type="button"  class="btn btn-default" style="background:#f2f2f2;" onclick="SetToItalic()" title="Italic">&nbsp;&nbsp;<i class="fa fa-italic"></i></button></div>
                  </li>-->

                <!-- <li class="mt">
                      <div class="btn-group" >
                         <!--<button type="button"  class="btn btn-default" style="background:#f2f2f2;" onclick="SetToUnderline();" title="Underline"><i class="fa fa-underline"></i></button>
  </div>
 
                  </li>-->

                 

<li class="mt">
                      <div class="btn-group">
      <button type="button"  class="btn btn-default" style="background:#f2f2f2;" onclick="indent();" title="Indent"><i class="fa fa-indent"></i></button>                  
  <button type="button"  class="btn btn-default" style="background:#f2f2f2;" onclick="outdent();" title="Outdent"><i class="fa fa-outdent"></i></button></div>
  
                  </li>
                 <li class="mt">
                      <div class="btn-group">
                          <button type="button" class="btn btn-default " style="background:#f2f2f2;" onclick="orderedList();" title="OrderedList"><i class="fa fa-list-ol"></i></button>
  <button type="button"  class="btn btn-default" style="background:#f2f2f2;" onclick="UnorderedList()"title="UnorderedList" ><i class="fa fa-list-ul"></i></button></div>
                  </li>

		<li class="mt" >
                     
                     <!--  <div style="margin-left:2px;background:#f2f2f2;" class="btn btn-default"><input id="full" title="Background" / ></div>-->
                      
                  </li>
		<li class="mt">
                     <!-- <div class="btn-group">
                         <button type="button"  class="btn btn-default" style="background:#f2f2f2;"><i class="fa fa-text-height"></i></button>
  <button type="button"  class="btn btn-default" style="background:#f2f2f2;" onclick="fontname()"><i class="fa fa-font"></i></button></div>-->
                  </li>

<li class="mt">
                      <div class="btn-group">
 <button type="button" class="btn btn-default " style="background:#f2f2f2;" onclick="left();" title="Left"><i class="fa fa-align-left"></i></button>
      <button type="button"  class="btn btn-default" style="background:#f2f2f2;" onclick="right();" title="Right"><i class="fa fa-align-right"></i></button>                  
 </div>
  
                  </li>
<li class="mt">

 <button type="button"  class="btn btn-default" style="background:#f2f2f2; width:75px;" onclick="center();" title="Center" ><i class="fa fa-align-center"></i></button>
</li>

<li class="mt">
<button type="button" class="btn btn-default " style="background:#f2f2f2; width:77px;" id="banner" title="Banner-Image">Banner</button>
 

</li>

<li class="mt">
<button type="button" class="btn btn-default " style="background:#f2f2f2; width:77px;" id="textonly" title="Text"><i class="fa fa-text-width"></i></button>

</li>
<li class="mt">

 <button type="button" class="btn btn-default " style="background:#f2f2f2; width:77px;" id="imgonly" title="Image"><i class="fa fa-picture-o"></i></button>
 </li>


<li class="mt">
<button type="button" class="btn btn-default " style="background:#f2f2f2; width:77px;" id="divider1" title="Divider"><i class="fa fa-minus"></i><i class="fa fa-minus"></i><i class="fa fa-minus"></i><i class="fa fa-minus"></i></button>
</li>
       <li class="mt">
    <div class="btn-group">
 <button type="button" class="btn btn-default " style="background:#f2f2f2;" id="textimg" title="Text&Image"><i class="fa fa-text-width"></i>&nbsp; & &nbsp;<i class="fa fa-picture-o"></i> </button>
 
</div>
</li>
 <li class="mt">
    <div class="btn-group">
 <button type="button" class="btn btn-default " style="background:#f2f2f2;" id="imgtext" title="Image&Text"><i class="fa fa-picture-o"></i>&nbsp; & &nbsp;<i class="fa fa-text-width"></i></button>
</div>
</li>


              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
	  <section id="main-content"  >
         <section class="wrapper">

             <!-- <div class="row">-->
                  <div class="col-md-8 main-chart ">
				  
<div class="mt">				   
<div  style="height:auto; width:auto; border:2px solid #989898;background:#f2f2f2;">	  
<div id="save_div" class="pro_body">
<div id="sortable" >
	<div id="txtimg" class="textimgdiv" style="cursor: auto;margin-bottom: 40px;">
		<div class="dragdiv"><span class="drag"><i class="fa fa-arrows"></i>&nbsp;Drag </span></div>
		<span><button type="button" class="saveme" name="save1" onclick="myFunction(this.id)" style="float:right;" ><a href="#" >SAVE</a></button></span>
		<span class="close" ><i class="fa fa-trash-o"></i>&nbsp; Delete</span>
		<div class="row" style="  width: 100%;margin: 5px;"><div class="edi" style="width: 56%;cursor: pointer;">
			<div class="col-lg-12 nopadding" style="margin-left:22px; margin-top:-18px;"><div contenteditable="true" >Type Your Text here</div></div>
			</div><div class="drop"><span class="tool" style="display:none;"><a href="#"> <i class="fa fa-trash-o" id="trash"></i></a> </span><img class="file-preview-image ui-draggable" src="images/galary.png"></div>
		</div>
	</div>





</div>
</div> 
        </div> 
		<!--pro body ends here -->
				</div><!--editor div-->  
		     </div>
			 </div>
			 
			 
			 <div class="col-md-4 ds" style="background:#424a5d;" >
                              
                      <ul class="nav  nav-pills">
    <li class="active"><a data-toggle="tab" href="#home" style="width:120px;"><center>Images</center></a></li>
   <li><a data-toggle="tab" href="#menu1" style="width:120px;" ><center>Banners</center></a></li>
	 <li><a data-toggle="tab" href="#menu2" style="width:100px;" ><center>Templates</center></a></li>
  
   
  </ul>
   <div class="tab-content" >
    <div id="home" class="tab-pane fade in active"  style=" height:425px; background:#f2f2f2;">
	
	
<div id="frm" style="margin-left:25px; overflow-y:scroll; overflow-x:hidden; height:325px;">
<center>
 
<?php

$path="uploads/".$user."/*.*";
$files = glob($path);
for ($i=0; $i<count($files); $i++)
{
$image = $files[$i];
$entity = explode('/',$image);
$img=$entity[2];
$img_ts = explode('.',$img);
$imgNames = $img_ts[0];
$img_types = $img_ts[1];
$banner = 0;
$supported_file = array(
    'gif',
    'jpg',
    'jpeg',
    'png'
);

$ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
if (in_array($ext, $supported_file))
{
echo "<form><img class='file-preview-image' src='".$image."'>
<input type='text' id='ban".$i."' value='".$banner."' style='display:none;'>
<input type='text' id='img".$i."' value='".$imgNames."' style='display:none;'>
<input type='text' id='ext".$i."' value='".$img_types."' style='display:none;'>
<a><button type='button' onclick='DelImg(ban".$i.".value,img".$i.".value,ext".$i.".value)' class='btn btn-default' title='Delete Image'><i class='fa fa-trash' style='color:red;'></i></button></a></form>";
}
else
{
    continue;
}
}
?>	   
</center>
</div><hr>
	
<div style="background-color:#B8B8B8 ; ">
<form>
<div id="queue"></div>
<input id="file_upload" name="file_upload" multiple="true" type="file" accept="image/jpeg,image/jpg,image/png,image/gif">
	</form><br>
	<script type="text/javascript">
		<?php $timestamp = time();?>
		$(document).ready(function() {
			$('#file_upload').uploadify({
				'formData'     : {
					'timestamp' : '<?php echo $timestamp;?>',
					'token'     : '<?php echo md5('unique_salt' . $timestamp);?>'
				},
				'swf'      : 'uploadify.swf',
				'uploader' : 'uploadify.php'
			});
		});
	</script>
	</div>
 </div>

<div id="menu1" class="tab-pane fade" style=" height:425px; background:#f2f2f2;">
 
<div id="frm2" style="margin-left:25px; overflow-y:scroll; overflow-x:hidden; height:325px; ">
<center>
 
<?php
$path="uploads/".$user."/banner/*.*";
$files = glob($path);
for ($i=0; $i<count($files); $i++)
{
$image = $files[$i];
$entity = explode('/',$image);
$bannerfile = $entity[2];
$img=$entity[3];
$img_t = explode('.',$img);
$imgName = $img_t[0];
$img_type = $img_t[1];
if($bannerfile == "banner")
{
    $banner = 1;
}
else
{
    $banner = 0;
}
$supported_file = array(
    'gif',
    'jpg',
    'jpeg',
    'png'
);

$ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
if (in_array($ext, $supported_file)) {
    echo "<form><img class='file-preview-image' src='".$image."'>
<input type='text' id='ban".$i."' value='".$banner."' style='display:none;'>
<input type='text' id='img".$i."' value='".$imgName."' style='display:none;'>
<input type='text' id='ext".$i."' value='".$img_type."' style='display:none;'>
<a><button type='button' onclick='DelImg(ban".$i.".value,img".$i.".value,ext".$i.".value)' class='btn btn-default' title='Delete Image'><i class='fa fa-trash' style='color:red;'></i></button></a></form>";
} else {
    continue;
 }
}
?>	   
</center>
</div><hr>
<div style="background-color:#B8B8B8 ; ">
<form>
<div id="queue"></div>
<input id="file_upload2" name="file_upload2" multiple="true" type="file" accept="image/jpeg,image/jpg,image/png,image/gif">
	</form><br>
	<script type="text/javascript">
		<?php $timestamp = time();?>
		$(document).ready(function() {
			$('#file_upload2').uploadify({
				'formData'     : {
					'timestamp' : '<?php echo $timestamp;?>',
					'token'     : '<?php echo md5('unique_salt' . $timestamp);?>'
				},
				'swf'      : 'uploadify.swf',
				'uploader' : 'uploadify_banner.php'
			});
		});
	</script>	
	</div>
 </div>
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
</div>
</div>				   
</section>
</section>
<!--footer-->
      <footer class="site-footer" style="margin-top:-20px;">
          <div class="text-center" style="margin-top:23px;">
              &copy;2015 - PyxyMail
              <!--<a href="index.php" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>-->
          </div>
      </footer>
<!--footer-->
<script>
function sendPromotion() {
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
$(".jqte_editor").focus(); 
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
	});
	
 $('#cancel').click(function(){
         $( "#sortable" ).empty();
 });       
        	
$("#textimg").click(function(){
var $lenOfEditors = $(".editor").length;
$(".editor:last").attr("id","txtEditor"+$lenOfEditors++);

        		helper: 'clone',
				$("#sortable").append('<div class="textimgdiv" style="cursor: auto;margin-bottom: 40px;"><div class="dragdiv"><span class="drag"><i class="fa fa-arrows"></i>&nbsp;Drag </span></div><span ><button type="button" class="saveme" name="save1" onclick="myFunction(this.id)" style="float:right;" ><a href="#" >SAVE</a></button></span><span class="close" ><i class="fa fa-trash-o"></i>&nbsp; Delete</span><div class="row" style="width: 100%;margin: 5px;"><div class="edi" style="width: 56%;cursor: pointer;"><div class="col-lg-12 nopadding"><div contenteditable="false" onDblclick="editorInit(this.id)" class="editor">Your text goes here</div></div></div><div class="drop"><span class="tool" style="display:none;"><a href="#"><i class="fa fa-trash-o" id="trash"></i></a> </span><img class="file-preview-image ui-draggable" src="images/galary.png"></div></div></div>');
				var $lenOfEditors = $(".editor").length;
				$(".editor:last").attr("id","txtEditor"+$lenOfEditors++);

				/*$(".editor:last").jqte();                                
                                $(".jqte_editor").focus(); */
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
				$("#sortable").append('<div class="imgtextdiv" style="cursor:auto;margin: 30px 0px 40px 0px;"><div class="dragdiv"><span class="drag"><i class="fa fa-arrows"></i>&nbsp;Drag </span></div><span ><button type="button" class="saveme" name="save1" onclick="return myFunction(this.id)" style="float:right"><a href="#" >SAVE</a></button></span><span class="close" ><i class="fa fa-trash-o"></i>&nbsp; Delete</span><div class="row" style="width: 100%;margin: 5px; margin-left:40px;"><div class="drop" style="margin-top: 13px;float:left;margin-left: 0px;"><span class="tool1" style="display:none;"><a href="#"> <i class="fa fa-trash-o" id="trash1"></i></a> </span><img class="file-preview-image ui-draggable" src="images/galary.png"></div><div class="edi1" style="width: 56%;margin: 24px 0px 0px 58px;cursor: pointer" ><div class="col-md-12 nopadding"  style="margin-left:-60px;margin-top: -38px;"><div contenteditable="false" onDblclick="editorInit(this.id)" class="editor">Your text goes here</div></div></div></div></div>');
				var $lenOfEditors = $(".editor").length;
				$(".editor:last").attr("id","txtEditor"+$lenOfEditors++);

                                //$(".jqte_editor").focus(); 
                                
				$('.tool1').click(function(){
                                        $(this).parent().find('img').detach(); 
                                });
                                
                                var $drp = $(".drop").length;
				$(".drop:last").attr("id","drop_"+$drp++);   
                                
                                var $img = $(".file-preview-image").length;
                                $(".file-preview-image:last").attr("id","img_"+$img++);  
			});	
        	$("#textonly").click(function(){
				 helper: 'clone',
				$("#sortable").append('<div class="textdiv" style="cursor:auto;margin: 20px 0px 20px 0px; margin-bottom: 45px;"><div class="dragdiv"><span class="drag"><i class="fa fa-arrows"></i>&nbsp;Drag </span></div><span ><button type="button" class="saveme" name="save1" style="float:right" onclick="return myFunction(this.id)"><a href="#" >SAVE</a></button></span><span class="close" ><i class="fa fa-trash-o"></i>&nbsp; Delete</span><div class="row" style=" width: 100%;margin: 5px;"><div class="edi3" style="margin-left: 150px;width: 98%;cursor: pointer"><div class="col-lg-12 nopadding" id="col-md-12edi" style="margin-left:-146px;"><div contenteditable="false" onDblclick="editorInit(this.id)" class="editor">Your text goes here</div></div></div></div></div>').show('slow');

                                 var $drp = $(".drop").length;
				$(".drop:last").attr("id","drop_"+$drp++);    
                                
                                   var $img = $(".file-preview-image").length;
                                        $(".file-preview-image:last").attr("id","img"+$img++); 
                            var $save = $(".saveme").length;
				$(".saveme:last").attr("id","save_"+$save++);	         
				 
				var $lenOfEditors = $(".editor").length;
				$(".editor:last").attr("id","editor"+$lenOfEditors++);
                        });
						
        	$("#imgonly").click(function(){
				$('#sortable').append('<div class="imgdiv" style="cursor: auto;margin: 20px 0px 20px 0px;padding-bottom: 29px;"><div class="dragdiv"><span class="drag"><i class="fa fa-arrows"></i>&nbsp;Drag </span></div><span ><button type="button" class="saveme" name="save1" onclick="return myFunction(this.id)" style="float:right" ><a href="#" >SAVE</a></button></span><span class="close" ><i class="fa fa-trash-o"></i>&nbsp; Delete</span><div class="row" style="  width: 100%;margin: 5px;"><div class="drop" style="margin-left: 100px;width: 72%;height: 240px;"><span class="tool2" style="display:none;"><a href="#"> <i class="fa fa-trash-o" id="trash2"></i></a> </span><img class="file-preview-image ui-draggable" src="images/galary.png"></div></div></div>');
			
                                 
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
				$('#sortable').append('<div class="imgdiv" style="cursor: auto;margin: 20px 0px 20px 0px;padding-bottom: 29px;"><div class="dragdiv"><span class="drag"><i class="fa fa-arrows"></i>&nbsp;Drag </span></div><span ><button type="button" class="saveme" name="save1" onclick="return myFunction(this.id)" style="float:right" ><a href="#" >SAVE</a></button></span><span class="close" ><i class="fa fa-trash-o"></i>&nbsp; Delete</span><div class="row" style="  width: 100%;margin: 5px;"><div class="drop" style="margin-left: 33px;width: 90%;height: 160px;"><span class="tool2" style="display:none;"><a href="#"> <i class="fa fa-trash-o" id="trash2"></i></a> </span><img class="file-preview-image ui-draggable" src="images/galary.png"></div></div></div>');
			
                                 
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
				$('#sortable').append('<div class="divider" ><div class="dragdiv"><span class="drag"><i class="fa fa-arrows"></i>&nbsp;Drag </span></div><span ><button type="button" class="saveme" name="save1" style="float:right" onclick="return myFunction(this.id)"><a href="#" >SAVE</a></button></span><span class="close" ><i class="fa fa-trash-o"></i>&nbsp; Delete</span><hr width="97%" style="border: 2px; height: 1px; color: #333; background-color: #333; "></div>');	
			
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
<script>
//CKEDITOR.inlineAll();
//initSample();
</script>
<script src="js/jquery.uploadify.min.js" type="text/javascript"></script>
<script src="js/jquery.uploadify.js" type="text/javascript"></script>
<script type="text/javascript" src="js/spectrum.js"></script>
<script type='text/javascript' src='js/docs.js'></script>
<script type="text/javascript" src="js/prettify.js"></script>
</html>