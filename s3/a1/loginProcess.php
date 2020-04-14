<?php 
	session_start();

	$credentials = [
		["username" => "sample123", "password" => "sample123"],
		["username" => "JohnDoe", "password" => "john123doe"]
	];

	// Instructions
	/*
		Create a variable "username" and assign a value -> username from the form
		Create a variable "password" and assign a value -> password from the form
		
		create a foreach loop that will iterate each credentials
		inside the foreach loop make a conditional statement, where in, if the username and the password from the form matches the username and password from the $credentials, it will return "Successfully logged in", other wise it will return "credentials mismatched!"
	*/
		
		$uname = $_POST['uname'];
		$pwd = $_POST['pwd'];

		foreach ($credentials as $index => $credential) {
			if($uname == $credentials[0]["username"] && $pwd == $credentials[0]["password"] || $uname == $credentials[1]["username"] && $pwd == $credentials[1]["password"]) {
				echo "Successfully logged in";
				$_SESSION['authenticated_user'] = $uname;
				echo "<a href='./home.php'>Go to Home page </a>";
				break;
			} else{
				echo "Credentials mismatched";
				break;
			}
		}



	?>