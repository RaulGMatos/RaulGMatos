<?
// PHP for Absolute Beginners by  Jason Lengstorf Apress © 2009 Citation
// Available in books24x7

// PHP Data Objects, or PDO, is similar to MySQLi in that it is an object-oriented 
//  approach to handling queries that supports prepared statements.

// The main difference between MySQLi and PDO is that PDO is a database-access abstraction layer. 
// This means that PDO supports multiple database languages and provides a uniform set of methods for handling most database interactions.

// Rewriting Your Example in PDO - we can use PDO to rewrite our prepared statement.

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
		
        $sql = "SELECT userperson FROM formvalid1 WHERE id = ?";
		
		// Pass the query to the prepare() method, and then pass the query to be prepared. 
		// This returns a PDOStatement object that we save in the $stmt variable.
        $stmt = $link->prepare($sql);
		
		// Call the execute() method with an array containing the user-supplied user ID, $_GET['user']. 
		// This is equivalent to calling both bind_param() and execute() with the MySQLi extension.
		
        if($stmt->execute(array($_GET['user'])))
        {
			// After the statement has executed, we set up a loop to run while results still exist. 

            while($row = $stmt->fetch()) {
                printf("User: %s<br />", $row['userperson']);
            }
			
			// Free the memory using the closeCursor() method.
            $stmt->closeCursor();
        }
    }
    else {

	// When the user selects an artist, the artist's unique ID is passed to the processing script in the $_GETT['user'] variable 
	// which allows us to change our query based on user input.

	print "<form method='get' action='form5c.php'>";
	print "    <label for='user'>Select an Artist:</label>";
	print "    <select name='user'>";
	print "        <option value='1'>curly</option>";
	print "        <option value='2'>larry</option>";
	print "        <option value='3'>moe</option>";
	print "        <option value='4'>shep</option>";
	print "        <option value='5'>joe</option>";
	print "    </select>";
	print "   <input type='submit' value='submit' name='submit' />";
	print "</form>";

} // End else 

?>