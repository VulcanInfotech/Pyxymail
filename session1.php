<?php
error_reporting(E_ERROR);

include 'connect.php';

session_start(); // Starting Session

$user_check1=$_SESSION['login_user1'];

// SQL Query To Fetch Complete Information Of User
$ses_sql=mysqli_query($conn,"select username,useremail from paidregistered_members where useremail='$user_check1' ");
$row = mysqli_fetch_assoc($ses_sql);
$paid_session =$row['useremail'];
$paid_user =$row['username'];




$user_check=$_SESSION['login_user'];

// SQL Query To Fetch Complete Information Of User
$ses_sql=mysqli_query($conn,"select name from registered_members where email='$user_check' ");
$row = mysqli_fetch_assoc($ses_sql);

$login_session =$row['name'];

if(!isset($login_session) && !isset($paid_session) )
{
mysqli_close($conn); // Closing Connection
header('Location: index.php'); // Redirecting To Home Page
}


?>