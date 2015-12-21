$(document).ready(function(){
 
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
	});
	
 $('#cancel').click(function(){
         $( "#sortable" ).empty();
 });       
        	
                
        	$("#textimg").click(function(){
var $lenOfEditors = $(".editor").length;
$(".editor:last").attr("id","txtEditor"+$lenOfEditors++);

        		helper: 'clone',
				$("#sortable").append('<div class="textimgdiv" style="cursor: auto;margin-bottom: 15px;"><div class="dragdiv"><span class="drag"><i class="fa fa-arrows"></i>&nbsp;Drag </span></div><span class="close" ><i class="fa fa-trash-o"></i>&nbsp; Delete</span><div class="row" style="  width: 100%;margin: 5px;"><div class="edi" style="width: 56%;cursor: pointer; "><div class="col-lg-12 " style="margin-top:21px;margin-left:20px;text-align:center;"><div contenteditable="false" onDblclick="editorInit(this.id)" class="editor edilen" data-placeholder="Please double click to Edit">Your text goes here</div></div></div><div class="drop"><span class="tool" style="display:none;"><a href="#"><i class="fa fa-trash-o" id="trash"></i></a> </span><img class="file-preview-image ui-draggable" src="images/img.png"></div></div></div>');
				var $lenOfEditors = $(".editor").length;
				$(".editor:last").attr("id","editor"+$lenOfEditors++);
				
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
                                  
                                  
				$("#sortable").append('<div class="imgtextdiv" style="cursor:auto;margin: 21px 0px 21px 0px;"><div class="dragdiv"><span class="drag"><i class="fa fa-arrows"></i>&nbsp;Drag </span></div><span class="close" ><i class="fa fa-trash-o"></i>&nbsp; Delete</span><div class="row" style="width: 100%;margin: 5px; margin-left:40px;"><div class="drop" style="margin-top: 13px;float:left;margin-left: 0px;"><span class="tool1" style="display:none;"><a href="#"> <i class="fa fa-trash-o" id="trash1"></i></a> </span><img class="file-preview-image ui-draggable" src="images/img.png"></div><div class="edi1" style="width: 56%;margin: 24px 0px 0px 58px;cursor: pointer" ><div class="col-md-12 nopadding"  style="margin-left:-60px;margin-top:-5px;text-align:center"><div contenteditable="false" onDblclick="editorInit(this.id)" class="editor edilen" data-placeholder="Please double click to Edit">Your text goes here</div></div></div></div></div>');
				var $lenOfEditors = $(".editor").length;
				$(".editor:last").attr("id","editor"+$lenOfEditors++);
                                
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
				
				$("#sortable").append('<div class="textdiv" style="cursor:auto;margin: 20px 0px 20px 0px; margin-bottom: 15px;"><div class="dragdiv"><span class="drag"><i class="fa fa-arrows"></i>&nbsp;Drag </span></div><span class="close" ><i class="fa fa-trash-o"></i>&nbsp; Delete</span><div class="row" style=" width: 100%;margin: 5px;"><div class="edi3" style="margin-left: 150px;width: 98%;cursor: pointer"><div class="col-md-12" id="col-md-12edi" style="margin-left:-146px;text-align:center;"><div contenteditable="false" onDblclick="editorInit(this.id)" class="editor" data-placeholder="Please double click to Edit" >Your text goes here</div></div></div></div></div>').show('slow');
				var $lenOfEditors = $(".editor").length;
				$(".editor:last").attr("id","editor"+$lenOfEditors++);
                        });
						
        	$("#imgonly").click(function(){
				$('#sortable').append('<div class="imgdiv" style="cursor: auto;margin: 20px 0px 20px 0px;"><div class="dragdiv"><span class="drag"><i class="fa fa-arrows"></i>&nbsp;Drag </span></div><span class="close" ><i class="fa fa-trash-o"></i>&nbsp; Delete</span><div class="row" style="  width: 100%;margin: 5px;"><div class="drop" style="margin-left: 100px;width: 72%;height: 240px;"><span class="tool2" style="display:none;"><a href="#"> <i class="fa fa-trash-o" id="trash1"></i></a> </span><img class="file-preview-image ui-draggable" src="images/img.png"></div></div></div>');
                                 
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
				$('#sortable').append('<div class="imgdiv" style="cursor: auto;margin: 20px 0px 20px 0px;"><div class="dragdiv"><span class="drag"><i class="fa fa-arrows"></i>&nbsp;Drag </span></div><span class="close" ><i class="fa fa-trash-o"></i>&nbsp; Delete</span><div class="row" style="  width: 100%;margin: 5px;"><div class="drop" style="margin-left: 20px;width: 30%;height: 200px;"><span class="tool2" style="display:none;"><a href="#"> <i class="fa fa-trash-o" id="trash1"></i></a> </span><div class="col-md-12"><img class="file-preview-image ui-draggable" src="images/img.png" ></div></div><div class="drop" style="margin-left: 20px;width: 30%;height: 200px;"><span class="tool2" style="display:none;"><a href="#"> <i class="fa fa-trash-o" id="trash1"></i></a> </span><div class="col-md-12"><img class="file-preview-image ui-draggable" src="images/img.png" ></div></div><div class="drop" style="margin-left: 20px;width: 30%;height: 200px;"><span class="tool2" style="display:none;"><a href="#"> <i class="fa fa-trash-o" id="trash1"></i></a> </span><div class="col-md-12"><img class="file-preview-image ui-draggable" src="images/img.png" ></div></div></div></div>');
                                 
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
				$('#sortable').append('<div class="imgdiv" style="cursor: auto;margin: 20px 0px 20px 0px;padding-bottom:8px;"><div class="dragdiv"><span class="drag"><i class="fa fa-arrows"></i>&nbsp;Drag </span></div><span class="close" ><i class="fa fa-trash-o"></i>&nbsp; Delete</span><div class="row" style="  width: 100%;margin: 5px;"><div class="drop" style="margin-left: 33px;width: 90%;height: 160px;"><span class="tool2" style="display:none;"><a href="#"> <i class="fa fa-trash-o" id="trash1"></i></a> </span><img class="file-preview-image ui-draggable" src="images/img.png"></div></div></div>');
			
                                 $('.tool2').click(function(){
                                        $(this).parent().find('img').detach();        
			         });
                        });
        	$("#divider1").click(function(){
				$('#sortable').append('<div class="divider" style="margin-bottom:10px;" ><div class="dragdiv"><span class="drag"><i class="fa fa-arrows"></i>&nbsp;Drag </span></div><span class="close" ><i class="fa fa-trash-o"></i>&nbsp; Delete</span><hr width="97%" style="border: 2px; height: 1px; color: #333; background-color: #333; "></div>');	
			
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

    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });