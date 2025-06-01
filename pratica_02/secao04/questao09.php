<?php
function calculoArea($comprimento, $altura) {
    return $comprimento * $altura;
}

$comprimento = 7;
$altura = 15;

$area = calculoArea($comprimento, $altura);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cálculo de  ́area de terreno</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <p>Questão 09</p>
    <h2>Área calculada: <?php echo $area; ?>.</h2>
</body>
</html>
