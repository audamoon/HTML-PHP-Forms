<?php
require 'vendor/autoload.php';
require_once 'credentials.php';

use PHPMailer\PHPMailer\PHPMailer;

date_default_timezone_set('Etc/UTC');

$subject = $_POST['message_type'] . ' от ' . $_POST['full_name'] . ' Телефон: ' . $_POST['phone_number'] . ' Email ' . $_POST['email'];
$message = $_POST['message'];

$mail = new PHPMailer();
$mail->Mailer = 'smtp';
$mail->Host = 'ssl://smtp.yandex.ru';
$mail->Port = '465';
$mail->SMTPAuth = true;
$mail->Username = $yandexLogin;
$mail->Password = $yandexPass;

$mail->setFrom($yandexLogin, 'Site Form');
$mail->addAddress('testmail111225@inbox.ru', 'test test');
$mail->CharSet = 'UTF-8';
$mail->Subject = $subject;
$mail->msgHTML("<p>{$message}</p>");

if ($mail->send()) {
    require 'success.php';
} else {
    echo 'Ошибка: ' . $mail->ErrorInfo;
}
?>