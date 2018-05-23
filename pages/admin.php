<?php 
	include 'adminheader.php';
?>
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
</html>