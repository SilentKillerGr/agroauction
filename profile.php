<?php 
	include 'header.php';
	if(isset($_SESSION['user_type'])){
		switch($_SESSION['user_type']){
			case 1:
				include 'producerprof.php';
				break;
			case 2:
				include 'sellerprof.php';
				break;
			default:
				echo("Παρακαλω συνδεθειτε!");
				break;
		}
	}else{
		?>
		<div class="wrapper row3">
		  	<main class="container clear">
				<h3>Απαγορεύεται η προσβαση. Παρακαλούμε συνδεθείτε.</h3>
			</main>
		</div>
		<?php
	}
	include 'footer.php';
?>