<?php
$message_sent = false;
if(isset($_POST['email']) && $_POST['email'] != '') {

  if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ) {
    // submit form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $recipient = "fcp.lee80games@gmail.com";
    $body = "";

    $body .= "From: ".$name. "\r\n";
    $body .= "From: ".$email. "\r\n";
    $body .= "From: ".$subject. "\r\n";
    $body .= "From: ".$message. "\r\n";


    $mailheader = "From:".$name."<".$email.">\r\n";

    mail($recipient, $subject, $body);  
    
    $message_sent = true;
  }
  else {
    
  }


}  


echo'

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Bedankt voor uw bericht! Wij sturen u zo spoedig mogelijk een bevestiging.</h1>
        <p class="back">Terug naar <a href="index.html">homepage</a>.</p>
        
    </div>
</body>
</html>



';


?>