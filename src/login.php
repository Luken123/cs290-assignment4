<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
session_start();

  $_SESSION = array();
  session_destroy();

?>


<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title> Login </title>
	</head>
	<body>
		<h1> User Login</h1>
		<br>

		<form action="content1.php" method="POST">
			Enter username here: <br>
			<input type = "text" name="username">
			<input type = "submit" value="Login">
		</form>
	</body>
</html>

