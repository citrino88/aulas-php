<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 01 de PHP</title>
    <style>
        p{
            color:red;
        }
    </style>
</head>
<body>
    <h1>Primeira experiência com PHP</h1>

    <!-- Delimitadores de abertura/fechamento PHP -->
    <?php
    // comando de saída: echo (obs: este comentário não aparece porque esta dentro do php)
    echo "Inserindo texto no PHP";
    echo "<p>Senac Penha<p>";

    echo "<p style='text-align:center'>Senac Penha<p>";
    echo '<p style="text-align:center">Senac Penha<p>';
    echo "<p style=\"text-align:center\">Senac Penha<p>";

    ?>
    <!-- Delimitadores de abertura/fechamento PHP -->

</body>
</html>