<?php
require "connection.php";

$duedate = $_POST['duedate'];
$progress = $_POST['progress'];

$res = array();
if(!empty($_POST['tasktitle']) && !empty($_POST['taskdescription']))
{
	
	$tasktitle = $_POST['tasktitle'];
	$taskdescription = $_POST['taskdescription'];
	$userid = $_POST['userid'];

	
	$sql ="INSERT INTO task(`tasktitle`,`taskdescription`,`userid`,`duedate`,`progress`)VALUES('$tasktitle','$taskdescription','$userid','$duedate','$progress')";
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
