<?php 
	// require statement is the same as the include statement in the sense that it allows
	// devs to reference files frm a different location. the only difference is the error handling.
	// include will throw a warning but still execute the code,
	// while require will throw an error.
	// include_once and require_once does the same thing but once the file is included/require,
	// it will not execute again.
	// require '../partials/mali.php'; 
	// include '../partials/mali.php';
	require '../partials/header.php';

	if (isset($_SESSION['user'])) {
		header("Location: ./gallery.php");
	}

	

	function getTitle(){
		return "Register Page";
	} 
 ?>

 	<div class="container-fluid">
 		<h2 class="text-center">Registration Page</h2>

 		<div class="row">
 			<div class="col-md-8 mx-auto">

 				<!-- the action attributes sets the destination to which the form data is submitted.
 					the value of this can be an absolute/relative url -->

 				<!-- the method attribute specifies the type of HTTP request you want to make
 					when sending the form data -->

 				<form action="../controllers/register_user.php" method="POST">
 					<div class="form-group">
 						<label for="fname">First Name</label>
 						<input id="fname" type="text" name="firstName" class="form-control">
 					</div>
 					<!-- end form group -->

 					<div class="form-group">
 						<label for="lname">Last Name</label>
 						<input id="lname" type="text" name="lastName" class="form-control">
 					</div>
 					<!-- end form group -->

 					<div class="form-group">
 						<label for="email">Email</label>
 						<input id="email" type="email" name="email" class="form-control">
 					</div>
 					<!-- end form group -->

 					<div class="form-group">
 						<label for="username">Username</label>
 						<input id="username" type="text" name="username" class="form-control">
 					</div>
 					<!-- end form group -->

 					<div class="form-group">
 						<label for="password">Password</label>
 						<input id="password" type="password" name="password" class="form-control">
 					</div>
 					<!-- end form group -->

 					<div class="form-group">
 						<label for="confirm">Confirm Password</label>
 						<input id="confirm" type="password" name="confirmPassword" class="form-control">
 					</div>
 					<!-- end form group -->

 					<!-- type submit will sumbit the form -->
 					<button type="submit" class="btn btn-dark btn-block">Register</button>

 				</form>
 			</div>
 		</div>
 		<!-- end row -->
 	</div>
 	<!-- end container fluid -->


<?php 

	require '../partials/footer.php';

 ?>