
<?php
class BuscaCEP {
    private $apiUrl;

    public function __construct($apiUrl) {
        $this->apiUrl = $apiUrl;
    }

    public function buscarCEP($cep) {
        // Faz a requisição para a API de busca de CEP
        $response = file_get_contents($this->apiUrl . $cep);

        if ($response) {
            // Decodifica a resposta JSON
            $data = json_decode($response, true);

            if (isset($data['cep'])) {
                return $data;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}


$apiUrl = "https://api.exemplo.com/cep/"; // Substitua pelo URL real da API de busca de CEP
$buscadorCEP = new BuscaCEP($apiUrl);

$cep = "12345-678";
$resultado = $buscadorCEP->buscarCEP($cep);

if ($resultado) {
    echo "CEP: " . $resultado['cep'] . "<br>";
    echo "Logradouro: " . $resultado['logradouro'] . "<br>";
    echo "Bairro: " . $resultado['bairro'] . "<br>";
    echo "Cidade: " . $resultado['localidade'] . "<br>";
    echo "Estado: " . $resultado['uf'] . "<br>";
} else {
    echo "CEP não encontrado.";
}
?>