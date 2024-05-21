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

        li:nth-child(odd) {
            background-color: bisque;
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

    echo "<li> $mes </li>";
    
}
echo "</ol>";
?>
<!-- REFATORANDO O CÓDIGO ACIMA -->

<?php
$meses = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
?>        
    <ol>
<?php        
foreach($meses as $mes ){
?>
    <li> <?=$mes?> </li>
<?php    
}
?>
</ol>









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>    