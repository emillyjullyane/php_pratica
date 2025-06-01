<?php
$totalVendas = 0;

for ($dia = 1; $dia <= 100; $dia++) {
    $vendaDia = rand(50, 5000);
    $totalVendas += $vendaDia;
}


?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Total de Venda</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <p>Questão 08</p>
    <h2>Total de Vendas do Mês</h2>
    <p>O total de vendas dos 100 dias é: R$ <?php echo number_format($totalVendas, 2, ',', '.'); ?></p>
</body>
</html>