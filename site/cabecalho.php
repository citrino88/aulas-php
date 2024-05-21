<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
    $title = "Meu Site";
    if (isset($_SERVER['PHP_SELF']) && basename($_SERVER['PHP_SELF']) !== 'cabecalho.php') {
        $title = ucwords(str_replace('.php', '', basename($_SERVER['PHP_SELF'])));
    }
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body{
            background-color: #505050;
        }
    </style>
</head>
<body>
    <header>
        <h1>Site Exemplo</h1>
        <nav>
            <a href="index.php"> Home </a>
            <a href="equipe.php"> Equipe </a>
            <a href="portfolio.php"> Portfólio </a>
            <a href="servicos.php"> Serviços </a>
        </nav>
    </header>

    <main class="container shadow-lg p-3">
        <article>