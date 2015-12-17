<?php
include 'connect.php';

include 'session1.php';


if(isset($_POST['chkbox']))
{

$list=implode(",",$_POST['chkbox']);




if(isset($login_session))
{
 
 
 $sql = "SELECT * FROM audience WHERE id IN ($list)";



$ssql=("select * from list where Email='$user_check'");
 
 $resulty=mysqli_query($conn,$ssql);


$result=mysqli_query($conn,$sql);

while($row=mysqli_fetch_array($result))
{


$namee[]=$row['Name'];
$withComma = implode(",", $namee);
  
}

while($rww=mysqli_fetch_array($resulty))
 {
 
 $expp = @explode(",", $withComma);
 

 

 //$newstring = str_replace("|".$eeee, "", $ToLB);
 
 
  $ToLB=$rww['Members'];
  
  
  $idd=$rww['id'];
  
   $expp1 = @explode("|", $ToLB);
 
 foreach($expp as $key) {    

    
    
   
    
      
      
       foreach($expp1 as $key1) {    
       
       if($key==$key1)
       {
          $ssql1=("select * from list where Email='$user_check' and id='$idd'");
          
          
          $resulty1=mysqli_query($conn,$ssql1);
          
          while($rww1=mysqli_fetch_array($resulty1))
 {
   $ToLB1=$rww1['Members'];
   
    $newstring = str_replace("|".$key1, "", $ToLB1);
    
    mysqli_query($conn,"update list set Members='$newstring' where id='$idd'");
}
          
          
          
        

        
       }
        
       
       
       
       }
      
    
}
 
 
 
 
 }
 
mysqli_query($conn,"DELETE FROM audience WHERE id IN ($list)");
 
echo "<script>

window.location.href='audience1.php';
</script>";
 
 
 //mysqli_query($conn,"DELETE  FROM audience WHERE id IN ($list)");
}
elseif(isset($paid_session))
{


$sql = "SELECT * FROM audience WHERE id IN ($list)";



$ssql=("select * from list where Email='$user_check'");
 
 $resulty=mysqli_query($conn,$ssql);


$result=mysqli_query($conn,$sql);

while($row=mysqli_fetch_array($result))
{


$namee[]=$row['Name'];
$withComma = implode(",", $namee);
  
}

while($rww=mysqli_fetch_array($resulty))
 {
 
 $expp = @explode(",", $withComma);
 

 

 //$newstring = str_replace("|".$eeee, "", $ToLB);
 
 
  $ToLB=$rww['Members'];
  
  
  $idd=$rww['id'];
  
   $expp1 = @explode("|", $ToLB);
 
 foreach($expp as $key) {    

    
    
   
    
      
      
       foreach($expp1 as $key1) {    
       
       if($key==$key1)
       {
          $ssql1=("select * from list where Email='$user_check' and id='$idd'");
          
          
          $resulty1=mysqli_query($conn,$ssql1);
          
          while($rww1=mysqli_fetch_array($resulty1))
 {
   $ToLB1=$rww1['Members'];
   
    $newstring = str_replace("|".$key1, "", $ToLB1);
    
    mysqli_query($conn,"update list set Members='$newstring' where id='$idd'");
}
          
          
          
        

        
       }
        
       
       
       
       }
      
    
}
 
 
 
 
 }
 
mysqli_query($conn,"DELETE FROM audience WHERE id IN ($list)");
 
echo "<script>

window.location.href='audience1.php';
</script>";
 
// mysqli_query($conn,"DELETE  FROM audience WHERE id IN ($list)");
}

 
echo "<script>

window.location.href='audience1.php';
</script>";

}
else
{

echo "<script>
alert('Please select contact to delete');
window.location.href='audience1.php';
</script>";
}


?>