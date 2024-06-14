<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Monta o corpo do email
    $email_body = "Nome: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Assunto: $subject\n";
    $email_body .= "Mensagem:\n$message\n";

    // Configuração do email
    $to = "guigahunter2001@gmail.com";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Envia o email
    if (mail($to, $subject, $email_body, $headers)) {
        echo "Email enviado com sucesso para $to";
    } else {
        echo "Erro ao enviar o email";
    }
} else {
    // Se o método da requisição não for POST, redireciona para o index
    header("Location: index.html");
}
?>
