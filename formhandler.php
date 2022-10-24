<?php 
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $subject = $_POST['Subject'];
    $msg = $_POST['Msg'];

    $email_from = 'info@yourwebsite.com';
    $email_subject = 'New Form Submission';
    $email_body = "User Name : $name.\n".
                  "User Email : $email.\n".
                  "Subject : $subject.\n".
                  "User Message : $msg.\n";

    $to = 'chaitanya1164m@gmail.com';

    $headers = "From: $email_from \r\n";
    $headers .= "Reply To : $email \r\n";

    mail($to, $email_subject, $email_body, $headers);

    header("Location: contact.html")
?>