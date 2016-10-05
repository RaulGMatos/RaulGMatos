<?

if( isset( $_GET['submit'] ) )
    {
        // Open a MySQL connection with a PDO object
		// The first step, opening the database connection, is a little different from MySQLi. 
		// This difference stems from the fact that PDO can support multiple database types, 
		// which means we need to specify a driver to create the right type of connection.

        $dbinfo = 'mysql:host=localhost;dbname=matosrg01';
        $user = 'matosrg01';
		$password = 'Red6ixYiC2OciD{}';
		
		//  $link is the PDO object
		
        $link = new PDO($dbinfo, $user, $password);
	
		// Create and execute a MySQL query
		// Form our query with a placeholder, 
		
		//$sql = "SELECT count(*) FROM formvalidone WHERE userperson = ?";
		// The user exists in the table, now we check their password
		$sql = "SELECT count(*) FROM formvalid1 WHERE userperson = ? AND passperson = ?";
		
		// Pass the query to the prepare() method, and then pass the query to be prepared. 
		// This returns a PDOStatement object that we save in the $stmt variable.
        $stmt = $link->prepare($sql);
		
		// Call the execute() method with an array containing the user-supplied username, $_GET['box1']. 
		
        if($stmt->execute(array($_GET['box1'], $_GET['box2'])))
        {
			// After the statement has executed, we set up a loop to run while results still exist. 

         //   while($row = $stmt->fetchColumn()) {
         //       print $row;
         //   }
		 
		    if($row = $stmt->fetchColumn()) {
               print "true and $row.";
            }
			else{
				print "false and $row.";
			}
			
			
			// Free the memory using the closeCursor() method.
            $stmt->closeCursor();
        }
    }
    else {

	// When the user selects an artist, the artist's unique ID is passed to the processing script in the $_GETT['user'] variable 
	// which allows us to change our query based on user input.

	print "<form method='get' action='pdo05.php'>";
	print "Input 1: <input type='text' name='box1'><br>";
	print "Input 2: <input type='text' name='box2'><br>";
	print "<input type='submit' value='submit' name='submit' />";
	print "</form>";

} // End else 

?>


	
	