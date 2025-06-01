<?php
function gerarSaudacao($nome) {
    return "Olá, $nome! Seja bem-vindo!";
}
$nomeUsuario = "Olinda";
$mensagem = gerarSaudacao($nomeUsuario);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Personalização de mensagem</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <p>Questão 07</p>
    <h2><?php echo $mensagem; ?></h2>
</body>
</html>
