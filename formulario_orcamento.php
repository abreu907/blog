<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = htmlspecialchars($_POST['nome']);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $mensagem = htmlspecialchars($_POST['mensagem']);

    if ($email) {
        $to = "claramartinez@example.com";
        $subject = "Novo contato de $nome";
        $body = "Nome: $nome\nEmail: $email\n\nMensagem:\n$mensagem";
        $headers = "From: $email";

        if (mail($to, $subject, $body, $headers)) {
            echo "Mensagem enviada com sucesso!";
        } else {
            echo "Erro ao enviar mensagem. Tente novamente.";
        }
    } else {
        echo "Email inválido.";
    }
}
?>
