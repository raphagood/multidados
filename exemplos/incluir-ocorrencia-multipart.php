<?php

require '../vendor/autoload.php';

use Raphagood\Multidados\Client;

$multidados = new Client([
    'base_uri' => 'http://seusite.com.br',
    'user' => 'multidados',
    'password' => '123456'
]);


try
{

    $ocorrencia = $multidados->incluirOcorrencia([

        [
            'name'     => 'codigo_oc',
            'contents' => 'gerar_protocolo'
        ],
        [
            'name'     => 'cliente_codigo_auxiliar',
            'contents' => $params->carteirinha ? $params->carteirinha : ''
        ],
        [
            'name'     => 'cnpj_cliente',
            'contents' => $params->cpf ? $params->cpf : ''
        ]

    ], true);

    echo '<pre>';
    var_dump($ocorrencia);
    echo '</pre>';

}
catch(\Exception $e)
{

    echo $e->getMessage();

}