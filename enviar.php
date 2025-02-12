<?php

try {
// Dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

// Seu endereço de e-mail
$para = 'contato@advleticia.com'; // Substitua pelo seu e-mail

// Assunto do e-mail
$assunto = 'Novo contato pelo formulário do site';

// Corpo do e-mail
$corpo = "Nome: $nome\nEmail: $email\nMensagem: $mensagem";

// Envio do e-mail
mail($para, $assunto, $corpo);

// Redirecionamento para uma página de confirmação
    header('Location: obrigada.html'); // Crie um arquivo obrigado.html
} catch (Exception $e) {
    echo 'Erro ao enviar o e-mail: ' . $e->getMessage();
}

?>
