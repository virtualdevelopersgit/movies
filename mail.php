<?php
    $to = 'virtualdevelopers@protonmail.com';
    $name = $_POST["name"];
    $email= $_POST["email"];
    $text= $_POST["message"];
    $subject= $_POST["subject"];
    


    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $message ='<table style="width:100%">
        
		<tr><td>Subject: '.$subject.'</td></tr>
        <tr><td>Email: '.$email.'</td></tr>
        <tr><td>Text: '.$text.'</td></tr>
        
    </table>';

    if (@mail($to, $email, $message, $headers))
    {
		header( "refresh:5;url=https://virtual-developer.000webhostapp.com/contact.html" );
        echo 'Your message has been sent.';
    }else{
		header( "refresh:3;url=https://virtual-developer.000webhostapp.com/contact.html" );
        echo 'failed';
    }
	
?>
