<html>
	<head>
		<title>Chelsea Schaefer - Lab 3</title>
		<link rel="stylesheet" type="text/css" href="lab3style.css">
	</head>
	<body>
		<h1>Chelsea's Book Store</h1>
		<h3>Operating Costs:</h3>
		<?php 
			extract($_POST);
			$expense_total = $_POST["rent"] + $_POST["salary"] + $_POST["supplies"];
			$operating_income = $_POST["sales"] - $expense_total;
			$net_income = $operating_income * 0.60;
		?>
		Sales: $<?php echo $_POST["sales"]; ?> <br>
		Expenses: <br>
		<ol>
			<li>Rent $<?php echo $_POST["rent"]; ?></li>
			<li>Salary $<?php echo $_POST["salary"]; ?></li>
			<li>Supplies $<?php echo $_POST["supplies"]; ?></li>
		</ol>
		<h3>Income and Expense Totals:</h3>
		Expense Total: $<?php echo $expense_total; ?> <br>
		Operating Income: $<?php echo $operating_income; ?> <br>
		Net Income: $<?php echo $net_income; ?> <br>

	</body>
</html>