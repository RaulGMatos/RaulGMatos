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

<!doctype html>

<html>
    <head>
        <meta charset="utf-8">
        
        <link rel="icon" href="../../images/programming.ico">
        
        <title>Shape Shop</title>
        
        <link href="styles/main.css" type="text/css" rel="stylesheet">
    </head>

    <body>
    	<h1>Welcome to Shape Shop!</h1>
        
        <p>Shape Shop has all of your shape needs! Purchase shapes for any occasion.</p>
        
	<?=returnSelection();?>
        <?=makeTable()?>
    </body>
</html>