
function jsfOpenPopup(sUrl, iWidth, iHeight, sProps)
{
	var winPopup = window.open(sUrl, 'PrintPopup', 'width=' + iWidth + ',height=' + iHeight + ',' + sProps);
	winPopup.focus();
//	return winPopup;
}


function clickButton(strID, event) {
	var pButton = document.getElementById(strID);
	if (event && event.which) {
		if (event.which == 13) {
			pButton.click();
			return false;
		}
	} else if (window.event && window.event.keyCode) {
		if (event.keyCode == 13) {
			event.returnValue = false;
			event.cancel = true;
			pButton.click();
			return false;
		}
	}
}