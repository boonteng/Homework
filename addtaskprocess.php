<?php
require "connection.php";

$res = array();
if(!empty($_POST['tasktitle']) && !empty($_POST['taskdescription']))
{
	
	$tasktitle = $_POST['tasktitle'];
	$taskdescription = $_POST['taskdescription'];
	$userid = $_POST['userid'];
	
	$sql ="INSERT INTO task(`tasktitle`,`taskdescription`,`userid`)VALUES('$tasktitle','$taskdescription','$userid')";
			mysqli_query($conn,$sql);
			
			$res['status'] = 'success';
			$res['message'] = 'Add successful';
	
}
else
{
	$res['status'] = 'error';
	$res['message'] = 'Please fill in the details';
}
echo json_encode($res);
?>