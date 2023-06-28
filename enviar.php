<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os dados do formulário
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];

    // Configurações de e-mail
    $destinatario = "guhh03odelot@gmail.com"; // Insira aqui o e-mail para onde deseja enviar as mensagens
    $assunto = "Mensagem do formulário de contato";

    // Monta o corpo da mensagem
    $corpoMensagem = "Nome: " . $nome . "\n";
    $corpoMensagem .= "Email: " . $email . "\n";
    $corpoMensagem .= "Mensagem: " . $mensagem . "\n";

    // Envia o e-mail
    if (mail($destinatario, $assunto, $corpoMensagem)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Houve um erro ao enviar a mensagem.";
    }
}
?>