<?php
require "connection.php";

$res=array();

$id=$_POST['id'];

$sql = "UPDATE `task` SET `status`='done' WHERE `id`='$id'";	

if (mysqli_query($conn, $sql)) {
			$res['status'] = 'success';
		    $res['message']    = 'Task Completed';
		} else {
		
			$res['status'] = 'error';
		    $res['message']    = 'Something went wrong';
		}

echo json_encode($res);





?>
