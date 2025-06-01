<?php
function calculoCustoTotal($preco_unit, $qt) {
    return $preco_unit*$qt;
}

$custoTotal = calculoCustoTotal(12.50, 4);
$couvertArtistico = 5.00;
$custoFinal = $custoTotal + $couvertArtistico;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cálculo de Custo Total</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <p>Questão 03</p>
    <h2>Custo total dos itens: R$ <?php echo number_format($custoTotal, 2, ',', '.'); ?>.</h2>
    <h2>Custo do couvert artístico: R$ <?php echo number_format($couvertArtistico, 2, ',', '.');?>.</h2>
    <h2>Custo final: R$ <?php echo number_format($custoFinal, 2, ',', '.'); ?>.</h2>
</body>
</html>