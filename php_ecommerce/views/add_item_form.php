<?php 
	
	require '../partials/header.php';

	// session_start();
	if(isset($_SESSION['user'])) {
		if ($_SESSION['user']['role_id'] == 1) {
			echo "<h2>Welcome Admin!</h2>";
		} else {
			header("Location: ./gallery.php");
		}
	} else {
		header("Location: ./login.php");
	}

	

	function getTitle() {
		return "Add Product";
	}

 ?>

 	<div class="container-fluid">
 		<h2 class="text-center">Add New Products</h2>

 		<div class="row">
 			<div class="col-md-8 mx-auto">

 				<form action="../controllers/add_item.php" method="POST" enctype="multipart/form-data">
 					<div class="form-group">
 						<label for="productName">Product Name:</label>
 						<input id="productName" type="text" name="productName" class="form-control">
 					</div>
 					<!-- end form group -->

 					<div class="form-group">
 						<label for="productPrice">Product Price:</label>
 						<input id="productPrice" type="number" name="productPrice" class="form-control" step="0.01">
 					</div>
 					<!-- end form group -->

 					<div class="form-group">
 						<label for="productDescription">Product Description:</label>
 						<textarea id="productDescription" name="productDescription" class="form-control"></textarea>
 					</div>
 					<!-- end form group -->

 					<div class="form-group">
 						<label for="productImage">Product Image:</label>
 						<input id="productImage" type="file" name="productImage" class="form-control">
 					</div>
 					<!-- end form group -->

 					<!-- type submit will sumbit the form -->
 					<button type="submit" class="btn btn-dark btn-block">Add New Item</button>

 				</form>
 			</div>
 		</div>
 		<!-- end row -->
 	</div>
 	<!-- end container fluid -->














 <?php 
	
	require '../partials/footer.php';

 ?>