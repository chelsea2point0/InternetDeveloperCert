<!DOCTYPE html>
<html>
<head>
<title>Lab 7b</title>
</head>
<body>
	<?php
	extract($_REQUEST);
	$avgGrade = ($grade1 + $grade2 + $grade3)/3;
	if ($avgGrade < 60) {
		echo "<h5>Your average grade of ".round($avgGrade, 2)." is an F. You need to concentrate.</h5>";
	} elseif ($avgGrade < 70) {
		echo "<h4>Your average grade of ".round($avgGrade, 2)." is a D</h4>";
	} elseif ($avgGrade < 80) {
		echo "<h3>Your average grade of ".round($avgGrade, 2)." is a C</h3>";
	} else if ($avgGrade < 90) {
		echo "<h2>Your average grade of ".round($avgGrade, 2)." is a B</h2>";
	} else {
		echo "<h1>Your average grade of ".round($avgGrade, 2)." is an A!</h1>";
	}
	?>
</body>
</html>