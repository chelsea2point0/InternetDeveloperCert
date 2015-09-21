<html>
<head>
<title>Chapter 7 Lecture</title>
</head>
<body>

<?php
extract ($_REQUEST, EXTR_SKIP);
if ( isset ( $submit )){ 
	// Your code will go here.
	$response1 = '';
	if (is_numeric($inputbox1) && $inputbox1 >= 1 && $inputbox1 <= 7)  {
		$response1 = "good";
	}
	
	if ($inputbox2 >= "A" && $inputbox2 <= "Q") {
		$response2 = "good";
	} else {
		$response2 = "invalid";
	}
	
	if ($inputbox3 == "first") {
		$response3 = "Chelsea";
	} elseif ($inputbox3 == "last") {
		$response3 = "Schaefer";
	} else {
		$response3 = "invalid";
	}
	
	switch ($inputbox4) {
		case "1":
			$response4 = "January";
			break;
		case "2": 
			$response4 = "February";
			break;
		case "3":	
			$response4 = "March";
			break;
		case "4":
			$response4 = "April";
			break;
		case "5":
			$response4 = "May";
			break;
		case "6":
			$response4 = "June";
			break;
		case "7":
			$response4 = "July";
			break;
		case "8":
			$response4 = "August";
			break;
		case "9":
			$response4 = "September";
			break;
		case "10":
			$response4 = "October";
			break;
		case "11":
			$response4 = "November";
			break;
		case "12":
			$response4 = "December";
			break;
		default: 
			$response4 = "invalid";
	}
	
	if (is_numeric($inputbox5) && $inputbox5 >= 2 && $inputbox5 <=6) {
		$response5 = 1;
		while (($num=rand(1,6)) != $inputbox5) {
			$response5 ++;
			if ($num == 1) {
				$response5 = "You lose";
				break;
			}
		}
	} else {
		$response5 = "invalid";
	}
	
	if (is_numeric($inputbox6) && $inputbox6 >=1 && $inputbox6 <=6) {
		$response6 = 0;
		do {
			$response6 ++;
		} while (rand(1,6) != $inputbox6);
	} else {
		$response6 = "invalid";
	}

	if (is_numeric($inputbox7) && $inputbox7 >= 1 && $inputbox7 <= 10) {
		$response7 = '';
		for ($i = 1; $i <= $inputbox7; $i++) {
			$response7 .= "*";
		}
	} else {
		$response7 = "invalid";
	}
	
	
} elseif (isset ($cancel)) {
	print "cancel <br />";
	// tbd
} else {
	//first time goes through here, set any defaults
	$response1 = $response2 = $response3 = $response4 = $response5 = $response6 = $response7 = '';
}
?>

<div id="my_form">
<form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" />


<label>Label 1: </label>
<input type="text" size=20 name="inputbox1" value="<?php echo $response1;?>"/><br /><br />
<label>Label 2: </label>
<input type="text" size=20 name="inputbox2"  value="<?php echo $response2;?>"/><br /><br />
<label>Label 3: </label>
<input type="text" size=20 name="inputbox3" value="<?php echo $response3;?>"/><br /><br />
<label>Label 4: </label>
<input type="text" size=20 name="inputbox4" value="<?php echo $response4;?>"/><br /><br />
<label>Label 5: </label>
<input type="text" size=20 name="inputbox5" value="<?php echo $response5;?>"/><br /><br />
<label>Label 6: </label>
<input type="text" size=20 name="inputbox6" value="<?php echo $response6;?>"/><br /><br />
<label>Label 7: </label>
<input type="text" size=20 name="inputbox7" value="<?php echo $response7;?>"/><br /><br />
<label>Label 8: </label>
<input type="text" size=20 name="inputbox8" /><br /><br />
<label>Label 9: </label>
<input type="text" size=20 name="inputbox9" /><br /><br />
<label>Label 10: </label>
<input type="text" size=20 name="inputbox10" /><br /><br />

<input type=submit name="submit" value="Submit" />
<input type=submit name="cancel" value="Cancel" />
</form>
</div>
</body>
</html>

