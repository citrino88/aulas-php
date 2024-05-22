<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processando os dados</title>
</head>
<body>
    <h1>Processamento dos dados vindos do formulário</h1>
    <hr>
<?php 
/* Capturando os dados provenientes do formulário usando o array superglobal $_POST[] (porque é acessível de qualquer lugar). Se o form usar método get, então usaríamos $_GET[] (não seguro para dados quando transmitidos em URL, mas pode ser usado em campo de Pesquisar) */
?>
<!-- <pre>< /*var_dump($_POST)  */? ></pre>  para testar não esquecer de colocar abre e fecha php dentro corretamente, este é só comentario -->
<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$nascimento = $_POST['nascimento'];
$mensagem = $_POST['mensagem'];

if(empty($nome) || empty($email)){
?>
<p>Você deve preencher <b>nome</b> e <b>e-mail</b></p>
<?php
} else {
?> 

   


<h2>Dados recebidos</h2>
<ul>
    <li>Nome: <?=$nome?></li>
    <li>E-mail: <?=$email?></li>
    
    <?php if ( !empty($nascimento) ) {?>      
    <li>Data de nascimento: <?=$nascimento?></li>
    <?php } ?>

    <?php if ( !empty($mensagem) ) {?>
    <li>Mensagem: <?=$mensagem?></li>
    <?php } ?>

</ul>

<?php } ?> 

</body>
</html>