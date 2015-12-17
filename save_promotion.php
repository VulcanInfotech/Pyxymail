<?php
 include("connect.php");
include "session1.php";

 $editor=$_REQUEST['Editor'];
 $user=$paid_session; 
echo $free_user=$user_check;

$title=$_REQUEST['title'];
if(isset($paid_session)){

    $sql="INSERT INTO save_promotion(id,user,promo_content,promo_title,promo_date) VALUES ('','$user','$editor','$title','NOW()')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
      } else 
     {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      } 
}else{
 $sql="INSERT INTO save_promotion(id,user,promo_content,promo_title,promo_date) VALUES ('','$free_user','$editor','$title','NOW()')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
      } else 
     {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      } 

}

 /* $sql1="select text from content where element_id='29'";
$row=mysqli_query($conn,$sql1);
$res=mysqli_fetch_assoc($row);
echo $res['text'];  */

?>