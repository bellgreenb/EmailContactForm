<?php
//if the server request method is POST, process the form data
//translation: if the form is submitted, process the data
if($_SERVER['REQUEST_METHOD'] == 'POST') {
   
    // Get the form data
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $to = 'bellgunkmail@gmail.com';
    $header = "From: $email";

    if(mail($to, $subject, $message, $header)){
        echo "email sent successfully";
    } else {
        echo "send failed";
    }
    
    //must configure php.ini and sendmail.ini file to send email 
    //php.ini location: "C:\xampp\php\php.ini"
    //sendmail.ini location: "C:\xampp\sendmail\sendmail.ini"

    // Warning: mail(): "sendmail_from" not set in php.ini or custom "From:" header missing in C:\xampp\htdocs\EmailContactForm\includes\process.php on line 14
    // send failed
} 