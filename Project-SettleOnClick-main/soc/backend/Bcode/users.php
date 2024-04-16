<?php 
session_start();
include("conn.php");

if(isset($_POST['login']))
	{
		$username=$_POST['username'];
		$password=$_POST['password'];

		$sql = "SELECT * from `user_info` WHERE username = '$username' AND password = '$password'";

		$sqlid = "SELECT id from `user_info` WHERE username = '$username' AND password = '$password'";

		$result = mysqli_query($conn, $sql);
		$id = mysqli_query($conn , $sqlid);


		$userid = "";

		if(mysqli_num_rows($result) == 1){
			
			$user = mysqli_fetch_array($id);
			$user_data = mysqli_fetch_array($result);

			$userid = ($user['id']);
			$role_id = ($user_data['role_id']);

			$_SESSION["login_id"] = $userid ;
			$_SESSION["role_id"] = $role_id;
			
			header("Location: ../dashboard.php");
		}

		else{
			echo ("<SCRIPT LANGUAGE='JavaScript'>
		    window.alert('Invalid Username or Password')
		    window.location.href='javascript:history.go(-1)';
		    </SCRIPT>");
		}

	}
?>