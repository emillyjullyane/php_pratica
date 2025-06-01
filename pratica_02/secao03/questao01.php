<?php
$mensagem = "";
for($seg = 10; $seg >= 1; $seg--){
    $mensagem .= "Atenção: Faltam $seg segundos <br>";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Contagem regressiva simples</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <p>Questão 01</p>
    <h2>Contagem Regressiva</h2>
    <p><?php echo $mensagem; ?></p>
</body>
</html>