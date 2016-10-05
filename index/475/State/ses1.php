<?
	session_start();
	
	if( isset ($_SESSION["stateVar"]) ){
		$stateVar = $_SESSION["stateVar"];
	}
	else  {
		$stateVar = "Session Not Set!";
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

