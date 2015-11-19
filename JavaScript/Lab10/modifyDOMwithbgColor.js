function display_color(b) {
	for (var i = 0; i < b.colors.length; i++) {
		if (b.colors[i].checked) {
			document.bgColor = b.colors[i].value;
		}
	}
}