<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      
    </style>
</head>
<body>
    <div class="container">
        <h1>Arrays</h1>
        <hr class="border border-primary border-2 opacity-50">
        <h2>Arrays numéricos/indexados.</h2>
    <?php
        // Declarando arrays como variáveis e constantes
    $bandas = ["Rush", "Slayer", "Nightwish"];
    $cursos = array("HTML", "PHP", "Design", "JS");
    
    define("UNIDADES_SESC", ["Belenzinho", "Bertioga"]);
    const UNIDADES_SENAC = ["Penha", "São Miguel", "Itaquera"];
    ?>

        <h3>Acesso a saída de dados</h3>
        <p>Curto a banda <?=$bandas[1]?>.</p>   
        <p>Já estudei <?=$cursos[3]?></p>
        <p>Gostaria de conhecer o Sesc <?=UNIDADES_SESC[1]?></p>
        <p>Estamos no Senac <?=UNIDADES_SENAC[0]?></p>
        <h6>Observação: Boa prática do PHP é declarar constantes em MAIÚSCULO</h6>
    <hr class="border border-primary border-2 opacity-50">
        <h2>Arrays associoativos</h2>
        <?php

        $filme = [
        // Chave associativa
            "titulo" => "Deadpool 2",
            "ano" => 2018,
            "genero" => "Ação",
            "personagens" => ["Wade Wilson", "Fanático"]
        ];

        $livro = array(
            "titulo" => "Senhor dos Anéis",
            "autor" => "Tolkien"
        );
        ?>
        <h3>Acesso e saída de dados</h3>
        <p>O filme
            <?=$filme["titulo"]?> foi lançado em <?=$filme['ano']?>
        </p>
        <p> <?= $livro['titulo']?> é um ótimo livro. </p>

        <hr>

        <h2> Comandos úteis para análise/ depuração de arrays</h2>
        <h3><code>print_r()</code> e <code>var_dump()</code></h3>

        <?=print_r($bandas)?>

        <hr>

        <?=var_dump($bandas)?>

        <pre><?=print_r($bandas)?></pre>

        <hr>

        <pre><?=var_dump($bandas)?></pre>
        <h6><code>pre</code> traz uma pre-formatação, bom para ver códigos</h6>
    </div>
</body>
</html>