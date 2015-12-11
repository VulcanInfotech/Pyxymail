<?php
/** APP: Drag and Drop Image uploader with progress bar
    Website:packetcode.com
    Author: Krishna TEja G S
    Date: 4th May 2014
***/

// an array of allowed extensions
$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);

//check if the file type is image and then extension
// store the files to upload folder
//echo '0' if there is an error
if ((($_FILES["file"]["type"] == "image2/gif")
|| ($_FILES["file"]["type"] == "image2/jpeg")
|| ($_FILES["file"]["type"] == "image2/jpg")
|| ($_FILES["file"]["type"] == "image2/pjpeg")
|| ($_FILES["file"]["type"] == "image2/x-png")
|| ($_FILES["file"]["type"] == "image2/png"))
&& in_array($extension, $allowedExts)) {
  if ($_FILES["file"]["error"] > 0) {
    echo "Error";
  } else {
    $target = "upload/";
    move_uploaded_file($_FILES["file"]["tmp_name"], $target. $_FILES["file"]["name"]);
    echo  "upload/" . $_FILES["file"]["name"];
  }
} 