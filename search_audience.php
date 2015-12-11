<?php
include 'connect.php';
include 'session1.php';



if(isset($paid_session))
{
$a=$user_check1;
}
else
{
$a=$user_check;
}
$search=$_POST['search'];
$query = "select * from audience where Name LIKE '".$search."%' AND User='$a'";
$sql=mysqli_query($conn,$query);
     $c=mysqli_num_rows($sql);
 
if ($c >= 1)
{
//echo $c."my count";
		 
                     /*while($searchaud=mysqli_fetch_array($sql))
                                        {
                                             
                     echo "<tr >";
       echo "<td><input type='checkbox'   name='chkbox[]'  value='".$searchaud['id']."'></td>";
echo"<td></td>";echo"<td></td>";
              echo "<td> <font size='2'><input type='text' size='9'name='".$namech."'  value='".$searchaud['Name']."'></font></td>";
                                                                                        
                            echo "<input type='hidden' name='".$idname."' value='".$searchaud['id']."'>";
                                                                                         
                                                                                         
        
                     
              echo "<td><font size='2'><input type='text' size='9'name='".$emailch."'  value='".$searchaud['Email']."'></font></td>";
                      echo "</tr>";
                      
                                                                                       

                    }*/
		 
                                
   /*echo "<form id='allcon' method='POST'>"; */                      
              
    /* echo "<div class='table-responsive' >";
                          echo "<table class='table'>";

                                  //echo "<thead style='border-bottom:0;'>";

                                  echo " <th><input type='checkbox' id='selecctall'> Select All</th>";

                                  echo "<th >Name</th>";
echo"<th></th>";
echo"<th></th>";

                                  echo "<th >Email</th>";
                                                                                                                                     
                                    //echo "</thead>";
                      echo "</table>";                                                                                                 
  echo "</div>"; */
                    $countervar=0;                                                                                                                   
                
echo "<div class='table-responsive' style='height:auto; overflow-y:scroll;'>";
echo "<table class='table' id='myTable'>";
                     while($audadd=mysqli_fetch_array($sql))
                                        {
                                             $namech='somename'.$countervar;
                                             $idname='idmane'.$countervar;
                                             $emailch='emailch'.$countervar;
                                             $chkbox='chkboxx'.$countervar;

                     echo "<tr >";
       echo "<td><input type='checkbox'  class='checkbox1' name='chkbox[]'  value='".$audadd['id']."'></td>";
echo"<td></td>";echo"<td></td>";
              echo "<td> <font size='2'><input type='text' size='9'class='form-control'name='".$namech."'  value='".$audadd['Name']."'></font></td>";
                                                                                        
                            echo "<input type='hidden' name='".$idname."' value='".$audadd['id']."'>";
                                                                                         
                                                                                         
        
                     
              echo "<td><font size='2'><input type='text' size='9'name='".$emailch."'class='form-control'  value='".$audadd['Email']."'></font></td>";
                      echo "</tr>";
                      
                                                                                        $countervar++;

                    }

                    echo "</tbody>";
                      echo "</table>";
                                 echo "</div>";
				
echo "<br>";		  
							  
						echo "<div class='form-group'>";
						echo "<div class='row'>";
						echo "<div class='col-sm-4 col-md-offset-2'>";
   							  
echo "<input  type='submit' tabindex='4' class='form-control btn btn-primary ' id='updatebtn' value='Update'/>";
						 echo "</div>";	
                                                 echo "<div class='col-sm-4 '>";		
                                                 echo "<input   type='button' tabindex='4' class='form-control btn btn-primary' name='delete' id='delete' value='Delete' onClick=\"javascript: submitForm1('deletecontact.php');\"/>";
                                                   echo "</div>";
                                                 echo "</div>";
                                                 echo "</div>";

                             
                                                                                                                              

}
else
{
echo "<center><b>No Records Found...</b></center>";
}                         

                      
             
?>
<script>
    function submitForm1(action)
    {
    var r = confirm("Are you sure want to delete ?");
if (r == true) {
   
        document.getElementById('allcon').action = action;
        document.getElementById('allcon').submit();
} 
    }
</script>
<script>

    $("#allcon").on('submit',function(event){
    event.preventDefault();
        
        data = $(this).serialize();
       
        $.ajax({
        type: "POST",
        url: "updateajax.php",
        data: data
        }).done(function( msg ) {
       
       if(msg=="")
        {
        alert("Nothing updated");
        
        }
                        else{
                        
                        if(msg=="deleted")
       {
       
       location.reload();
       
       }else{
        alert( "Message : " + msg );
        }
        }
        });
    });


</script>



