window.onload = function() {
	document.getElementById("submit").onclick = display_form_data;
}

function display_form_data() {	
	var winObj = open("lab10-1.html", "New Window", "width=500, height=200, resizeable=yes, scrollbars=yes");
	winObj.focus();
	var name = document.forms["form1"].elements["textField1"].value;
	var message = document.forms["form2"].elements["textArea1"].value;
	winObj.document.write("Hello " + name + "! ");
	winObj.document.write("We received your message: \"" + message + "\"");
}


