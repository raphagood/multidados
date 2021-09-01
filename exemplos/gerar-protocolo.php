<?php

require '../vendor/autoload.php';

use Raphagood\Multidados\Client;
use Raphagood\Multidados\Models\ProtocoloModel;

$multidados = new Client([
    'base_uri' => 'http://seusite.com.br',
    'user' => 'multidados',
    'password' => '123456'
]);

try
{

    $protocolo = new ProtocoloModel();
    $protocolo->usuario_cartao = '02840022000019000';
    $protocolo->codigo_divisao ='500';
    $protocolo->codigo_solicitacao = '5001';
    $protocolo->codigo_usuario = 'user';
    $protocolo->codigo_status = 'encerrado';
    
    $gerarProtocolo = $multidados->gerarProtocolo($protocolo);

    echo '<pre>';
    var_dump($gerarProtocolo);
    echo '</pre>';

} 
catch (\Exception $e) 
{

   echo $e->getMessage();

}
