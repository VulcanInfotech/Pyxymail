<?php
include 'connect.php';
include 'session1.php';
$i=0;
$counterupdated=0;
$nothing=0;
 echo $myVar = $_POST['varname'];
//echo $_POST['somename'.$i];

//echo $_POST['idname'.$i]."hiiii";
while(isset($_POST['idmane'.$i]))
{
echo $_POST['idmane'.$i]."byeee";


echo $namefield=$_POST['somename'.$i];

 echo $emailfld=$_POST['emailch'.$i];

echo $idofupdate=$_POST['idmane'.$i];

 $domain=substr(strrchr($emailfld,"@"),1);
 

if(empty($emailfld))
{

echo "Email cannot be empty";
break;
}
elseif(empty($namefield))
{

echo "name cannot be empty";
break;
}
elseif(!ctype_alpha(str_replace(' ', '',$namefield))) {
                        
              echo "Enter character only you have entered '$namefield'";
break;
}
elseif(!filter_var(gethostbyname($domain),FILTER_VALIDATE_IP)) {
 
  echo "invalid email '$emailfld'";
  
break;
}

else{
if(isset($paid_session))
{
$suhfu=mysqli_query($conn,"SELECT *  FROM audience WHERE User='".$user_check1."' ");
}
elseif(isset($login_session))
{
$suhfu=mysqli_query($conn,"SELECT *  FROM audience WHERE User='".$user_check."' ");
}
while($soto=mysqli_fetch_array($suhfu))
{

$pri=$soto['Email'];
$pri2=$soto['Name'];
$idddd=$soto['id'];
 
 if($idddd==$idofupdate)
 {
 if($pri!=$emailfld)
 {
 if(isset($paid_session))
{
  $query11 = mysqli_query($conn, "SELECT * FROM audience WHERE Email='".$emailfld."' and User='".$user_check1."' ");
}
  elseif(isset($login_session))
{
$query11 = mysqli_query($conn, "SELECT * FROM audience WHERE Email='".$emailfld."' and User='".$user_check."' ");
}
  if(mysqli_num_rows($query11) > 0)
  {
 
 echo "Email already exist ".$emailfld." "; 
 break;
 
 }
 else{
 
 mysqli_query($conn,"UPDATE audience set Email='$emailfld' where id='$idofupdate'");
 
 echo "Email ".$emailfld." updated  "; echo "\n";
 
 $counterupdated==1;
 
 }
 
 }
 if($pri2!==$namefield)
 {
 
 mysqli_query($conn,"UPDATE audience set Name='$namefield' where id='$idofupdate'");
 
 echo "Name  ".$namefield." updated"; echo "\n";
  
 }
  
   
}


}
$i++;

}

 }
 




?>