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

    echo "<pre>";
    var_dump($multidados->obterDivisoes());
    echo "</pre>";

} 
 catch (\Exception $e) 
{

    echo $e->getMessage();

}