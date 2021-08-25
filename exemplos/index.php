<?php

require 'vendor/autoload.php';

use Multidados\Client;
use Multidados\Models\ProtocoloModel;

$multidados = new Client([
    'base_uri' => 'http://seusite.com.br',
    'user' => 'multidados',
    'password' => '123456'
]);

try
{
//Retorna todas as divisões
echo "<pre>";
var_dump($multidados->obterDivisoes());
echo "</pre>";
} catch (\Exception $e) {

    echo $e->getMessage();

}

/*

Retorna uma determinada ocorrência através do número do protocolo

$ocorrencia = $multidados->consultarOcorrencias(
    ['codigo_oc' => '33305120210820101175'],
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

echo $ocorrencia->codigo_oc;

*/

/*

Consulta todas as ocorrências de um determinado Beneficiário por código e data de Abertura

$ocorrencias = $multidados->consultarOcorrencias(
    [ 'cliente_codigo_auxiliar' => '02842000009656000',
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

var_dump($ocorrencias);
*/

/*
$protocolo = new ProtocoloModel();
$protocolo->usuario_cartao = '02842000009656000';
$protocolo->codigo_divisao ='500';
$protocolo->codigo_solicitacao = '5001';
$protocolo->codigo_usuario = 'univision';
$protocolo->codigo_status = 'univision_3';
//$protocolo->observacao = 'Testando';

$gerarProtocolo = $multidados->gerarProtocolo($protocolo);

echo '<pre>';
var_dump($gerarProtocolo);
echo '</pre>';
*/