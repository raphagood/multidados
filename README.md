# Multidados

Este pacote é um cliente, que facilita a integraçao com as api's do CRM da empresa Multidados T.I.

Acesse o site oficial da empresa através do link: https://www.multidadosti.com.br/

**Importante:**

Este pacote foi criado de forma independente e não tem qualquer relação com a empresa Multidados T.I


## Instalação

Intalar este pacote utilizando composer é um tarefa muito simples, veja abaixo:

``` bash
$ composer require raphagood/multidados
```

## Utilização

Para utilizar o cliente, crie uma instância informando os dados de comunicação com a api, estes dados são fornecidos pela própria Multidados.

``` php
$multidados = new Raphagood\Multidados\Cliente([
    'base_uri' => 'http://seudominio.com/vmulti/webservices/rest/',
    'user' => 'multidados',
    'password' => '123456'
]);


try
{

   echo "<pre>";
   var_dump($multidados->obterDivisoes());
   echo "</pre>";

} catch (\Exception $e) {

   echo $e->getMessage();

}
```
## Recursos disponíveis

| Recursos                  | Are                                        |
| ------------------------- |:------------------------------------------:|
| obterDivisoes             | Obtém todas as divisões cadastradas no CRM |
| consultarOcorrencias      | Consulta as ocorrências de acordo com o parâmetros especificados      |
| gerarProtocolo            | Gera um protocolo |

**Importante:**

Acesse o diretório de exemplos, para ver como utilizar cada um dos recursos acima, e complemente com a documentação oficial da própria Multidados.


## Histórico de alterações

Por favor veja [CHANGELOG](CHANGELOG.md) para mais informações sobre o que mudou recentemente.

## Segurança

Se você descobrir qualquer problema relacionado à segurança, por favor, envie um e-mail para: raphael.fatecandos@gmail.com.

## Créditos

- [Raphael Godoi][https://github.com/raphagood]
- [Kevin Santana][https://github.com/KevinKristianSantana]

## Licença

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.