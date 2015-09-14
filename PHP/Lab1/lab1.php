<?php
	/*
		Author: Chelsea Schaefer
		Date: 9/2/2015
		Description:
		This is a simple PHP script that outputs Hello World text.
	*/
	
?>
<html>
	<head>
		<title>Hello World</title>
		<link rel="stylesheet" type="text/css" href="lab1style.css">
	</head>
	<body>
		<h1>Hello World example</h1>
<?php
		//This is a comment line (C++ style)
		print "It's such a perfect day!<br/>";		#another comment here
		print "\"Ouch\""." that hurts!<br/>";
		$name = "Chelsea";
		print "<h2>Fun Facts about $name:</h2>";
		print "<ol>";
		print "<li> $name is taking a PHP course.</li>";
		print "<li> $name loves sandwiches.</li>";
		print "<li> {$name}'s favorite color is blue.</li>";
		print "</ol>"
?>