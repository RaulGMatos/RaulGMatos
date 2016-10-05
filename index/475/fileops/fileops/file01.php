<?
	$my_file_name = "f15.txt";
	
	$contents = file($my_file_name);	     # hazzah!
?>

<!doctype html>

<html>
    <head>
        <meta charset="utf-8">
        <title>File Operation 01</title>
    </head>

    <body>
    <?
        print "<pre>";
          print_r ($contents);
        print "<pre>";
	?>
    </body>
</html>