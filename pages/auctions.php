<?php 
	include '../header.php';
	include 'dbconnect.php';
?>
<style>
	h5, p{
		color: black;
	}
	.prods{
				
				box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
				list-style-type:none;
				
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
<!-- Header End====================================================================== -->
<div id="mainBody" style="background-color: white;">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->
	
<!-- Sidebar end=============================================== -->
	<div class="span9">
	<h3 style="color: black;"> Τρέχουσες Δημοπρασίες </h3>	
	<hr class="soft"/>
	<hr class="soft"/>	  
<br class="clr"/>
<div class="tab-content">
	<div class="tab-pane  active" id="blockView">
		<ul class="thumbnails">
			<?php
											//Show the product list
											//TODO: GRID
											$sql = "SELECT * FROM products";
											$result = $conn->query($sql);

											if ($result->num_rows > 0) {
												// output data of each row
												while($row = $result->fetch_assoc()) {
										?>
												<li class="prods">
												
												  <div>
													<p style="float: left;"><a href="product_details.html"><img<?php echo " src= ../images/products/".$row['image'];?> style="width:160px;height:160px;" /></a></p>
													<div>
													  <h5 style="padding-left: 30%;"><?php echo $row["name"]; ?></h5>
													  <p style="padding-left: 30%;"> 
														<?php echo $row["description"] ?> 
													  </p>
													   <h4 style="text-align:center; padding-top: 5%;"><a class="btn" href="../product_details.html">Πληροφοριες</a> <a class="btn" href="#">Διαγραφη</a></h4>
													</div>
												  </div>
												</li><br><br>
																
										<?php
												}
											} else {
												echo "0 results";
											}
											$conn->close();
										?>
		</ul>
	<hr class="soft"/>
	</div>
</div>
			<br class="clr"/>
</div>
</div>
</div>
</div>
<!-- MainBody End ============================= -->
<!-- Footer ================================================================== -->
	<?php include '../footer.php'; ?>
</body>
</html>