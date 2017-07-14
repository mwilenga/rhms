<?php
session_start();
require_once 'dBConnection/connect.php';
if(isset($_POST['submit'])){

	$username = mysql_real_escape_string($_POST['username']);
	$password = mysql_real_escape_string($_POST['password']);
	if($username == '' || $password == ''){

		$error_sms = "<div class = 'alert alert-danger flush'>Fill the empty field</div>";
	}
	else{
		$query = mysql_query("SELECT * FROM sms_users WHERE username = '$username' AND password = '$password'");
		$num_rows = mysql_num_rows($query);
		if($num_rows < 1){
			$error_sms = "<div class = 'alert alert-danger flush'>Login failed ! Wrong username or password</div>";
		}
		else{
			$fetch_data = mysql_fetch_array($query);
			$role = $fetch_data['role'];
			$status = $fetch_data['status'];
			if($status == 'No'){
			 $error_sms = "<span style = 'color:red;font-size:12px'>Your account has been blocked!</span>";	
			}
			else{
				if($role == 'House Manager'){
					$_SESSION['id'] = $fetch_data['id'];
					$_SESSION['fname'] = $fetch_data['fname'];
					$_SESSION['lname'] = $fetch_data['lname'];
					$_SESSION['phone'] = $fetch_data['phone'];
					$_SESSION['email'] = $fetch_data['email'];
					$_SESSION['gender'] = $fetch_data['gender'];
					$_SESSION['name'] = $fetch_data['fname']." ".$fetch_data['lname'];
					$_SESSION['username'] = $fetch_data['username'];
					$_SESSION['role'] = $fetch_data['role'];
					header('location: house_manager/');
				}
				
			}
		}
	}
}
?>