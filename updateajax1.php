<?php
include 'connect.php';
include 'session1.php';
$i=0;
$counterupdated=0;
$nothing=0;

while(isset($_POST['idmane'.$i]))
{


$namefield=$_POST['somename'.$i];

$idofupdate=$_POST['idmane'.$i];

if(empty($namefield))
{

echo "Listname cannot be empty";
break;
}
elseif(!ctype_alpha(str_replace(' ', '',$namefield))) {
                        
              echo "Enter character only you have entered '$namefield'";
break;
}
else{
if(isset($paid_session))
{
$suhfu=mysqli_query($conn,"SELECT *  FROM list WHERE Email='".$user_check1."' ");
}
elseif(isset($login_session))
{
$suhfu=mysqli_query($conn,"SELECT *  FROM list WHERE Email='".$user_check."' ");
}
while($soto=mysqli_fetch_array($suhfu))
{


$pri2=$soto['lname'];
$idddd=$soto['id'];
 
 if($idddd==$idofupdate)
 {
 if($pri2!=$namefield)
 {
 if(isset($paid_session))
{
  $query11 = mysqli_query($conn, "SELECT * FROM list WHERE lname='".$namefield."' and Email='".$user_check1."' ");
}
elseif(isset($login_session))
{
  $query11 = mysqli_query($conn, "SELECT * FROM list WHERE lname='".$namefield."' and Email='".$user_check."' ");
}
  
  if(mysqli_num_rows($query11) > 0)
  {
 
 echo "Listname already exist ".$namefield." "; 
 break;
 
 }
 else{
 
 mysqli_query($conn,"UPDATE list set lname='$namefield' where id='$idofupdate'");
 
 echo "Listname ".$namefield." updated  "; echo "\n";
 
 $counterupdated==1;
 
 }
 
 }
   
}


}
$i++;

}

 }
 
 
 


?>
