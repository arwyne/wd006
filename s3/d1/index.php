<!DOCTYPE html>
<html>
<head>
	<title>PHP Functions, Form Handling</title>
</head>
<body>
	<h2>PHP Functions</h2>
	<?php 
		function sayHello($greet){ //parameters
			echo "$greet Zuitt Coding BootCamp <br>";
		}

		sayHello("Hello"); //Argument
		// sayHello();
		// sayHello();

		function findSum($num1, $num2){
			$total = $num1 + $num2;
			echo $total . "<br>";
		}

		findSum(12, 5);

		function findProduct($num1, $num2) {
			$product = $num1 * $num2;
			return $product;
		}

		$return_value = findProduct(10, 2);
		// We can access the returned $product from fn findProduct through the use of $return_value
		echo "Returned value from the function: $return_value";



		// Form Handling
		// PHP superglobals $_GET and $_POST -> to collect information/form-data


	 ?>

	 <!-- form action - process for our form -->
	 <!-- form method - method of the process, GET and POST 
			method GET - it appears on the browser's url
			method POST - it keeps the form data from appearing the browser's url
	 -->
	 <h2>Registration Form</h2>
	 <form action="./registrationProcess.php" method="POST">
	 	<label>First Name</label>
	 	<input type="text" name="firstname">
	 	<br>
	 	<label>Last Name</label>
	 	<input type="text" name="lastname">
	 	<br>
	 	<label>Email</label>
	 	<input type="email" name="email">
	 	<br>
	 	<label>Password</label>
	 	<input type="password" name="password">
	 	<br>
	 	<button type="submit">Register</button>
	 </form>



</body>
</html>