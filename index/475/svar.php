<!doctype html>

<html>
	<head>
		<meta charset="utf-8">
		<title>Server Collection</title>
        <style>
        	table {border-collapse:collapse;}
			td,th {border:1px solid#09F;}
        </style>
	</head>

	<body>
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
            
        </table>
        
        <ul>
        	<?="<li>The first parameter of the querystring is: $_GET[firstKey]</li>";?>
            <li><?="The first parameter of the querystring is: " . $_GET['firstKey'];?></li>
            <?='<li>The first parameter of the querystring is: ' . $_GET['firstKey'] . '</li>';?>
        </ul>
    </body>
</html>