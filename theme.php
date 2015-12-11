<html>
<head>



</head>
<body>
<div id=wrap>
<select size="9" multiple >
  <option id="def" style="background:#fff;color:black" >Default</option> 
  <option id="red" value="red" style="background:red" >Cherry Blossom </option>
  <option id="green" value="green" style="background:green"  >EverGreen</option>
  <option id="black" value="black" style="background:black;color:white" >Black Forest</option>
  <option id="yellow" value="yellow" style="background:yellow" >Yellow kitty</option>
  <option id="blue" value="#00CCFF" style="background:#00CCFF"  >Blue heaven</option>  
  <option id="sky" value="#00FFFF" style="background:#00FFFF" >Sky way</option>  
<!--
   
  <option value="#009900" style="background:#009900" onclick=get(this.value) ></option> 
--> 
  <option id="org" value="#FF9900" style="background:#FF9900"  >Orange Delite</option>  
  <option id="pink" value="#EA0DF9" style="background:#EA0DF9"  >Pink City</option>  
  <option id="purple" value="#3366FF" style="background:rebeccapurple"  >Purple king</option>  

</select>
</div>
<script>
$(document).ready(function(){

                $('#def').click(function(){
			$('#tabdown2').css('background-color','rgb(176, 186, 203)');
			$('#cover_pading').css('background-color','rgb(111, 114, 119)');
			$('.pro_footer').css('background-color','rgba(41, 41, 41, 0.85)');
			$('.pro_footer').css('color','black');
			$('.promo_title').css('background-color','rgb(102, 86, 73)');
			$('#sortable').css('background-color','white');
			
		});
                $('#red').click(function(){
			$('#tabdown2').css('background-color','rgba(168, 40, 45, 1)');
			$('#cover_pading').css('background-color','red');
			$('.pro_footer').css('background-color','rgb(239, 124, 128)');
			$('.pro_footer').css('color','black');
			$('.promo_title').css('background-color','rgb(168, 40, 45)');
			$('#sortable').css('background-color','rgba(239, 124, 128, 0.39)');
			
		});
		
		$('#green').click(function(){
			$('#tabdown2').css('background-color','rgb(15, 142, 41)');
			$('#cover_pading').css('background-color','green');
			$('.pro_footer').css('background-color','rgb(107, 126, 107)');
			$('.pro_footer').css('color','black');
			$('.promo_title').css('background-color','rgb(107, 126, 107)');
			$('#sortable').css('background-color','rgba(138, 181, 138, 1)');
		});
		
		$('#black').click(function(){
			$('#tabdown2').css('background-color','rgb(84, 72, 72)');
			$('#cover_pading').css('background-color','black');
			$('.pro_footer').css('background-color','rgb(158, 157, 157)');
			$('.pro_footer').css('color','black');
			$('.promo_title').css('background-color','rgb(157, 147, 147)');
			$('#sortable').css('background-color','rgba(174, 161, 161, 1)');
		});
		
		$('#yellow').click(function(){
			$('#tabdown2').css('background-color','rgb(98, 98, 10)');
			$('#cover_pading').css('background-color','yellow');
			$('.pro_footer').css('background-color','rgb(145, 148, 96)');
			$('.pro_footer').css('color','black');
			$('.promo_title').css('background-color','rgb(145, 148, 96)');
			$('#sortable').css('background-color','rgba(197, 202, 126, 1)');
		});
		$('#blue').click(function(){
			$('#tabdown2').css('background-color','rgb(9, 75, 81)');
			$('#cover_pading').css('background-color','#00CCFF');
			$('.pro_footer').css('background-color','rgba(0, 204, 255, 0.37)');
			$('.pro_footer').css('color','black');
			$('.promo_title').css('background-color','rgba(158, 202, 213, 1)');
			$('#sortable').css('background-color','rgba(10, 143, 176, 0.61)');
		});
		$('#sky').click(function(){
			$('#tabdown2').css('background-color','rgb(59, 171, 181)');
			$('#cover_pading').css('background-color','#00FFFF');
			$('.pro_footer').css('background-color','rgba(0, 255, 255, 0.36)');
			$('.pro_footer').css('color','black');
			$('.promo_title').css('background-color','rgb(59, 171, 181)');
			$('#sortable').css('background-color','rgba(60, 171, 171, 1)');
		});
		$('#org').click(function(){
			$('#tabdown2').css('background-color','rgb(137, 103, 53)');
			$('#cover_pading').css('background-color','#FF9900');
			$('.pro_footer').css('background-color','rgba(205, 169, 115, 1)');
			$('.pro_footer').css('color','black');
			$('.promo_title').css('background-color','rgba(205, 180, 143, 1)');
			$('#sortable').css('background-color','rgba(255, 153, 0, 0.56)');
		});
		$('#pink').click(function(){
			$('#tabdown2').css('background-color','rgb(118, 53, 123)');
			$('#cover_pading').css('background-color','#EA0DF9');
			$('.pro_footer').css('background-color','rgba(175, 121, 179, 1)');
			$('.pro_footer').css('color','black');
			$('.promo_title').css('background-color','rgba(175, 121, 179, 1)');
			$('#sortable').css('background-color','rgba(151, 116, 153, 1)');
		});
		$('#purple').click(function(){
			$('#tabdown2').css('background-color','rgb(77, 60, 94)');
			$('#cover_pading').css('background-color','rebeccapurple');
			$('.pro_footer').css('background-color','rgba(132, 110, 155, 1)');
			$('.pro_footer').css('color','black');
			$('.promo_title').css('background-color','rgba(132, 110, 155, 1)');
			$('#sortable').css('background-color','rgb(181, 162, 199)');
		});
});
</script>
</body>
</html>
