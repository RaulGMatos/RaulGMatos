<?
	session_start();
	
	if (!isset($_SESSION['reset']))
	{
		$_SESSION['reset'] = 0;
	}
	
	if ($_SESSION['reset'] >= 3)
	{
		header('Location: reg.php');
	}
?>

<?
    function testSubmit()
    {
        $result = "";
        
        if(!isset($_POST["submit"]))
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
		$signInForm = '<div class="row">';
		$signInForm .= '<div class="col-md-4 col-md-offset-4">';
		$signInForm .= '<form class="form-signin" method="post">';
		$signInForm .= '<h2 class="form-signin-heading">Please Sign In:</h2>';
		$signInForm .= '<input type="text" name="username" class="form-control" placeholder="Username" required autofocus>';
		$signInForm .= '<input type="password" name="password" class="form-control" placeholder="Password" required>';
		$signInForm .= '<div class="checkbox">';
		$signInForm .= '<label><input type="checkbox" name="checkbox" value="remember-me"> Remember Me</label>';
		$signInForm .= '</div>';
		$signInForm .= '<button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" value="submit">Sign In</button>';
		$signInForm .= '<br><text>Not a Member?  Click </text>';
		$signInForm .= '<a href="reg.php">HERE</a>';
		$signInForm .= '<text> To Register!</text>';
		$signInForm .= '</form>';
		$signInForm .= '</div>';
		$signInForm .= '</div>';
		return $signInForm;
	}
	
	function checkSpace()
	{
		$spaceTestUsername = strpos($_POST['username']," ");
		$spaceTestPassword = strpos($_POST['password']," ");
		
		if($spaceTestUsername)
		{
			$signInForm = '<div class="row">';
			$signInForm .= '<div class="col-md-4 col-md-offset-4">';
			$signInForm .= '<form class="form-signin" method="post">';
			$signInForm .= '<h2 class="form-signin-heading">Please Sign In:</h2>';
			$signInForm .= '<input type="text" name="username" class="form-control" placeholder="Username" required autofocus>';
			$signInForm .= '<label for="username" class="text-danger">*Username cannot contain spaces!*  ¯\_(ツ)_/¯</label>';
			$signInForm .= '<input type="password" name="password" class="form-control" placeholder="Password" required>';
			$signInForm .= '<div class="checkbox">';
			$signInForm .= '<label><input type="checkbox" name="checkbox" value="remember-me"> Remember Me</label>';
			$signInForm .= '</div>';
			$signInForm .= '<button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" value="submit">Sign In</button>';
			$signInForm .= '<br><text>Not a Member?  Click </text>';
			$signInForm .= '<a href="reg.php">HERE</a>';
			$signInForm .= '<text> To Register!</text>';
			$signInForm .= '</form>';
			$signInForm .= '</div>';
			$signInForm .= '</div>';
			return $signInForm;
		}
		elseif($spaceTestPassword)
		{
			$signInForm = '<div class="row">';
			$signInForm .= '<div class="col-md-4 col-md-offset-4">';
			$signInForm .= '<form class="form-signin" method="post">';
			$signInForm .= '<h2 class="form-signin-heading">Please Sign In:</h2>';
			$signInForm .= '<input type="text" name="username" class="form-control" placeholder="Username" value="'. htmlspecialchars($_POST['username']) .'" required>';
			$signInForm .= '<input type="password" name="password" class="form-control" placeholder="Password" required autofocus>';
			$signInForm .= '<label for="password" class="text-danger">*Password cannot contain spaces!*  ¯\_(ツ)_/¯</label>';
			$signInForm .= '<div class="checkbox">';
			$signInForm .= '<label><input type="checkbox" name="checkbox" value="remember-me"> Remember Me</label>';
			$signInForm .= '</div>';
			$signInForm .= '<button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" value="submit">Sign In</button>';
			$signInForm .= '<br><text>Not a Member?  Click </text>';
			$signInForm .= '<a href="reg.php">HERE</a>';
			$signInForm .= '<text> To Register!</text>';
			$signInForm .= '</form>';
			$signInForm .= '</div>';
			$signInForm .= '</div>';
			return $signInForm;
		}
		else
		{
			signIn();
		}
	}
	
	function signIn()
	{
		include 'connect.php';
		
		$dbUsername = NULL;
		$dbPassword = NULL;
		
		$records = "SELECT * FROM members WHERE username = ?";
		$stmt = $databaseConnection->prepare($records);
		
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		if($stmt->execute(array($_POST['username'])))
		{
			while ($row = $stmt->fetch())
			{
				$dbUsername = $row['username'];
				if($row['password'] == $_POST['password'])
				{	
					$dbPassword = $row['password'];
					$checkData.= "Login Successful!";
					if(isset($_POST['checkbox']))
					{
						$cookie_name = "chocolateChip";
						$cookie_value = $_POST['username'];
						setcookie($cookie_name, $cookie_value, time() + (86400 * 365), "/");
					}
				}
				else
				{
					$_SESSION['reset']++;
					if ($_SESSION['reset'] >= 3)
					{
						header('Location: reg.php');
					}
					
					$signInForm = '<div class="row">';
					$signInForm .= '<div class="col-md-4 col-md-offset-4">';
					$signInForm .= '<form class="form-signin" method="post">';
					$signInForm .= '<h2 class="form-signin-heading">Please Sign In:</h2>';
					$signInForm .= '<input type="text" name="username" class="form-control" placeholder="Username" value="'. htmlspecialchars($username) .'" required>';
					$signInForm .= '<input type="password" name="password" class="form-control" placeholder="Password" required autofocus>';
					$signInForm .= '<label for="password" class="text-danger">*Password Not Valid!*  ¯\_(ツ)_/¯</label>';
					$signInForm .= '<div class="checkbox">';
					$signInForm .= '<label><input type="checkbox" name="checkbox" value="remember-me"> Remember Me</label>';
					$signInForm .= '</div>';
					$signInForm .= '<button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" value="submit">Sign In</button>';
					$signInForm .= '<br><text>Not a Member?  Click </text>';
					$signInForm .= '<a href="reg.php">HERE</a>';
					$signInForm .= '<text> To Register!</text>';
					$signInForm .= '</form>';
					$signInForm .= '</div>';
					$signInForm .= '</div>';
					return $signInForm;
				}
			}
		}
		
		if(is_null($dbUsername))
		{
			$_SESSION['reset']++;
			if ($_SESSION['reset'] >= 3)
			{
				header('Location: reg.php');
			}
			
			$signInForm = '<div class="row">';
			$signInForm .= '<div class="col-md-4 col-md-offset-4">';
			$signInForm .= '<form class="form-signin" method="post">';
			$signInForm .= '<h2 class="form-signin-heading">Please Sign In:</h2>';
			$signInForm .= '<input type="text" name="username" class="form-control" placeholder="Username" required autofocus>';
			$signInForm .= '<label for="username" class="text-danger">*Username Not Valid!*  ¯\_(ツ)_/¯</label>';
			$signInForm .= '<input type="password" name="password" class="form-control" placeholder="Password" required>';
			$signInForm .= '<div class="checkbox">';
			$signInForm .= '<label><input type="checkbox" name="checkbox" value="remember-me"> Remember Me</label>';
			$signInForm .= '</div>';
			$signInForm .= '<button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" value="submit">Sign In</button>';
			$signInForm .= '<br><text>Not a Member?  Click </text>';
			$signInForm .= '<a href="reg.php">HERE</a>';
			$signInForm .= '<text> To Register!</text>';
			$signInForm .= '</form>';
			$signInForm .= '</div>';
			$signInForm .= '</div>';
			return $signInForm;
		}
		
		$stmt->closeCursor();
		$databaseConnection = null;
		
		header('Location: wel.php');
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
		$whichform = checkSpace();
	}
	
	return $whichform;
    }
?>

<!DOCTYPE html>

<html lang="en">

    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
            
        <meta name="description" content="The Department of Computer Information Systems at Buffalo State College provides a four year undergraduate degree program in information technology, systems administration, network administration, internet programming, databse programming, and project management."/>
        
        <meta name="keywords" content="buffalo state college, computer information systems, cis, buffalo, undergraduate, IT, college, SUNY, State University of New York, information technology, 475, internet programmin, html5, css, javascript, jquery, adobe flash, RIA."/>
        
        <link rel="icon" href="../../images/programming.ico">
        
        <title>Login</title>
        
        <link href="../../css/bootstrap.min.css" rel="stylesheet">
        
        <link href="../../css/sticky-footer-navbar.css" rel="stylesheet">
            
    </head>
    
	<style>
	pre
	{
		width: 1000px;
		height: 1000px;
		overflow: scroll;
		white-space: pre-wrap;
		margin: 0 auto;
	}
	</style>
	
    <body>
    
        <?=testForm();?>
	
	<br><br>
	
	<pre>

	<p>Since moving this site and assignment to a public domain, I have decided not to allow the username and password fields to collect any data for privacy reasons. Wouldn't want anyone providing any information that isn't protected.</p>
	
	<p>The login page asks a user for their username and password. It requires both fields have data, checks the username and password inside the database, and signs in if successful or asks to retry if not. There is a link to register if the user does not have a sign in. Once signed in successfully the user is taken to a welcome page.</p>
	
        <p><strong>Below is the code used to create the login.php page:</strong></p>
	<img src="images/login.png">
	
	<p><strong>Below is the code used to create the connect.php page:</strong></p>
	<img src="images/connect.png">
	
	<p><strong>Below is the code used to create the ver.php page:</strong></p>
	<img src="images/ver.png">

	</pre>
	
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="../../js/bootstrap.min.js"></script>
        
    </body>

</html>