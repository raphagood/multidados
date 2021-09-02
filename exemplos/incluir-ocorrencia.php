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

        'codigo_oc'                 => 'gerar_protocolo',
        'cliente_codigo_auxiliar'   => '',
        'cnpj_cliente'              => '',
        'ddd_tel_res_cliente'       => '',
        'nome_cliente'              => '',
        'email_cliente'             => '',
        'cod_divisao'               => '',
        'cod_solicitacao'           => '',
        'descricao'                 => '',
        'tipo_retorno'              => '2',
        'campos_variaveis_clientes' => [ 
                                            'codigo' => 'CA_950', 
                                            'valor'  => ''
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