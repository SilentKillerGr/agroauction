<?php 
	include 'header.php';
	switch ($_SESSION['user_type'])
	{
		case 1:
			include 'pages/producerfront.php';
			break;
		default:
			include 'pages/defaultfront.php';
			break;
	}
    
	include 'pages/footer.php'; ?>