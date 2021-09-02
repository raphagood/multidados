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

    $ocorrencia = $multidados->editarOcorrencia([

        'numero_protocolo'=> '33305120210816101203',
        'codigo_status'=> 'aguardando_atendimento',
        'observacao'=> 'Aguardando atendimento - Teste',
        'campos_variaveis_ocorrencia'=> [
            [
                'codigo'=> 'teste',
                'valor'=> 'Teste'
            ],
            [
                'codigo'=> 'teste',
                'valor'=> 'Teste'
            ],
            [
                'codigo'=> 'teste',
                'valor'=> 'Teste'
            ]
        ]

    ]);

    echo '<pre>';
    var_dump($ocorrencia);
    echo '</pre>';

}
catch(\Exception $e)
{

    echo $e->getMessage();

}