<!DOCTYPE html>

<html lang="en">

    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
            
        <meta name="description" content="The Department of Computer Information Systems at Buffalo State College provides a four year undergraduate degree program in information technology, systems administration, network administration, internet programming, databse programming, and project management."/>
        
        <meta name="keywords" content="buffalo state college, computer information systems, cis, buffalo, undergraduate, IT, college, SUNY, State University of New York, information technology, 475, internet programmin, html5, css, javascript, jquery, adobe flash, RIA."/>
        
        <link rel="icon" href="../../images/programming.ico">
        
        <title>475 In Class #2</title>
        
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
                                <li class="active"><a>In Class #2</a></li>
								<li><a href="../class3/index.php">In Class #3</a></li>
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
            
            <p><strong>Below is the small amount of code used to create the output:</strong></p>
            
            <pre>
&lt;table&gt;
        &lt;tr&gt;&lt;th&gt;Key Name&lt;/th&gt;&lt;th&gt;Key Value&lt;/th&gt;&lt;/tr&gt;

                &lt;?
                    $table = "";
                        
                    foreach($_SERVER as $key_name => $key_value)
                    {
                        $table .= "&lt;tr&gt;&lt;td&gt;" . $key_name . "&lt;/td&gt;&lt;td&gt;" . $key_value . "&lt;/td&gt;&lt;/tr&gt;";
                    }
                        
                    print $table;
                ?&gt;
    
&lt;/table&gt;
            </pre><br><br>
            
        
        <p>
            <strong>Now the actual result from the code above:</strong><br><br>
        </p>
    	<table>
        	<tr><th>Key Name</th><th>Key Value</th></tr>
        
			<?
			    $table = "";
				
                            foreach($_SERVER as $key_name => $key_value)
                            {
                                $table .= "<tr><td>" . $key_name . "</td><td>" . $key_value . "</td></tr>";
                            }
				
			    print $table;
			?>
            
        </table><br><br>
        
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