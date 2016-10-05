<?
	session_start();
	include_once 'securimage/securimage.php';
	$securImage = new SecurImage();
	/*https://www.phpcaptcha.org/documentation/quickstart-guide/*/
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Captcha Test</title>
</head>

<body>

	<form>
    	username <input type="text" name="ubox"><br>
		<img id="captcha" src="securimage/securimage_show.php" alt="CAPTCHA Image"/>
    </form>

</body>
</html>