<?php

/*** mysql hostname ***/
//$hostname = '127.0.0.1';
$hostname = 'localhost';

/*** mysql dbname ***/
//$dbname = 'mysql';
$dbname = 'matosrg01';

/*** mysql username ***/
$username = 'matosrg01';

/*** mysql password ***/
$password = 'Red6ixYiC2OciD{}';

/*** mysql port ***/
$port = '3306';



try {
     $dbh = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);
    //$dbh = new PDO("mysql:host=$hostname;port=$port;dbname=$dbname", $username, $password);
    
    /*** echo a message saying we have connected ***/
    echo 'Connected to database<br />';

    /*** INSERT data ***/
    $count = $dbh->exec("INSERT INTO formvalid1 (userperson, passperson) VALUES ('larry','screwdriver');");
    $count = $dbh->exec("INSERT INTO formvalid1 (userperson, passperson) VALUES ('moe','wrench');");
	
	//INSERT INTO basictable VALUES("Charles", "Tech Bldg", 222)

    /*** echo the number of affected rows ***/
    //echo $count;

    /*** close the database connection ***/
    $dbh = null;
    }
catch(PDOException $e)
    {
		echo "hoot";
    	echo $e->getMessage();
    }
?> 

