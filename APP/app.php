<?php 

// Definição da requisição da API
define('API_BASE', 'http://api.local/?option=');

// Resposta da API
$resultado = api_request('random&min=1&max=100');

// Verifica se a respota da API foi bem sucedida
if($resultado['status'] == 'ERROR'){
    die('Aconteceu um erro ao tentar se comunicar com a API');
} else {
    echo "<pre>";
    print_r($resultado);
}


// Função que realiza o pedido à API
function api_request($option) 
{
    $client = curl_init(API_BASE . $option);
    curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($client);
    return json_decode($response, true);
}


?>