<?
// PHP for Absolute Beginners by Jason Lengstorf Apress © 2009
// Available in books24x7	

// Using Prepared Statements with MySQLi

    //if($_SERVER['REQUEST_METHOD']=='GET')
	if( isset( $_GET['submit'] ) )
    {
        // Open a MySQL connection
		
		$password = 'Red6ixYiC2OciD{}';
		
        $link = new mysqli('localhost', 'matosrg01', $password, 'matosrg01');

        if(!$link) {
            die('Connection failed: ' . $mysqli->error());
        }

        // Create and execute a MySQL query
		// When a user submits the form, a new MySQLi object is created ($link), 
		// and a query is created with a placeholder for the id in the WHERE clause.
		 
        $sql = "SELECT userperson FROM formvalidone WHERE id = ?";
		
		//  We call the prepare() method on our MySQLi object ($link->prepare($sql)) and pass the query as a parameter.

        if($stmt = $link->prepare($sql))
        {
			// With our statement ($stmt) prepared, we need to tell MySQL how to handle the user input and insert it into the query. 
			// This is called binding parameters to the query, and we accomplish this by calling the bind_param() method on the newly 
			// created $stmt, which is a MySQLi_STMT object.
			
			// Binding parameters requires a couple steps: begin by passing the type of the parameter, then pass the parameter value.
			// We're passing the user's ID, so we set the parameter type to i (integer), then pass the value of $_GETT['user'].
            
			$stmt->bind_param('i', $_GET['user']);
			
			// With the parameters bound, we can execute the statement using the execute() method.
				
            $stmt->execute();
			
			// After the query is executed, we need to specify variables to contain the returned results, which we accomplish using the
			// bind_result() method. For each column we've requested, we need to provide a variable to contain it. 
			// In this example, we need to store the userperson name, which we accomplish by supplying the $userperson variable.
			
            $stmt->bind_result($userperson);
			
			// Our script now knows where to store returned values, so we set up a loop to run while results still exist 
			// (as returned by the fetch() method). Inside the loop, we output each userperson name.
			
            while($stmt->fetch()) {
                printf("User: %s<br />", $userperson);
            }
			
			// Finally, we destroy our resultset and close the connection by calling the close() method on both our MySQLi_STMT 
			// and MySQLi objects; this frees the memory used by the query.
            $stmt->close();
        }

        // Close the connection
        $link->close();
    }
    else {

	// When the user selects an artist, the artist's unique ID is passed to the processing script in the $_GETT['user'] variable 
	// which allows us to change our query based on user input.

	print "<form method='get' action='form5b.php'>";
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