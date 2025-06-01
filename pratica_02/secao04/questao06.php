<?php
function verificarAcesso($idade) {
    if ($idade >= 18) {
        return "Acesso permitido!";
    } else {
        return "Acesso negado!";
    }
}
$idade = 17;
$mensagem = verificarAcesso($idade);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Controle de Acesso</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <p>Questão 06</p>
    <h2>Idade informada: <?php echo $idade; ?>.</h2>
    <h2>Permissão: <?php echo $mensagem; ?></h2>
</body>
</html>