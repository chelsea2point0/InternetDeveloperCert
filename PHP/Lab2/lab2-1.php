<?php
	/*
		Author: Chelsea Schaefer
		Date: 9/9/2015
		Description:
		This is a PHP script that outputs today's date and time as well as sunset time.
	*/
	
?>
<html>
	<head>
		<title>Chelsea Schaefer - Lab 2-1</title>
	</head>
	<body>
		<h1>Today's Date, Time & Sunset</h1>
<?php
		//Today's date and time using date() function
		//print date("jS \of F Y h:i:s A") . "<br>";
		//Today's sunset time - date_sunset() function. lat/long = 42.70n and -71.52w
		print "Today is " . date("l F jS, Y h:i:s A"). "<br>" . ' Tonight the sun will set at: ' .date_sunset(time(), SUNFUNCS_RET_STRING, 42.70, -71.52);
?>
</body>
</html>