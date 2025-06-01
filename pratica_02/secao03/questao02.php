<?php
$mensagem = "";
for($id = 2; $id <= 20; $id+=2){
    $mensagem .= "ID: $id <br>";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Itens pares em lista</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <p>Questão 02</p>
    <h2>Identificadores pares de 2 a 20</h2>
    <p><?php echo $mensagem; ?></p>
</body>
</html>