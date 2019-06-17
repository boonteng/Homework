
<?php

	require "connection.php";
	$res = array();



	if(isset($_POST['tasktitle']) && isset($_POST['taskdescription'])&& isset($_POST['duedate']))
	{

			$taskid = $_POST['taskid'];
			$tasktitle = $_POST['tasktitle'];
			$taskdescription = $_POST['taskdescription'];
			$duedate=$_POST['duedate'];


			$sql = "UPDATE `task` SET `tasktitle`='$tasktitle',`taskdescription`='$taskdescription',`duedate`='$duedate' WHERE `id`='$taskid'";	


		if (mysqli_query($conn, $sql)) {
			$res['status'] = 'success';
		    $res['message']    = 'Update successful';
		} else {
		
			$res['status'] = 'error';
		    $res['message']    = 'Update Failed';
		}

	}
	echo json_encode($res);	


?>