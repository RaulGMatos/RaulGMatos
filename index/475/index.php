<!DOCTYPE html>

<html lang="en">

    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
            
        <meta name="description" content="The Department of Computer Information Systems at Buffalo State College provides a four year undergraduate degree program in information technology, systems administration, network administration, internet programming, databse programming, and project management."/>
        
        <meta name="keywords" content="buffalo state college, computer information systems, cis, buffalo, undergraduate, IT, college, SUNY, State University of New York, information technology, 475, internet programmin, html5, css, javascript, jquery, adobe flash, RIA."/>
        
        <link rel="icon" href="../images/programming.ico">
        
        <title>CIS 475</title>
        
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        
        <link href="../css/sticky-footer-navbar.css" rel="stylesheet">
            
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
                    <a class="navbar-brand" href="../index.html">Hello World!</a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="../index.html">Home</a></li>
                        <li><a href="../413/index.html">HTML | CSS | JavaScript</a></li>
                        <li class="active"><a>PHP</a></li>
                        <li><a href="../sharp/index.html">C#</a></li>
                        <li><a href="../resume/index.html">R&eacute;sum&eacute;</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Assignments <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                            
                                <li class="dropdown-header">CIS 413</li>
                                <li><a href="../413/hw1/index.html">Homework #1</a></li>
                                <li><a href="../413/hw2/index.html">Homework #2</a></li>
                                <li><a href="../413/hw3/index.html">Homework #3</a></li>
                                <li class="divider"></li>
                                
                                <li class="dropdown-header">CIS 475</li>
                                <li><a href="class1/index.php">In Class #1</a></li>
                                <li><a href="class2/index.php">In Class #2</a></li>
                                <li><a href="class3/index.php">In Class #3</a></li>
                                <li><a href="shapes/index.php">Homework #1</a></li>
                                <li><a href="valid/index.php">Homework #2</a></li>
                                <li><a href="project1/login.php">Final Project (Part 1)</a></li>
                                
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
            
            <p class="lead">Businesses and organizations use the World Wide Web. A web presence enables the gathering, storage, processing, and analysis of large amounts of data. This helps reduce costs and increase quality of products and services. Web sites can be used to reach distant places and to identify customers.</p>
            <p class="lead">Web developers must be able to identify and understand the technologies that underlie the World Wide Web and be aware of contemporary tools and techniques used in it's construction. Effective web developers can analyze and apply these technologies to current and emerging environments.</p>
            <p class="lead">This course will expose students to theories, tools, and techniques, which will serve as a foundation for analysis and design of the World Wide Web. It will study dynamic website development using PHP and MySQL.</p>
            <p class="lead">To view one of the assignments for this class, click the View button for the assignment from the options below or choose the assignment from the Assignments dropdown at the top of the page.</p>
            
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 col1">
                    <div class="thumbnail">
                        <img class="img-responsive" src="../images/1.png" alt="1">
                        <div class="caption">
                            <h3>In Class #1</h3>
                            <p>The task was to create a PHP document with very basic code and integrate that code into the existing HTML code that exists for this site. The PHP code just adds to variables and displays the result.</p>
                            <p><a href="class1/index.php" class="btn btn-primary btn-lg">View</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 col1">
                    <div class="thumbnail">
                        <img class="img-responsive" src="../images/2.png" alt="2">
                        <div class="caption">
                            <h3>In Class #2</h3>
                            <p>The task was to create a PHP document that utilizes a foreach loop to create a table of Key Names and Key Values.</p>
                            <p><a href="class2/index.php" class="btn btn-primary btn-lg">View</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 col1">
                    <div class="thumbnail">
                        <img class="img-responsive" src="../images/3.png" alt="3">
                        <div class="caption">
                            <h3>In Class #3</h3>
                            <p>The task was to create a PHP document that displays a store front. There will be products, product descriptions, and product pages. The index page will contain a table of products and descriptions which when clicked will navigate to the product page.</p>
                            <p><a href="class3/index.php" class="btn btn-primary btn-lg">View</a></p>
                        </div>
                    </div>
                </div>
		<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 col1">
                    <div class="thumbnail">
                        <img class="img-responsive" src="../images/4.png" alt="3">
                        <div class="caption">
                            <h3>Homework #1</h3>
                            <p>The task was to create a PHP document that combines the index.php document and the products.php document created in class. The combined document should perform the same purpose as the two seperate documents in one document. It should also put the clicked product at the top of the page with the table of products below it.</p>
                            <p><a href="shapes/index.php" class="btn btn-primary btn-lg">View</a></p>
                        </div>
                    </div>
                </div>
		<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 col1">
                    <div class="thumbnail">
                        <img class="img-responsive" src="../images/5.png" alt="3">
                        <div class="caption">
                            <h3>Homework #2</h3>
                            <p>The task for this assignment was to create a username and password login that checks a database for the correct pair of username and password. If there is in error in entering the information the page will notify the user and if there is an error in matching the information with what exists in the database, the page will give back the username with an empty password field. When all of the entered information matches, the login will be successful.</p>
                            <p><a href="valid/index.php" class="btn btn-primary btn-lg">View</a></p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        
        
        <footer class="footer">
            <div class="container">
                <a href="https://www.linkedin.com/pub/raul-matos/116/831/538">
                <img src="../images/profile.JPG" id="profile">
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
        <script src="../js/bootstrap.min.js"></script>
        
    </body>

</html>