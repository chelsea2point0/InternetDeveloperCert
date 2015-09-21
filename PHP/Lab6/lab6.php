<!DOCTYPE html>
<html>
<head>
<title>Lab 6 - Chelsea Schaefer </title>
</head>
<body>
<?php
	extract ($_REQUEST, EXTR_SKIP);
	if (isset ($grade1) && isset($grade2) && isset($grade3)) {
		if (is_numeric($grade1) && is_numeric($grade2) && is_numeric($grade3) &&
			$grade1 >= 0 && $grade1 <= 100 &&
			$grade2 >= 0 && $grade2 <= 100 &&
			$grade3 >= 0 && $grade3 <= 100) {
				$avgGrade = ($grade1 + $grade2 + $grade3)/3;
				if ($avgGrade < 60) {
					echo "<h5><span style='color: red'>Your average grade of ".round($avgGrade, 2)." is an F. You need to concentrate.</span></h5>";
				} elseif ($avgGrade < 70) {
					echo "<h4>Your average grade of ".round($avgGrade, 2)." is a D.</h4>";
				} elseif ($avgGrade < 80) {
					echo "<h3>Your average grade of ".round($avgGrade, 2)." is a C.</h3>";
				} else if ($avgGrade < 90) {
					echo "<h2>Your average grade of ".round($avgGrade, 2)." is a B.</h2>";
				} else {
					echo "<h1>Your average grade of ".round($avgGrade, 2)." is an A!</h1>";
				}
		} else {
			echo "<span style='font-weight:bold'>ERROR: You did not enter a valid number for one or more of your test scores. Please try again, with test scores between 0-100.</span>";
		}
	} else {
		$grade1 = $grade2 = $grade3 = '';
	}
	?>
	
	<p>Please enter your 3 most recent test grades.</p><br>
	<form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" />
		Test 1: <input type="text" name="grade1"><br>
		Test 2: <input type="text" name="grade2"><br>
		Test 3: <input type="text" name="grade3"><br>
		<p></p>
		<input type="submit" name="submit" value="Calculate Average Grade">
	</form>
	
	
</body>
</html>