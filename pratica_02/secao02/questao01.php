<?php
$idade = 17;

if($idade >= 18){
    $mensagem = "Acesso Permitido!";
}else{
    $mensagem = "Acesso Negado!";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Controle de Acesso</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <p>Questão 01</p>
    <h2>Idade informada: <?php echo $idade; ?>.</h2>
    <h2>Permissão: <?php echo $mensagem; ?></h2>
</body>
</html>
