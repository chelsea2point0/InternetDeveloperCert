<!DOCTYPE html>
<html>
<head>
<title>Lab 7c</title>
</head>
<body>
	<?php
	extract($_REQUEST);
		switch ( $city ) {
			case "San Francisco":
				echo "Get ready for all of those hills in ".$city."!";
				break;
			case "New York":
				echo "I bet you are excited to try some ".$city." deli's!";
				break;
			case "London":
				echo "Big Ben is a great place to visit on your trip to ".$city."!";
				break;
			case "Paris":
				echo "You simply must enjoy some authentic French cheese and wine while you are in ".$city."!";
				break;
			case "Honolulu":
				echo "Bring your surf board for your trip to ".$city."!";
				break;
			case "Tokyo":
				echo "Have some hand-rolled sushi while you are in ".$city."!";
				break;
		}
	?>
</body>
</html>