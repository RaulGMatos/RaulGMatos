<?
	session_start();
	include_once 'securimage/securimage.php';
	$securimage = new Securimage();
	
	
	    if ( isset ($_POST['submit']) ) {
	
			
	
			if ($securimage->check($_POST['captcha_code']) == false) {
		  // the code was incorrect
		  // you should handle the error so that the form processor doesn't continue
		
		  // or you can use the following code if there is no validation or you do not know how
		  echo "The security code entered was incorrect.<br /><br />";
		  echo "Please go <a href='javascript:history.go(-1)'>back</a> and try again.";
		  exit;
		}
		
		echo "True";
		exit;
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap Captcha Test</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/form.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <div class="container">

 

      <form class="form-signin" method="Post" action="captest.php">
        <h2 class="form-signin-heading">Please sign in</h2>
        
        <label for="inputUser" class="sr-only">Email address</label>
        <input type="text" id="inputUser" class="form-control" placeholder="Username" required autofocus>
        
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>

	<img id="captcha" src="securimage/securimage_show.php" alt="CAPTCHA Image" />
    
    <a href="#" id="reloadCaptcha">
    <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
    </a>
    
    

		<label for="captcha_code" class="sr-only">Password</label>
        
<input type="text" name="captcha_code" id="captcha_code" class="form-control" placeholder="Captcha" required />

        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" value="submit">
        Sign in
        </button>
      </form>

    </div> <!-- /container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/captcha.js"></script>
  </body>
</html>






