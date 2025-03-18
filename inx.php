<?php
//il package che composer si prende con 'composer require phpmailer/phpmailer'
//ed è preso da https://packagist.org/
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
$mail = new PHPMailer(true);
do{
    try {
        // $mail->SMTPDebug = 2; //per debuggare
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'bryan.ezennadi@iisviolamarchesini.edu.it';
        $mail->Password = 'ieew zpps zjlm pzzu';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; //gmail di default usa TLS
        $mail->Port = 587;
        $mail->setFrom('bryan.ezennadi@iisviolamarchesini.edu.it', 'Bryan');
        $mail->addAddress('niccolo.cherubin@iisviolamarchesini.edu.it');
        $mail->Subject = 'ciao';
        $mail->Body = 'ciao cheru';
        $mail->CharSet = 'UTF-8';
        $mail->Encoding = 'base64';
        $mail ->send();
        echo 'email sent successfully';
    } catch (\Exception $e) {

    }

}while(true);
