# :Multidados

Este pacote um cliente, que facilita a integraçao com as api's do CRM da empresa Multidados T.I.

Link da site oficial da empresa: https://www.multidadosti.com.br/

**Importante:**

A Multidados atualmente não possui um pacote de integração, mas vale ressaltar que nosso pacote ainda não foi oficializado pela empresa, mas funciona perfeitamente.

## Instalção

Intalar este pacote é um tarefa muito simples, recomendados fortemente que você utilize o composer, conforme abaixo: 

``` bash
$ composer require raphagood/multidados
```

## Utilização

Para utilizar crie uma instância, informando os dados de comunicação com a api, estes dados são fornecidos pela própria Multidados.

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

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

Se você descobrir qualquer problema relacionado à segurança, envie um e-mail para: raphael.fatecandos@gmail.com, agradeço a colaboração.

## Credits

- [Raphael Godoi][https://github.com/raphagood]
- [Kevin Santana][#]

## Licença

[ico-version]: https://img.shields.io/packagist/v/raphagood/multidados.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[link-packagist]: https://packagist.org/packages/raphagood/multidados
[link-downloads]: https://packagist.org/packages/raphagood/multidados
[link-author]: https://github.com/raphagood