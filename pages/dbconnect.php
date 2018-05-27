<?php 
	//DATABASE CONNECTION
	$dbserver 		= "localhost";
	$dbusername 	= "id5859464_bkeh97";
	$dbpassword 	= "asdewq1234!";
	$db 			= "id5859464_user";
	
	//CREATE CONNECTION
	$conn = new mysqli($dbserver, $dbusername, $dbpassword, $db);
	
	//CHECK CONNECTION
	if ($conn->connect_error)
	{
		die("Connection failed: ".$conn->connect_error);
	}
?>