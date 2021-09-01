<?php

use Raphagood\Multidados\Client;

$multidados = new Client([
    'base_uri' => 'http://seusite.com.br',
    'user' => 'multidados',
    'password' => '123456'
]);


try
{

    $ocorrencias = $multidados->consultarOcorrencias(
        [ 'cliente_codigo_auxiliar' => '02840022000019000',
        'data_abertura' => [
            'tipo_data'  => 'data_abertura',
            'd_ini'      => '01/08/2021',
            'd_fim'      => '20/08/2021',
        ]],
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
    );
    
    
    echo "<pre>";
    var_dump($ocorrencias);
    echo "</pre>";

} 
 catch (\Exception $e) 
{

    echo $e->getMessage();

}
