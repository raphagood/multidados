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

    $ocorrencias = $multidados->editarOcorrenciasLote([

        [
            'numero_protocolo' => '33305120210824101385',
            'codigo_status'    => 'univision_3',
            'observacao'       => '2019-09-30T16:05:06-02 - Atendente - Esta é uma mensagem do usuário \n 2019-09-30T16:15:28-03 - Sara - Esta é uma mensagem do bot'
        ],
        [
            'numero_protocolo' => '33305120210824101385',
            'codigo_status'    => 'univision_3',
            'observacao'       => '2019-09-30T16:05:06-02 - Atendente - Esta é uma mensagem do usuário \n 2019-09-30T16:15:28-03 - Sara - Esta é uma mensagem do bot'
        ]

    ]);

    echo '<pre>';
    var_dump($ocorrencias);
    echo '</pre>';

}
catch(\Exception $e)
{

    echo $e->getMessage();

}