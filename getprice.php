<?php
include 'connect.php';
$q = $_GET['q'];
$sql="select * from pricingdetail where id='".$q."'";
$result=mysqli_query($conn,$sql);

while($row=mysqli_fetch_assoc($result))
{
$contactno=$row['contactno'];
$contactprice=$row['contactprice'];

}

echo "<b>The Price For $contactno Contact is $".$contactprice."</b>";
?>
