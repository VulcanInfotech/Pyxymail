<?php

include('config.php');



// Passkey that got from link 
$passkey=$_GET['passkey'];
$tbl_name1="temp_paid_member";

// Retrieve data from table where row that match this passkey 
$sql1="SELECT * FROM $tbl_name1 WHERE confirm_code ='$passkey'";
$result1=mysql_query($sql1);

// If successfully queried 
if($result1){

// Count how many row has this passkey
$count=mysql_num_rows($result1);

// if found this passkey in our database, retrieve data from table "temp_paid_member"
if($count==1){

$rows=mysql_fetch_array($result1);
$name=$rows['username'];
$email=$rows['useremail'];
$password=$rows['password']; 

$tbl_name2="paidregistered_members";

// Insert data that retrieves from "temp_paid_member" into table "paidregistered_members" 
$sql2="INSERT INTO $tbl_name2(username, useremail, password,no_contact,price_contact)VALUES('$name', '$email', '$password','','')";
$sql3="insert into contact_count(useremail,no_contact) values('$email','')";

$sql4="insert into used_contact(User,usedcontact) values('$email','')";
$result2=mysql_query($sql2);
$result3=mysql_query($sql3);
$result4=mysql_query($sql4);
 
}

// if not found passkey, display message "Wrong Confirmation code" 
else {
echo "Wrong Confirmation code";
}

// if successfully moved data from table"temp_paid_member" to table "paidregistered_members" displays message "Your account has been activated" and don't forget to delete confirmation code from table"temp_paid_member"
if($result2)
{


echo "<script>
alert('Your account has been activated');
window.location.href='http://pyxymail.net/paid_login_form.php#toregister';
</script>";

// Delete information of this user from table "temp_members_db" that has this passkey 
$sql3="DELETE FROM $tbl_name1 WHERE confirm_code = '$passkey'";
$result3=mysql_query($sql3);

}

}
?>