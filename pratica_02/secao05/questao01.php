<?php
$tituloPagina = "Página com título dinâmico";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title><?php echo $tituloPagina; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Bem-vindo à página!</h1>
    <p>O título desta página é: "<strong><?php echo $tituloPagina; ?>"</strong></p>
</body>
</html>