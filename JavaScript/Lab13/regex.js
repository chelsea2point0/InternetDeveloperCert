function startAtoF() {
	var myString = "Chelsea makes great apple pie";
	var regEx = /\b[a-f]/i;
	alert(regEx.test(myString));
}

function containsNumber() {
	var myString = "Thanksgiving is on Thursday, November 26.";
	var regEx = /[0-9]/g;
	alert(regEx.test(myString));
}

function toElizabeth() {
	var myString = "My friend Betsy Ann Savage";
	var regEx = myString.replace(/betsy/i, "Elizabeth");
	alert(regEx);
}

function toXXX() {
	var myString = "123abcdefg584";
	var regEx = myString.replace(/abcdefg/, "XXX");
	alert(regEx);
}

function promptUser() {
	var str = prompt("Please enter a string that includes letters and numbers.");
	var regEx = /4|a/ig;
	alert(regEx.test(str));
}