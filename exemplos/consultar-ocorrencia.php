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

    $ocorrencia = $multidados->consultarOcorrencias(
        ['codigo_oc' => '3330512021082000000'],
        [
            'codigo_oc',
            'descricao',
            'data_abertura',
            'status_codigo',
            'cliente_email',
            'cliente_nome_real',
            'codigo_auxiliar_cliente',
            'uf_cliente',
            'cliente_endereco_cidade',
            'cliente_endereco_cep',
            'endereco_cliente',
            'cli_ddd_tel_cel_cliente',
            'codigo_divisao_original',
            'nome_solicitacao_original',
            'ultima_narrativa'
        ]
    )[0];
    
    
    echo "<pre>";
    var_dump($ocorrencia);
    echo "</pre>";

} 
 catch (\Exception $e) 
{

    echo $e->getMessage();

}

