<?php
$mensagem = "";

for ($i = 1; $i <= 100; $i++) {
    if ($i > 50) {
        break;
    }
    $mensagem .= "Processando item: $i <br>";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Processamento Limitado:</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <p>Questão 04</p>
    <h2>Processamento de Itens</h2>
    <p><?php echo $mensagem; ?></p>
</body>
</html>