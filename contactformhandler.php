<?php
$name=$POST['Name'];
$visitor_email=$POST['Email'];
$message=$POST['Message'];

$email_from='Lyricalwworld@gmail.com';
$email_subject="New Form Subjection";

$email_body="User Name:$name.\n".
            "User Email:$visitor_email. \n".
            "User Message:$message. \n"

$to='Lyricalwworld@gmail.com';

$headers="From:$email_from \r\n";

$headers="From:$email_from \r\n";

$headers .="Reply-To $visitor_email\r\n";

mail($to,$email_subject,$email_body,$headers)

header("location: contact.html")