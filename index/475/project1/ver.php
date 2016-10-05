<?
    function start()
    {
        $start = "";
        
        if(!isset($_GET['email']))
        {
            $body = "<h1>Oops! Not sure how you got here.</h1>";
            $body .= "<h4>¯\_(ツ)_/¯</h4>";
            $body .= "<p>Let me fix that...</p>";
            $body .= "<p>You will be redirected to the login page in <span id='counter'>10</span> second(s).</p>";
            $body .="
                <script type='text/javascript'>
                    function countdown() {
                        var i = document.getElementById('counter');
                        if (parseInt(i.innerHTML)<=1) {
                            location.href = 'login.php';
                        }
                        i.innerHTML = parseInt(i.innerHTML)-1;
                    }
                    setInterval(function(){ countdown(); },1000);
                </script>
            ";
            
            return $body;
        }
        else
        {
            $start .= linkTest();
        }
        
        return $start;
    }
    
    function verified()
    {
        include 'connect.php';
        $email = $_GET['email'];
        
        $body = "<h1>Your email has been verified!</h1>";
        $body .= "<p>You will be redirected to the members page in <span id='counter'>10</span> second(s).</p>";
        $body .="
            <script type='text/javascript'>
                function countdown() {
                    var i = document.getElementById('counter');
                    if (parseInt(i.innerHTML)<=1) {
                        location.href = 'wel.php';
                    }
                    i.innerHTML = parseInt(i.innerHTML)-1;
                }
                setInterval(function(){ countdown(); },1000);
            </script>
        ";
        
        $sql = "UPDATE members SET verified=1 WHERE email=:email";
        $stmt = $databaseConnection->prepare($sql);
        $stmt->bindValue(':email', $email);
        $stmt->execute();
        
        return $body;
    }
    
    function removed()
    {
        include 'connect.php';
        $email = $_GET['email'];
        
        $body = "<h1>Your information has been removed!</h1>";
        $body .= "<p>You will be redirected to the login page in <span id='counter'>10</span> second(s).</p>";
        $body .="
            <script type='text/javascript'>
                function countdown() {
                    var i = document.getElementById('counter');
                    if (parseInt(i.innerHTML)<=1) {
                        location.href = 'login.php';
                    }
                    i.innerHTML = parseInt(i.innerHTML)-1;
                }
                setInterval(function(){ countdown(); },1000);
            </script>
        ";
        
        $sql = "DELETE FROM members WHERE email=:email";
        $stmt = $databaseConnection->prepare($sql);
        $stmt->bindValue(':email', $email);
        $stmt->execute();
        
        return $body;
    }
    
    function linkTest()
    {
        $test = "";
        
        if(isset($_GET['remove']))
        {
            $test .= removed();
        }
        else
        {
            $test .= verified();
        }
        
        return $test;
    }
?>

<!DOCTYPE html>

<html>
    <head>
        <link rel="icon" href="../../images/programming.ico">
        
        <title>Confirmation!</title>
    </head>
    
    <body>
        <?=start();?>
    </body>
</html>