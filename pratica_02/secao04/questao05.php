<?php
function numPar($codigo) {
    if ($codigo%2 == 0) {
        return true;
    } else {
        return false;
    }
}

$codigo = 27092;
$resultado = numPar($codigo);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Validação de Código:</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <p>Questão 5</p>
    <h2>O código <?php echo $codigo; ?> é <?php echo $resultado ? 'par' : 'ímpar'; ?>.
    </h2>
</body>
</html>