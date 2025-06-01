<?php
$estadoCivil = "C";

switch($estadoCivil){
    case "C": 
        $mensagem = "Casado"; 
        break;
    case "S":
        $mensagem = "Solteiro"; 
        break;
    case "D":
        $mensagem = "Divorciado";
        break;
    case "O":
        $mensagem = "Outro";
        break;
    default: 
        $mensagem = "Estado civil não encontrado";
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de usuário:</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <p>Questão 06</p>
    <h2>Estado civil: <?php echo $mensagem; ?>.</h2>
</body>
</html>
