<?php
$tempAtual = 26;

if ($tempAtual < 0){
    $mensagem = "Alerta de Gelo";
}else if ($tempAtual > 0 && $tempAtual < 15){
    $mensagem = "Clima Ameno";
}else if ($tempAtual > 15 && $tempAtual < 25){
    $mensagem = "Clima Agrdável";
}else if($tempAtual > 25){
    $mensagem = "Atenção - Calor Extremo!";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Alerta Climática</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <p>Questão 07</p>
    <h2>Temperatura atual: <?php echo $tempAtual; ?>.</h2>
    <h2>Alerta atual: <?php echo $mensagem; ?></h2>

</body>
</html>
