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

echo "<h4 class='m_4' style='color: rgba(61, 61, 61, 0.81);font-family:Arial,sans-serif;'>$".$contactprice."</h4>";
?>
