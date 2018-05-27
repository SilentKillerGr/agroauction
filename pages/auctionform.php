<?php	
	session_start();
	//Connect Database
	include 'dbconnect.php';
	//Assign variables
	$aucname = $_POST['aucname'];
	$desc = $_POST['desc'];+
	$quanti = $_POST['quant'];
	$pricest = $_POST['mprais'];
	//Check if product is unique
	$sql = "SELECT name FROM products WHERE name = '$aucname'";
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
		$sql = "INSERT INTO auction (prname, description, quantity, pricest)
		VALUES ('$aucname', '$desc', '$quanti', '$pricest')";
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