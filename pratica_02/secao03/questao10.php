<?php
$mensagem = "";
for ($num = 1; $num <= 5; $num++) {
    $mensagem .= "<strong>Tabuada do $num:</strong><br>";
    for ($i = 1; $i <= 10; $i++) {
        $resultado = $num * $i;
        $corFundo = ($i % 2 == 0) ? "#ffffff" : "#f0f0f0";
        $mensagem .= "<div style='background-color: $corFundo;'>$num x $i = $resultado</div>";
    }
    $mensagem .= "<br>";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Tabelas de Referencia</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <p>Questão 10</p>
    <h2>Tabuada de 1 a 5</h2>
    <p><?php echo $mensagem; ?></p>
</body>
</html>