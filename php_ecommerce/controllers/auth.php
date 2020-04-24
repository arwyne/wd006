<?php 
	session_start();
	
	require './connection.php';

	// sanitize the form inputs
	$email = htmlspecialchars($_POST['email']);
	$password = sha1(htmlspecialchars($_POST['password']));

	// var_dump($email);
	// var_dump($password);

	// SELECT * FROM users WHERE email = 'kyle@mail.com'
	$user_query = "SELECT * FROM users WHERE email = '$email'";

	$user_result = mysqli_query($conn, $user_query);

	// var_dump($user_result); //num_rows = int(1)

	// converts the retrieved record froum out db into an associative array

	$user_info = mysqli_fetch_assoc($user_result);

	// var_dump($user_info);
	// var_dump($user_info['email']);

	$flag = false;

	// mysqli_num_rows() - is a function used to return the number of rows present in the result of mysqli_query, generally it used to check if data is present in our database
	// if the number of rows is greater than 0
	if (mysqli_num_rows($user_result) > 0) {
		// echo $user_info['email'] . $user_info['password'];
		if ($password != $user_info['password']) {
			// if hindi nagmatch yung input ni user sa password field sa users table sa database
			die('login_failed');
			//prevents the code below from being executed
		} else {
			// kung nag match yung user input sa password field sa nasa users table sa database, mag c-create ng session for our user
			$_SESSION['user'] = $user_info;
			$flag = true;
			// var_dump($_SESSION['user']['username']);
		}

	} else {
		echo "No credentials found!";
		$flag = false;
	}


	if ($flag) {
		header('Location: ../views/gallery.php');
	} else {
		echo "Wrong credentials";
	}





	/*
		Goal for login:
		1. Retrieve the email & password on our DB using Select, and check if it has result num_rows = int(1)
		2. Convert the retrieved record from the db into associative array
		3. Create a flag that will check the user password, if it returns true, $_SESSION for user will be created, else user login failed
		4. Create a condition that checks the flag, if the flag is true, it will go to gallery page, else it will return wrong credentials


	*/


 ?>