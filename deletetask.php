<?php
require "connection.php";

$res=array();

$id=$_POST['id'];

$sql="DELETE FROM `task` WHERE `id`='$id'";


if (mysqli_query($conn,$sql)){

	$res['message']="Delete success!";
	$res['status']="success";
	
}else
{
	$res['message']="Delete failed!";
	$res['status']="error";
}

echo json_encode($res);
?>
