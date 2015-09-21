<!DOCTYPE html>
<html>
<head>
<title>Lab 7a</title>
</head>
<body>
	<?php
	extract($_REQUEST);
	if (! isset ($age)) {
		exit;
	}
	if ($age < 21) {
		echo "You are too young to drink";
	} elseif ($age >= 21) {
		echo "You are too old to drink and drive";
	}
	?>
</body>
</html>