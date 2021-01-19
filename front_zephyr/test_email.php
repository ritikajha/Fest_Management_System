<?php
//The below code was tried after doenlaoding the mail package of xampp , and changing the protocols as 
//as given but still unable to send emails due to high security of gmail and yahoo accounts now-a-days,
// I even tried it using a yahoo mail,the below could would run from a verfied derver and registered 
//mail with all desired permissions, and this code snippet would be added in the concerned condition to 
//bring the email verifcation system of project in working state
$to_email = "ritujha2001@gmail.com";
$subject = "Test mail";
$body = "Hi,this is to test mail";
$headers = "From: Ritika";
 
if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email";
} else {
    echo "Email sending failed";
}
?>
