<?php
	session_start();
	include 'dbconnect.php';
	
	//ASSIGN VARIABLES FROM FORM
	$username = $_POST['uname'];
	$password = $_POST['psw'];
	
	//ENCRYPT PASSWORD
	//$password = md5($password);
	
	$query = "SELECT password FROM admins WHERE username = '$username'";
	$result = mysqli_query($conn, $query);
	$row = mysqli_fetch_assoc($result);
	
	//USERDATA
	$dbPassword = $row['password'];
	
	if (password_verify($password, $dbPassword))
	{
		$_SESSION['loggedin'] = $username;
		header("Location: admin.php");
		die();
	}
	else
	{
		echo "Passwords do not match!";
	}
?>