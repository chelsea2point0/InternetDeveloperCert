<html>
<head>
	<title>Chelsea Schaefer - Lab 5</title>
</head>
<body>
	<?php 
		$string = "     mary jones lives in santa cruz, California at 22 ocean drive.";
		echo "The string has " . strlen("$string") . " letters. <br>" ;
		echo "All letters capitalized: " . strtoupper("$string") . "<br>";
		echo "All letters lowercase: " . strtolower("$string") . "<br>";
		#print 'Santa Cruz, California' only. First letter of each is uppercase.
		echo "Mary Jones lives in: " . ucwords(substr("$string",25,22)) . "<br>";
		#print Mary's street address
		echo "Mary's street address is: " . ucwords(substr("$string", 25,41)) . "<br>";
		#Trim out whitespace at beginning of the string
		echo "Without the white space, the string looks like this: " . ltrim("$string") . "<br>";
		#find index position of California
		echo "The index position of 'California' is: " . strpos("$string", "California") . "<br>";
		#replace Santa Cruz with Los Altos
		echo "Replacing 'Santa Cruz' with 'Los Altos': " . str_replace("santa cruz", "Los Altos", "$string") . "<br>";
		#find the number of words in the string
		echo "The string has " . str_word_count("$string") . " words in it." . "<br>";
	?>
</body>
</html>