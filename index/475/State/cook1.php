<?
	
	if( isset ($_COOKIE["stateVar"]) ){
		$stateVar = $_COOKIE["stateVar"];
	}
	else  {
		$stateVar = "Cookie Not Set!";
	}
	
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?= $stateVar;?>
</body>
</html>
