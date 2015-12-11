<?php
//session_start();
include 'session1.php';
include 'connect.php';
  
 
     if(isset($login_session)) 
{      
   $parentemail=$user_check;
}
elseif(isset($paid_session)) 
{      
   $parentemail=$user_check1;
}
else
{
header('location:index.php');
}
?>

<HTML>
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
        
        <title>Promotions</title>
        <meta name="description" content="">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width">

<link href="css/dashboard_compose.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
	<link href="edi/fileinput.min.css" rel="stylesheet">
        <link href="edi/jquery-te-1.4.0.css" rel="stylesheet">
        <script src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script src="edi/jquery-te-1.4.0.min.js"></script>
        <script src="js/jquery.livequery.min.js"></script>
	<script src="edi/fileinput.min.js"></script>
	<script src="http://code.jquery.com/ui/1.9.1/jquery-ui.js"></script>
        <script src="js/html2canvas.js"></script>
	<link href="css/jquery-ui.min.css" rel="stylesheet">
	<link href="css/jquery-ui.css" rel="stylesheet">
   	<link href="css/style.css" rel="stylesheet"> 
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,400italic,300italic,300,500,500italic,700,900">
       <link rel="stylesheet" href="css/bootstrap.css">
       
        <link rel="stylesheet" href="css/animate.css">
         <link rel="stylesheet" href="css/crazymimi-misc.css">
        <link rel="stylesheet" href="css/crazymimi-style.css">

	<!-- paritosh editor start -->
	<meta charset="utf-8">
	<script src="ckedit2/ckeditor.js"></script>
	<script src="js/sample.js"></script>
	<link rel="stylesheet" href="css/samples.css">
	<link rel="stylesheet" href="toolbarconfigurator/lib/codemirror/neo.css">
<!-- paritosh editor ends-->



<!--<script>
	function addSpace()
	{
	var space="",i;
		for(i=1; i<=500; i++)
		{
			space += "&nbsp;";
		}
		CKEDITOR.instances.editor.setData(space);
	}
	</script>-->


<link rel="shortcut icon" type="image/x-icon" href="Pmail.ico" />
    <link rel="icon" type="image/x-icon" href="Pmail.ico" />
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
             e.preventDefault();
                html2canvas($('.pro_body'), {
                    onrendered: function(canvas){
                        var imgString = canvas.toDataURL();
                        
                        var pro_title = document.getElementById("pro_title").value;
                      // window.open(imgString);
                        $.ajax({
                            url: '',
                            type: 'POST',
                            data: {   
                                'file' : imgString,
                                'pro_title' : pro_title
                            },
                            success: function(response){
                            
                                window.location.href = 'campaign_dash.php';
                                return false;   
                            },
                            error: function(response){}
                        });
                    }
                });
          }  
            });
        });
</script>
</head>
    <body  >

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3&appId=1625276917695542";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- /#pageloader -->

        <header class="site-header container-fluid">
            <div class="top-header">
                <div class="logo col-md-6 col-sm-6">
   <h1><img src="./images/pyxymail3.jpg"></h1>
           </div> <!-- /.logo -->
<div class="main-header2">
               <div  class="menu-wrapper">                             
                             <a href="#" class="toggle-menu visible-sm visible-xs"></a>
                          <ul class="sf-menu hidden-xs hidden-sm">
                       <li><a><i class="fa fa-user"></i>&nbsp;&nbsp;<?php include 'session1.php';  echo $paid_user;  echo $login_session;?></a>
                       <ul>
                            <li><a href="logout.php">&nbsp;&nbsp;Logout</a></li>
                      </ul>
                       </li></ul>
               </div>
               </div>
            </div> <!-- /.top-header -->
            <div class="main-header">
                <div class="row">
                    <div class="main-header-left col-md-3 col-sm-6 col-xs-8">
                        <a href="index2.php"><img src="./images/home.png" height=42 width=40></img>
                    </div> <!-- /.main-header-left -->
                    <div class="menu-wrapper col-md-9 col-sm-6 col-xs-4">
                        <a href="#" class="toggle-menu visible-sm visible-xs"><i class="fa fa-bars"></i></a>
                        <ul class="sf-menu hidden-xs hidden-sm">
								 <li ><a href="audience1.php">Audience</a></li>
                            <li class="active"><a href="dashboard_compose.php">Promotion</a></li>
                            <li ><a href="campaign_dash.php">Campaign</a></li>
                            <li  ><a href="account.php">My Account</a></li>
<?php
include 'session1.php';
if(isset($paid_session))
{
         echo "                  <li><a href='pricing_signups.php'>Upgrade</a>   </li>";
}
?>
<?php
include 'session1.php';
if(isset($login_session))
{
         echo "                  <li><a href='pricing_signups3.php'>Pricing Plans</a>   </li>";
}
?>
                            <li><a href="help2.php">Help</a >      </li>
                                                  
</ul>
                    </div> <!-- /.menu-wrapper -->
                </div> <!-- /.row -->
            </div> <!-- /.main-header -->
            <div id="responsive-menu">
                <ul>
								<li ><a href="audience1.php">Audience</a></li>
                             <li class="active"><a href="dashboard_compose.php">Promotion</a></li>
                              <li ><a href="campaign_dash.php">campaign</a></li>
                            <li  ><a href="account.php">My Account</a></li>
                           <?php
//include 'session1.php';
if(isset($paid_session))
{
         echo "                  <li><a href='pricing_signups.php'>Upgrade</a>   </li>";
}
?>
<?php
//include 'session1.php';
if(isset($login_session))
{
         echo "                  <li><a href='pricing_signups3.php'>Pricing Plans</a>   </li>";
}
?>
                            <li><a href="help2.php">Help</a >      </li>
                            <li><a><i class="fa fa-user"></i>&nbsp;&nbsp;<?php include 'session1.php';  echo $paid_user; echo $login_session;?></a>
                                    <ul>
                       
                              
                                          <li><a href="logout.php">&nbsp;&nbsp;Logout</a></li>
                            
                                    </ul>
                           </li>
                </ul>
            </div>
            
        </header> <!-- /.site-header -->

      <!--  <div class="content-wrapper" style="background-color:#efefef;" >-->

     <!-- <div class="inner-container container" >-->
 
     
             
  
 <div class="col-md-9" style="margin-top:-50px;">
			
						<div class="allpart">
                                                 <form method="POST" action="" > 
							<div class="promo_title" id="promo_title">
								<input type="text" name="pro_title" size="50" id="pro_title" class="p_title" style="height:37px;border-radius:4px;width: 96%;" value ="promotion<? echo $promotion_no ?>" placeholder="Promotion Title here...."  >
                                                                <label id="error" class="err" style="color:red;margin-left: -3px;position: relative;top: 5px;"><i class="fa fa-exclamation-circle"></i>Please enter Promotion name</label>
							</div>
						<!-- pro body starts -->
                                                <div class="pro_body">	

<div id="sortable">
 </div>
<script>
function sendPromotion() {
var edit = encodeURIComponent(CKEDITOR.instances.editor.getData());
//alert(edit);
var title=document.getElementById('pro_title').value;
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
  document.getElementById('display').innerHTML = xhttp.responseText;
    }
  }
  xhttp.open("POST", "save_promotion.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("Editor="+edit+"&title="+title);
} 
</script>
<div class="col-md-12" style="margin-top:-50px; ">


			
<div id="editor">

</div>
			
<script>
	initSample();
</script>


</div>									  

                                               
							<!--<div class="pro_footer" id="pro_footer">
								      
								&copy; &nbsp;
								<B>2015 <span>PyxyMail </span></B> 
							</div>-->
                                              </div> <!--pro body ends here -->
 <div class="theme" style="margin-top:5%;margin-left:60px;">

                       <div class="btn-group" id="panel" role="group" aria-label="...">
		
			
                        <!--button onclick="white()"  type="button" style="background-color:white"><span class="glyphicon glyphicon-tint"></span></button>
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
			<button onclick="dark_yellow()"  type="button"style="background-color:#ffff00"><span class="glyphicon glyphicon-tint"></span></button -->
		
				</div>
                        </div>
   </div> 


                                                     
							<div class="actionfooter">
								<div style="background: #e9e9e9;padding: 16px;border-radius: 4px;"> 
									
                                                                      <!--  <input name="saveme" type="submit" id = "sv" class="btn btn-success" value="Save" > Save -->
									<button onclick="sendPromotion()" name="preview" id="prv"  class="btn btn-success" value="Send Later"><span>Save and Preview </span> </button>
                                                                        <span class="btn btn-success" id="cancel">Cancel</span>
								</div>
							</div>
                                                     
                                                    </form>
						</div><!-- /.allpart -->



<!-- div id="display" width=auto>text</div -->
<div class="col-md-3 " style="margin-top:-50px;">
<div id="tabs" style="margin-top:45px; margin-left:-40px; ">
                                                <ul>
						<li style="margin-left:80px;" ><a href="#tabs-1" id="ch" style="margin-left:20px;" >Image</a></li>                                                
                                                </ul>
					<div id="tabs-1"><?php include "ImgUpload.php";?></div>
		</div>    
</div>
</div>

</div>
</div>

<div class="col-md-12" style="margin-top:85px;" >
        <hr style="margin-top:-75px;" >
          <div class="social-icons">
               
                     <div class="fb-like" data-href="https://www.facebook.com/pages/PyxyMail/952542731452333" data-layout="button_count" data-action="like"          data-show-faces="true" data-share="true">
                     </div>
                  				
         </div>
         <p style="float:left; ">&copy; Copyright PyxyMail - 2015.</p>
       </div>	


<script type="text/javascript">


$(document).ready(function(){
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
         $(".imgtextdiv").show();
 });       
        	
                
        	/*$("#textimg").click(function(){
        		helper: 'clone',
                      
				//$('.textimgdiv').appendTo('#sortable').show('slow');
				$("#sortable").append('<div class="textimgdiv" style="cursor: auto;margin-bottom: 40px;"><div class="dragdiv"><span class="drag"><i class="fa fa-arrows"></i>&nbsp;Drag </span></div><span ><button type="button" class="saveme" name="save1"onclick="myFunction()"style="float:right;" ><a href="#" >SAVE</a></button></span><span class="close" ><i class="fa fa-trash-o"></i>&nbsp; Delete</span><div class="row" style="  width: 100%;margin: 5px;"><div class="edi" style="width: 56%;cursor: pointer;"><div class="col-lg-12 nopadding"><textarea class="editor"></textarea></div></div><div class="drop"><span class="tool" style="display:none;"><a href="#"> <i class="fa fa-trash-o" id="trash"></i></a> </span></div></div></div>');
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
                                  
                                  
				$("#sortable").append('<div class="imgtextdiv" style="cursor:auto;margin: 20px 0px 40px 0px;"><div class="dragdiv"><span class="drag"><i class="fa fa-arrows"></i>&nbsp;Drag </span></div><span ><button type="button" class="saveme" name="save1" onclick="return myFunction(this.id)" style="float:right"><a href="#" >SAVE</a></button></span><span class="close" ><i class="fa fa-trash-o"></i>&nbsp; Delete</span><div class="row" style="width: 100%;margin: 5px;"><div class="drop" style="margin-top: 43px;float:left;margin-left: 0px;"><span class="tool1" style="display:none;"><a href="#"> <i class="fa fa-trash-o" id="trash1"></i></a> </span></div><div class="edi1" style="width: 48%;margin: 24px 0px 0px 58px;cursor: pointer"><div class="col-lg-12 nopadding"><textarea id="txtEditor2" class="editor"></textarea></div></div></div></div>');
				
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
				$("#sortable").append('<div class="textdiv" style="cursor:auto;margin: 20px 0px 20px 0px; margin-bottom: 45px;"><div class="dragdiv"><span class="drag"><i class="fa fa-arrows"></i>&nbsp;Drag </span></div><span ><button type="button" class="saveme" name="save1" style="float:right" onclick="return myFunction(this.id)"><a href="#" >SAVE</a></button></span><span class="close" ><i class="fa fa-trash-o"></i>&nbsp; Delete</span><div class="row" style=" width: 100%;margin: 5px;"><div class="drop" style="display:none"><span class="tool2" style="display:none;"><a href="#"> <i class="fa fa-trash-o" id="trash2"></i></a> </span></div><div class="edi3" style="margin-left: 150px;width: 98%;cursor: pointer"><div class="col-lg-12 nopadding" id="col-lg-12edi"><textarea id="txtEditor3" class="editor"></textarea></div></div></div></div>').show('slow');
				
                                
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
                }); */
			
			
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
                               /* $('.dragdiv').hide();
                                $('.close').hide();
				$('.drop').css('border', 'none');
				$('.drop1').css('border', 'none');
				$('.drop2').css('border', 'none');
                                $('.saveme').hide();
                                $('#trash').hide();
                                $('#trash1').hide();
                                $('#trash2').hide();
                                $('.classyedit').css('border', 'none');*/
                              
                               // $('.cke_1_bottom').hide();
                               // $('.cke_1_top').hide();
                               $('.cke_toolbox').hide();
                                 
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


/*$('.editor').focus();
	$('.close').livequery(function(){
			$(this).click(function(){
				$(this).parent().detach();
				//console.log("adasd");

				})
	});*/
        
	/*$('.file-preview-image').livequery(function(){
			$(this).draggable({
				appendChild: 'body',
                helper: 'clone',
				drag: function( event, ui ){
					ui.helper.addClass("draggable");
      
                                       
				}
					
                        });
          });*/
		
                
          $('.drop ').livequery(function(){
			$(this).droppable({
	                       accept: '.file-preview-image',
				drop: function (event, ui) { 
                                        $(this).find('img').remove();
					$(this).append($(ui.draggable).clone());
                                        $('.tool').show();
                                        $('.tool1').show();
                                        $('.tool2').show();
                                        $('.file-preview-image').width(700); // Units are assumed to be pixels
                                        $('.file-preview-image').height(700);
      
                        
                                        //alert($(this).find('img').attr('src'));
				}										

                       });
        });

	/*$('.file-preview-image').livequery(function(){
			$(this).draggable({
                        
				appendChild: 'body',
 
                                helper: 'clone',
				drag: function( event, ui ){
					ui.helper.addClass("draggable");
                                      
                                        
				}                                        
					
			});
        });*/

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
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>




    </body>
</html>