<!-- php delimiter -->
<?php 
	// single line comment
	/*
		multi line comment
	*/ 

	// to serve a project, we use the syntax
		// php -S address:port 		


?>

<!DOCTYPE html>
<html>
<head>
	<title>Introduction to PHP</title>
</head>
<body>

	<h1>Introduction to PHP</h1>

	<?php
	// php delimiter - php scripts
	// don't forget to add semicolon on the end of the code
	// echo "Hello World"; //this prints values on our page
	// var_dump("Hello World"); //use to debug php codes

	// PHP Variables, Data Types and Constants
	$my_var = "Batch 56"; //String data type
	// All variables names must start with a dollar sign
	// Variable names are cased sensisitive,
	// $my_var is diff from $MY_VAR
	// Variables name must start with a letter
	// Variables names must not contain any spaces
	// $first name
	// we can instead use an underscore in the place of the space
	// $first_name
	// $firstName

	echo $my_var;
	// var_dump($my_var);
	echo "<h2> $my_var </h2>"; //double quote - it will read string and php variables
	echo '<h2> $my_var </h2>'; //single quote - it will read only the php variables as a string

	// PHP Data types:

	//Integer - whole numbers
	$fave_num = 2940;
	echo $fave_num;
	echo "<br>";

	//Floating point number
	$top_speed = 104.87;
	echo $top_speed;
	echo "<br>";

	//String
	$bootcamp_course = "PHP & MySQL";
	echo $bootcamp_course;
	echo "<br>";

	//Boolean - true or false
	$logged_in = true;
	echo $logged_in;
	echo "<br>";

	// PHP Constant
	// Constant - a value of a variable that cannot be changed at runtime.
	// PI = 3.14
	// define(constant_name, value, case_insensitive); //define function - creates a constant value of a variable.
	define("PI", 3.14);

	echo PI;
	echo "<br>";

	define("Title", "Defining PHP Constants");
	echo Title;
	echo "<br>";

	// Arithmetic Operators and Comparison Operators
	$num1 = 3;
	$num2 = 4;

	// Addition
	$total = $num1 + $num2;
	echo "Total: $total";
	echo "<br>";

	// Subtraction
	$difference = $num2 - $num1;
	echo "Difference: $difference";
	echo "<br>";

	// Multiplication
	$product = $num1 * $num2;
	echo "Product: $product";
	echo "<br>";

	// Division
	$quotient = $num2 / $num1;
	echo "Quotient: $quotient";
	echo "<br>";

	// Modulo
	$remainder = $num2 % $num1;
	echo "Remainder: $remainder";
	echo "<br>";

	// Increment
	echo ++$num2;
	echo "<br>";

	// Decrement
	echo --$num1;
	echo "<br>";

	echo (1 + 5) * 3 ;
	echo "<br>";


	// Comparison Operators

	// Equality
	echo 1 == "1";
	echo "<br>";

	// Strict Equality
	echo 1 === "1";
	echo "<br>";

	// Not Equal
	echo 2 != 1;
	echo "<br>";

	// Greater than & Less than
	echo 3 > 1; //true / 1
	echo "<br>";

	// Less than
	echo 2 < 1; //false
	echo "<br>";

	// Greater than equal
	echo 2 >= 1; //true
	echo "<br>";

	// Less than equal
	echo 8 <= 6; //false
	echo "<br>";

	
	// PHP ARRAYS
	// array(); //create an array
	// 3 types of arrays

	/*
		Indexed Arrays - arrays with a numberic index
		Associative Arrays - arrays with a "key" => "value" pair
		Multidimensional Arrays - arrays containing one or more arrays
	*/


	// Indexed Array
	$topics = array("HTML", "CSS", "Javascript", "jQuery", "PHP");
	// echo "You are the  CSS of my HTML";
	echo "You are the " . $topics[1] . " of my " . $topics[0];
	echo "<br>";

	$topics[0] = "Hypertext Markup Language";
	echo $topics[0];
	echo "<br>";

	// Associative Array - used to store key value pairs
	$student = array("Math" => 95, "Physics" => 90, "Chemistry" => 96, "English" => 93, "Computer" => 98);

	echo "Math: " . $student["Math"];
	echo "<br>";
	echo "Computer: " . $student["Computer"];
	echo "<br>";
	echo "Chemistry: " . $student["Chemistry"];
	echo "<br>";
	echo "English: " . $student["English"];
	echo "<br>";

	// Multidimensional Arrays
	$batch56 = array(
		array("HTML", "CSS", "Bootstrap"),
		array("Javascript", "jQuery"),
		array("PHP", "MySQL", "Laravel")
	);

	echo "Multidimensional arrays";
	echo "<br>";
	print_r($batch56[0][2]);
	echo "<br>";
	echo "Front End: " . $batch56[0][0] . ", " . $batch56[0][1] . ", " . $batch56[0][2] . ", " . $batch56[1][0] . ", " . $batch56[1][1];
	echo "<br>";
	echo "Back End: " . $batch56[2][0] . ", " . $batch56[2][1] . ", " . $batch56[2][2]
	?>

	<table border ="1">
		<thead>
			<tr>
				<th>Front End</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>
					<?php
						echo $batch56[0][0]; 
					 ?>		
				</td>
			</tr>
			<tr>	
				<td>
					<?php
						echo $batch56[0][1]; 
					 ?>		
				</td>
			</tr>
			<tr>
				<td>
					<?php
						echo $batch56[0][2]; 
					 ?>		
				</td>
			</tr>
		</tbody>
	</table>

</body>
</html>