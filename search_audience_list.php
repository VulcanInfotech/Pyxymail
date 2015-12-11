
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
$query = "select * from list where lname LIKE '".$search."%' AND Email='$a'";
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
                     while($row=mysqli_fetch_array($sql))
                                        {
                                              $listnm='somename'.$countervar;
                                                                                        $idname1='idmane'.$countervar;

                     echo "<tr>";
                                                                                          echo "<td><input type='checkbox' class='checkbox11' name='chkbox1[]'  value='".$row['id']."'></td>";
                                                                                        echo "<td><font size='2'><input type='text' size='9' name='".$listnm."'class='form-control' value='".$row['lname']."'></font></td>";
                                                                                        
                                                                                        echo "<input type='hidden' name='".$idname1."' value='".$row['id']."'>";
                                                                                         
                                                                                         
        
                     
                      echo "<td> <a href='dash2.php?listname=$row[lname]'>Edit</a></td>";
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
                                                  echo "<input   type='button' tabindex='4' class='form-control btn btn-primary' name='delete1' id='delete' value='Delete' onClick=\"javascript: submitForm('deletelist.php');\"/>";
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
		function submitForm(action)
    {
    
    var rrr = confirm("Are you sure want to delete ?");
if (rrr== true) {
        document.getElementById('alllist').action = action;
        document.getElementById('alllist').submit();
    }
    
    }
</script>
    
         <script>
    $("#alllist").on('submit',function(event){
    event.preventDefault();
        
        data = $(this).serialize();

        $.ajax({
        type: "POST",
        url: "updateajax1.php",
        data: data
        }).done(function( msg ) {
        
        if(msg=="")
        {
        alert("Nothing updated");
        
        }else{
                        
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

