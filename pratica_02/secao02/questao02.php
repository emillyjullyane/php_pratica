<?php
$temperatura = 23;

if($temperatura > 0){
    $mensagem = "POSITIVA";
}else if ($temperatura < 0){
    $mensagem = "NEGATIVA";
}else{
    $mensagem = "ZERO";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Classificão de temperatura</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <p>Questão 02</p>
    <h2>Temperatura informada é <?php echo $temperatura; ?>°. <br></h2>
    <h2>A temperatura é: <?php echo $mensagem; ?>.</h2>
</body>
</html>
