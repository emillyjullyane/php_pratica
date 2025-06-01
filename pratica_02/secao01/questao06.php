<?php
$custoMaterial = 60.50;
$custoMaoDeObra = 120.79;
$orcamentoComp = $custoMaterial+$custoMaoDeObra;
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cálculo de orçamento:</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <p>Questão 06</p>
    <h2>Valor do orçamento completo: <?php echo $orcamentoComp;?>.</h2>
</body>
</html>
