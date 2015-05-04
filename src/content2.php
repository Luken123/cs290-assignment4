<?php
session_start();

//checks for valid login
if (!isset($_SESSION['validLogin'])){
	$filePath = explode('/', $_SERVER['PHP_SELF'], -1);
	$filePath = implode('/', $filePath);
	$redirect = "http://" . $_SERVER['HTTP_HOST'] . $filePath;
	header("Location: {$redirect}/login.php" , true);
	}
	else {

		if (!isset($_SESSION['numVisits2'])){
		$_SESSION['numVisits2'] = 0;
		}
		echo "Greetings " . $_SESSION['username'] . ", you have visited this page " . $_SESSION['numVisits2'] . " times before.
		 Click " . "<a href ='content1.php'>content1.php</a>". " to go back to content1.php page.";
		$_SESSION['numVisits2'] ++;			
		}
?>