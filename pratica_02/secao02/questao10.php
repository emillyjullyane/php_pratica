<?php
$usuarioAtivo = true;
$admin = true;

if ($usuarioAtivo && $admin) {
    $mensagem = "Acesso concedido!";
} else {
    $mensagem = "Acesso restrito!";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Verificação de Acesso</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <p>Questão 10</p>
    <h2>Status do usuário:</h2>
    <h3>Ativo: <?php echo $usuarioAtivo? "Sim" : "Não"; ?></h3>
    <h3>Administrador: <?php echo $admin ? "Sim" : "Não"; ?></h3>
    
    <h2>Resultado: <?php echo $mensagem; ?></h2>
</body>
</html>
