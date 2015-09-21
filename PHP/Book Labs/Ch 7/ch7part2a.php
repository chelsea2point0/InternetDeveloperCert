<!DOCTYPE html>
<html>
<head>
<title>Ch 7 Lab 2</title>
</head>
<body>
	<h1>Suggested Height/Weight for Men</h1>
	<?php
		$heightIn = 0;
		while ($heightIn < 12) {
			$weight = "6 ft ".$heightIn." in = ".(3.5*$heightIn + 136)." lbs.<br>";
			echo $weight;
			$heightIn += 2;
		}
	?>
	<!-- 
	6' = 136
	6' 2 = 143
	6' 4 = 150
	6' 6 = 157
	6' 8 = 164
	6' 10 = 171
	-->
</body>
</html>