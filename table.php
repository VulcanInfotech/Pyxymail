<?php 
include 'connect.php';
include 'session.php';
if(isset($paid_session))
{
$audience=mysqli_query($conn,"SELECT * FROM audience where User='$user_check1' ");
}
elseif(isset($login_session))
{
$audience=mysqli_query($conn,"SELECT * FROM audience where User='$user_check' ");
}
$countervar=0;  



if(mysqli_num_rows($audience)==0)
{
echo "<center><b>No Records Found...</b></center>";
}
else
{     
		 
echo "<form id='allcon' method='POST'>";  

                                      echo "<div class='form-group'>

          <input type='text' class='form-control' placeholder='Search'>";
     echo "</div>";                                                               
                            
              
      echo "<div class='table-responsive' >";

 
                          echo "<table class='table'>";

                                  //echo "<thead style='border-bottom:0;'>";

                                  echo " <th><input type='checkbox' id='selecctall'> Select All</th>";

                                  echo "<th >Name</th>";
echo"<th></th>";
echo"<th></th>";

                                  echo "<th >Email</th>";
                                                                                                                                     
                                    //echo "</thead>";
                      echo "</table>";                                                                                                   
  echo "</div>"; 
                                                                                                                                       
                
echo "<div class='table-responsive' style='height:auto; overflow-y:scroll;'>";
echo "<table class='table'>";
                     while($audadd=mysqli_fetch_array($audience))
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
echo "</form>";
                  }                  
                                                                                                                                 
                              ?>
