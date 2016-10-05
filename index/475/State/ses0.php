<?
	session_start();
	
	if( isset ($_SESSION["stateVar"]) ){
		$_SESSION["stateVar"]++;
	}else{
		$_SESSION["stateVar"] = 1;
	}
	
	//session_destroy();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>session</title>
</head>

<body>
<?= $_SESSION["stateVar"]; ?>
</body>
</html>
