<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title><?php echo isset($tituloPagina) ? $tituloPagina : "Título padrão"; ?>.</title>
    <link rel="stylesheet" href="style.css">
    <style>
        header {
            background-color: #eee;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
<header>
    <h1><?php echo isset($tituloPagina) ? $tituloPagina : "Título padrão"; ?>.</h1>
</header>
