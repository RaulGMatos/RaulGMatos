<?

	$productChoice=array(
	"BlueSquare"=>"The Blue Square, is symmetrical which makes it wonderful for building anything your heart desires! This square is the fastest selling product out of all the squares, so do not delay and buy today!",
	"GreenSquare"=>"Interested in knowing what the future holds? Then look no further than the Green Square. The Green Square can not only give you a glimps into time and space but also alert you when your next big Chemisty test will be. Never be late again for that surprise quiz or exam. Know what to study and how to ace it each and everytime, guarenteed!",
	"YellowSquare"=>"Having a fancy party? What you need then is the Yellow Square! Your guests will think it's anything but square!",
	"PurpleSquare"=>"The purple square is a supreme shape that will make sure that everyone knows that you mean business! No one will even think about messing with you when you are rocking a purple square.",
	"BlueCircle"=>"Is the best circle for any occasion. From parties to just putting circles on the wall. Even for where the wedding party should stand. Fun for all ages!!!",
	"GreenCircle"=>"The Green Circle is the greenest shape of them all! Good for the environment, and the soul! Go Green!!!",
	"YellowCircle"=>"The Yellow Circle, perfect replica for the sun. If you have to do anything during the night, just bring along your Yellow Circle. It will float above you to illuminate the world around you. It also has a built in heater to keep you warm as well. Never buy a flashlight again.",
	"PurpleCircle"=>"Perfect for all your household decoration needs: Bedrooms, Livingrooms, Kitchen... EVERYWHERE! Just Grab'EM.",
	"BlueStar"=>"The Blue Star is great for meditating on the greater cosmic meaning of the universe. Staring at it makes you think of incredibly large masses of heat and energy, in a cool blue color!",
	"GreenStar"=>"The green star is the perfect shape for admiring the stars. Use this shape to observe the night sky and build your favorite constellations!",
	"YellowStar"=>"Make every night a stary night with our fine line of yellow stars! This product is perfect for star gazing pros and beginners alike. Also great for romantic evenings or flashy ninjas. Get your stars today!",
	"PurpleStar"=>"The Purple Star, otherwise known as the Boost Star, is the star of vitality. One touch of this star and you will feel rejuvenated. Say goodbye to energy drinks and coffee! The Purple Star works by providing you with natural energy through the palm of your hand. Grab a hold and power up!");

	function echoGet()
	{
		return "You selected the $_GET[color] $_GET[shape]";
	}
	
	function makeTitle()
	{
		return "$_GET[color] $_GET[shape]";
	}
	
	function makeImage()
	{
		$imageName  = "<a href='index.php'>";
		$imageName .= "<img src='images/";
		$imageName .= $_GET['color'] . $_GET['shape'];
		$imageName .= "full.png' alt = 'Product Image' width='250' height='250'>";
		$imageName .= "</a>";
		
		return $imageName;
	}
	
	function describeProduct ()
	{
		global $productChoice;
		
		$keyname = $_GET['color'] . $_GET['shape'];
		
		$product = $productChoice[$keyname];
		
		return $product;
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
        
        <title><?=makeTitle();?></title>
        
        <link href="../../css/bootstrap.min.css" rel="stylesheet">
        
        <link href="../../css/sticky-footer-navbar.css" rel="stylesheet">
        
        <style>
            table {border-collapse:collapse;}
	    td,th {border:1px solid#09F;}
        </style>
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
				<li class="active"><a>In Class #3</a></li>
				<li><a href="../shapes/index.php">Homework #1</a></li>
				<li><a href="../valid/index.php">Homework #2</a></li>
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
	
        <p><strong>CLICK THE SHAPE TO RETURN TO THE SHOP!</strong></p>
        <p><?=makeImage();?></p>
        <p><?=describeProduct();?></p>
        
        <br><br>
        
        <p><strong>Below is the code used to create the output:</strong></p>
                
        <pre>
&lt;?

	$productChoice=array(
	"BlueSquare"=&gt"The Blue Square, is symmetrical which makes it wonderful for building anything your heart desires! This square is the fastest selling product out of all the squares, so do not delay and buy today!",
	"GreenSquare"=&gt"Interested in knowing what the future holds? Then look no further than the Green Square. The Green Square can not only give you a glimps into time and space but also alert you when your next big Chemisty test will be. Never be late again for that surprise quiz or exam. Know what to study and how to ace it each and everytime, guarenteed!",
	"YellowSquare"=&gt"Having a fancy party? What you need then is the Yellow Square! Your guests will think it's anything but square!",
	"PurpleSquare"=&gt"The purple square is a supreme shape that will make sure that everyone knows that you mean business! No one will even think about messing with you when you are rocking a purple square.",
	"BlueCircle"=&gt"Is the best circle for any occasion. From parties to just putting circles on the wall. Even for where the wedding party should stand. Fun for all ages!!!",
	"GreenCircle"=&gt"The Green Circle is the greenest shape of them all! Good for the environment, and the soul! Go Green!!!",
	"YellowCircle"=&gt"The Yellow Circle, perfect replica for the sun. If you have to do anything during the night, just bring along your Yellow Circle. It will float above you to illuminate the world around you. It also has a built in heater to keep you warm as well. Never buy a flashlight again.",
	"PurpleCircle"=&gt"Perfect for all your household decoration needs: Bedrooms, Livingrooms, Kitchen... EVERYWHERE! Just Grab'EM.",
	"BlueStar"=&gt"The Blue Star is great for meditating on the greater cosmic meaning of the universe. Staring at it makes you think of incredibly large masses of heat and energy, in a cool blue color!",
	"GreenStar"=&gt"The green star is the perfect shape for admiring the stars. Use this shape to observe the night sky and build your favorite constellations!",
	"YellowStar"=&gt"Make every night a stary night with our fine line of yellow stars! This product is perfect for star gazing pros and beginners alike. Also great for romantic evenings or flashy ninjas. Get your stars today!",
	"PurpleStar"=&gt"The Purple Star, otherwise known as the Boost Star, is the star of vitality. One touch of this star and you will feel rejuvenated. Say goodbye to energy drinks and coffee! The Purple Star works by providing you with natural energy through the palm of your hand. Grab a hold and power up!");

	function echoGet()
	{
		return "You selected the $_GET[color] $_GET[shape]";
	}
	
	function makeTitle()
	{
		return "$_GET[color] $_GET[shape]";
	}
	
	function makeImage()
	{
		$imageName  = "&lt;img src='images/";
		$imageName .= $_GET['color'] . $_GET['shape'];
		$imageName .= "full.png' alt = 'Product Image' width='250' height='250'&gt";
		
		return $imageName;
	}
	
	function describeProduct ()
	{
		global $productChoice;
		
		$keyname = $_GET['color'] . $_GET['shape'];
		
		$product = $productChoice[$keyname];
		
		return $product;
	}
?&gt

&lt;body&gt
	&lt;p&gt&lt;strong&gtCLICK THE SHAPE TO RETURN TO THE SHOP!&lt;/strong&gt&lt;/p&gt
	&lt;p&gt&lt;?=makeImage();?&gt&lt;/p&gt
	&lt;p&gt&lt;?=describeProduct();?&gt&lt;/p&gt
&lt;/body&gt
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