<!DOCTYPE html>
<html>
<head>
	<title>Activity 2: While, Do While Loop</title>
</head>
<body>

	<?php

		// for While Loop
		// create a variable called "num1"
		// using while loop, below are the expected output

		/*
		While Loop
		5
		4
		3
		2
		1
		*/

		// Do While Loop
		// create a variable called "num2"
		// using do while loop, below are the expected output

		/*
		Do While Loop
		0
		5
		10
		15
		*/
	?>
		<h3>While Loop</h3>
	<?php
		$num1 = 5;
		while ($num1 > 0) {
			echo "$num1";
			echo "<br>";
			$num1--;
		}
	?>


		<h3>Do While Loop</h3>
	<?php
		$num2 = 0;
		do {
			echo "$num2";
			echo "<br>";
			$num2 += 5;
		} while ($num2 <= 15)
	 ?>

</body>
</html>