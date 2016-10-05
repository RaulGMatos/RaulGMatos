// JavaScript Document
		function forCaptcha (){
			reloadCaptcha = document.getElementById("reloadCaptcha");
			reloadCaptcha.addEventListener("click", newCap, false);
		}
		
		function newCap(){
			document.getElementById('captcha').src = 'securimage/securimage_show.php?' + Math.random();
		}
		
		window.addEventListener("load", forCaptcha, false);