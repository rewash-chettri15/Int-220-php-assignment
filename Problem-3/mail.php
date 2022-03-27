<?php
$to_email = "rewashchettri2015@gmail.com";
$subject = "Comfirmation Email via PHP";
$body = "Hi, this is test email send by PHP";
$headers = "From : iamrewash@gmail.com";

if (mail($to_mail, $subject, $body, $headers)) {
    echo "Email sent successfully to $to_email <br>";
} else {
    echo "Email sending failed <br>";
}