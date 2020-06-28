<?php
    $name = $_Post['name'];
    $visitor_email = $_Post['email'];

    $email_from = 'anssh.p6@gmail.com';
    $email_subject = 'Gharsabha Website: New Member in Get Notified Group';
    $email_body = 'Name: $name.\n'.
                    'Email: $visitor_email.\n';
        
    $to = 'anssh.p6@gmail.com';

    $headers = 'From: $email_from \r\n';
    $headers .= 'Reply-To: $visitor_email \r\n';

    mail($to,$email_subject,$email_body,$headers);
    header("Location: getnotified.html");

?>