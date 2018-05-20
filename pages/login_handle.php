<?php
	session_start();
	$_SESSION['user_type'] = 0;
	//DATABASE CONNECTION
	$dbserver 		= "localhost";
	$dbusername 	= "root";
	$dbpassword 	= "";
	$db 			= "user";
	
	//CREATE CONNECTION
	$conn = new mysqli($dbserver, $dbusername, $dbpassword, $db);
	
	//CHECK CONNECTION
	if ($conn->connect_error)
	{
		die("Connection failed: ".$conn->connect_error);
	}
	
	//ASSIGN VARIABLES FROM FORM
	$username = $_POST['uname'];
	$password = $_POST['psw'];
	
	//ENCRYPT PASSWORD
	//$password = md5($password);
	
	$query = "SELECT password FROM users WHERE username = '$username'";
	$result = mysqli_query($conn, $query);
	$row = mysqli_fetch_assoc($result);
	
	//USERDATA
	$dbPassword = $row['password'];
	
	if (password_verify($password, $dbPassword))
	{
		echo "The details are correct.";
		$q2 = "SELECT type FROM users WHERE username = '$username'";
		$res = mysqli_query($conn, $q2);
		$ro = mysqli_fetch_assoc($res);
		$_SESSION['user_type'] = $ro['type'];
		$_SESSION['loggedin'] = $username;
		//header("Location: ../index.php");
		die();
	}
	else
	{
		echo "Passwords do not match!";
	}
?>