<?php
if($_POST["message"]) {

// aessamoffcial@gmail.com

$to      = 'salehmahmoud594@gmail.com';
$subject = 'Site Contact Us';
$message = 'Contact Us : ';
$headers = array($_POST["user"] , 
                 $_POST["mail"] , 
                 $_POST["mobile"] , 
                 $_POST["message"]
);

    @mail($to , $subject , $message ,implode("\r\n",$headers));
	
	
}
header("Location: index.html"); /* Redirect browser */

?>
