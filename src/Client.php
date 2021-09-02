<?php

namespace Raphagood\Multidados;

use GuzzleHttp\Client as HttpClient;
use Raphagood\Multidados\Models\ProtocoloModel;

class Client {

    protected $httpClient;
    protected $user;
    protected $password;
    
    public function __construct($config)
    {
        $this->user = $config['user'];
        $this->password = $config['password'];

        $this->httpClient = new HttpClient(['base_uri' => $config['base_uri']]);
    }

    
    public function gerarProtocolo(ProtocoloModel $protocolo)
    {
        
        try
        {
            $geraProtocolo = $this->httpClient->request('POST', 'gera_protocolo_unimed', [
                'json' => $protocolo
            ]);

            return json_decode($geraProtocolo->getBody()->getContents());
        
        }
          catch (\Exception $e)
        {
            throw new \Exception($e);
        }
        
    }


    public function obterDivisoes() : array
    {

        try
        {
            $divisoes = $this->httpClient->request('POST', 'getDivisoesSolicitacoes', [
                    'json' => [
                        'usuario_ws' => $this->user,
                        'senha_ws'   => $this->password
                    ]
            ]);
        
            return json_decode($divisoes->getBody()->getContents());

        } 
          catch (\Exception $e)
        {
            throw new \Exception($e);
        }

    }


    public function consultarOcorrencias($filtros, $dados): array
    {

        try {

            $ocorrencias = $this->httpClient->request('GET', 'consultar_ocorrencias', [

                'query' => [
                    'campos_dinamicos' => json_encode($filtros), 
                    'return_dinamicos' => json_encode([ 
                        'dados' => $dados
                    ]) 
                ]

            ]);

            return json_decode($ocorrencias->getBody()->getContents());

        }
          catch (\Exception $e)
        {
            throw new \Exception($e);
        }

    }


    public function incluirOcorrencia($params)
    {

        try {

            $params['usuario_ws'] = $this->user;
            $params['senha_ws'] = $this->password;

            $ocorrencia = $this->httpClient->request('POST', 'incluir_oc', [

                'json' => $params

            ]);

            return json_decode($ocorrencia->getBody()->getContents());

        }
        catch (\Exception $e)
        {
            throw new \Exception($e);
        }

    }


    public function editarOcorrencia($params)
    {

        try 
        {

            $ocorrencia = $this->httpClient->request('POST', 'editar_ocorrencia', [

                'json' => $params

            ]);

            return json_decode($ocorrencia->getBody()->getContents());

        }
        catch (\Exception $e)
        {
            throw new \Exception($e);
        }

    }


    public function editarOcorrenciasLote($params)
    {
        
        try
        {

            $ocorrencias = $this->httpClient->request('POST', 'editar_ocorrencia_lote', [

                'json' => [
                    'lista_ocs' => $params
                ]

            ]);

            return json_decode($ocorrencias->getBody()->getContents());

        }
        catch (\Exception $e)
        {
            throw new \Exception($e);
        }

    }


}
?>