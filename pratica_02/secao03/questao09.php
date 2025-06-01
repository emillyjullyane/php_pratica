<?php
$producoes = [1, 2, 3, 4, 5, 6];
$mensagem = "";
$i = 0;
$quantidadeAtual = 0;

while ($quantidadeAtual < 5 && $i < count($producoes)) {
    $quantidadeAtual = $producoes[$i];
    $mensagem .= "Ciclo $i: Quantidade produzida = $quantidadeAtual <br>";
    $i++;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Ciclo de Produção</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <p>Questão 09</p>
    <h2>Ciclo de Produção</h2>
    <p><?php echo $mensagem; ?></p>
</body>
</html>