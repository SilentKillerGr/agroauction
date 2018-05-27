<?php
	session_start();
	//Connect Database
	include 'dbconnect.php';
	$pricebid = $_POST['priceb'];
	$aucid = null;
	$sql = "INSERT INTO bids (bidprice) 
	VALUES ('$pricebid')";
	if($conn->query($sql) === TRUE){
		echo "New record created successfully";
	}
	else {
		echo "ERROR: " . $sql . "<br>" . $conn->error;
	}
	$result = $conn->query($sql);
	$conn->close();
?>
