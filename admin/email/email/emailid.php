<?php

require 'PHPMailer/PHPMailerAutoload.php';


    $mail = new PHPMailer();

// ---------- adjust these lines ---------------------------------------
    $mail->Username = "sender@gmail.com"; // your GMail user name
    $mail->Password = "pws"; // your gmail password
    $mail->AddAddress("to@gmail.com"); // recipients email
    $mail->FromName = "HPH"; // readable name

    $mail->Subject = "Subject Title";
    $mail->Body    = "Your Message";
//-----------------------------------------------------------------------

    $mail->Host = "tls://smtp.gmail.com"; // GMail
    $mail->Port = 587;
    $mail->IsSMTP(); // use SMTP
    $mail->SMTPAuth = true; // turn on SMTP authentication
    $mail->From = $mail->Username;

    if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    
    }
    else {
     
        echo "Message has been sent";
    }


?>