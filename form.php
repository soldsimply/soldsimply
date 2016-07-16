<html>
<body>

<?php
$to = "erikkennethsherman@gmail.com";
$subject= "soldsimply client";
$email $_REQUEST['name'];
$message = $_REQUEST['name'];
$headers = "From: $email";
$sent = mail($to, $subject, $message, $headers);
if($sent)
{print ('Your request was successful. I will respond to the email provided to confirm the time. Click <a href="index.html>HERE</a> to return;}
else
{print "There is an error sending your email. Please try again. If you cannot contact me this way please contact me through my email adress or phone number.;}
?>

</body>
</html>
