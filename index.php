<?php 
	include 'header.php';
	if (isset($_SESSION['user_type'])){
		switch ($_SESSION['user_type'])
		{
			case 1:
				include 'pages/producerfront.php';
				break;
			default:
				include 'pages/defaultfront.php';
				break;
		}
	}else{
		include 'pages/defaultfront.php';
	}
	include 'footer.php'; ?>