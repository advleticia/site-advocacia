<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $area = $_POST['area'];
    $mensagem = $_POST['mensagem'];

    $destinatario = "Leticia.advog@outlook.com";
    $assunto = "Novo contato do site";
    
    $corpo = "Nome: $nome\n";
    $corpo .= "E-mail: $email\n";
    $corpo .= "Telefone: $telefone\n";
    $corpo .= "Área de Atuação: $area\n";
    $corpo .= "Mensagem:\n$mensagem\n";
    
    $cabecalho = "From: $email\r\n";
    $cabecalho .= "Reply-To: $email\r\n";
    
    if (mail($destinatario, $assunto, $corpo, $cabecalho)) {
        echo "<script>alert('Mensagem enviada com sucesso!'); window.location.href = 'index.html';</script>";
    } else {
        echo "<script>alert('Erro ao enviar mensagem.'); window.location.href = 'index.html';</script>";
    }
} else {
    echo "<script>alert('Acesso inválido.'); window.location.href = 'index.html';</script>";
}
?>

