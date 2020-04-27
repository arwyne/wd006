<?php 
	
	session_start();

 ?>

<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">

	<title>Q Store | <?php echo getTitle(); ?></title>

	<!-- fontawesome icons -->
    <script src="https://kit.fontawesome.com/763fd16ca4.js" crossorigin="anonymous"></script>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- external css -->
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">


</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<?php if (isset($_SESSION['user'])): ?>
			<a class="navbar-brand" href="#">Welcome, <?php echo $_SESSION['user']['firstname']; ?>!</a>
		<?php endif ?>
		
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
			<span><i class="fas fa-angle-double-down"></i></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav ml-auto text-center">
				<?php 
					/*
						Instructions:

						1. Create a list nav item and nav-link for the gallery and add item form pages
						2. If the user has a role_id of 1, the gallery link and item form link and logout should appear on the nav bar
						3. If the user has a role_id of 2, gallery link and logout should only appear on the nav bar
						4. If the user is currently logged in, user can not access the register page

					*/
				 ?>
				<?php if (isset($_SESSION['user'])): ?>

					<?php if ($_SESSION['user']['role_id'] == 1 ): ?>
						<li class="nav-item">
							<a class="nav-link" href="./add_item_form.php">Add Item</a>
						</li>
					<?php endif ?>

					<li class="nav-item">
						<a class="nav-link" href="./gallery.php">Gallery</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="../controllers/logout.php">Logout</a>
					</li>

				<?php else: ?>

					<li class="nav-item">
						<a class="nav-link" href="./register.php">Register</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="./login.php">Login</a>
					</li>

				<?php endif ?>

				
			</ul>
		</div>
	</nav>




