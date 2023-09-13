<?php
if (isset($_POST['cep']) && !empty($_POST['cep'])) {
    $cep = $_POST['cep'];
    $resultado = file_get_contents("https://viacep.com.br/ws/$cep/json/");
    
    if ($resultado !== false) {
        $dadosEndereco = json_decode($resultado, true);

        if (isset($dadosEndereco['cep'])) {
            // Display address information
            $cep = $dadosEndereco['cep'];
            $logradouro = $dadosEndereco['logradouro'];
            $bairro = $dadosEndereco['bairro'];
            $cidade = $dadosEndereco['localidade'];
            $estado = $dadosEndereco['uf'];
        } else {
            // Handle the case where the API response does not contain valid address data
            $cep = "CEP não encontrado";
            $logradouro = "";
            $bairro = "";
            $cidade = "";
            $estado = "";
        }
    } else {
        // Handle the case where the API request failed
        $cep = "Erro na consulta ao ViaCEP";
        $logradouro = "";
        $bairro = "";
        $cidade = "";
        $estado = "";
    }
} else {
    // Redirect to the search page if the "cep" parameter is not set in the POST request
    header("location: buscar-endereco.php");
    exit;
}
?>

<html>
<head>
    <meta charset="utf-8">
    <title>Dados de CEP</title>
</head>
<body>
    <h1>Endereço</h1>
    <hr>
    <p>CEP: <?=$cep ?></p>
    <p>Logradouro: <?=$logradouro ?></p>
    <p>Bairro: <?=$bairro ?></p>
    <p>Cidade: <?=$cidade ?></p>
    <p>Estado: <?=$estado ?></p>
</body>
</html>