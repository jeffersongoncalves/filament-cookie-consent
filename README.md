# Filament Cookie Consent

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jeffersongoncalves/filament-cookie-consent.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-cookie-consent)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/jeffersongoncalves/filament-cookie-consent/fix-php-code-style-issues.yml?branch=master&label=code%20style&style=flat-square)](https://github.com/jeffersongoncalves/filament-cookie-consent/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/jeffersongoncalves/filament-cookie-consent.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-cookie-consent)

This Filament package provides a simple and elegant way to implement cookie consent on your website, ensuring compliance with privacy regulations like GDPR and CCPA. It offers a clean and customizable interface, allowing you to easily manage and display cookie consent banners and preferences.

## Installation

You can install the package via composer:

```bash
composer require jeffersongoncalves/filament-cookie-consent
```

## Usage

Publish config file.

```bash
php artisan vendor:publish --tag=cookie-consent-config
```

Add head template.

```php
@include('cookie-consent::cookie-consent-head')
```

Add body template.

```php
@include('cookie-consent::cookie-consent-body')
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

- [Jèfferson Gonçalves](https://github.com/jeffersongoncalves)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
