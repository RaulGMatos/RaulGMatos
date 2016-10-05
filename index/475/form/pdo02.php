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

    /*** The SQL SELECT statement ***/
    $sql = "SELECT * FROM formvalid1";
    foreach ($dbh->query($sql) as $row)
        {
        print ' | ' . $row['id'] .' | '. $row['userperson'] . ' | '. $row['passperson'] . '|<br />';
        }

    /*** close the database connection ***/
    $dbh = null;
}
catch(PDOException $e)
    {
    echo $e->getMessage();
    }
?>