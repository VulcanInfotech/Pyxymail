<?php
date_default_timezone_set('Europe/London'); // Set timezone

$getTo =$_GET['to'];
$to=$_GET['from'];

//$to = "sumitvilankar619@gmail.com"; // Email address to send email opened notification
$subject = "Email Opened!"; // Email subject
$time = date('l jS \of F Y \a\t h:i:s A'); // Date/Time format
$message = "Hi, $getTo opened your email at $time"; // Email message


// Recipient email is valid, let's send notification email.
mail($to, $subject, $message);

// Show image in browser/email client.
$logo = "/home/pyxymailnet/public_html/blank.gif"; // Set image Full Path
$etag = md5_file($logo);
$lastModified = gmdate('D, d M Y H:i:s', filemtime($logo)) . ' GMT';

header('Content-Type: image/png'); // Change image type if you use gif/jpg
header('Content-Disposition: inline; filename="blank.gif"'); // Image name
header('Content-Transfer-Encoding: binary');
header('Content-Length: ' . filesize($logo));
header('Accept-Ranges: bytes');
header('ETag: "' . $etag . '"');
header('Last-Modified: ' . $lastModified);

readfile($logo);
?>