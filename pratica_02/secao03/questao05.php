<?php
$mensagem = "";

$alunos = [
    ["001", "Joao Victor", 8.5],
    ["002", "Robsoon de Souza", 7.8],
    ["003", "Fernanda da Silva", 9.2],
    ["004", "Luis Kennedy", 6.4],
    ["005", "Mariana Custodio", 8.9],
    ["006", "Douglas da Silva", 7.5],
    ["007", "Gabriel Nogueira", 9.0],
    ["008", "Ian Victor", 5.7],
    ["009", "Fabiane de Morais", 6.9],
    ["010", "Michele Ferreira", 7.3],
];

for ($i = 0; $i < count($alunos); $i++) {
    $mensagem .= "Matrícula: " . $alunos[$i][0] . " - Nome: " . $alunos[$i][1] . " - Nota PWEB1: " . $alunos[$i][2] . "<br>";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exceção em relatório</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <p>Questão 05</p>
    <h2>Relatório de Alunos - PWEB1</h2>
    <p><?php echo $mensagem; ?></p>
</body>
</html>