<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01 de PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      
    </style>
</head>
<body>
    <div class="container text-success">
        <h1>Exercício 01 de PHP</h1>
        <hr class="border border-primary border-2 opacity-50">
    <?php
        const NOME = "Chapolin";
        $idade = 25;
    ?>
    <h2>Resolução 01: Forma simplificada</h2>
    <!-- Chapolin possui 25 anos. -->
    <p><?=NOME?> possui <b> <?=$idade?> anos.</b></p>
    <hr>
    <h2>Resolução 02: Forma concatenada</h2>
    <?php    
    echo "<p>" .NOME." possui $idade anos.</p>";
    ?>
    <h5>Observação: Boa prática do PHP é declarar constantes em MAIÚSCULO</h5>
    </div>
</body>
</html>