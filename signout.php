<?php

	session_start();
	$res = array();


	
	

	
	session_destroy();
	clearstatcache();

	$res['status']    = 'success';	
	$res['message']    = 'user will now be log out...';	
	echo json_encode($res);	

	
?>