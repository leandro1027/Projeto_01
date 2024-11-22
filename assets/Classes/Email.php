<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

class Email
{
    public function __construct()
    {
        // Obtendo os dados do formulário e validando
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if (!$post || !isset($post['nome'], $post['email'], $post['telefone'], $post['mensagem'])) {
            echo "Erro: Todos os campos são obrigatórios.";
            return;
        }

        $nome = $post['nome'];
        $email = $post['email'];
        $telefone = $post['telefone'];
        $mensagem = $post['mensagem'];

        // Corpo do email
        $body = "<h2>Formulário de Contato:</h2>
        <strong>Nome:</strong> {$nome}<br>
        <strong>E-mail:</strong> {$email}<br>
        <strong>Telefone:</strong> {$telefone}<br>
        <strong>Mensagem:</strong> {$mensagem}<br>";

        // Instância do PHPMailer
        $mail = new PHPMailer(true);

        try {
            // Configurações do servidor SMTP
            $mail->isSMTP();
            $mail->Host = 'sandbox.smtp.mailtrap.io';  // Servidor SMTP
            $mail->SMTPAuth = true;                   // Autenticação SMTP
            $mail->Username = '3d7aa3cd97e704';       // Usuário do Mailtrap
            $mail->Password = 'b9cf407c7b1c3d';       // Senha do Mailtrap
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Criptografia TLS
            $mail->Port = 587;                        // Porta TLS

            // Configurações do destinatário
            $mail->setFrom('contato@dominio.com.br', 'Mailer');
            $mail->addAddress('contato@dominio.com.br', 'Destinatário');

            // Conteúdo do email
            $mail->isHTML(true);
            $mail->Subject = 'Contato: ' . $nome;
            $mail->Body = $body;

            // Enviar email
            $mail->send();
            echo "Mensagem enviada com sucesso.";
        } catch (Exception $e) {
            echo "Erro ao enviar a mensagem: {$mail->ErrorInfo}";
        }
    }
}
?>
