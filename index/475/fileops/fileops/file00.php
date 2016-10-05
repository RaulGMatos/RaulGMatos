<?
	$my_file_name = "f15.txt";
	$my_data = "Hello World!\r\n";
	
	if (! ( $my_file_pointer  =  fopen($my_file_name, "a"))){
		print ("Error:  ");
		print ("  $my_file_name could not be written or created\n ");
		exit;    # exit script
	}// end if
	
	fputs ($my_file_pointer, $my_data, 1024);
	fclose ($my_file_pointer);
?>

<!doctype html>

<html>
    <head>
        <meta charset="utf-8">
        <title>File Operation 00</title>
    </head>

    <body>
    	<p>Here is your file: <a href="f15.txt">Click here to view contents.</a></p>
    </body>
</html>