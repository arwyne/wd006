<!DOCTYPE html>
<html>
<head>
	<title>Mini Activity: PHP Functions</title>
</head>
<body>
	<h1>Arithmetic Operators</h1>
	<?php 
		//declare 2 parameters
		function arOperators($num1, $num2){
			$sum = $num1 + $num2; //find the sum of the parameters
			$difference = $num1 - $num2; //find the difference of the parameters
			$product = $num1 * $num2; //find the product of the parameters
			$quotient =  $num1 / $num2; //find the quotient of the parameters

			echo "The sum of $num1 and $num2 is $sum";
			echo "<br>";
			echo "The difference of $num1 and $num2 is $difference";
			echo "<br>";
			echo "The product of $num1 and $num2 is $product";
			echo "<br>";
			echo "The quotient of $num1 and $num2 is $quotient";
			echo "<br>";
		}

		arOperators(8, 9);
		arOperators(12, 4);
		arOperators(20, 10);


		// invoke the function with a given arguments -> 8, 9
		// invoke the function atleast 2x with a given arguments


	 ?>

</body>
</html>