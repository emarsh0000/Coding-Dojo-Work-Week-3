<?php 

echo "Hello World! ";


$ben = "Benjamin Tiddle";
$emily = "Emily Marsh";
$count = array("cabbage", "tomatos", "carrots", "onions", "peas", "chocolate");
$number = 42;
$problem = (2 + 6);
$spanish = "pollo";
$italian = "vorre";

echo $ben . " " . $emily . " " . $number . " " . $problem . " " . $spanish . " " . $italian;

for($i = 0; $i < count($count); $i++) {
	echo $count[$i] . " ";
}

?>


<!doctype html>
	<html>
		<head>
			<meta charet = "UTF-8">
			<title>Playing with PHP!</title>
		</head>
		<style type="text/css">
		</style>

			<body>
				<h1><?php echo "Chocolate is good food"; ?></h1>
				<p><?php echo "Just last night I was thinking of coding with you."; ?></p>
				<a href = "#">I'm a LINK!</a>

