<?php
$cor = "Vermelho";

switch ($cor) {
    case "Vermelho" : 
    case "Azul" : 
    case "Verde" :
        $mensagem = "Você escolheu $cor para a cor de tema" ;
        break;
    default: 
        $mensagem = "Cor escolhida não encontrada! A cor PRETA será definida.";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Preferência de Cor</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <p>Questão 08</p>
    <h2><?php echo $mensagem; ?>.</h2>
</body>
</html>
