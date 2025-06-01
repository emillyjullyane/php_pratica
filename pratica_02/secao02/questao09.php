<?php
$cargo = "Desenvolvedor";

switch ($cargo) {
    case "Desenvolvedor":
        $salario = 5400;
        break;
    case "Designer":
        $salario = 3200;
        break;
    case "Gerente":
        $salario = 7080;
        break;
    default:
        $salario = "Cargo não encontrado!";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Folha de Pagamento</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <p>Questão 09</p>
    <h2>Cargo: <?php echo $cargo; ?></h2>
    <h2>Salário Base: 
        <?php 
        echo is_numeric($salario) ?"R$ " . number_format($salario, 2, ',', '.'): $salario;
        ?>
    </h2>
</body>
</html>
