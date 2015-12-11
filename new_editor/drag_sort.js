


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

	 
		            
	
