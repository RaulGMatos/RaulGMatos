<?
    $dbhost = "mysql:host=localhost;dbname=allyourdatabase";
    $dbuser = "brucewayne";
    $dbpass = "batman";
    
    try
    {
        $databaseConnection = new PDO($dbhost,$dbuser,$dbpass);
        
        $databaseConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e)
    {
        echo $sql . "<br>" . $e->getMessage();
    }
?>