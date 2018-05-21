<?php
	session_start();
	//DATABASE CONNECTION
	$dbserver 		= "localhost";	$dbusername 	= "id5859464_bkeh97";	$dbpassword 	= "asdewq1234!";	$db 			= "id5859464_user";
	
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
	$email = $_POST['mail'];
	$type = $_POST['utype'];
	
	//ENCRYPT PASSWORD
	//$password = md5($password);
	
	$password = password_hash($password, PASSWORD_BCRYPT);
	
	//CHECK IF VALUES ARE OKAY
	
	//CHECK IF USER IS UNIQUE
	$sql = "SELECT username FROM users WHERE username = '$username'";
	if($result=mysqli_query($conn,$sql))
	{
		$rowcount = mysqli_num_rows($result);
	}
	
	if($rowcount >= 1)
	{
		echo "There is already an user with this username.";
	}
	else
	{
		//INSERT DATA INTO DATABASE
		$sql = "INSERT INTO users (username, password, email, type)
		VALUES ('$username', '$password', '$email', '$type')";
		
		//EXECUTE QUERY
		if($conn->query($sql) === TRUE)
		{
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: ../index.php');
			echo "Account has been added successfully.";
			
			die();
		}
		else
		{
			echo "Error: ".$sql."<br/>".$conn->error;
		}
	}
?>