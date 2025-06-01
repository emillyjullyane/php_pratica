<?php
function calculoMedia($notas) {
    $qt = count($notas);

    if ($qt > 0) {
        $soma = array_sum($notas);
        $media = $soma/ $qt;
        return $media;
    } else {
        return 0;
    }
}

$notasAluno = [7.5, 8, 9, 6.8];
$mediaFinal = calculoMedia($notasAluno);

$nomeAluno = "Luísa Freitas";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Média de Notas</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <p>Questão 04</p>
    <h2>Média final do aluno(a) "<?php echo $nomeAluno?>" é: <?php echo number_format($mediaFinal, 2, ',', '.'); ?>.</h2>
</body>
</html>