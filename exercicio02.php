<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02 de PHP - Arrays</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      
    </style>
</head>
<body>
    <div class="container">
        <h1>Exercício 02 de PHP - Arrays</h1>
        <h2>Melhor solução Array associativo =></h2>
        <?php
        $dados = [
        "nome" => "Chapolin Colorado",
        "senha" => "123teste",
        "idade" => 30,
        "cidade" => "São Paulo",
        "telefone" => ["11-2135-0300", "11-91234-5678"]
        
        // Em seguida, mostre somente os valores de nome de usuário, idade, cidade e um dos telefones em uma lista ordenada HTML.

        ];    
        ?>
        <h2>A saída dos dados</h2>
        <ol>
            <li>Nome: <?=$dados["nome"]?></li>
            <li>Idade: <?=$dados["idade"]?></li>
            <li>Cidade: <?=$dados["cidade"]?></li>
            <li>Telefone: <?=$dados["telefone"][1]?></li>
        </ol>
        
    </div>
</body>
</html>