<?php
	session_start();
	include 'dbconnect.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<title>AgroAuction</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
		<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
		<link href="../layout/styles/login.css" rel="stylesheet">
		<link href="layout/styles/login.css" rel="stylesheet">
		<script> var __adobewebfontsappname__="dreamweaver" </script>
	</head>
	<body id="top">
	<!-- ################################################################################################ -->
	<!-- ################################################################################################ -->
	<!-- ################################################################################################ -->
	<!-- Top Background Image Wrapper -->
	<div class="row100 bgded" style="background-image:url('../images/inuse/01.png');">
	  <div class="wrapper row1 overlay"> 
		<!-- ################################################################################################ -->
		<!-- ################################################################################################ -->
		<!-- ################################################################################################ -->
		<header id="header" class="clear"> 
		  <!-- ################################################################################################ -->
		  <div id="logo" class="fl_left">
			<h1><a href="pages/index.php">AgroAuction</a></h1>
		  </div>
			<nav id="mainav" class="fl_right">
					<ul class="clear">
			<?php 
				if (isset($_SESSION['user_type'])){
				switch ($_SESSION['user_type'])
				{
				  case 1:
					?>
						<li class="active"><a href="../index.php">Αρχικη</a></li>
					  <li><a class="drop" href="#">Δημοπρασιες</a>
						<ul>
						  <li><a onclick="document.getElementById('modal-wrapper').style.display='block'">Νέα Δημοπρασία</a></li>
							<li><a href="#">Οι Δημοπρασίες Μου</a></li>
						</ul>
					  </li>
					  <li><a href="profile.php">Προφιλ</a></li>
						<li><a href="logout.php">Αποσυνδεση</a></li>
					<?php
					break;
					case 2:
						?>
						<li class="active"><a href="..//index.php">Αρχικη</a></li>
					  <li><a class="drop" href="#">Δημοπρασιες</a>
						<ul>
						  <li><a href="auctions.php">Τρέχουσες Δημοπρασίες</a></li>
						  <li><a href="#">Ιστορικό Δημοπρασιών</a></li>
						</ul>
					  </li>
					  <li><a href="profile.php">Προφιλ</a></li>
						<li><a href="logout.php">Αποσυνδεση</a></li>
						<?php
						break;
				  default:
						?>
						<li class="active"><a href="../index.php">Αρχικη</a></li>
						<?php
						break;
				}
				}else{
					?>
						<li class="active"><a href="pages/index.php">Αρχικη</a></li>
					<?php
				}
			?>
						</ul>
				  </nav>
		  
		  <!-- ################################################################################################ -->
		</header>