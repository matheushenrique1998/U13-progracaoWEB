<?php
 if(isset($_POST['cep']) && !empty($_POST['cep'])) {
    
    $cep = $_POST['cep'];
   $resulado = file_get_contents("https://viacep.com.br/ws/$cep/json/");
    $dadosEndereco =json_decode($resulado, true);
    //var_dump($dadosEndereco);
 }else{
    header("location:buscar-endereco.php");
    exit;
 }
?>

<html>
    <head>
        <meta charset="utf-8">
        <title>dados de cep </title>
    </head>
    <body>
<h1>endereço</h1>
<hr>
<p>cep : <?=$dadosEndereco['cep'] ?></p>
<p>logradouro : <?=$dadosEndereco['logradouro'] ?></p>
<p>bairro: <?=$dadosEndereco['bairro'] ?></p>
<p>cidade: <?=$dadosEndereco['localidade'] ?></p>
<p>estado: <?=$dadosEndereco['uf'] ?></p>
    </body>
</html>