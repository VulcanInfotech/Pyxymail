<?php
include 'session1.php';  

/*if(isset($login_session))
{
$user=$user_check; 
}
else
{
$user=$user_check1;
}*/
$user=$paid_session;
// Define a destination

mkdir('uploads/'.$user,0777,true);
$targetFolder = 'uploads/'.$user."/"; // Relative to the root

$verifyToken = md5('unique_salt' . $_POST['timestamp']);

if (!empty($_FILES) && $_POST['token'] == $verifyToken) 
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