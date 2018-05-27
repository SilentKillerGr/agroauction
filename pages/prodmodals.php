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
					$cdquery="SELECT name FROM products";
					$cdresult=mysql_query($cdquery) or die ("Query to get data from firsttable failed: ".mysql_error());
					while ($cdrow=mysql_fetch_array($cdresult)) {
					$cdTitle=$cdrow["name"];
						echo "<option>
							$cdTitle
						</option>";

					}
				?>
				
				</select>
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