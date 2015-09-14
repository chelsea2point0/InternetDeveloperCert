<html>
	<head>
		<title>Chelsea Schaefer - Lab 3</title>
		<?php 
			$background_color = '#' . dechex(rand("000", "999999"));
			$squared = ($_POST["square"] * $_POST["square"]);
			$sqroot= sqrt($_POST["sqroot"]);
		?>
	</head>
	<body bgcolor= "<?php echo $background_color; ?>;">
		<h1>Lab 4 Calculator</h1>
		<h3>Results</h3>
	
	Your first number squared is <?php print $squared; ?> <br>
	The square root of your second number is <?php print $sqroot; ?> <br>		
	</body>
</html>