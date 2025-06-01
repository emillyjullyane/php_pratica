<?php
define("PI", 3.14159265358979323846);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Valor de Pi</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <p>Questão 09</p>
    <h2>O valor de π com 4 casas decimais é: <?php echo number_format(PI, 4);?>.</h2>
</body>
</html>
