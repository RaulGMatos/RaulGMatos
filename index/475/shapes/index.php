<?
	$colors = array("Blue","Green","Yellow","Purple");
	$shapes = array("Square","Circle","Star");
	$selection = NULL;
	
	$my_file_name = "products.txt";
	$describe = file($my_file_name);
	
	function testQueryString()
	{
		return !empty( $_SERVER['QUERY_STRING'] );
	}//testQueryString()
	
	function makeTable()
	{
		global $colors, $shapes, $describe, $describeIndex;
		
		$describeIndex = 0;
		
		$imageName = "<table>";
		
		for($outer = 0; $outer < 3; ++$outer)
		{
			for($inner = 0; $inner < 4; ++$inner)
			{
				$imageName .="<tr><td>";
				
				$imageName .="<a href='$_SERVER[PHP_SELF]?color=".$colors[$inner]."&amp;shape=".$shapes[$outer]."'>";
				
				$imageName .="<img src='images/" . $colors[$inner] . $shapes[$outer] . "thumb.png' alt = 'Product Image'>";
				
				$imageName .="</a></td><td>";
				
				$imageName .="<strong>$colors[$inner] $shapes[$outer]</strong><br>";
				
				$imageName .="<p>$describe[$describeIndex]</p>";
				
				$imageName .="</td></tr>";
				
				++$describeIndex;
			}
		}
		
		$imageName .= "</table>";
		
		return $imageName;
	}
	
	function returnSelection()
	{
		global $describe;
		if (testQueryString())
		{
			switch($_GET['shape'])
			{
				case "Square":
					switch($_GET['color'])
					{
						case "Blue":
						$selection ="<br><br>";
						$selection .= "<img src='images/" . $_GET['color'] . $_GET['shape'] . "full.png' alt = 'Product Image' width='250' height='250'>";
						$selection .= "<p>$describe[0]</p>";
						$selection .="<br><br>";
						break;
						
						case "Green":
						$selection ="<br><br>";
						$selection .= "<img src='images/" . $_GET['color'] . $_GET['shape'] . "full.png' alt = 'Product Image' width='250' height='250'>";
						$selection .= "<p>$describe[1]</p>";
						$selection .="<br><br>";
						break;
						
						case "Yellow":
						$selection ="<br><br>";
						$selection .= "<img src='images/" . $_GET['color'] . $_GET['shape'] . "full.png' alt = 'Product Image' width='250' height='250'>";
						$selection .= "<p>$describe[2]</p>";
						$selection .="<br><br>";
						break;
						
						case "Purple":
						$selection ="<br><br>";
						$selection .= "<img src='images/" . $_GET['color'] . $_GET['shape'] . "full.png' alt = 'Product Image' width='250' height='250'>";
						$selection .= "<p>$describe[3]</p>";
						$selection .="<br><br>";
						break;
					}
				break;
				
				case "Circle":
					switch($_GET['color'])
					{
						case "Blue":
						$selection ="<br><br>";
						$selection .= "<img src='images/" . $_GET['color'] . $_GET['shape'] . "full.png' alt = 'Product Image' width='250' height='250'>";
						$selection .= "<p>$describe[4]</p>";
						$selection .="<br><br>";
						break;
						
						case "Green":
						$selection ="<br><br>";
						$selection .= "<img src='images/" . $_GET['color'] . $_GET['shape'] . "full.png' alt = 'Product Image' width='250' height='250'>";
						$selection .= "<p>$describe[5]</p>";
						$selection .="<br><br>";
						break;
						
						case "Yellow":
						$selection ="<br><br>";
						$selection .= "<img src='images/" . $_GET['color'] . $_GET['shape'] . "full.png' alt = 'Product Image' width='250' height='250'>";
						$selection .= "<p>$describe[6]</p>";
						$selection .="<br><br>";
						break;
						
						case "Purple":
						$selection ="<br><br>";
						$selection .= "<img src='images/" . $_GET['color'] . $_GET['shape'] . "full.png' alt = 'Product Image' width='250' height='250'>";
						$selection .= "<p>$describe[7]</p>";
						$selection .="<br><br>";
						break;
					}
				break;
				
				case "Star":
					switch($_GET['color'])
					{
						case "Blue":
						$selection ="<br><br>";
						$selection .= "<img src='images/" . $_GET['color'] . $_GET['shape'] . "full.png' alt = 'Product Image' width='250' height='250'>";
						$selection .= "<p>$describe[8]</p>";
						$selection .="<br><br>";
						break;
						
						case "Green":
						$selection ="<br><br>";
						$selection .= "<img src='images/" . $_GET['color'] . $_GET['shape'] . "full.png' alt = 'Product Image' width='250' height='250'>";
						$selection .= "<p>$describe[9]</p>";
						$selection .="<br><br>";
						break;
						
						case "Yellow":
						$selection ="<br><br>";
						$selection .= "<img src='images/" . $_GET['color'] . $_GET['shape'] . "full.png' alt = 'Product Image' width='250' height='250'>";
						$selection .= "<p>$describe[10]]</p>";
						$selection .="<br><br>";
						break;
						
						case "Purple":
						$selection ="<br><br>";
						$selection .= "<img src='images/" . $_GET['color'] . $_GET['shape'] . "full.png' alt = 'Product Image' width='250' height='250'>";
						$selection .= "<p>$describe[11]</p>";
						$selection .="<br><br>";
						break;
					}
				break;
			}
		}
		else
		{
			$selection = "&nbsp;";
		}
		
		return $selection;
	}//returnSelectionColor
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
        
        <title>Shape Shop</title>
        
        <link href="../../css/bootstrap.min.css" rel="stylesheet">
        
        <link href="../../css/sticky-footer-navbar.css" rel="stylesheet">
        
        <style>
            table {border-collapse:collapse;}
	    td,th {border:1px solid#09F;}
        </style>
    </head>


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
				<li class="active"><a>Homework #1</a></li>
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
            
    	<h1>Welcome to Shape Shop!</h1>
        
        <p>Shape Shop has all of your shape needs! Purchase shapes for any occasion.</p>
        
	<?=returnSelection();?>
        <?=makeTable()?>
        
        <br><br>
        
        <p><strong>Below is the code used to create the output:</strong></p>
            
        <pre>
&lt;?
	$colors = array("Blue","Green","Yellow","Purple");
	$shapes = array("Square","Circle","Star");
	$selection = NULL;
	
	$my_file_name = "products.txt";
	$describe = file($my_file_name);
	
	function testQueryString()
	{
		return !empty( $_SERVER['QUERY_STRING'] );
	}//testQueryString()
	
	function makeTable()
	{
		global $colors, $shapes, $describe, $describeIndex;
		
		$describeIndex = 0;
		
		$imageName = "&lt;table&gt";
		
		for($outer = 0; $outer &lt; 3; ++$outer)
		{
			for($inner = 0; $inner &lt; 4; ++$inner)
			{
				$imageName .="&lt;tr&gt&lt;td&gt";
				
				$imageName .="&lt;a href='$_SERVER[PHP_SELF]?color=".$colors[$inner]."&amp;shape=".$shapes[$outer]."'&gt";
				
				$imageName .="&lt;img src='images/" . $colors[$inner] . $shapes[$outer] . "thumb.png' alt = 'Product Image'&gt";
				
				$imageName .="&lt;/a&gt&lt;/td&gt&lt;td&gt";
				
				$imageName .="&lt;strong&gt$colors[$inner] $shapes[$outer]&lt;/strong&gt&lt;br&gt";
				
				$imageName .="&lt;p&gt$describe[$describeIndex]&lt;/p&gt";
				
				$imageName .="&lt;/td>&lt;/tr&gt";
				
				++$describeIndex;
			}
		}
		
		$imageName .= "&lt;/table&gt";
		
		return $imageName;
	}
	
	function returnSelection()
	{
		global $describe;
		if (testQueryString())
		{
			switch($_GET['shape'])
			{
				case "Square":
					switch($_GET['color'])
					{
						case "Blue":
						$selection ="&lt;br&gt&lt;br&gt";
						$selection .= "&lt;img src='images/" . $_GET['color'] . $_GET['shape'] . "full.png' alt = 'Product Image' width='250' height='250'&gt";
						$selection .= "&lt;p&gt$describe[0]&lt;/p&gt";
						$selection .="&lt;br&gt&lt;br&gt";
						break;
						
						case "Green":
						$selection ="&lt;br&gt&lt;br&gt";
						$selection .= "&lt;img src='images/" . $_GET['color'] . $_GET['shape'] . "full.png' alt = 'Product Image' width='250' height='250'&gt";
						$selection .= "&lt;p&gt$describe[1]&lt;/p&gt";
						$selection .="&lt;br&gt&lt;br&gt";
						break;
						
						case "Yellow":
						$selection ="&lt;br&gt&lt;br&gt";
						$selection .= "&lt;img src='images/" . $_GET['color'] . $_GET['shape'] . "full.png' alt = 'Product Image' width='250' height='250'&gt";
						$selection .= "&lt;p&gt$describe[2]&lt;/p&gt";
						$selection .="&lt;br&gt&lt;br&gt";
						break;
						
						case "Purple":
						$selection ="&lt;br&gt&lt;br&gt";
						$selection .= "&lt;img src='images/" . $_GET['color'] . $_GET['shape'] . "full.png' alt = 'Product Image' width='250' height='250'&gt";
						$selection .= "&lt;p&gt$describe[3]&lt;/p&gt";
						$selection .="&lt;br&gt&lt;br&gt";
						break;
					}
				break;
				
				case "Circle":
					switch($_GET['color'])
					{
						case "Blue":
						$selection ="&lt;br&gt&lt;br&gt";
						$selection .= "&lt;img src='images/" . $_GET['color'] . $_GET['shape'] . "full.png' alt = 'Product Image' width='250' height='250'&gt";
						$selection .= "&lt;p&gt$describe[4]&lt;/p&gt";
						$selection .="&lt;br&gt&lt;br&gt";
						break;
						
						case "Green":
						$selection ="&lt;br&gt&lt;br&gt";
						$selection .= "&lt;img src='images/" . $_GET['color'] . $_GET['shape'] . "full.png' alt = 'Product Image' width='250' height='250'&gt";
						$selection .= "&lt;p&gt$describe[5]&lt;/p&gt";
						$selection .="&lt;br&gt&lt;br&gt";
						break;
						
						case "Yellow":
						$selection ="&lt;br&gt&lt;br&gt";
						$selection .= "&lt;img src='images/" . $_GET['color'] . $_GET['shape'] . "full.png' alt = 'Product Image' width='250' height='250'&gt";
						$selection .= "&lt;p&gt$describe[6]&lt;/p&gt";
						$selection .="&lt;br&gt&lt;br&gt";
						break;
						
						case "Purple":
						$selection ="&lt;br&gt&lt;br&gt";
						$selection .= "&lt;img src='images/" . $_GET['color'] . $_GET['shape'] . "full.png' alt = 'Product Image' width='250' height='250'&gt";
						$selection .= "&lt;p&gt$describe[7]&lt;/p&gt";
						$selection .="&lt;br&gt&lt;br&gt";
						break;
					}
				break;
				
				case "Star":
					switch($_GET['color'])
					{
						case "Blue":
						$selection ="&lt;br&gt&lt;br&gt";
						$selection .= "&lt;img src='images/" . $_GET['color'] . $_GET['shape'] . "full.png' alt = 'Product Image' width='250' height='250'&gt";
						$selection .= "&lt;p&gt$describe[8]&lt;/p&gt";
						$selection .="&lt;br&gt&lt;br&gt";
						break;
						
						case "Green":
						$selection ="&lt;br&gt&lt;br&gt";
						$selection .= "&lt;img src='images/" . $_GET['color'] . $_GET['shape'] . "full.png' alt = 'Product Image' width='250' height='250'&gt";
						$selection .= "&lt;p&gt$describe[9]&lt;/p&gt";
						$selection .="&lt;br&gt&lt;br&gt";
						break;
						
						case "Yellow":
						$selection ="&lt;br&gt&lt;br&gt";
						$selection .= "&lt;img src='images/" . $_GET['color'] . $_GET['shape'] . "full.png' alt = 'Product Image' width='250' height='250'&gt";
						$selection .= "&lt;p&gt$describe[10]]&lt;/p&gt";
						$selection .="&lt;br&gt&lt;br&gt";
						break;
						
						case "Purple":
						$selection ="&lt;br&gt&lt;br&gt";
						$selection .= "&lt;img src='images/" . $_GET['color'] . $_GET['shape'] . "full.png' alt = 'Product Image' width='250' height='250'&gt";
						$selection .= "&lt;p&gt$describe[11]&lt;/p&gt";
						$selection .="&lt;br&gt&lt;br&gt";
						break;
					}
				break;
			}
		}
		else
		{
			$selection = "&nbsp;";
		}
		
		return $selection;
	}//returnSelectionColor
?&gt
        </pre><br><br>
        
        </div>
        
        <footer class="footer">
            <div class="container">
                <a href="https://www.linkedin.com/pub/raul-matos/116/831/538">
                <img src="../../images/profile.JPG" id="profile">
                </a>
                <p class="text-muted"><strong>Raul G. Matos | <a href="https://www.linkedin.com/pub/raul-matos/116/831/538">View my LinkedIn profile</a> | <a href="https://github.com/RaulGMatos">View my GitHub profile</a></strong><br>
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