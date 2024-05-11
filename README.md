# This is package converting a verity of things.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/designbycode/conversions.svg?style=flat-square)](https://packagist.org/packages/designbycode/conversions)
[![Tests](https://img.shields.io/github/actions/workflow/status/designbycode/conversions/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/designbycode/conversions/actions/workflows/run-tests.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/designbycode/conversions.svg?style=flat-square)](https://packagist.org/packages/designbycode/conversions)

You can use this package to convert a verity of things. Things weight, volumes, etc.


## Installation

You can install the package via composer:

```bash
composer require designbycode/conversions
```

## Usage

```php
$pounds = new Designbycode\WeightConversion::killograms(10)->toPounds();
// $pounds -> 22.0462
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/spatie/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Claude Myburgh](https://github.com/claudemyburgh)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
