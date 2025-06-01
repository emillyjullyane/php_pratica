<?php
$media = 4.5;

if($media >= 7){
    $mensagem = "APROVADO";
}else if ($media > 5 && $media <= 6.9){
    $mensagem = "EM RECUPERAÇÃO";
}else{
    $mensagem = "REPROVADO";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Sistema de avaliação:</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <p>Questão 03</p>
    <h2>Média informada: <?php echo $media; ?>.</h2>
    <h2>Situação do aluno com base na média: <?php echo $mensagem; ?>.</h2>
</body>
</html>
