<?php 
	include 'adminheader.php';
?>
								<div>
									<div>
										<ul>
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
													<p style="float: left;"><a href="pages/product_details.html"><img<?php echo " src= ../images/products/".$row['image'];?> style="width:160px;height:160px;" /></a></p>
													<div>
													  <h5 style="padding-left: 30%;"><?php echo $row["name"]; ?></h5>
													  <p style="padding-left: 30%;"> 
														<?php echo $row["description"] ?> 
													  </p>
													   <h4 style="text-align:center; padding-top: 5%;"><a class="btn" href="product_details.html">Πληροφοριες</a> <a class="btn bg-red" href="#">Διαγραφη</a></h4>
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
							</div>
						</main>
				</div>
<?php
	include '../footer.php';
?>