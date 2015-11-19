function display_color() {
	if (document.getElementById("blue").checked) {
		document.bgColor = "blue";
	} else if (document.getElementById("green").checked) {
		document.bgColor = "green";
	} else if (document.getElementById("red").checked) {
		document.bgColor = "red";
	} else if (document.getElementById("yellow").checked) {
		document.bgColor = "yellow";
	}
};