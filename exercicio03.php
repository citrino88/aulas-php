<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício de PHP</title>
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

        .lista-colorida:nth-child(odd) {
            background-color: bisque;
        }    
        .list-group-item:nth-child(odd){
            background-color: lightblue;
        }    
        
    </style>
</head>
<body class="container">
<h1 class="m-3">Exercício de PHP</h1>
    <hr>

    <?php
$meses = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
        
    echo "<ol>";
foreach($meses as $mes ){

    echo "<li class=\"lista-colorida\"> $mes </li>";
    
}
echo "</ol>";
?>
<!-- REFATORANDO O CÓDIGO ACIMA -->
<h2>Solução com Código Refatorado</h2>
<?php
$meses = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
?>        
    <ol>
<?php        
foreach($meses as $mes ){
?>
    <li class="lista-colorida"> <?=$mes?> </li>
<?php    
}
?>
</ol>

<!-- SOLUÇÃO PROGRAMADA -->
<!-- Neste caso, avaliamos o resto da divisão por 2. Quando é zero (ou seja, número par), atribuimos a cor vermelha. Quando é diferente de zero (ou seja, ímpar), atribuimos a cor azul. -->
<h2>Solução com Programada</h2>
<ol>
<?php for ( $i = 0; $i < count ($meses); $i++ ){
    $cor = $i % 2 == 0 ? "red" : "blue";
?>
    <li style= "color: <?=$cor?>"> <?= $meses[$i] ?> </li>
<?php } ?>
</ol>

<!-- Solução com Bootstrap -->
<h2>Solução com Bootstrap</h2>
<ol class="list-group list-group-numbered">
<?php        
foreach($meses as $mes ){
?>
    <li class="list-group-item"> <?=$mes?> </li>
<?php    
}
?>
</ol>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>    