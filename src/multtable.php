<?php

error_reporting('E_all');
ini_set("display_errors",1);
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>MULT TABLE</title>
</head>

<body>
	
<?php
	$error = false;

if(!isset($_GET['min-multiplicand'])){
	echo"<br> Missing parameter [min-multiplicand]";
	$error = true;
}

if(!isset($_GET['max-multiplicand'])){
	echo"<br> Missing parameter [max-multiplicand]";
	$error = true;
}

if(!isset($_GET['min-multiplier'])){
	echo"<br> Missing parameter [min-multiplier]";
	$error = true;
}

if(!isset($_GET['max-multiplier'])){
	echo"<br> Missing parameter [max-multiplier]";
	$error = true;
}



$minMultiplicand = intval($_GET['min-multiplicand']);
$maxMultiplicand = intval($_GET['max-multiplicand']);
$minMultiplier = intval($_GET['min-multiplier']);
$maxMultiplier = intval($_GET['max-multiplier']);

if(!is_int($minMultiplicand)){
	echo"<br> min-multiplicand must be an integer";
	$error = true;
}

if(!is_int($maxMultiplicand)){
	echo"<br> max-multiplicand must be an integer";
	$error = true;
}

if(!is_int($minMultiplier)){
	echo"<br> min-multiplier must be an integer";
	$error = true;
}

if(!is_int($maxMultiplier)){
	echo"<br> max-multiplier must be an integer";
	$error = true;
}

if($minMultiplicand > $maxMultiplicand){
	echo"<br> Minimum multiplicand is larger than maximum.";
	$error = true;
}

if($minMultiplier > $maxMultiplier){
	echo"<br> Minimum multiplier is larger than maximum.";
	$error = true;
}


if($error){
	exit;
}
	

echo"<br>";

echo "<table border='1' style ='width:50%'>";
echo "<tr><td><t/d>";

for($i = $minMultiplier; $i <= $maxMultiplier; $i++){
		echo "<th>$i</th>";
}

echo "<tr>";

for($x = $minMultiplicand; $x <= $maxMultiplicand; $x++){
		echo "<tr>";
		echo "<th>$x</th>";

		for($y = $minMultiplier; $y <= $maxMultiplier; $y++){
			echo "<td>". $x * $y . "</td>";
		}
		echo "</tr>";
}
?>

</table>
</body>
</html>

















