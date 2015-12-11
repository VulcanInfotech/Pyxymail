<?php
 include("connect.php");
include "session1.php";

 $editor=$_REQUEST['Editor'];
 $user=$paid_session; 
$title=$_REQUEST['title'];
echo $id=$_REQUEST['id'];
   //$grab=$_POST['data'];
  // $txt=$_POST['txt'];
//    $sql="INSERT INTO save_promotion(id,user,promo_content,promo_title,promo_date) VALUES ('','$user','$editor','$title','')";
$update="UPDATE save_promotion SET promo_content='$editor',promo_title='$title' WHERE id='$id'";
if (mysqli_query($conn, $update)) {
    echo "updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
} 
  $sql1="select * from save_promotion where id='$id'";
$row=mysqli_query($conn,$sql1);
$res=mysqli_fetch_assoc($row);
echo $res['promo_content'];  

?>