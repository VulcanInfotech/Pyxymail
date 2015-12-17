<?php
//session_start();
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
//$_SESSION['pro_title1']= $_POST['pro_title'];	
//$pro_title= $_SESSION['pro_title1'];


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
<!--<link href="css/imgtab.css" rel="stylesheet">-->
<!--link href="version4_editor/css/bootstrap.css" rel="stylesheet"-->
<link href="version4_editor/css/style.css" rel="stylesheet">
<link href="version4_editor/css/style1.css" rel="stylesheet">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
<link href="version4_editor/css/style-responsive.css" rel="stylesheet">	
<link href="popup/css/style2.css" rel='stylesheet' type='text/css' />
<link href="css/my_imgtab.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/dashboard.css">
<link href="edi/jquery-te-1.4.0.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/uploadify.css">
<link rel="stylesheet" type="text/css" href="css/spectrum.css">
<link href="css/simple-sidebar.css" rel="stylesheet">
<link rel="stylesheet" href="css/templatemo-style.css">
<!--<link href="css/bootstrap1.css" rel="stylesheet">-->
<!--link rel="stylesheet" type="text/css" href="css/default.css" />
<link rel="stylesheet" type="text/css" href="css/component.css" />
<script src="js/modernizr.custom1.js"></script-->
<style>
.active {
background-color: #0073e6;  
}
.inactive {
background-color: #FFFFFF;
} 
</style>
<style>
.fadebox { position:relative; }
.fadebox p { position:absolute; left:0; top:0; width: 300px; display:none;}

</style>

<!--CSS end-->

<!--JS Start-->

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

function setColor(e) {
var target = e.srcElement,
status = e.target.classList.contains('active');

e.target.classList.add(status ? 'inactive' : 'active');
e.target.classList.remove(status ? 'active' : 'inactive');
}

</script>
<!-- CKEDITOR -->
<script src="ckeditor/ckeditor.js"></script>
<script src="ckeditor/samples/js/sample.js"></script>
<link rel="stylesheet" href="ckeditor/samples/css/samples.css">
<!-- CKEDITOR -->

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
<style>
.edilen
{
height:165px;
}
</style>
</head>
<body style="background-color:#f2f2f2;">

  <nav class="navbar navbar-default navbar-fixed-top" style="background-color:white; height:70px; padding:5px; border-color:white;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a href="index.php" class="navbar-brand" style=" padding:5px;"><img src="images/pyxymail31.png"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar" style="background-color:white;">
      <ul class="nav navbar-nav">
        <li><a href="dashboard.php"  style="font-family: Helvetica Neue,Arial,Helvetica,sans-serif;font-size: 12px;font-weight: bold;line-height: 1.75;letter-spacing: 0.04em;color: #3a3a3a; text-align: center;height: 62px;line-height: 62px;padding: 0 28px;"><b>Dashbord</b></a></li>
       
        <li><a href="audience1.php"  style="font-family: Helvetica Neue,Arial,Helvetica,sans-serif;font-size: 12px;font-weight: bold;line-height: 1.75;letter-spacing: 0.04em;color: #3a3a3a; text-align: center;height: 62px;line-height: 62px;padding: 0 28px;"> <b>Audience</b></a></li>

        <li><a href="campaign_dash.php"  style="font-family: Helvetica Neue,Arial,Helvetica,sans-serif;font-size: 12px;font-weight: bold;line-height: 1.75;letter-spacing: 0.04em;color: #3a3a3a; text-align: center;height: 62px;line-height: 62px;padding: 0 28px;"> <b>Campaign</b></a></li>
<?php
include 'session1.php';
if(isset($paid_session))
{
         echo "                  <li><a href='pricing_signups.php' style='font-family: Helvetica Neue,Arial,Helvetica,sans-serif;font-size: 12px;font-weight: bold;line-height: 1.75;letter-spacing: 0.04em;color: #3a3a3a; text-align: center;height: 62px;line-height: 62px;padding: 0 28px;'><b>Pricing</b></a>   </li>";
}
?>
<?php
include 'session1.php';
if(isset($login_session))
{
         echo "                  <li><a href='pricing_signups.php'  style='font-family: Helvetica Neue,Arial,Helvetica,sans-serif;font-size: 12px;font-weight: bold;line-height: 1.75;letter-spacing: 0.04em;color: #3a3a3a; text-align: center;height: 62px;line-height: 62px;padding: 0 28px;'><b>Pricing Plans</b></a>   </li>";
}
?> 

<li><a href="account.php"  style="font-family: Helvetica Neue,Arial,Helvetica,sans-serif;font-size: 12px;font-weight: bold;line-height: 1.75;letter-spacing: 0.04em;color: #3a3a3a; text-align: center;height: 62px;line-height: 62px;padding: 0 28px;"><b>My Account</b></a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li><center><b  style="font-family: Helvetica Neue,Arial,Helvetica,sans-serif;font-size: 12px;font-weight: bold;line-height: 1.75;letter-spacing: 0.04em;color: #3a3a3a; text-align: center;height: 62px;line-height: 62px;"><?php include 'session1.php';  echo $paid_user;  echo $login_session;?>,&nbsp;
<a href="logout.php">Logout</a></b>

 <!--i class="fa fa-sign-out fa-1x"></i--></center></li>
        <li>&nbsp;&nbsp;&nbsp;&nbsp;</li>
       <li><div id="display"><div class='fadebox'>
<p class='alert alert-success'>
  <strong>Promotion Created!</strong>&nbsp;Redirecting to Campaigns...
</p>
    
</div></li>
      </ul>

    </div>
  </div>
</nav>
	 
<br><br>
<!--sidebar-->
<div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            
            <ul class="sidebar-nav">
                <!-- sidebar menu start-->
                   <li>&nbsp;</li>
                  <li class="mt">
                     
                  </li>


 <li>&nbsp;</li>
                   
                 
<li class="mt">
<button type="button" class="btn btn-default " id="banner" style="width:110px;" title="Banner-Image"><i class="fa fa-credit-card fa-2x"></i><br>Banner</button>
 </li>

<li class="Divider"></li>
<li class="mt">
<button type="button" class="btn btn-default" id="divider1" style="width:110px;" title="Divider"><b>-------</b><br>Divider</button>
</li>

<li class="Divider"></li>
       <li class="mt">
    <div class="btn-group">
 <button type="button" class="btn btn-default " id="textimg" title="Text&Image"><i class="fa fa-text-width fa-2x"></i>&nbsp; & &nbsp;<i class="fa fa-picture-o fa-2x"></i><br>Text &nbsp;&nbsp;&nbsp;Image</button>
 </div>
</li>
<li class="Divider"></li>
 <li class="mt">
    <div class="btn-group">
 <button type="button" class="btn btn-default " id="imgtext" title="Image&Text"><i class="fa fa-picture-o fa-2x"></i>&nbsp; & &nbsp;<i class="fa fa-text-width fa-2x"></i><br>Image &nbsp;&nbsp;&nbsp;Text</button>
</div>
</li>
<li class="Divider"></li>
<li class="mt">
 <button type="button" class="btn btn-default " id="imgonly" style="width:110px;" title="Image"><i class="fa fa-picture-o fa-2x"></i><br>Image</button>
</li>
<li class="Divider"></li>
<li class="mt">
<button type="button" class="btn btn-default " id="textonly" style="width:110px;" title="Text"><i class="fa fa-text-width fa-2x"></i><br>Text</button>
</li>
<li class="Divider"></li>
<li class="mt">
<button type="button" class="btn btn-default " id="imggrid" style="width:110px;" title="Text"><i class="fa fa-picture-o fa-2x"></i><br>Image Grid</button>
</li>

              </ul>
              <!-- sidebar menu end-->
        </div>
        <!-- /#sidebar-wrapper -->



        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <!--div class="row"-->
                    <div class="col-lg-8">
                      

  <div class="panel panel-default">
    <div class="panel-body">
        <div class="container-fluid">
           <div class="row">
            <div class="col-md-1"><a href="#menu-toggle" class="btn btn-default" id="menu-toggle" style="height:35px;" title="Toggle Sidebar"><i class="fa fa-arrows-h" style="margin-top:5px;"></i></a></div>
            <div class="col-md-2"><!--<button type="button" title="Set Background Color" class="btn btn-default">--><input id="full" / ><!--</button>--></div>
            <div class="col-md-8"><input type="text" name="pro_title" id="pro_title" class="form-control col-xs-4" placeholder="Enter Promotion Name" style="text-align:center;"></div>
            <div class="col-md-1"><button type="submit" id="prv" class="btn btn-default" style="height:35px;" title="Save Promotion"><i class="fa fa-floppy-o"></i></button></div>
           </div>
        </div>
  </div>
</div>

<div class="mt">				   
<div id="editor" style="height:auto; border:1px solid #CCCCCC; border-radius:5px 5px 5px 5px; background-color:#ffffff;">	  
<div id="save_div" class="pro_body">
<div id="sortable">
	<div id="txtimg" class="textimgdiv" style="cursor: auto;margin-bottom: 40px;">
		<div class="dragdiv"><span class="drag"><i class="fa fa-arrows"></i>&nbsp;Drag </span></div>
		<span class="close" ><i class="fa fa-trash-o"></i>&nbsp; Delete</span>
		<div class="row" style="  width: 100%;margin: 5px;"><div class="edi" style="width: 56%;cursor: pointer;">
			<div class="col-lg-12 nopadding" style="margin-left:22px; margin-top:16px;text-align:center;"><div class="editor edilen" id="editabl" onDblclick="editorInit(this.id);" title="Please double click to Edit">Your text goes here</div></div>
			</div><div class="drop"><span class="tool" style="display:none;"><a href="#"> <i class="fa fa-trash-o" id="trash"></i></a> </span><img class="file-preview-image ui-draggable" src="images/img.png"></div>
		</div>
	</div>
</div><!--end sortable-->
</div> <!--end pro_body-->
</div> <!--end editor-->
		
  </div><!--mt div-->  
</div><!-- col-md-8 -->
                         <div class="col-md-4">
                           <div class="panel panel-default" style="height:550px;">
                             <div class="panel-body">
                                      <ul class="nav  nav-pills" style="background-color:#f2f2f2;">
    <li class="active"><a data-toggle="tab" href="#home" style="width:100px;"><center><i class="fa fa-picture-o"></i><br>Images</center></a></li>
   <li><a data-toggle="tab" href="#menu1" style="width:110px;" ><center><i class="fa fa-credit-card"></i><br>Banners</center></a></li>
	 <li><a data-toggle="tab" href="#menu2" style="width:110px;" ><center><i class="fa fa-file-text-o"></i><br>Templates</center></a></li>
  
   
  </ul>
   <div class="tab-content">
    <div id="home" class="tab-pane fade in active" style="background-color:white;"><br>
     

   <div class="panel panel-default" style="height:350px; overflow-y:scroll;">
       <div class="panel-body">	
<div id="frm">
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
echo "
<form>
<img class='file-preview-image' src='".$image."' style='margin-top:-1%;'>
<input type='text' id='ban".$i."' value='".$banner."' style='display:none;'>
<input type='text' id='img".$i."' value='".$imgNames."' style='display:none;'>
<input type='text' id='ext".$i."' value='".$img_types."' style='display:none;'>

     <a><button type='button' onclick='DelImg(ban".$i.".value,img".$i.".value,ext".$i.".value)' class='btn btn-default' title='Delete Image'><i class='fa fa-trash' style='color:red;'></i></button></a>

</form><hr style='margin-top:-3%;'>
";
}
else
{
    continue;
}
}
?>	   
</center>
</div></div></div>
<hr>
<div class="panel panel-default" style="height:60px;">
       <div class="panel-body">
    
<div id="queue"></div>
<center>
<input id="file_upload" name="file_upload" multiple="true" type="file" accept="image/jpeg,image/jpg,image/png,image/gif">
	<br>
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
	</center>

       </div><!--end panel-body-->
     </div><!--end panel-default-->
</div>
	

 

<div id="menu1" class="tab-pane fade">
 <br>

<div class="panel panel-default" style="height:350px; overflow-y:scroll;">
   <div class="panel-body">
<div id="frm2">
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
    'zjpeg',
    'png'
);

$ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
if (in_array($ext, $supported_file)) {
    echo "
<form>

<img class='file-preview-image ' src='".$image."'>
<input type='text' id='ban".$i."' value='".$banner."' style='display:none;'>
<input type='text' id='img".$i."' value='".$imgName."' style='display:none;'>
<input type='text' id='ext".$i."' value='".$img_type."' style='display:none;'>
<a><button type='button' onclick='DelImg(ban".$i.".value,img".$i.".value,ext".$i.".value)' class='btn btn-default' title='Delete Image'><i class='fa fa-trash' style='color:red;'></i></button></a>

</form><hr>
";
} else {
    continue;
 }
}
?>	   
</center>
</div></div></div>
<hr>
<div class="panel panel-default" style="height:60px;">
   <div class="panel-body">
      <form>
<div id="queue"></div><center>
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
	</script></center>
   </div>
</div>

 </div>
    <div id="menu2" class="tab-pane fade">
	<br>
<div class="panel panel-default" style="height:452px; overflow-y:scroll;">
  <div class="panel-body">
	
	<div class="col-md-12">

<img src="images/compose.png" class="img-thumbnail" width="90px" height="90px">
<div class="btn-group">
  <a id="1" onclick="template(this.id);"><button class="btn btn-primary">Apply</button></a>
  <a  href="#"><button class="btn btn-default" data-toggle="modal" data-target="#myModal1">View</button></a>
</div><hr>
<img src="images/compose.png" class="img-thumbnail" width="90px" height="90px">
<div class="btn-group">
  <a id="2" onclick="template(this.id);"><button class="btn btn-primary">Apply</button></a>
  <a  href="#"><button class="btn btn-default" data-toggle="modal" data-target="#myModal2">View</button></a>
</div><hr>
</div>
<div class="col-md-12">

<img src="images/compose.png" class="img-thumbnail" width="90px" height="90px">
<div class="btn-group">
	<a id="3" onclick="template(this.id);"><button class="btn btn-primary">Apply</button></a>
	<a href="#"><button class="btn btn-default" data-toggle="modal" data-target="#myModal3">View</button></a>
</div><hr>
	<img src="images/compose.png" class="img-thumbnail" width="90px" height="90px">
<div class="btn-group">
        <a id="4" onclick="template(this.id);"><button class="btn btn-primary">Apply</button></a>
         <a href="#"><button class="btn btn-default" data-toggle="modal" data-target="#myModal4">View</button></a>
</div>
</div>
    
  </div>
</div>
</div>

	</div>	
                         </div><!--end panel-body-->
                         </div><!--end panel-default-->
                        </div><!--end col-md-4-->
                        <!--/div><!-- end row -->
                    </div><!-- end col-md-12 -->
                        

                        
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

<!--end sidebar-->

<!--script>
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
</script-->
<script type="text/javascript">


$(document).ready(function(){
 
	         /*$("#txtEditor1").jqte();   
	         $('#txtEditor2').jqte();
	         $('#txtEditor3').jqte();
                 $('#txtEditor4').jqte();
                 $('#txtEditor5').jqte();
                  $(".jqte_editor").focus();*/
       //$('.jqte_toolbar').css('display','none');                          

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
                //$('.jqte_toolbar').css('display','block');
	});
	
 $('#cancel').click(function(){
         $( "#sortable" ).empty();
         //$(".imgtextdiv").show();
 });       
        	
                
        	$("#textimg").click(function(){
var $lenOfEditors = $(".editor").length;
$(".editor:last").attr("id","txtEditor"+$lenOfEditors++);

        		helper: 'clone',
				$("#sortable").append('<div class="textimgdiv" style="cursor: auto;margin-bottom: 40px;"><div class="dragdiv"><span class="drag"><i class="fa fa-arrows"></i>&nbsp;Drag </span></div><span ><button type="button" class="saveme" name="save1" onclick="myFunction(this.id)" style="float:right;" ><a href="#" >SAVE</a></button></span><span class="close" ><i class="fa fa-trash-o"></i>&nbsp; Delete</span><div class="row" style="  width: 100%;margin: 5px;"><div class="edi" style="width: 56%;cursor: pointer; "><div class="col-lg-12 " style="margin-top:21px;margin-left:20px;text-align:center;"><div contenteditable="false" onDblclick="editorInit(this.id)" class="editor edilen" title="Please double click to Edit">Your text goes here</div></div></div><div class="drop"><span class="tool" style="display:none;"><a href="#"><i class="fa fa-trash-o" id="trash"></i></a> </span><img class="file-preview-image ui-draggable" src="images/img.png"></div></div></div>');
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
                                  
                                  
				$("#sortable").append('<div class="imgtextdiv" style="cursor:auto;margin: 30px 0px 40px 0px;"><div class="dragdiv"><span class="drag"><i class="fa fa-arrows"></i>&nbsp;Drag </span></div><span ><button type="button" class="saveme" name="save1" onclick="return myFunction(this.id)" style="float:right"><a href="#" >SAVE</a></button></span><span class="close" ><i class="fa fa-trash-o"></i>&nbsp; Delete</span><div class="row" style="width: 100%;margin: 5px; margin-left:40px;"><div class="drop" style="margin-top: 13px;float:left;margin-left: 0px;"><span class="tool1" style="display:none;"><a href="#"> <i class="fa fa-trash-o" id="trash1"></i></a> </span><img class="file-preview-image ui-draggable" src="images/img.png"></div><div class="edi1" style="width: 56%;margin: 24px 0px 0px 58px;cursor: pointer" ><div class="col-md-12 nopadding"  style="margin-left:-60px;margin-top:-5px;text-align:center"><div contenteditable="false" onDblclick="editorInit(this.id)" class="editor edilen" title="Please double click to Edit">Your text goes here</div></div></div></div></div>');
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
				
				$("#sortable").append('<div class="textdiv" style="cursor:auto;margin: 20px 0px 20px 0px; margin-bottom: 45px;"><div class="dragdiv"><span class="drag"><i class="fa fa-arrows"></i>&nbsp;Drag </span></div><span ><button type="button" class="saveme" name="save1" style="float:right" onclick="return myFunction(this.id)"><a href="#" >SAVE</a></button></span><span class="close" ><i class="fa fa-trash-o"></i>&nbsp; Delete</span><div class="row" style=" width: 100%;margin: 5px;"><div class="edi3" style="margin-left: 150px;width: 98%;cursor: pointer"><div class="col-md-12" id="col-md-12edi" style="margin-left:-146px;text-align:center;"><div contenteditable="false" onDblclick="editorInit(this.id)" class="editor" title="Please double click to Edit" >Your text goes here</div></div></div></div></div>').show('slow');
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
				$('#sortable').append('<div class="imgdiv" style="cursor: auto;margin: 20px 0px 20px 0px;padding-bottom: 29px;"><div class="dragdiv"><span class="drag"><i class="fa fa-arrows"></i>&nbsp;Drag </span></div><span ><button type="button" class="saveme" name="save1" onclick="return myFunction(this.id)" style="float:right" ><a href="#" >SAVE</a></button></span><span class="close" ><i class="fa fa-trash-o"></i>&nbsp; Delete</span><div class="row" style="  width: 100%;margin: 5px;"><div class="drop" style="margin-left: 100px;width: 72%;height: 240px;"><span class="tool2" style="display:none;"><a href="#"> <i class="fa fa-trash-o" id="trash2"></i></a> </span><img class="file-preview-image ui-draggable" src="images/img.png"></div></div></div>');
                                 
                                 $('.tool2').click(function(){
                                        $(this).parent().find('img').detach();        
			         });
				 
                                var $drp = $(".drop").length;
				$(".drop:last").attr("id","drop_"+$drp++); 
                                
                                   var $img = $(".file-preview-image").length;
                                        $(".file-preview-image:last").attr("id","img"+$img++);
                        });


                                 //image grid
$("#imggrid").click(function(){
				$('#sortable').append('<div class="imgdiv" style="cursor: auto;margin: 20px 0px 20px 0px;padding-bottom: 29px;"><div class="dragdiv"><span class="drag"><i class="fa fa-arrows"></i>&nbsp;Drag </span></div><span ><button type="button" class="saveme" name="save1" onclick="return myFunction(this.id)" style="float:right" ><a href="#" >SAVE</a></button></span><span class="close" ><i class="fa fa-trash-o"></i>&nbsp; Delete</span><div class="row" style="  width: 100%;margin: 5px;"><div class="drop" style="margin-left: 20px;width: 30%;height: 200px;"><span class="tool2" style="display:none;"><a href="#"> <i class="fa fa-trash-o" id="trash2"></i></a> </span><div class="col-md-12"><img class="file-preview-image ui-draggable" src="images/img.png" ></div></div><div class="drop" style="margin-left: 20px;width: 30%;height: 200px;"><span class="tool2" style="display:none;"><a href="#"> <i class="fa fa-trash-o" id="trash2"></i></a> </span><div class="col-md-12"><img class="file-preview-image ui-draggable" src="images/img.png" ></div></div><div class="drop" style="margin-left: 20px;width: 30%;height: 200px;"><span class="tool2" style="display:none;"><a href="#"> <i class="fa fa-trash-o" id="trash2"></i></a> </span><div class="col-md-12"><img class="file-preview-image ui-draggable" src="images/img.png" ></div></div></div></div>');
                                 
                                 $('.tool2').click(function(){
                                        $(this).parent().find('img').detach();        
			         });
				 
                                var $drp = $(".drop").length;
				$(".drop:last").attr("id","drop_"+$drp++); 
                                
                                   var $img = $(".file-preview-image").length;
                                        $(".file-preview-image:last").attr("id","img"+$img++);
                        });
						
						//banner image
						
		$("#banner").click(function(){
				$('#sortable').append('<div class="imgdiv" style="cursor: auto;margin: 20px 0px 20px 0px;padding-bottom: 29px;"><div class="dragdiv"><span class="drag"><i class="fa fa-arrows"></i>&nbsp;Drag </span></div><span ><button type="button" class="saveme" name="save1" onclick="return myFunction(this.id)" style="float:right" ><a href="#" >SAVE</a></button></span><span class="close" ><i class="fa fa-trash-o"></i>&nbsp; Delete</span><div class="row" style="  width: 100%;margin: 5px;"><div class="drop" style="margin-left: 33px;width: 90%;height: 160px;"><span class="tool2" style="display:none;"><a href="#"> <i class="fa fa-trash-o" id="trash2"></i></a> </span><img class="file-preview-image ui-draggable" src="images/img.png"></div></div></div>');
			
                                 
                                 $('.tool2').click(function(){
                                        $(this).parent().find('img').detach();        
			         });
                        });
						
						
						

			
        	$("#divider1").click(function(){
				$('#sortable').append('<div class="divider" ><div class="dragdiv"><span class="drag"><i class="fa fa-arrows"></i>&nbsp;Drag </span></div><span ><button type="button" class="saveme" name="save1" style="float:right" onclick="return myFunction(this.id)"><a href="#" >SAVE</a></button></span><span class="close" ><i class="fa fa-trash-o"></i>&nbsp; Delete</span><hr width="97%" style="border: 2px; height: 1px; color: #333; background-color: #333; "></div>');	
			
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
                                $('.editor').css('border', 'none');
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




<script src="js/jquery.uploadify.min.js" type="text/javascript"></script>
<script src="js/jquery.uploadify.js" type="text/javascript"></script>
<script type="text/javascript" src="js/spectrum.js"></script>
<script type='text/javascript' src='js/docs.js'></script>
<script type="text/javascript" src="js/prettify.js"></script>

<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>