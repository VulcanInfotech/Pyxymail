<?php
 include("connect.php");
echo $editor=$_REQUEST['Editor'];
 
   //$grab=$_POST['data'];
  // $txt=$_POST['txt'];
    $sql="INSERT INTO content(element_id, text,word) VALUES ('', '$editor','')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
} 
 /* $sql1="select text from content where element_id='29'";
$row=mysqli_query($conn,$sql1);
$res=mysqli_fetch_assoc($row);
echo $res['text'];  */

?>