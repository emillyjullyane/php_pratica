<?php
$participantes = [
    "Iris Silva",
    "Emilly de Morais",
    "Marina de Oliveira",
    "João Lucas"
];

$mensagem = "";
for ($i = 0; $i < count($participantes); $i++) {
    $mensagem .= $participantes[$i] . "<br>";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Listagem de Participantes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <p>Questão 07</p>
    <h2>Lista de Participantes do Evento</h2>
    <p><?php echo $mensagem; ?></p>
</body>
</html>