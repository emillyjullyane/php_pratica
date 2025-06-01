<?php
function registrarEvento($mensagem) {
    $timestamp = date("d/m/Y H:i:s", time());
    return "[$timestamp] Evento: $mensagem";
}

$mensagemLog = registrarEvento("Senha inválida.");
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Log de Eventos</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <p>Questão 10</p>
    <h2><?php echo $mensagemLog; ?></h2>
</body>
</html>
