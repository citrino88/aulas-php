<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário com PHP</title>
</head>

<body>
    <h1>Formulário e processamento juntos</h1>
    <hr>

<?php 
/* Detectando o envio/acionamento do formulario , isset (se está definido ou se existe, no caso abaixo, se o botão enviar foi acionado.*/
if ( isset($_POST['enviar']) ) {
    $nome = $_POST['nome'];
?>
<h2>Bem-vindo(a) <?= $nome?>!</h2>
<hr>
<?php    
} else{
    /* O formulário abaixo será exibido enquanto o botão enviar não for acionado. Quando for acionado, o formulário será removido da página. */
?>    

    <!-- Mantenha o action vazio!!!, pois é processamento na própria página -->
    <form action="" method="post"> <label for="nome">Nome:</label> <input  required type="text" name="nome" id="nome"> <button type="submit" name="enviar">Enviar</button> </form>

<?php } ?>    

</body>

</html>