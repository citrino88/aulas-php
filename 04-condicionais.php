<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais em php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        p{
            font-weight: 500;
        }
        h2{
            color: darkblue;
            font-weight: 700;
        }
    </style>
</head>
<body class="container">
    <h1 class="m-3">Aula de Condicionais em PHP</h1>
    <hr>
    <h2>Simples (não tem o <code>else</code>)</h2>
    <!-- se estoque for maior que zexo, por exemplo, aí habilita um botão Comprar -->
    <?php
    $numero = 50;
    if($numero < 100){
        /* Este comando só será executado se a condição for True/Verdadeira */
        echo "<p>Condição é verdadeira / true!</p>";
    }   
    ?>
    <hr>
    <h2>Composta (usa <code>if/else</code>)</h2>
    <?php
    /* Exemplo: Controle de estoque */
    $produto = "TV"; // trocar aqui os nomes para testar
    $qtdEmEstoque = 0; // o que temos no momento
    $qtdCritica = 2; // mínino necessário    
    ?>

    <h3>Produto: <?=$produto?></h3>
    <h3>Estoque: <?=$qtdEmEstoque?></h3>
    <h3>Quantidade mínima necessária: <?=$qtdCritica?></h3>

    <?php
    /* Se a quantidade em estoque for abaixo da quantidade crítica, o sistema deve avisar e pedir pra repor. */
    if ( $qtdEmEstoque < $qtdCritica ) {
        echo "<p class=\"alert alert-warning\"> É necessário repor</p>";

        /* Condicional ANINHADA */
        if ( $qtdEmEstoque == 0){
        echo "<p class=\"alert alert-danger\"> COMPRAR AGORA!!!</p>";    
        }

    } else {
        echo "<p class=\"alert alert-success\"> Estoque está normal</p>";
    }
    /* Caso contrário, simplesmente falar que o estoque está normal. */
    ?>
    <hr>
    <h2>Encadeada (usa <code>if, else, else if</code>)</h2>
    <?php
    /* Verificado o produto e atribuindo diferentes garantias (em anos) */
    
    if ($produto == "Ultrabook") {
        $garantia = 5; 
    } else if ($produto == "Geladeira") {
        $garantia = 3; 
    } else if ($produto == "TV") {
        $garantia = 2; 
    } else {
        $garantia = 1; 
    }

    if ($garantia == 1){
        $ano ="ano";
    } else{
        $ano ="anos";
    }
    ?>
    
       
    <p> O produto <?=$produto?> tem garantia de <span class="badge text-bg-primary"> <?=$garantia?> </span> <?=$ano?> .</p>

    <!-- abaixo outra solução de saida ano(s), o php tem que iniciar colado a palavra ano -->
    <p> O produto <?=$produto?> tem garantia de <span class="badge text-bg-primary"> <?=$garantia?> </span> ano<?php if($garantia > 1) echo "s" ?>.</p>

    <h2>Condicional com <code>switch/case</code></h2>
    <p><i>Estrutura alternativa para condicional encadeada</i></p>

    <?php
    switch ($produto) {
        case 'Ultrabook': $garantiaB = 5; break;
        case 'Geladeira': $garantiaB = 3; break;
        case 'TV': $garantiaB = 2; break;
        default: $garantiaB = 1; break;
    }

    ?>
    <p>Garantia B: <?=$garantiaB?></p>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>