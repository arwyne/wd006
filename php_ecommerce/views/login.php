<?php
	require '../partials/header.php';

	// session_start();
	// var_dump($_SESSION['user']);
	if (isset($_SESSION['user'])) {
		// is set -> it checks the variable if it is already set, or declared.
		// is set -> boolean
		header("Location: ./gallery.php");
	}

	

	function getTitle() {
		return "Login Page";
	}
?>

	<div class="container-fluid">
		<h2 class="text-center">Login Page</h2>

		<div class="row">
			<div class="col-md-8 mx-auto">
				<form action="../controllers/auth.php" method="POST">
					<div class="form-group">
						<label for="email">Email</label>
						<input id="email" type="email" name="email" class="form-control">
					</div>

					<div class="form-group">
						<label for="password">Password</label>
						<input id="password" type="password" name="password" class="form-control">
					</div>

					<button type="submit" class="btn btn-dark btn-block">Login</button>
				</form>
				
			</div>
		</div>		
	</div>


<?php 
 	require '../partials/footer.php';
?>