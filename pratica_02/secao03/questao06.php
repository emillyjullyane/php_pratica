<?php
$entradas = [5,8, 3, 7, 0, 9];
$mensagem = "";
$i = 0;

do {
    $valorDefinido = $entradas[$i];
    if ($valorDefinido != 0) {
        $mensagem .= "Valor digitado: $valorDefinido <br> ";
    }
    $i++;
}while($valorDefinido != 0);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Entrada de dados repetitiva</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <p>Questão 06</p>
    <h2>Entradas até digitar 0</h2>
    <p><?php echo $mensagem; ?></p>
</body>
</html>