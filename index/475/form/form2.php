<?
	function testSubmit()
	{
		$result ="";
		
		if (!isset($_GET["submit"]))
		{
			$result = true;
		}
		else
		{
			$result = false;
		}
		
		return $result;
	}

function writeEmptyForm()
{
return <<<EOT
<form method='get' action="$_SERVER[PHP_SELF]">
Input 1: <input type='text' name='box1'><br>
Input 2: <input type='text' name='box2'><br>
<input type='submit' name='submit'>
</form>
EOT;
}
	
	function processForm()
	{
		$error = false;		# is there any error at all
		$box1err = false;	# is error in the first text box
		$box2err = false;	# is error in the second text box
		
		if( trim($_GET['box1']) == NULL)
		{ 
			$box1err = true;
	    	$error= true;
       	}//end if
		
		if( trim($_GET['box2']) == NULL)
		{ 
			$box2err = true;
	    	$error= true;
       	}//end if
		
		$stringToReturn = "";
		
	 	if($error)
		{
			$stringToReturn = "<form action='$_SERVER[PHP_SELF]' method='get'>";
			
			if ($box1err)
			{
				$stringToReturn .= "Input 1: <input type='text' name='box1'>error<br>";
			}
			else
			{
				$stringToReturn .= "Input 1: <input type='text' name='box1' value = '$_GET[box1]'><br>";
			}
			
			if ($box2err)
			{
				$stringToReturn .= "Input 2: <input type='text' name='box2'>error<br>";
			}
			else
			{
				$stringToReturn .= "Input 2: <input type='text' name='box2' value = '$_GET[box2]'><br>";
			}
			
			$stringToReturn .= "<input type='submit' name='submit'></form>";
		}
		elseif(!$error)
		{
	 		//$stringToReturn .= "<p>Your get data is $_GET[box1] and $_GET[box2] </p>";
			
			/*** mysql hostname ***/
			//$hostname = '127.0.0.1';
			$hostname = 'localhost';
			
			/*** mysql dbname ***/
			//$dbname = 'mysql';
			$dbname = 'matosrg01';
			
			/*** mysql username ***/
			$username = 'matosrg01';
			
			/*** mysql password ***/
			$password = 'Red6ixYiC2OciD{}';
			
			/*** mysql port ***/
			$port = '3306';
			
			try 
			{
				$dbh = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);
			
				echo 'Connected to database<br/>';
				
				/*** set the error reporting attribute ***/
				$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				
				/*** some variables ***/
				$userperson = $_GET['box1'];
				$passperson = $_GET['box2'];
				
				/*** prepare the SQL statement ***/
				$stmt = $dbh->prepare("SELECT * FROM formvalid1 WHERE userperson = :userperson AND passperson = :passperson");
				$tmpsql = "SELECT * FROM formvalid1 WHERE userperson = :userperson AND passperson = :passperson";
				$stmt = $dbh->prepare($tmpsql);
				
				/*** bind the paramaters ***/
				$stmt->bindParam(':userperson', $userperson, PDO::PARAM_STR, 10);
				$stmt->bindParam(':passperson', $passperson, PDO::PARAM_STR, 15);
				
				/*** execute the prepared statement ***/
    			$stmt->execute();
				
				/*** fetch the results ***/
				$result = $stmt->fetchAll();
				
				print_r ($result);
				
				/*** loop of the results ***/
				foreach($result as $row)
				{
					echo $row['userperson'].'<br />';
					echo $row['passperson'].'<br />';
				}

				/*** close the database connection ***/
				$dbh = null;
			}
			catch(PDOException $e)
			{
				echo "hoot";
				echo $e->getMessage();
			}
	 	}

		
		return $stringToReturn;
	}
	
	function testForm()
	{
		$whichform = "";
		
		if (testSubmit())
		{
			$whichform = writeEmptyForm();
		}
		else
		{
			$whichform = processForm();
		}
		
		return $whichform;
	}
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>form2</title>
    </head>

    <body>
    	<p>
        	<?=testForm();?>
        </p>
    </body>
</html>