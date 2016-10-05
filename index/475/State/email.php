<?php
  //Email information
  $admin_email = "matosrg01@mail.buffalostate.edu";
  $email = "noone@somewhere.com";
  $subject = "SPAM";
  $comment = "Thanks for reading our message.";
  
  //send email
  mail($admin_email, "$subject", $comment, "From:" . $email);
  
  //Email response
  echo "Thank you for contacting us!";
?>