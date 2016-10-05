<?
	
	// setcookie("stateVar", 1, time()+ 3600);
	// $stateVar = $_COOKIE["stateVar"];
	
	if( isset ($_COOKIE["stateVar"]) ){
		$stateVar = $_COOKIE["stateVar"];
		$stateVar++;
		setcookie("stateVar", $stateVar, time()+ 3600);
	}else{
		setcookie("stateVar", 1, time()+ 3600);
		$stateVar = 1;
	}
		
		
	

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>cook0.php</title>
</head>

<body>
<p>
<?= $stateVar; ?>
</p>
</body>
</html>
