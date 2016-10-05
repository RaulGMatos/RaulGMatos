<?
	$products  = NULL;
	$selection = NULL;
	
	
	function testQueryString() {
		return !empty( $_SERVER['QUERY_STRING'] );
	}//testQueryString()
	
	
	function generateList() {
		$products = "<ul>";	
		for ( $stringVal = 1; $stringVal < 6; ++$stringVal) {		
			$products .= "<li><a href='$_SERVER[PHP_SELF]?product=$stringVal'>Product $stringVal</a></li>";	 
		}	
		$products .="</ul>";
		return $products;
	}//generateList
	
	function returnSelection(){
	
	if ( testQueryString() ) {
		
		$selection = "<p>";
		
		switch ( $_GET['product'] ) {
			
			case 1:
				$selection .= "Product $_GET[product] was selected";
			break;
			case 2:
				$selection .= "Product $_GET[product] was selected";
			break;
			case 3:
				$selection .= "Product $_GET[product] was selected";
			break;
			case 4:
				$selection .= "Product $_GET[product] was selected";
			break;
			case 5:
				$selection .= "Product $_GET[product] was selected";
			break;
		
		}//switch
		
		$selection .= "</p>";
		
	}
	else {
		$selection = "&nbsp;";
	}
	
		return $selection;
		
	}//returnSelection
	
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>QS Product</title>
</head>

<body>

<?=generateList();?>
<?=returnSelection();?>

</body>
</html>






