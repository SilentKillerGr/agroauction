<?php 
	session_start();
	include 'dbconnect.php';
	$_SESSION['loggedin'] = "bkeh97";
	$usrname = $_SESSION['loggedin'];
?>
<html>
	<head>
		<title>AgroAuction Admin</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
		<link href="../layout/styles/login.css" rel="stylesheet">
		<script> var __adobewebfontsappname__="dreamweaver" </script>
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
								<li><a href="#">Επεξεργασία Προϊόντων</a></li>
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
					<article class="content three_quarter">

						<h2>Καλωσόρισες, <?php if($_SESSION['loggedin'] == "bkeh97"){echo "Supreme Administrator ";} echo($_SESSION['loggedin']); ?></h2>

						<p>Τί θα κάνουμε σήμερα;</p><br>
						<a class="btn" href="#">Ενεργες Δημοπρασιες</a>
						<a class="btn" href="#">Ολοκληρομενες Δημοπρασιες</a><br><br>
						<a class="btn" onclick="document.getElementById('modal-wrapper').style.display='block'">Εισαγωγη Προϊοντος</a>
						<a class="btn" href="#">Επεξεργασια προϊοντων</a>
						<a class="btn" href="#">Εμφανιση Χρηστων</a>
					</article>


				</main>
			</div>
			<div class="wrapper row5">
			  <footer id="footer" class="clear"> 
				<div class="one_quarter first">
					<h6 class="title">Test 1</h6>
				</div>
				<div class="one_quarter">
					<h6 class="title">Test 2</h6>
				</div>
				<div class="one_quarter">
					<h6 class="title">Test 3</h6>
				</div>
			  </footer>
		</div>
		<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
		</div>
	</body>
	<!-- Modals for actions -->
	<!-- Insert Product -->
	<div id="modal-wrapper" class="modal">
		<form role="form" method="post" class="modal-content animate" action="prodforms.php" id="inser">
		    <div class="imgcontainer">
				<span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
      			<h1 style="text-align:center">Εισαγωγή Προϊόντος</h1>
    		</div>
		    <div class="container">
			  	<input type="text" placeholder="Όνομα Προϊόντος" name="prname">
				<input type="text" placeholder="Δώστε μια σύντομη περιγραφή." name="desc">
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
</html>