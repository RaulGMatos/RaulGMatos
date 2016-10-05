<?
	
	function testSubmit() {
		$result = "";
		if(  !isset( $_GET["submit"] )  ){
			$result = true;
		}
		else {
			$result = false;
		}
		return $result;
	}//testsubmit
	
	
function writeEmptyForm() {			
return <<<EOT
<form method='get' action="$_SERVER[PHP_SELF]">
Input 1: <input type='text' name='box1'><br>
Input 2: <input type='text' name='box2'><br>
<input type='submit' name='submit'>
</form>
EOT;
}//writeEmptyForm

function processForm() {
	
   $error = false;		# is there any error at all
   $box1err = false;	# is error in the first text box
   $box2err = false;	# is error in the second text box
	
	if( trim($_GET['box1']) == NULL ){ 
		$box1err = true;
	    $error= true;
     }//end if
	
	if( trim($_GET['box2']) == NULL ){ 
		$box2err = true;
	    $error= true;
     }//end if
	
	$stringToReturn = "";
	
	if($error) {
		
		$stringToReturn = "<form action='$_SERVER[PHP_SELF]' method='get'>";
		
		if($box1err)
		  $stringToReturn .= "Input 1: <input type='text' name='box1'> error <br>";
		else
		  $stringToReturn .= "Input 1: <input type='text' name='box1' value='$_GET[box1]' ><br>";
		
		if($box2err)
		  $stringToReturn .= "Input 2: <input type='text' name='box2'> error <br>";
		else
		  $stringToReturn .= "Input 2: <input type='text' name='box2' value='$_GET[box2]' ><br>";
		
		
		$stringToReturn .= "<input type='submit' name='submit'></form>";
		
	}
	elseif(!$error){
	 	//$stringToReturn .= "<p>Your get data is $_GET[box1] and $_GET[box2].</p>";
$password = 'Red6ixYiC2OciD{}';
$hostname = 'localhost';
$dbname = 'matosrg01';
$username = 'matosrg01';
$port = '3306';
try {
     $dbh = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);
    
    /*** INSERT data ***/
//$count=$dbh->exec("SELECT COUNT (userperson) FROM formvalid1 WHERE userperson = '$_GET[box1]'");
$count=$dbh->query("SELECT COUNT (userperson) FROM formvalid1 WHERE userperson = '$_GET[box1]'");

$stringToReturn = $count;

print_r("print_r: " . $count);


    /*** close the database connection ***/
    $dbh = null;
    }
catch(PDOException $e){
		
    	$stringToReturn =  $e->getMessage();
    }
	
	}//endif
	
	return $stringToReturn;
}

function testForm(){
	$whichform = ""; 
	if (testSubmit()) {
		 $whichform = writeEmptyForm();
	} 
	else { 
		$whichform = processForm();
	}
	return $whichform;
}//processForm

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>form four</title>
</head>

<body>

<?= testForm(); ?>
</body>
</html>













