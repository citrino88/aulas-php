<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops em php</title>
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
<h1 class="m-3">Loops (ou laços de repetição) em PHP</h1>
    <hr>
        <h2>Tradicionais:
            <code>while, for</code>
        </h2>

        <h3><code>while</code></h3>
<?php
$i = 1;
while ($i <= 3) {
?>    
    <p class="alert alert-info">Senac Penha</p>

<?php
    $i++;    
}
?>
<hr>

        <h3><code>for</code></h3>
<?php
for($i = 1; $i <= 5; $i++){
?>
    <p class="alert alert-warning">Exemplo <?=$i?></p>
<?php
}
?>
<hr>

<h3><code>for</code> com <code>array</code></h3>

<?php
$alunos = ["Chaves", "Chapolin", "Kiko"];
for($i = 0; $i < count($alunos); $i++ ){
?>

    <p class="alert alert-success">
        <?=$alunos[$i]?>
    </p>

<?php
}
?>
<hr>

    <h2>Específico do PHP: <code>foreach</code>, bom para arrays</h2>
<?php
    foreach ( $alunos as $aluno ){
?>

    <p class="alert alert-dark"> <?=$aluno?></p>

<?php
}
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>