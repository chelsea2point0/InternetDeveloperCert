window.onload = function() {
	document.getElementById("verdana").onclick = toVerdana;
	document.getElementById("fontSize").onclick = changeFontSize;
	document.getElementById("bgGreen").onclick = toGreenBG;
	document.getElementById("redText").onclick = toRedText;
	document.getElementById("moveParagraphs").onclick = moveText;
}

function toVerdana() {
	var x = document.getElementById("content");
	var y = x.getElementsByTagName("P");
	for (var i = 0; i < y.length; i++) {
		y[i].style.fontFamily = "Verdana";
	}
}

function changeFontSize() {
	var x = document.getElementById("content");
	var y = x.getElementsByTagName("P");
	for (var i = 0; i < y.length; i++) {
		y[i].style.fontSize = "20px";
	}
}

function toGreenBG() {
	document.getElementById("third").style.backgroundColor = "green";
}

function toRedText() {
	document.getElementById("third").style.color = "red";
}

function moveText() {
	var x = document.getElementById("content");
	x.style.left = Math.random()*300 + "px";
	x.style.top = Math.random()*(301) + 100 + "px";
}

