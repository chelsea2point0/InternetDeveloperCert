<?php
	/*
		Author: Chelsea Schaefer
		Date: 9/9/2015
		Description:
		Lab 2-2: This is a PHP script that outputs incoming costs for a book store.
	*/
	
?>
<html>
	<head>
		<title>Chelsea Schaefer - Lab 2-2</title>
		<link rel="stylesheet" type="text/css" href="lab2style.css">
	</head>
	<body>
		<h1>Chelsea's Book Store</h1>
<?php
	#Sales
	print "Sales: $190,000 <br>";
	#Expenses
	print "<br>Expenses: <br>";
	print "<ol>";
	print "<li>Rent: $25,000 </li>";
	print "<li>Salary: $37,500 </li>";
	print "<li>Supplies: $410 </li>";
	print "</ol>";
	//Total
	print "<br>Total: <br>";
	print "<ol>";
	print "<li>Operating Income: $43,910 </li>";
	print "<li>Income after Taxes: $31,616 </li>";	
?>
</body>
</html>