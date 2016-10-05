<?php   
   $error = false;		# is there any error at all
   $txtbox1err = false;	# is error in the first text box
   $txtbox2err = false;	# is error in the second text box
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sticky</title>
</head>

<body>
<? if (!isset($_GET["submit"])){ ?>

<form action="<?= $_SERVER['PHP_SELF']; ?>" method="get">
	input 1 <input type="text" name="txtbox1"> <br>
    input 2 <input type="text" name="txtbox2"> <br>
    <input type="submit" name="submit" value="send"> 
</form>

<? } else { 


	if( $_GET['txtbox1'] == NULL || is_numeric( $_GET['txtbox1'])  ){ 
		$txtbox1err = true;
	    $error= true;
       }//end if

	if( $_GET['txtbox2'] == NULL || is_numeric( $_GET['txtbox2']) ){ 
		$txtbox2err = true;
	    $error= true;
       }//end if
?>

   Your get data is <?=$_GET['txtbox1'];?> and  <?=$_GET['txtbox2']?> <br />
   Your flags are:
   <ul>
   	<li>$error = <?=$error;?></li>
   	<li>$txtbox1err = <?=$txtbox1err;?> </li>
   	<li>$txtbox2err = <?=$txtbox2err;?></li>
   </ul>
   
<? } ?>

</body>
</html>













