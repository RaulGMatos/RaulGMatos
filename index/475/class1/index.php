<!DOCTYPE html>

<html lang="en">

    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
            
        <meta name="description" content="The Department of Computer Information Systems at Buffalo State College provides a four year undergraduate degree program in information technology, systems administration, network administration, internet programming, databse programming, and project management."/>
        
        <meta name="keywords" content="buffalo state college, computer information systems, cis, buffalo, undergraduate, IT, college, SUNY, State University of New York, information technology, 475, internet programmin, html5, css, javascript, jquery, adobe flash, RIA."/>
        
        <link rel="icon" href="../../images/programming.ico">
        
        <title>475 In Class #1</title>
        
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
                        <li><a href="../../vb/index.html">Visual Basic</a></li>
                        <li><a href="../../413/index.html">HTML | CSS | JavaScript</a></li>
                        <li class="active"><a href="../index.php">PHP</a></li>
                        <li><a href="../../sharp/index.html">C#</a></li>
                        <li><a href="../../resume/index.html">R&eacute;sum&eacute;</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Assignments <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                
                                <li class="dropdown-header">CIS 400</li>
                                <li><a href="../../vb/Assignment01/index.html">Assignment #1</a></li>
                                <li><a href="../../vb/Assignment02/index.html">Assignment #2</a></li>
                                <li><a href="../../vb/Assignment03/index.html">Assignment #3</a></li>
                                <li><a href="../../vb/Assignment04/index.html">Assignment #4</a></li>
                                <li><a href="../../vb/Assignment05/index.html">Assignment #5</a></li>
                                <li><a href="../../vb/Assignment06/index.html">Assignment #6</a></li>
                                <li><a href="../../vb/Assignment07/index.html">Assignment #7</a></li>
                                <li><a href="../../vb/Assignment08/index.html">Assignment #8</a></li>
                                <li><a href="../../vb/Assignment09/index.html">Assignment #9</a></li>
                                <li class="divider"></li>
                                
                                <li class="dropdown-header">CIS 413</li>
                                <li><a href="../../413/hw1/index.html">Homework #1</a></li>
                                <li><a href="../../413/hw2/index.html">Homework #2</a></li>
                                <li><a href="../../413/hw3/index.html">Homework #3</a></li>
                                <li class="divider"></li>
                                
                                <li class="dropdown-header">CIS 475</li>
                                <li class="active"><a>In Class #1</a></li>
                                <li><a href="../class2/index.php">In Class #2</a></li>
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
&lt;p&gt;
    
    &lt;?
        $myvar1 = 13;
        $myvar2 = 2;
        $mysum = $myvar1 + $myvar2;
    ?&gt;
                    
    Here is output from HTML. &lt;br&gt;
    &lt;?="Here is output from PHP. The sum is $mysum"?&gt;

&lt;/p&gt;
            </pre><br><br>
            
            <?
                $myvar1 = 13;
                $myvar2 = 2;
                $mysum = $myvar1 + $myvar2;
            ?>
        
        <p>
            <strong>Now the actual result from the code above:</strong><br><br>
            Here is output from HTML. <br>
            
            <?="Here is output from PHP. The sum is $mysum"?>
        </p>
        
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