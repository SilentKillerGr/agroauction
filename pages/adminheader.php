<?php 
	session_start();
	include 'dbconnect.php';
	$_SESSION['loggedin'] = "bkeh97";
	$usrname = $_SESSION['loggedin'];
?>
<!-- Modals for actions -->
	<!-- Insert Product -->
	<div id="modal-wrapper" class="modal">
		<form role="form" method="post" class="modal-content animate" action="prodforms.php" enctype="multipart/form-data">
		    <div class="imgcontainer">
				<span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
      			<h1 style="text-align:center">Εισαγωγή Προϊόντος</h1>
    		</div>
		    <div class="container">
			  	<input type="text" placeholder="Όνομα Προϊόντος" name="prname">
				<input type="text" placeholder="Δώστε μια σύντομη περιγραφή." name="desc">
				<h1 style="margin: 8px 26px;">Εικόνα:</h1>
				<input type="file" name="imge" style="margin: 8px 26px;">
			  	<button type="submit">Εισαγωγή</button>
			</div>
		</form>
	</div>
	<script>
	var modal = document.getElementById('modal-wrapper');
	var modals = document.getElementById('modal-wrapper-s');
	window.onclick = function(event) {
		if (event.target == modal) {
			modal.style.display = "none";
		}
	}

	window.onclick = function(event) {
		if (event.target == modals) {
			modals.style.display = "none";
		}
	}
	</script>
<html>
	<head>
		<title>AgroAuction Admin</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
		<link href="../layout/styles/login.css" rel="stylesheet">
		<script> var __adobewebfontsappname__="dreamweaver" </script>
		<style>
			.prods{
				
				box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
				list-style-type:none;
				margin-left: 30%;
				border-radius: 25px;
				background: white;
				border: 2px solid black;
				padding: 20px; 
    			width: 700px;
    			height: auto;
				overflow:hidden;
				white-space:nowrap; 
  				text-overflow:ellipsis;
			}
		</style>
	</head>
	<body id="top">
		<div class="row100 bgded">
			<header id="header" class="clear">
				<div id="logo" class="fl_left">
				<h1><a href="index.php">AgroAuction Admin</a></h1>
			  </div>
				<nav id="mainav" class="fl_right">
					<li class="active"><a href="../index.php">Αρχικη</a></li>
				</nav>
			</header>
			<div class="wrapper row3">
						<main class="container clear"> 
							<div class="sidebar one_quarter first"> 
								<nav class="sdb_holder">
									<ul>
										<li><a href="#">Ενεργες Δημοπρασίες</a></li>
										<li><a href="#">Ολοκληρωμένες Δημοπρασίες</a></li>
										<li><a href="#">Χρήστες</a>
										<ul>
											<li><a href="#">Έμποροι</a></li>
											<li><a href="#">Παραγωγοί</a></li>
										</ul>
										</li>
										<li><a onclick="document.getElementById('modal-wrapper').style.display='block'">Εισαγωγή Προϊόντος</a></li>
										<li><a href="productlists.php">Επεξεργασία Προϊόντων</a></li>
									</ul>
								</nav>
									<h6>Τα στοιχεία μου</h6>
									<address>
										<?php
											$querry = "SELECT * FROM admins WHERE username = '$usrname'";
											$result = mysqli_query($conn, $querry);
											$row = mysqli_fetch_assoc($result);
											echo $row['name']." ".$row['surname']."<br>Tel: ".$row['phone']."<br>E-Mail: ".$row['email']."<br>";
										?>
									</address>
								</div>