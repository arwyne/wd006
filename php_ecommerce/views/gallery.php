<?php 
	require '../controllers/connection.php';
	require '../partials/header.php';

	// session_start();
	if (!isset($_SESSION['user'])) {
		header("Location: ./login.php");
	}

	

	function getTitle() {
		return "Gallery Page";
	}

	/*
		We need the following lists inside our gallery:

			Card container that has the ff
			- item image
			- item name
			- item price
			- item description

	*/

 ?>

 	<div class="container">
 		<h2 class="text-center">Products Dashboard</h2>
 		<div class="row">
 			<div class="col-md-12">
 				<h2 class="text-center">Sort By: </h2>
 				<ul class="list-group border text-center">
 					<li>Price (Lowest to Highest)</li>
 					<li>Price (Highest to Lowest)</li>
 				</ul>
 			</div>

 			<!-- Card container -->
 			<?php 

 				$products_query = "SELECT * FROM products";
 				$products_array =  mysqli_query($conn, $products_query);

 				// var_dump($products_array);

 			 ?>

 			 <!-- Foreach of the products array from our query, we will breakdown it into individual item called $product -->
 			 <?php foreach ($products_array as $product): ?>
 			 	<div class="col-md-4">
 			 		<div class="card">
 			 			<img src="<?php echo $product['image_path']; ?>" alt="" class="card-img-top img-fluid">
 			 			<div class="card-body">
 			 				<h5 class="card-title"><?php echo $product['name']; ?></h5>

 			 				<p class="card-text">&#8369; <?php echo $product['price']; ?></p>
 			 				<p class="card-text"><?php echo $product['description']; ?></p>
 			 			</div>
 			 		</div>
 			 	</div>
 			 <?php endforeach ?>

 			 
 			


 		</div>
 		
 	</div>










 <?php 

 	require '../partials/footer.php';

  ?>