<?php
$statusPedido = true;
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Status do Pedido</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <p>Questão 04</p>
    <h2>Status de confirmação do pedido: <?php echo $statusPedido ? "Confirmado" : "Não Confirmado";?>.</h2>
</body>
</html>
