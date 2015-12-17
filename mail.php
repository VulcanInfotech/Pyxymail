<?php

$message = '<html><body>';
$message .= '<table width="100%"; rules="all" style="border:1px solid #3A5896;" cellpadding="10">';
$message .= "<tr><td><img src='http://vulcaninfotech.com/crazymimi/version1/ims/myImage.png' /></td></tr>";
$message .= "<tr><td colspan=2 font='colr:#999999;'><I>crazymimi.co.nf<br>Best Email Marketing website. :)</I></td></tr>"; 
$message .= "</table>";
$message .= "</body></html>";

?>

<html>
<head>
<link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/crazymimi-misc.css">
        <link rel="stylesheet" href="css/crazymimi-style.css">
</head>
<body>
<div style="margin-left:350px;">
<form method="post" action="send.php">
<table>
    <tr>
        <td>Email:</td>
        <td><input type="text" name="email" /></td>
    </tr>
    <tr>
        <td>Subject:</td>
        <td><input type="text" name="subject" /></td>
    </tr>
    <tr>
        <td>Message:</td>
        <td><textarea name="message" cols="50" rows="15"><?php  echo $message; ?></textarea></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td><input type="submit" name="submit" value="Submit" style="background-color:orange;color:black;"/></td>
    </tr>
</table>
</form>
</div>
</body>
</html>