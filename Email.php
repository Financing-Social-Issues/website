<?php

require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Configuração
    $secretKey = '';
    $captcha = $_POST['g-recaptcha-response'];
    $mail_from = "";

    if (!$captcha) {
        echo json_encode(['success' => false, 'message' => 'Please check the captcha form.']);
        exit;
    }

    // Dados do remetente
    $subject = trim($_POST["subject"]);
    $name = str_replace(array("\r","\n"),array(" "," "), strip_tags(trim($_POST["name"])));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = trim($_POST["message"]);

    if (empty($name) OR !filter_var($email, FILTER_VALIDATE_EMAIL) OR empty($subject) OR empty($message)) {
        echo json_encode(['success' => false, 'message' => 'Please complete the form and try again.']);
        exit;
    }

    $ip = $_SERVER['REMOTE_ADDR'];
    $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
    $responseKeys = json_decode($response, true);

    if (intval($responseKeys["success"]) !== 1) {
        echo json_encode(['success' => false, 'message' => 'Please check the captcha form.']);
    } else {
        $mail = new PHPMailer(true);
        try {

            $mail->isSMTP();
            $mail->Host = '';
            $mail->SMTPAuth = true;
            $mail->Username = '';
            $mail->Password = '';
            $mail->SMTPSecure = 'TLS';
            $mail->Port = 587;


            // Destinatários
            $mail->setFrom($mail_from, $name);
            $mail->addAddress($email);

            // Conteúdo do email
            $mail->isHTML(false);
            $mail->Subject = $subject;
            $mail->Body    = "Name: $name\nEmail: $email\nMessage:\n$message\n";

            $mail->send();
            echo json_encode(['success' => true, 'message' => 'Thank You! Your message has been sent.']);
        } catch (Exception $e) {
            echo json_encode(['success' => false, 'message' => "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"]);
        }
    }

} else {
    echo json_encode(['success' => false, 'message' => 'There was a problem with your submission, please try again.']);
}

?>
