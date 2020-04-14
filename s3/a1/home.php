<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h1>Welcome to my page <?php echo $_SESSION['authenticated_user']; ?></h1>

	<a href="./logoutProcess.php">Logout</a>

</body>
</html>