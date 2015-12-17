<?php
if(!isset($_REQUEST['term']))
exit();
include('db.php');
include('session1.php');

$term = 
	$rs = mysql_query('
		SELECT * FROM audience
		WHERE Email 
		LIKE "'.ucfirst($_REQUEST['term']).'%" AND User="' .$user_check. '"
		ORDER BY id ASC 
		LIMIT 0,10'
	);
	$data = array();
	while($row = mysql_fetch_array($rs, MYSQL_ASSOC)){
		$data[] = array(
			'label' => $row['Email'],
			'value' => $row['Email'],
                        
                      
		);	
	}
	echo json_encode($data);
	flush(); 
?>