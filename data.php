<?php

$conn = mysqli_connect('localhost','root','','homeworksystem');

	
if(!$conn){
	
	echo "Not Connected To Server";
}
if(!mysqli_select_db($conn,"homeworksystem")){
	
	echo "Database Not Selected";

}
	$status = $_POST['status'];
	$semester = $_POST['semester'];
	$result = $_POST['result'];
	
	$sql = "INSERT INTO result (`status`,`semester`, `result`) VALUES ('$status','$semester','$result')";
	

if(!mysqli_query($conn,$sql)){
	echo 'Not Inserted';
}
else {
	echo 'Inserted';
}

?>