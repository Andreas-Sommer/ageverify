$(function (){
	if(Cookies.get('_av') !== 'true' && isPageToVerify() === true && _avurl.length > 0) {
		$('body').css({'display': 'none'});
		//console.log("Redirect to Verification Page \"" + _avurl +  "\"");
		window.location.href = _avurl;
	}
});

function isPageToVerify() {
	return (typeof _avurl !== 'undefined');
}

function getReferrer() {
	return document.referrer;
}

function confirmVerification() {
	Cookies.set('_av', true, {secure: true});
	window.location.href = getReferrer();
}


