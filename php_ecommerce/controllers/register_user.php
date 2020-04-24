<?php 
	//reference code from another file
	require './connection.php';

	// echo 'hello from register_user';
	
	// var_dump($_POST);

	// superglobal variables simple means that it is a specially
	// PRE-DEFINED variables(normally arrays) that can be accessed anywhere in our program

	// the POST request returned an array where it is established the name attribute of the input as the KEY and the value inputted to it as as VALUE
	
	// var_dump($_POST);
	// var_dump($_POST['firstName']);

	// sanitize our inputs
	// htmlspecialchars(value to be sanitized);
	
	$fname = htmlspecialchars($_POST['firstName']);
	$lname = htmlspecialchars($_POST['lastName']);
	$username = htmlspecialchars($_POST['username']);
	$email = htmlspecialchars($_POST['email']);
	$password = htmlspecialchars($_POST['password']);
	$confirmPassword = htmlspecialchars($_POST['confirmPassword']);
	$role_id = 2;


	// var_dump($fname);
	// var_dump($lname);
	// var_dump($username);
	// var_dump($email);
	// var_dump($password);
	// var_dump($confirmPassword);

	if($fname !="" && $lname !=="") {
		echo "Welcome " . $fname . $lname;
	} else {
		echo "please provide a complete name";
	}

	if($email != "") {
		echo "your email is: " . $email;
	} else {
		echo "please provide a valid email";
	}

	if($password != "" && $confirmPassword != "") {
		// lets hash our passwords to make it secure
		$password = sha1($password);
		$confirmPassword = sha1($confirmPassword);
		var_dump($password);
		var_dump($confirmPassword);

		// check if passwords match
		if($password === $confirmPassword) {
			// echo "passwords match";

			// insert the user to our database
			// INSERT INTO users(firstname, lastname, username, email, password, role_id) VALUES('john', 'doe', 'jdoe', 'jdoe@email.com', 'pass123', 2)
			// $insert_query = "INSERT INTO users(firstname, lastname, username, email, password, role_id) VALUES('john', 'doe', 'jdoe', 'jdoe@email.com', 'pass123', 2)";

			$insert_query = "INSERT INTO users(firstname, lastname, username, email, password, role_id) 
										VALUES('$fname', '$lname', '$username', '$email', '$password', 2)";
			// var_dump($insert_query);

			// mysqli_query(connection to database, query to be executed)
			$result = mysqli_query($conn, $insert_query);
			// var_dump($result);
			if($result) {
				echo 'registered successfully';
				header('Location: ../views/login.php');
			} else {
				echo mysqli_error($conn);
			}

		} else {
			echo "please check password fields";
		}
	} else {
		echo "check password fields";
	}
	


	
 ?>

 <!-- alter table users drop column email;
 alter table users add column email varchar(255) not null unique;

 insert into users(firstname, lastname, username, password, email, role_id) values ('arwyne', 'deguzman', 'arwyne123', 'pass123', 'arwyne@email.com', 2);

 select firstname, lastname from users;

 select * from users; -->