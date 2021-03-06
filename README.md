# SDK for QvaPay Gateway connections and APIs

[![Latest Version on Packagist](https://img.shields.io/packagist/v/qvapay/sdk.svg?style=flat-square)](https://packagist.org/packages/qvapay/sdk)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/qvapay/sdk/Check%20&%20fix%20styling?label=code%20style)](https://github.com/qvapay/sdk/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/qvapay/sdk.svg?style=flat-square)](https://packagist.org/packages/qvapay/sdk)

---
SDK QvaPay
---

Librería para el uso remoto de la API de la pasarela de pagos con cripto qvapay.com.

## Installación

Puedes instalar el paquete vía composer:

```bash
composer require qvapay/sdk
```

Luego puede publicar los ficheros de configuración mediante:

```bash
php artisan vendor:publish --provider="Qvapay\sdk\QvapayServiceProvider" --tag="sdk-config"
```

El fichero de configuración posee los ajuste necesarios para comunicarse con la API de Qvapay. Algunos datos opcionales pueden ser el APP_ID y APP_SECRET de su entorno de desarrollo en la pasarela:

(Lo puede definir en su fichero en variables .env)

```php
return [
    'app_id' => env('QVAPAY_APP_ID', ''),
    'app_secret' => env('QVAPAY_APP_SECRET', ''),
];
```

## Uso

```php
use Qvapay\sdk\Qvapay;
...
$qvapay = new Qvapay();
$qvapay->method('params');
```

## Testeando

```bash
composer test
```

## Historial de cambios

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contribuir

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Vulnerabilidades

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Creditos

- [Erich Garcia Cruz](https://github.com/n3omaster)
- [All Contributors](../../contributors)

## Licencia

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
