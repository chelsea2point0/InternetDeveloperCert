window.onload = function() {
	document.getElementById("submit").onclick = evaluateCookie;
}

function getPreferences(chkboxName) {
  var checkboxes = document.getElementsByName(chkboxName);
  var checkboxesChecked = [];
  for (var i=0; i<checkboxes.length; i++) {
     if (checkboxes[i].checked) {
        checkboxesChecked.push(checkboxes[i].value);
     }
  }
  return checkboxesChecked.length > 0 ? checkboxesChecked : null;
}

function makeCookie(form) {
	//expire 2 minutes from now
	var when = new Date();
	when.setTime(when.getTime() + 2 * 60 * 1000);
	cookievalue1 = encodeURI(form.yourname.value) + ";";
	cookievalue2 = encodeURI(form.roomnumber.value) + ";";
	cookievalue3 = getPreferences("coffee") + ";";
	document.cookie = "name=" + cookievalue1;
	document.cookie = "room=" + cookievalue2;
	document.cookie = "coffee=" + cookievalue3;
	document.cookie = "expires=" + when.toUTCString() + ";";
	
	alert(document.cookie);
}

function ReadCookie() {
   var allcookies = document.cookie;
   cookiearray = allcookies.split(';');
   for(var i = 0; i < cookiearray.length; i++){
	  name = cookiearray[i].split('=')[0];
	  value = cookiearray[i].split('=')[1];
   }
   var name = cookiearray[0];
   var flavor = cookiearray[2];
   alert("Welcome, " + name.slice(5) + "! Our " + flavor.slice(8) + " flavored coffee is on special this month!");
}

function evaluateCookie() {
	if (!document.cookie) {
		makeCookie(this.form);
	} else {
		ReadCookie();
	}
}
	