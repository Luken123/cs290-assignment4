<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
session_start();

//input validation for no username
if(!isset($_POST['username']) || $_POST['username'] == null){
	if(!isset($_SESSION['validLogin'])){
		echo "A username was not entered.";
		echo " Please click " . "<a href = 'login.php'>loging</a> ". " to return to the login screen";
		session_destroy();
		die;
	}
}

//checks for proper login
//http://php.net/manual/en/reserved.variables.server.php...used to call contents of host and current pages
if(!isset($_SESSION['validLogin']) && !isset($_POST['username'])){
	$_SESSION = array();
	session_destroy();
	$filePath = explode('/', $_SERVER['PHP_SELF'], -1);
	$filePath = implode('/', $filePath);
	$redirect = "http://" . $_SERVER['HTTP_HOST'] . $filePath;
	header("Location: {$redirect}/login.php" , true);
	die();
}


if(!isset($_SESSION['username'])){
	$_SESSION['username'] = htmlspecialchars($_POST["username"]);
}
	$_SESSION['validLogin'] = 0;

	if(!isset($_SESSION['numVisits'])){
			$_SESSION['numVisits'] = 0;
	}

	echo "Greetings " . $_SESSION['username'] . ", you have visited this page " . $_SESSION['numVisits'] . " times before.\n" ;
	echo "You can click " . " <a href = 'content1.php?logout=true'>logout</a>" . " to logout or ";
	echo " you can click " . " <a href = 'content2.php'>content2.php</a>" . " to access more content.";

	$_SESSION['numVisits'] = $_SESSION['numVisits'] + 1;




	if(isset($_GET['logout'])){
	$_SESSION = array();
	session_destroy();
	$filePath = explode('/', $_SERVER['PHP_SELF'], -1);
	$filePath = implode('/', $filePath);
	$redirect = "http://" . $_SERVER['HTTP_HOST'] . $filePath;
	header("Location: {$redirect}/login.php" , true);
	die();

}
?>
