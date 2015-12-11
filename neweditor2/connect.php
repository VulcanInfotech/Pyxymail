<?php
$servername = "localhost";
$username = "pyxymail_dbroot";
$password="dbroot";
$dbname = "pyxymail_DB";


// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);
// Check connection
if (!$conn)
 {
    die("Connection failed: " . mysqli_connect_error());
}
?>