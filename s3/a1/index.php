<!DOCTYPE html>
<html>
<head>
	<title>PHP Login Page</title>
</head>
<body>

	<h1>Login Page</h1>
	<hr>
	<form action="./loginProcess.php" method="POST">
		<label>Username:</label>
		<input type="text" name="uname">
		<br>
		<label>Password:</label>
		<input type="password" name="pwd">
		<br>
		<button type="submit">Log in</button>
	</form>

</body>
</html>