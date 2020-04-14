<!DOCTYPE html>
<html>
<head>
	<title>PHP Control Structures</title>
</head>
<body>
	<?php 
	// Conditional Statements

	// If Else
	$firstNumber = 25;
	$secondNumber = 21;

	// true
	if($firstNumber > $secondNumber) {
		echo "The firstNumber is greater than the secondNumber";
	} else {
		echo "The secondNumber is greater than the firstNumber";
	}

	echo "<br>";

	// If ElseIf Else
	$nativeLanguage = "Spanish";
	if ($nativeLanguage == "French") {
		echo "Bonjour! Vous parlez Francias.";

	} elseif($nativeLanguage == "Spanish") {
		echo "Hola! Usted habla Espanol.";

	} else {
		echo "Hello! You probably speak English.";
	}
	 
	echo "<br>";

	// Switch Case
	$today = "monday";

	switch ($today) {
		case 'sunday': // 1st case
			echo "Family Day";
			break; // breaks the loop from iterating to another case

		case 'saturday':
			echo "Saturday Beerday";
			break;

		case 'wednesday':
			echo "Labaday";
			break;
		default:
			echo "have a nice day at work";
			break;
	}

	echo "<br>";

	// Loops
	// foreach loop - use to iterate through array values
	$fruits = array("Apple", "Oranges", "Grapes", "Strawberry", "Cherrry");
	// echo $fruits[0];
	// echo $fruits[1];
	// echo $fruits[2];

	foreach ($fruits as $fruit) {
		echo $fruit;
		echo "<br>";
	}

	$mobile_brands = ["Apple", "Samsung", "Huawei", "Oppo", "Vivo", "Nokia"];

	foreach ($mobile_brands as $mobile_brand) {
		echo $mobile_brand;
		echo "<br>";
	}

	$employees = array(
		array("firstname" => "Juan", "lastname" => "Dela Cruz"),
		array("firstname" => "Maria", "lastname" => "Cruz"),
		array("firstname" => "John", "lastname" => "Doe"),
		array("firstname" => "Jane", "lastname" => "Doe")
	);
	// echo $employees[0]["firstname"];
	// echo $employees[0]["lastname"];

	foreach ($employees as $index => $employee) {
		// echo $index;
		// var_dump($employee);
		echo $employee["firstname"] . " " . $employee["lastname"];
		echo "<br>";
	}

	// While & Do while loop
	$i = 0;
	while ($i < 5) {
		echo "$i is lessthan 5";
		echo "<br>";
		$i++;
	}

	// do while, the code block is executed first, before the condition is evaluated
	$j = 1;
	do {
		echo "$j is less than 9";
		echo "<br>";
		$j++;

	} while ($j < 9);


	 ?>

</body>
</html>
<!-- 
Intro PHP
php delimiter
php variables - $firstName
echo -> "" can detect variables inside, '' all strings inside
php datatypes
php constant  - define("variable name", "assigned value")
php arrays - indexed arrays, associative arrays, multidimensional arrays
$indexedarrays = array("array1", "array2")
$assocarrays = array("id" => "123", "firstname" => "lara")
$multiarrays = array(
	array("movietitle" => "rome and juliet", "genre" => "romance")
	array("movietitle" => "Jonny English", "genre" => "comedy")
)
Arithmetic Operators
Comparison Operators

Control Structures
Conditional statements - If else, If elseif else, switch case
Loops - foreach loop -->