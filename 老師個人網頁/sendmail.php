<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
<<<<<<< HEAD
require 'vendor/autoload.php';
=======
require 'mail/vendor/autoload.php';
>>>>>>> origin/master

$mail = new PHPMailer(true);
try {
    //Server settings
<<<<<<< HEAD
    $mail->SMTPDebug = 2;
=======
    $mail->SMTPDebug =0;
>>>>>>> origin/master
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'username@gmail.com';
    $mail->Password = '_password_';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;


    $mail->setFrom('sender@example.com', 'Admin');
    $mail->addAddress('recipient1@example.net', 'Recipient1');
    $mail->addAddress('recipient2@example.com');
<<<<<<< HEAD
    $mail->addReplyTo('noreply@example.com', 'noreply');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');
=======
//    $mail->addReplyTo('noreply@example.com', 'noreply');
//    $mail->addCC('cc@example.com');
//    $mail->addBCC('bcc@example.com');
>>>>>>> origin/master

    //Attachments
    $mail->addAttachment('/backup/myfile.tar.gz');

    //Content
    $mail->isHTML(true);
    $mail->Subject = 'Test Mail Subject!';
    $mail->Body    = 'This is SMTP Email Test';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}