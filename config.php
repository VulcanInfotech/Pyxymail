<?php

$host="localhost"; // Host name 
$username="pyxymail_dbroot"; // Mysql username 
$password="dbroot"; // Mysql password 
$db_name="pyxymail_DB"; // Database name 


//Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect to server"); 
mysql_select_db("$db_name")or die("cannot select DB");

?>