<?
// PHP for Absolute Beginners by Jason Lengstorf Apress © 2009
// Available in books24x7

// MySQLi

    // Open a MySQL connection
	// The primary difference between OOP and procedural code is that an object can store information, 
	// freeing us from having to pass variables explicitly from function to function.
	// MySQLi works similarly to the MySQL extension, with one key exception: instead of providing individual functions, 
	// developers using MySQLi have access to methods, or functions contained within the MySQLi object. 
	// Instantiate the MySQLi object in the variable $link and establish a connection with localhost, username, password, and a database name.
    $password =  'Red6ixYiC2OciD{}';
	
	$link = new mysqli('localhost', 'matosrg01', $password, 'matosrg01');
    if(!$link) {
        die('Connection failed: ' . $link->error());
    }

    // Create and execute a MySQL query
	// To execute a query, we call the query() method and pass the variable containing our MySQL statement. 
	// We call a method in OOP using the variable that contains the object, followed by an arrow (->) and the name of the method we want to call.
	
    $sql = "SELECT userperson FROM formvalid1";
    $result = $link->query($sql);
	
    // Loop through the returned data and output it
	// The query() method returns a mysqli_result object, which has methods that allow you to access the information returned by the query.
	// To access each returned entry in order, we set up a loop that uses the result of calling: $result->fetch_assoc();
	
    while($row = $result->fetch_assoc()) {
        printf("userperson: %s<br />", $row['userperson']);
    }

	 // Free the memory associated with the query
	//  Destroy the returned data set by calling the close() method on the $result object. 
	//  Also, we close the MySQLi connection by calling the close() method on $link, as well.
   
    $result->close();

    // Close the connection
    $link->close();
?>
