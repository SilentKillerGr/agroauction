<?php 
	include 'headerp.php';
	$usrname = $_SESSION['loggedin'];
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
	include '../footer.php';
?>
<style>
	#modal-wrapper{
		color: black;
	}
	
	input[type=datetime-local],select {

    width: 90%;

    padding: 12px 20px;

    margin: 8px 26px;

    display: inline-block;

    border: 1px solid #ccc;

    box-sizing: border-box;

	font-size:16px;

}
</style>
<!-- Modals for actions -->
	<!-- Insert Product -->
	<div id="modal-wrapper" class="modal">
		<form role="form" method="post" class="modal-content animate" action="prodforms.php" enctype="multipart/form-data">
		    <div class="imgcontainer">
				<span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
      			<h1 style="text-align:center">Νέα Δημοπρασία</h1>
    		</div>
		    <div class="container">
			  	<input type="text" placeholder="Όνομα Δημοπρασιας" name="aucname">
				<input type="text" placeholder="Δώστε μια σύντομη περιγραφή." name="desc">
				<input type="datetime-local" name="endtime">
				<select id="drop" name="prod">
				<?php
					$sql = "SELECT name FROM products GROUP BY name;";

					$result = mysqli_query($conn,$sql);
					$num_results = mysqli_num_rows($result);
						for ($i=0;$i<$num_results;$i++) {
							$row = mysqli_fetch_array($result);
							$name = $row['name'];
							echo '<option value="' .$name. '">' .$name. '</option>';
						}
						echo '</select>';
					?>
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