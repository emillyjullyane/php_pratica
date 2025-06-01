<?php
$precoUnitario = 27.50;
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Preço de venda e tipo de dado</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <p>Questão 05</p>
    <h2>Preço unitário:<?php echo $precoUnitario;?>. </h2>
    <h2>Tipo da variável: <?php echo var_dump($precoUnitario);?></h2>
</body>
</html>
