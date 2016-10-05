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
	$regForm = '<div class="row">';
	$regForm .= '<div class="col-md-4 col-md-offset-4">';
	$regForm .= '<form class="form-signin" method="post">';
	$regForm .= '<h2 class="form-signin-heading">Please Register:</h2>';
	$regForm .= '<input type="text" name="name" class="form-control" placeholder="Full Name" required autofocus>';
	$regForm .= '<input type="text" name="username" class="form-control" placeholder="Username" required>';
	$regForm .= '<input type="password" name="password" class="form-control" placeholder="Password" required>';
	$regForm .= '<input type="password" name="confirmPass" class="form-control" placeholder="Confirm Password" required>';
	$regForm .= '<input type="email" name="email" class="form-control" placeholder="Email Address" required>';
	$regForm .= '<p><button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" value="submit">Register</button>';
	$regForm .= '<p><button class="btn btn-lg btn-default btn-block" type="reset" name="reset" value="reset">Clear</button></p>';
	$regForm .= '<br><text>Already a Member?  Click </text>';
	$regForm .= '<a href="login.php">HERE</a>';
	$regForm .= '<text> To Sign In!</text>';
	$regForm .= '</form>';
	$regForm .= '</div>';
	$regForm .= '</div>';
	return $regForm;
    }
    
    function register()
    {
	if(isset($_POST["submit"]))
	{
	    include 'connect.php';
	    
	    $name = $_POST['name'];
	    $username = $_POST['username'];
	    $password = $_POST['password'];
	    $confirmPass = $_POST['confirmPass'];
	    $email = $_POST['email'];
	    
	    $sql = "SELECT COUNT(username) AS num FROM members WHERE username = :username";
	    $stmt = $databaseConnection->prepare($sql);
	    
	    $stmt->bindValue(':username', $username);
	    
	    $stmt->execute();
	    
	    $row = $stmt->fetch(PDO::FETCH_ASSOC);
	    
	    if($row['num'] > 0)
	    {
		$regForm = '<div class="row">';
		$regForm .= '<div class="col-md-4 col-md-offset-4">';
		$regForm .= '<form class="form-signin" method="post">';
		$regForm .= '<h2 class="form-signin-heading">Please Register:</h2>';
		$regForm .= '<input type="text" name="name" class="form-control" placeholder="Full Name" value="'. htmlspecialchars($name) .'" required>';
		$regForm .= '<input type="text" name="username" class="form-control" placeholder="Username" required autofocus>';
		$regForm .= '<label for="username" class="text-danger">*Username already exists, please try again!*  ¯\_(ツ)_/¯</label>';
		$regForm .= '<input type="password" name="password" class="form-control" placeholder="Password" value="'. htmlspecialchars($password) .'" required>';
		$regForm .= '<input type="password" name="confirmPass" class="form-control" placeholder="Confirm Password" value="'. htmlspecialchars($confirmPass) .'" required>';
		$regForm .= '<input type="email" name="email" class="form-control" placeholder="Email Address" value="'. htmlspecialchars($email) .'" required>';
		$regForm .= '<br><button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" value="submit">Register</button>';
		$regForm .= '<br><text>Already a Member?  Click </text>';
		$regForm .= '<a href="login.php">HERE</a>';
		$regForm .= '<text> To Sign In!</text>';
		$regForm .= '</form>';
		$regForm .= '</div>';
		$regForm .= '</div>';
		return $regForm;
	    }
	    
	    if($password <> $confirmPass)
	    {
		$regForm = '<div class="row">';
		$regForm .= '<div class="col-md-4 col-md-offset-4">';
		$regForm .= '<form class="form-signin" method="post">';
		$regForm .= '<h2 class="form-signin-heading">Please Register:</h2>';
		$regForm .= '<input type="text" name="name" class="form-control" placeholder="Full Name" value="'. htmlspecialchars($name) .'" required>';
		$regForm .= '<input type="text" name="username" class="form-control" placeholder="Username" value="'. htmlspecialchars($username) .'" required>';
		$regForm .= '<input type="password" name="password" class="form-control" placeholder="Password" required autofocus>';
		$regForm .= '<input type="password" name="confirmPass" class="form-control" placeholder="Confirm Password" required>';
		$regForm .= '<label for="password" class="text-danger">*Passwords do not match, please try again!*  ¯\_(ツ)_/¯</label>';
		$regForm .= '<input type="email" name="email" class="form-control" placeholder="Email Address" value="'. htmlspecialchars($email) .'" required>';
		$regForm .= '<br><button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" value="submit">Register</button>';
		$regForm .= '<br><text>Already a Member?  Click </text>';
		$regForm .= '<a href="login.php">HERE</a>';
		$regForm .= '<text> To Sign In!</text>';
		$regForm .= '</form>';
		$regForm .= '</div>';
		$regForm .= '</div>';
		return $regForm;
	    }
	    
	    $sql = "INSERT INTO members (fullName, username, password, email) VALUES (:name, :username, :password, :email)";
	    $stmt = $databaseConnection->prepare($sql);
	    
	    $stmt->bindValue(':name', $name);
	    $stmt->bindValue(':username', $username);
	    $stmt->bindValue(':password', $password);
	    $stmt->bindValue(':email', $email);
	    
	    $result = $stmt->execute();
	    
	    if($result)
	    {
		include 'send.php';
		sendEmail();
		
		$body = "<h1>Thank you for registering with us!</h1>";
		$body .= "<h4>Check your email and click the link to verify your email address.</h4><br>";
		$body .= "<p>You will be redirected to the login page in <span id='counter'>10</span> second(s).</p>";
		$body .="
		    <script type='text/javascript'>
			function countdown() {
			    var i = document.getElementById('counter');
			    if (parseInt(i.innerHTML)<=1) {
				location.href = 'login.php';
			    }
			    i.innerHTML = parseInt(i.innerHTML)-1;
			}
			setInterval(function(){ countdown(); },1000);
		    </script>
		";
		
		return $body;
	    }
	}
	
	$stmt->closeCursor();
	$databaseConnection = null;
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
		$whichform = register();
	}
	
	return $whichform;
    }
?>

<!doctype html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
            
        <meta name="description" content="The Department of Computer Information Systems at Buffalo State College provides a four year undergraduate degree program in information technology, systems administration, network administration, internet programming, databse programming, and project management."/>
        
        <meta name="keywords" content="buffalo state college, computer information systems, cis, buffalo, undergraduate, IT, college, SUNY, State University of New York, information technology, 475, internet programmin, html5, css, javascript, jquery, adobe flash, RIA."/>
        
        <link rel="icon" href="../../images/programming.ico">
        
        <title>Register</title>
        
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
	
	<p>The registration page is for creating a username and password. It checks to make sure all fields are filled in, that both password and confirm password fields match, it has a clear button that clears the form, a link to go to the sign in page if the user is already a member, and after clicking the register button a verification email is automatically sent to the email address entered. When the user verifies their email, the database is updated to reflect that the user is verified.</p>
	
	<p><strong>Below is the code used to create the reg.php page:</strong></p>
	<img src="images/reg.png">
	
	<p><strong>Below is the code used to create the send.php page:</strong></p>
	<img src="images/send.png">
	
	<p><strong>Below is the code used to create the wel.php page:</strong></p>
	<img src="images/wel.png">
	</pre>
	
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="../../js/bootstrap.min.js"></script>
    </body>
</html>