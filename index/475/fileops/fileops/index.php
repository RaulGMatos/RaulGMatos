<?php
// this version uses GET so that we can see the data in the url   
   $error = false;		# is there any error at all
   $txtbox1err = false;	# is error in the first text box
   $txtbox2err = false;	# is error in the second text box
?>
<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'> 
<title>File Operations from PhP</title>
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
</head>
<body>
<div id="header">
<h1>CIS-475 </h1>
 <div id="menu">
  <ul id="nav">
   <li><a href="../">Home</a></li>
   <li><a href="./">guest book</a></li>
   <li><a href="./">story</a></li>
   <li><a href="http://www.oswd.org">OS Web Design</a></li>
  </ul>
 </div>
</div>
<div id="content">
<div id="right"> <!-- here is main content begin -->

<? if (!isset($_GET["submit"])): ?>
<form action="<?= $_SERVER['PHP_SELF']; ?>" method="get">
	input 1 <input type="text" name="txtbox1" /> <br />
    input 2 <input type="text" name="txtbox2" /> <br />
    <input type="submit" name="submit" value="send" /> &nbsp;&nbsp;<input type="reset" value="clear" /> 
</form>
<? else:  // test conditions and set error flags
	if( trim($_GET['txtbox1']) == NULL || is_numeric( $_GET['txtbox1'])  ){ 
		$txtbox1err = true;
	    $error= true;
       }//end if
       

	if( trim($_GET['txtbox2']) == NULL || is_numeric( $_GET['txtbox2']) ){ 
		$txtbox2err = true;
	    $error= true;
       }//end if

// if errors are found cleanse or return good data
	 if($error){ ?>
		<form action="<?= $_SERVER['PHP_SELF']; ?>" method="get">
	   <?  if($txtbox1err){?>
	    	input 1 <input type="text" name="txtbox1" /> <span style="color:#0033CC">error</span> <br />
	     <?}else{?>
	     	input 1 <input type="text" name="txtbox1" value="<?= $_GET['txtbox1'] ?>" /> <br />
	    <?}?>
	   <?  if($txtbox2err){?>
    		input 2 <input type="text" name="txtbox2" /> <span style="color:#0033CC">error</span> <br />
	     <?}else{?>
	    	input 2 <input type="text" name="txtbox2" value="<?= $_GET['txtbox2'] ?>" /><br />
	    <?}?>
	   <input type="submit" name="submit" value="send" /> &nbsp;&nbsp;<input type="reset" value="clear" /> 
	  </form>
	<? //all tests past process data
	  }elseif(!$error){
		   $myvar1 = $_GET["txtbox1"];				#  from super global to local variable
  		   $myvar2 = $_GET["txtbox2"];

	   print "<p><a href='./'>sign again</a></p>";	#  simple link back to home page
	   
	   $my_file_name = "tmp/data1.txt";        		#  place the name of the file and path into a string
	   $my_data = date("Y-m-d");			   		#  time stamp
	   $my_data .= " " . $myvar1 . " " . $myvar2;	#  concatenation of data
	   $my_data .= "EOR\n\r";						#  deliniate the end of a record (entry)
	   
	   # open a file and attach to file pointer

		if (! ( $my_file_pointer  =  fopen($my_file_name, "a+"))){
			print ("Error:  ");
			print ("$my_file_name could not be written or created\n ");
			exit;    # exit script
		}// end if
	
		fputs ($my_file_pointer, $my_data, 4096);	# write to the file
		fclose ($my_file_pointer);					# close the file to reposition the file pointer
		
		#   read example 1
		#   file --- the file function may be used to auto open, read, and close a file
		#   file takes the file name as an argument and returns the contents as an array
		print "<p>Read using standard technique<p>";
		
		$my_file_pointer  =  fopen($my_file_name, "r");
		
		while ( !feof ($my_file_pointer) ){
			$line = fgets($my_file_pointer, 4096);
			print "<p>$line</p>";
		}//end while
		
		print "<hr />";
		
		#   read example 2
		#   file --- the file function may be used to auto open, read, and close a file
		#   file takes the file name as an argument and returns the contents as an array

		$contents = file($my_file_name);	     # hazzah!
		
		print "<p>Read using the file function<p>";
		foreach ( $contents as $value){
			print "<p>$value</p>";
	    }//end foreach
		
		
	  }endif;?>

<!-- here is main content end -->
</div>
<div id="left">
	<div class="box">
			<h2>Guest Book</h2>	
			<p> <a href="./">Sign</a></p>
			<p>&nbsp;  </p>
	</div>
			
	<div class="box">
				<h2>Short Story</h2>
				<ul>
				<li><a href="./">empty</a></li>
				<li><a href="./">empty</a></li>
                <li><a href="./">empty</a></li>
				</ul>
	</div>
		
    <div class="box">
	   <div style="font-size: 0.8em;">Design by <a href="http://www.minimalistic-design.net">Minimalistic Design</a></div>
	</div>
</div>
</div>
</body>
</html>