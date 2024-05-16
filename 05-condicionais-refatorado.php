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
        hr{margin-bottom: 3rem;}
    </style>
</head>
<body class="container">
    <h1 class="m-3">Condicionais em PHP (VERSÃO REFATORADA)</h1>
    <hr>
    <h2>Simples (não tem o <code>else</code>)</h2>
    
    <?php
    $numero = 50;
    if($numero < 100){
    ?>   
        <p>Condição é verdadeira / true!</p>
    <?php    
    }   
    ?>
    <hr>
    <h2>Composta (usa <code>if/else</code>)</h2>
    <?php
    
    $produto = "TV"; 
    $qtdEmEstoque = 10; 
    $qtdCritica = 2; 
    ?>

    <h3>Produto: <?=$produto?></h3>
    <h3>Estoque: <?=$qtdEmEstoque?></h3>
    <h3>Quantidade mínima necessária: <?=$qtdCritica?></h3>

    <?php   
    if ( $qtdEmEstoque < $qtdCritica ) {
    ?>   

        <p class="alert alert-warning"> É necessário repor</p>

    <?php   
        if ( $qtdEmEstoque == 0){
    ?>        
        
        <p class="alert alert-danger"> COMPRAR AGORA!!!</p>
    
    <?php
        }    
    } else {
    ?>    
        
        <p class="alert alert-success"> Estoque está normal</p>

    <?php    
    }
    ?>

    <hr>
    <h2>Encadeada (usa <code>if, else, else if</code>)</h2>
    
    
    <?php
    
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