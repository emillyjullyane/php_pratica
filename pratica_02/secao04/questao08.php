<?php
function formatarPreco($valor) {
    return "R$ " . number_format($valor, 2, ',', '.');
}
$valorProduto = 1234.56;
$precoFormatado = formatarPreco($valorProduto);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Formatação de Preços</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <p>Questão 08</p>
    <h2>Preço formatado: <?php echo $precoFormatado; ?>.</h2>
</body>
</html>
