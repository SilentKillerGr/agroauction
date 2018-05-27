<?php 
	//DATABASE CONNECTION
	$dbserver 		= "localhost";
	$dbusername 	= "root";
	$dbpassword 	= "";
	$db 			= "neo";
	
	//CREATE CONNECTION
	$conn = new mysqli($dbserver, $dbusername, $dbpassword, $db);
	
	//CHECK CONNECTION
	if ($conn->connect_error)
	{
		die("Connection failed: ".$conn->connect_error);
	}
?>