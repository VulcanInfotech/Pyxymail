<?php
include 'session1.php';  

$user=$paid_session;
// Define a destination
mkdir('uploads/'.$user.'/banner',0777,true);
$targetFolder = "uploads/".$user."/banner/"; // Relative to the root

if (!empty($_FILES)) 
{
	$tempFile = $_FILES['Filedata']['tmp_name'];
	$targetPath = $_SERVER['DOCUMENT_ROOT'] . $targetFolder;
	$targetFile = $targetFolder.$_FILES['Filedata']['name'];

	// Validate the file type
	$fileTypes = array('jpg','jpeg','gif','png'); // File extensions
	$fileParts = pathinfo($_FILES['Filedata']['name']);
	if (in_array($fileParts['extension'],$fileTypes))
	{
		move_uploaded_file($tempFile,$targetFile);
		echo '1';
	}
	else
	{
		echo 'Invalid file type.';
	}
}
?>