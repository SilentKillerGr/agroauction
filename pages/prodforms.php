<?php
	session_start();
	//Connect Database
	include 'dbconnect.php';
	//Assign variables
	$prname = $_POST['prname'];
	$desc = $_POST['desc'];
	
	//Check if product is unique
	$sql = "SELECT name FROM products WHERE name = '$prname'";
	if($result=mysqli_query($conn,$sql))
	{
		$rowcount = mysqli_num_rows($result);
	}
	
	if($rowcount >= 1)
	{
		echo "Το προϊόν υπάρχει ήδη.";
	}
	else
	{
		$sql = "INSERT INTO products (name, description)
		VALUES ('$prname', '$desc')";
		//Execute
		if($conn->query($sql) === TRUE)
		{
			header('location: admin.php');
			echo "Επιτυχία";
			die();
		}
		else
		{
			echo "Error: ".$sql."<br/>".$conn->error;
		}
	}
?>