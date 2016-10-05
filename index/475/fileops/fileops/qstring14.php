<?
	function testQueryString() {
		
		return !empty( $_SERVER['QUERY_STRING']);
		
	}//testQueryString
	
	
	function generateList(){
		
	if( testQueryString() ) {
	
		$products = "Product $_GET[product] is selected from the list.";
		
	} 
	else {
		
		$products = "<ul>";
		for( $stringVal = 1; $stringVal < 6; ++$stringVal ) {
 		$products .= "<li><a href='$_SERVER[PHP_SELF]?product=$stringVal'>Product $stringVal</a></li>";
		}
		$products .= "</ul>";
		
	}//if
		
		return $products;
	
	}//generateList

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Query String Test</title>
</head>

<body>

	<ul>
    	<li>The result of the testQueryString function: <?=testQueryString();?>  </li>
    </ul>

	<?=generateList();?>

</body>
</html>








