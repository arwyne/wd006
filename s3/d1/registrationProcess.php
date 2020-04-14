<?php 
	// $_POST['name_attr_value_of_inputfield/textarea']
	// $_GET['name_attr_value_of_inputfield/textarea']
	// var_dump($_POST['firstname']);
	// var_dump($_POST['lastname']);
	// var_dump($_POST['email']);
	// var_dump($_POST['password']);
	
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	// $register = array();
	// array_push($register, $firstname, $lastname, $email, $password);
	// var_dump($register);


	echo "Hello $firstname $lastname! Thank you for signing up on our page!";
 ?>