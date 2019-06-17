<?php
require "connection.php";

$res = array();
if(!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['confirmpassword']))
{
	
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$confirmpassword = $_POST['confirmpassword'];
	
	$query_email="SELECT `email` FROM `users` WHERE `email`= '$email'";
	$query_process_email=mysqli_query($conn,$query_email);
	
	if(!filter_var($email,FILTER_VALIDATE_EMAIL) === FALSE)
	{
		if(mysqli_num_rows($query_process_email))
		{
			$res['status'] = 'error';
			$res['message'] = 'This email is already exists.';
		}else{
			
			if($password!=$confirmpassword)
			{
			$res['status'] = 'error';
			$res['message'] = 'Password different.';
			}else{
				$sql ="INSERT INTO users(`email`,`username`,`password`)VALUES('$email','$username','$password')";
			mysqli_query($conn,$sql);
			
			$res['status'] = 'success';
			$res['message'] = 'Register success';
			}
			
		}
	}else{
			$res['status'] = 'error';
			$res['message'] = 'The email format is invalid';
	}
}else
{
			$res['status'] = 'error';
			$res['message'] = 'Please fill in all the information';
}

echo json_encode($res);

?>
