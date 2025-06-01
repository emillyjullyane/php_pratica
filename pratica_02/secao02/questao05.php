<?php
$bebida = "Café";

switch ($bebida) {
    case "Café" : 
    case "Chá" : 
    case "Suco" :
        $mensagem = "Você escolheu $bebida";
        break;
    default: 
        $mensagem = "Bebida não disponível";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Escolha de bebida</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <p>Questão 05</p>
    <h2><?php echo $mensagem; ?>.</h2>
</body>
</html>
