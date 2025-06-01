<?php
function somar($a, $b) {
    return $a + $b;
}
$resultado = somar(10, 25);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Calculadora Básica</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <p>Questão 02</p>
    <h2>O  resultado da soma é: <?php echo $resultado; ?>.</h2>
</body>
</html>