<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Exercício 04 (Dados)</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
ul{
    width: 40%;
}    
.list-group-item:nth-child(odd){
    background-color: lightblue;
}    
</style>
</head>
<body class="container">
<h1>Exercício 04 (dados/processamento)</h1>
<hr>

<!-- Faça a partir daqui a programação
necessária para obter os dados vindos do formulário
e mostrá-los usando elementos HTML (da forma que você quiser). -->

<?php
$produto = $_POST['produto'];
$fabricante = $_POST['fabricante'];
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];
$precoFormatado = number_format($preco, 2, ',', '.'); // Formata o preço com 2 casas decimais, separador de milhar "." e separador de decimal ","
?>

<h2>Dados recebidos</h2>
<ul class="list-group list-group-numbered">
    <li class="list-group-item">Produto: <?=$produto?></li>
    <li class="list-group-item">Fabricante: <?=$fabricante?></li>
    <li class="list-group-item">Preço: R$ <?=$precoFormatado?></li>
    <li class="list-group-item">Descrição: <?=$descricao?></li>
    <li class="list-group-item"> Refatorado R$ <?=number_format($preco, 2, ',', '.') ?></li>
    
</ul>
    
</body>
</html>