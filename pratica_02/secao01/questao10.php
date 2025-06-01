<?php
$resumo = "O IFCE – campus Cedro iniciou sua trajetória na segunda metade da década de 1980. Resultado do Programa de Expansão e Melhoria do Ensino Técnico 
(PROTEC), criado em 1986, teve sua construção iniciada em 1989 e a obra inaugurada em 1994. A unidade, autorizada em maio de 1995, entrou em funcionamento em 
11 de setembro do ano com a oferta do Pró-Técnico, curso preparatório para ingresso de seus cursos de Mecânica e Eletrotécnica.";

$quantidadeCaracteres = strlen($resumo);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Contagem de Caracteres</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <p>Questão 10</p>
    <h2>Resumo:</h2>
    <p><?php echo $resumo;?> </p>
    <h2>Total de caracteres: <?php echo $quantidadeCaracteres;?></h2>
</body>
</html>