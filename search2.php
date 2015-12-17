<?php
if(!isset($_REQUEST['term']))
exit();
include('db.php');
include('session1.php');

if(isset($paid_session))
{
$a=$user_check1;
}
elseif(isset($login_session))
{
$a=$user_check;
}
$term = 
	$rs = mysql_query('
		SELECT * FROM audience
		WHERE Name 
		LIKE "'.ucfirst($_REQUEST['term']).'%" AND User="' .$a. '"
		ORDER BY id ASC 
		LIMIT 0,10'
	);
	$data = array();
	while($row = mysql_fetch_array($rs, MYSQL_ASSOC)){
		$data[] = array(
			'label' => $row['Name'],
			'value' => $row['Name'],
                        
                      
		);	
	}
	echo json_encode($data);
	flush(); 
?>