function showHideContact() {
	var x = document.getElementById('contactform');
	if(x.hasClassName(" w3-hide")){
		x.classNames += ' w3-hid';
	}else {
		x.classNames +=' w3-hide';
	}
}