<?
    function testSubmit()
    {
        $result = "";
        
        if(!isset($_GET["submit"]))
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
	print "<form method='get' action='index.php'>";
        print "Username: <input type='text' name='box1'><br>";
        print "Password: <input type='text' name='box2'><br>";
        print "<input type='submit' value='submit' name='submit'/>";
        print "</form>";
    }

    function processForm()
    {
	try
	{
	    $password = 'password';
            $hostname = 'localhost';
            $dbname = 'allyourdatabase';
            $username = 'brucewayne';
            $port = '0101';
	    $test = false;
	    
	    $dbh = new PDO("mysql:host=$hostname;dbname=$dbname;charset=utf8", $username, $password);
	    
	    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    
	    $userperson = $_GET['box1'];
	    $passperson = $_GET['box2'];
	    
	    $tmpsql = "SELECT * FROM formvalid1 WHERE userperson = :userperson AND passperson = :passperson";
	    $stmt = $dbh->prepare($tmpsql);
	    
	    $stmt->bindParam(':userperson', $userperson, PDO::PARAM_STR, 10);
	    $stmt->bindParam(':passperson', $passperson, PDO::PARAM_STR, 15);
	    
	    $stmt->execute();
	    
	    if($stmt->rowCount() > 0)
	    {
		echo 'Login Successful!';
		$test = true;
	    }
	    else
	    {
		echo 'Login Failed!';
		$test = false;
	    }
	    
	    $result = $stmt->fetchAll();
	    
	    $dbh = null;
	}
	
	catch(PDOException $e)
	{
	    echo $e->getMessage();
	}
    }
    
    function errorCheck()
    {
	$error = false;		# is there any error at all
	$box1err = false;	# is error in the first text box
        $box2err = false;	# is error in the second text box
	
	if(trim($_GET['box1']) == NULL || is_numeric( $_GET['box1']))
	{ 
	    $box1err = true;
	    $error= true;
	}
	
	if(trim($_GET['box2']) == NULL || is_numeric( $_GET['box2']))
	{ 
	    $box2err = true;
	    $error= true;
	}
	
	$stringToReturn = "";
	
	if($error)
	{
	    $stringToReturn = "<form action='$_SERVER[PHP_SELF]' method='get'>";
	    
	    if($box1err)
		$stringToReturn .= "Username: <input type='text' name='box1'> Please enter a valid username! <br>";
	    else
		$stringToReturn .= "Username: <input type='text' name='box1' value='$_GET[box1]' ><br>";
		
	    if($box2err)
		$stringToReturn .= "Password: <input type='text' name='box2'> Please enter a valid password! <br>";
	    else
		$stringToReturn .= "Password: <input type='text' name='box2' value='$_GET[box2]' ><br>";
		
	    $stringToReturn .= "<input type='submit' name='submit'></form>"; 
	}
	
        elseif(!$error)
        {
	    processForm();
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
	    $whichform = errorCheck();
	}
	
	return $whichform;
    }
?>

<!doctype html>
    
<!DOCTYPE html>

<html lang="en">

    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
            
        <meta name="description" content="The Department of Computer Information Systems at Buffalo State College provides a four year undergraduate degree program in information technology, systems administration, network administration, internet programming, databse programming, and project management."/>
        
        <meta name="keywords" content="buffalo state college, computer information systems, cis, buffalo, undergraduate, IT, college, SUNY, State University of New York, information technology, 475, internet programmin, html5, css, javascript, jquery, adobe flash, RIA."/>
        
        <link rel="icon" href="../../images/programming.ico">
        
        <title>475 Homework #2</title>
        
        <link href="../../css/bootstrap.min.css" rel="stylesheet">
        
        <link href="../../css/sticky-footer-navbar.css" rel="stylesheet">
        
    </head>

    <style>
        #profile
        {
            float: left;
            padding: 10px;
            width: 10%;
            height: 10%;
        }
    </style>

    <body>

        <!-- Fixed navbar -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="../../index.html">Hello World!</a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="../../index.html">Home</a></li>
                        <li><a href="../../413/index.html">HTML | CSS | JavaScript</a></li>
                        <li class="active"><a href="../index.php">PHP</a></li>
			<li><a href="../../sharp/index.html">C#</a></li>
			<li><a href="../../resume/index.html">R&eacute;sum&eacute;</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Assignments <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                            
                                <li class="dropdown-header">CIS 413</li>
                                <li><a href="../../413/hw1/index.html">Homework #1</a></li>
                                <li><a href="../../413/hw2/index.html">Homework #2</a></li>
                                <li><a href="../../413/hw3/index.html">Homework #3</a></li>
                                <li class="divider"></li>
                                
                                <li class="dropdown-header">CIS 475</li>
                                <li><a href="../class1/index.php">In Class #1</a></li>
                                <li><a href="../class2/index.php">In Class #2</a></li>
				<li><a href="../class2/index.php">In Class #3</a></li>
				<li><a href="../shapes/index.php">Homework #1</a></li>
				<li class="active"><a>Homework #2</a></li>
                                <li><a href="../project1/login.php">Final Project (Part 1)</a></li>
                                
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <!-- Begin page content -->
        <div class="container">
            
            <div class="row">
                <div class="col-xs-12 col4">
                    <div class="page-header">
                        <h1>CIS 475 <small>Programming for the Internet Environment II</small></h1>
                    </div>
                </div>
            </div>
        
	<?= testForm(); ?>
        
        <br><br>
        
	<p>Since moving this site and assignment to a public domain, I have decided not to allow the username and password fields to collect any data for privacy reasons. Wouldn't want anyone providing any information that isn't protected.</p>
	
        <p><strong>Below is the code used to create the output:</strong></p>
            
        <pre>
&lt;?
    function testSubmit()
    {
        $result = "";
        
        if(!isset($_GET["submit"]))
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
	print "&lt;form method='get' action='index.php'&gt";
        print "Username: &lt;input type='text' name='box1'&gt&lt;br&gt";
        print "Password: &lt;input type='text' name='box2'&gt&lt;br&gt";
        print "&lt;input type='submit' value='submit' name='submit'/&gt";
        print "&lt;/form&gt";
    }

    function processForm()
    {
	try
	{
	    $password = 'password';
            $hostname = 'localhost';
            $dbname = 'allyourdatabase';
            $username = 'brucewayne';
            $port = '0101';
	    $test = false;
	    
	    $dbh = new PDO("mysql:host=$hostname;dbname=$dbname;charset=utf8", $username, $password);
	    
	    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    
	    $userperson = $_GET['box1'];
	    $passperson = $_GET['box2'];
	    
	    $tmpsql = "SELECT * FROM formvalid1 WHERE userperson = :userperson AND passperson = :passperson";
	    $stmt = $dbh-&gtprepare($tmpsql);
	    
	    $stmt-&gtbindParam(':userperson', $userperson, PDO::PARAM_STR, 10);
	    $stmt-&gtbindParam(':passperson', $passperson, PDO::PARAM_STR, 15);
	    
	    $stmt-&gtexecute();
	    
	    if($stmt-&gtrowCount() &gt 0)
	    {
		echo 'Login Successful!';
		$test = true;
	    }
	    else
	    {
		echo 'Login Failed!';
		$test = false;
	    }
	    
	    $result = $stmt-&gtfetchAll();
	    
	    $dbh = null;
	}
	
	catch(PDOException $e)
	{
	    echo $e-&gtgetMessage();
	}
    }
    
    function errorCheck()
    {
	$error = false;		# is there any error at all
	$box1err = false;	# is error in the first text box
        $box2err = false;	# is error in the second text box
	
	if(trim($_GET['box1']) == NULL || is_numeric( $_GET['box1']))
	{ 
	    $box1err = true;
	    $error= true;
	}
	
	if(trim($_GET['box2']) == NULL || is_numeric( $_GET['box2']))
	{ 
	    $box2err = true;
	    $error= true;
	}
	
	$stringToReturn = "";
	
	if($error)
	{
	    $stringToReturn = "&lt;form action='$_SERVER[PHP_SELF]' method='get'&gt";
	    
	    if($box1err)
		$stringToReturn .= "Username: &lt;input type='text' name='box1'&gt Please enter a valid username! &lt;br&gt";
	    else
		$stringToReturn .= "Username: &lt;input type='text' name='box1' value='$_GET[box1]' &gt&lt;br&gt";
		
	    if($box2err)
		$stringToReturn .= "Password: &lt;input type='text' name='box2'&gt Please enter a valid password! &lt;br&gt";
	    else
		$stringToReturn .= "Password: &lt;input type='text' name='box2' value='$_GET[box2]' &gt&lt;br&gt";
		
	    $stringToReturn .= "&lt;input type='submit' name='submit'&gt&lt;/form&gt"; 
	}
	
        elseif(!$error)
        {
	    processForm();
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
	    $whichform = errorCheck();
	}
	
	return $whichform;
    }
?&gt
	</pre><br><br>
        
        </div>
        
        <footer class="footer">
            <div class="container">
                <a href="https://www.linkedin.com/pub/raul-matos/116/831/538">
                <img src="../../images/profile.JPG" id="profile">
                </a>
                <p class="text-muted"><strong><a href="https://www.linkedin.com/pub/raul-matos/116/831/538">Raul G. Matos | View my LinkedIn profile</a></strong><br>
                    <i><small>Department of Computer Information Systems Graduate</small></i><br>
                    <i><small>Buffalo State College</small></i><br>
                    <i><small>1300 Elmwood Avenue</small></i><br>
                    <i><small>Buffalo, New York 14222</small></i>
                </p>
            </div>
        </footer>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="../../js/bootstrap.min.js"></script>
        
    </body>

</html>