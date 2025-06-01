<?php
$mensagem = "";
for ($i = 5; $i >= 1; $i--) {
    $mensagem .= "Preparando para lançamento: $i <br>";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Preparando para lançamento</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <p>Questão 03</p>
    <h2>Contagem Regressiva</h2>
    <p><?php echo $mensagem; ?></p>
</body>
</html>