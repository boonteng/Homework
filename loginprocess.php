<?php
session_start();
require "connection.php";

$res=array();
if(!empty($_POST['email']) && !empty($_POST['password']))
{
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	$query_login="SELECT * FROM `users` WHERE `email`= '$email' && `password` = '$password'";
	$query_process_login=mysqli_query($conn,$query_login);
	$row = mysqli_fetch_assoc($query_process_login);
	
	if($email == $row['email']&& $password == $row['password']){
		
		
		$_SESSION['username']=$row['username'];
		$_SESSION['id']=$row['id'];
		$res['status'] = 'success';
		$res['message'] = 'Login Successful!';
	}else{
		$res['status'] = 'error';
		$res['message'] = 'The email is not register';
	}

}
else{
	$res['status'] = 'error';
	$res['message'] = 'Please enter your email and password!';
}

echo json_encode($res);









?>