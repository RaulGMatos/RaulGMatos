<?
    function sendEmail()
    {
	$to = $_POST['email'];
        $name = $_POST['name'];
        $username = $_POST['username'];
        $password = $_POST['password'];
	
	$subject = "Welcome!";
        
        $htmlMessage = "
        <html>
            <head>
                <title>HTML email</title>
            </head>
            
            <body>
                <h2>Hello $name:</h2>
                
                <p>Thank you for registering with our website.</p>
                
                <p>Please click the link below to verify your email:</p>
                <a href='http://bscacad2.buffalostate.edu/~matosrg01/475/project1/ver.php?email=$to'>VERIFY ME</a><br>
                
                <p>If you have received this email in error, please click the link below to be removed from our database:</p>
                <a href='http://bscacad2.buffalostate.edu/~matosrg01/475/project1/ver.php?email=$to&remove=true'>REMOVE ME</a><br>
                
                <table border='2' style='width:100%'>
                    <caption>Registration Information</caption>
                    <tr>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Email Address</th>
                    </tr>
                    <tr>
                        <td>$name</td>
                        <td>$username</td>
                        <td>$password</td>
                        <td>$to</td>
                    </tr>
                </table><br>
                
                <footer class='footer'>
                    <div class='container'>
                        <p class='text-muted'><strong>Raul G. Matos | Fall 2015 | Department of Computer Information Systems</strong><br>
                            <i><small>Technology Building, Room 202</small></i><br>
                            <i><small>Buffalo State College</small></i><br>
                            <i><small>1300 Elmwood Avenue</small></i><br>
                            <i><small>Buffalo, New York 14222</small></i>
                        </p>
                    </div>
                </footer>
            </body>
        </html>
        ";
        
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	
	mail($to,$subject,$htmlMessage,$headers);
    }
?>