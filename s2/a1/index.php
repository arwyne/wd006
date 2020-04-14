<!DOCTYPE html>
<html>
<head>
	<title>Activity 2: Foreach Loop</title>
</head>
<body>
	<?php 
		// Create a variable called "grades"
		// Assign associative array values to variable grades
		/*
			Math => 90
			Physics => 89
			English => 95
			PE => 89
			History => 90
			Computer => 97
			Economics => 89
			Values => 98

		*/
		// Iterate variables grades with the ff format:

			/* Expected output: 
				Your grade in Math is 90
				Your grade in Physics is 89
				Your grade in English is 95
				Your grade in PE is 89
				Your grade in History is 90
				Your grade in Computer is 97
				Your grade in Economics is 89
				Your grade in Values is 98

			*/

		$grades = ["Math" => 98, "Physics" => 89, "English" => 95, "PE" => 89, "History" => 90, "Computer" => 97, "Economics" => 89, "Values" => 98];
		foreach ($grades as $subject => $grade) {
			echo "Your grade in " . $subject . " is " . $grade;
			echo "<br>";
		}

	 ?>

</body>
</html>