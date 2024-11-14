<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

class Email{

    function __construct(){
        $post = filter_input_array(INPUT_POST);
        
        $nome = $post['nome'];
        $email = $post['email'];
        $telefone = $post['telefone'];
        $mensagem = $post['mensagem'];
        
        $body = "<h2>Formulario de contato: </h2>
        <strong>Nome: </strong>
        {$nome}<br>
        <strong>E-mail: </strong>
        {$email}<br>
        <strong>Telefone: </strong>
        {$telefone}<br>
        <strong>Mensagem: </strong>
        {$mensagem}<br>
        ";
        
$mail = new PHPMailer(true);

try {
    //Server settings

    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'sandbox.smtp.mailtrap.io';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = '3d7aa3cd97e704';                     //SMTP username
    $mail->Password   = 'b9cf407c7b1c3d';                               //SMTP password
    //$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('contato@dominio.com.br', 'Mailer');
    $mail->addAddress('contato@dominio.com.br', 'Joe User');     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Contato: '.$nome;
    $mail->Body    = 'Corpo do <b>Email</b>';

    $mail->send();
} catch (Exception $e) {
    echo "Error: {$mail->ErrorInfo}";
}

    }
    

}
?>