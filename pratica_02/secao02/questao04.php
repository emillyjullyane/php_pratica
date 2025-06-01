<?php
$dia = 3;

switch ($dia) {
    case 1: $mensagem = "Domingo"; break;
    case 2: $mensagem = "Segunda-feira"; break;
    case 3: $mensagem = "Terça-feira"; break;
    case 4: $mensagem = "Quarta-feira"; break;
    case 5: $mensagem = "Quinta-feira"; break;
    case 6: $mensagem = "Sexta-feira"; break;
    case 7: $mensagem = "Sábado"; break;
    default: $mensagem = "Dia inválido"; break;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Agendamento semanal</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <p>Questão 04</p>
    <h2>O dia de número <?php echo $dia; ?> corresponde a: <?php echo $mensagem ?>.</h2>
</body>
</html>
