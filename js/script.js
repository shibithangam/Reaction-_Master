/**
 * 
 */

/*
 * request.getSession().setAttribute("quizDuration",document.getElementsByTagName("quizDuration").item(0).getTextContent());
 * request.getSession().setAttribute("min",document.getElementsByTagName("quizDuration").item(0).getTextContent());
 * request.getSession().setAttribute("sec",0);
 */

// var seconds = 300;
/*
 * function timer(sec) { console.log(Math.round(sec)); window.seconds =
 * Math.round(sec); }
 */

/*
 * function remaining(sec) { return Math.round(sec)-1; }
 */

function GetURLParameter(sParam) {
	var sPageURL = window.location.search.substring(1);
	var sURLVariables = sPageURL.split('&');
	for (var i = 0; i < sURLVariables.length; i++) {
		var sParameterName = sURLVariables[i].split('=');
		if (sParameterName[0] == sParam) {
			return sParameterName[1];
		}
	}
}

var seconds = -1;
if (sessionStorage.time) {
	seconds = sessionStorage.time;
} else {
	seconds = 300;
}

function secondPassed() {
	// console.log(sec);
	// var seconds = Math.round(seconds);
	console.log(seconds);
	var minutes = Math.round((seconds - 30) / 60), remainingSeconds = seconds % 60;
	// console.log(minutes);
	if (remainingSeconds < 10) {
		remainingSeconds = "0" + remainingSeconds;
	}
	// console.log(remainingSeconds);
	// document.getElementById('countdown').innerHTML = minutes + ":" +
	// remainingSeconds;
	document.getElementById('cnt').innerHTML = minutes + ":" + remainingSeconds;
	// document.getElementById('getSecs').innerHTML = seconds;
	if (seconds == 0) {
		clearInterval(countdownTimer);
		// form1 is your form name
		document.form1.submit();

	} else {
		seconds--;
	}
	sessionStorage.setItem('time', seconds);
}

var countdownTimer = setInterval('secondPassed()', 1000);
