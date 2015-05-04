<?php

error_reporting(E_ALL);
ini_set("display_errors",1);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset = "UTF-8">
		<title> loopback.php </title>
	</head>
	<body></body><br>

<?php

	if($_SERVER['REQUEST_METHOD'] === 'GET'){
		echo "GET METHOD:";

		if($_SERVER["QUERY_STRING"] == NULL){
			$json_str = ["Type" => $_SERVER['REQUEST_METHOD'], "parameters" => NULL];
		}
		$json_str =["Type" => $_SERVER['REQUEST_METHOD'], "parameters" => $_GET];

		echo"<br>";
		echo json_encode($json_str);
	}


	if($_SERVER['REQUEST_METHOD'] === 'POST'){
		echo "POST METHOD:";

		if($_SERVER["QUERY_STRING"] == NULL){
			$json_str = ["Type" => $_SERVER['REQUEST_METHOD'], "parameters" => NULL];
		}
		$json_str =["Type" => $_SERVER['REQUEST_METHOD'], "parameters" => $_POST];

		echo"<br>";
		echo json_encode($json_str);
	}


	echo "</body>";
echo "</html>";

?>