# SDK for QvaPay Gateway connections and APIs

[![Latest Version on Packagist](https://img.shields.io/packagist/v/qvapay/sdk.svg?style=flat-square)](https://packagist.org/packages/qvapay-sdk/sdk)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/qvapay/sdk/run-tests?label=tests)](https://github.com/qvapay-sdk/sdk/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/qvapay/sdk/Check%20&%20fix%20styling?label=code%20style)](https://github.com/qvapay-sdk/sdk/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/qvapay/sdk.svg?style=flat-square)](https://packagist.org/packages/qvapay-sdk/sdk)

---
Lorem Ipsum
---

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require qvapay/sdk
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="Qvapay\sdk\QvapayServiceProvider" --tag="sdk-migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Qvapay\sdk\QvapayServiceProvider" --tag="sdk-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$qvapay = new Qvapay\sdk\Qvapay();
echo $qvapay->echoPhrase('Hello, Qvapay\sdk!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Erich Garcia Cruz](https://github.com/n3omaster)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
