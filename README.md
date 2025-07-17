<div class="filament-hidden">

![Laravel Created By](https://raw.githubusercontent.com/jeffersongoncalves/filament-cookie-consent/master/art/jeffersongoncalves-filament-cookie-consent.png)

</div>

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

This package automatically integrates cookie consent functionality into your Filament panels. Once installed, the cookie consent banner will be automatically displayed on all Filament panel pages without any additional configuration.

### Configuration

You can customize the cookie consent appearance and behavior by publishing the configuration file:

```bash
php artisan vendor:publish --tag=cookie-consent-config
```

This will publish the configuration file to `config/cookie-consent.php` where you can customize:

- **Message content**: Customize the cookie consent message, button text, and privacy policy link
- **Styling**: Configure colors for the popup background, text, and button
- **Position**: Set the position of the cookie consent banner (bottom-left, bottom-right, top-left, top-right, etc.)

Example configuration:

```php
return [
    'content' => [
        'message' => 'This website uses cookies and other tracking technologies...',
        'dismiss' => 'Accept',
        'link' => 'Privacy Policy',
        'href' => '/privacy-policy',
    ],
    'palette' => [
        'popup' => [
            'background' => '#696969',
            'text' => '#FFFFFF',
        ],
        'button' => [
            'background' => '#FFAB00',
            'text' => '#FFFFFF',
        ],
    ],
    'position' => 'bottom-left',
];
```

### How it works

This package extends the [jeffersongoncalves/laravel-cookie-consent](https://github.com/jeffersongoncalves/laravel-cookie-consent) package specifically for Filament panels. It automatically registers render hooks that inject the cookie consent templates into your Filament panel pages:

- Cookie consent scripts are automatically added to the `<head>` section
- Cookie consent banner is automatically added to the end of the `<body>` section

No manual template inclusion is required when using this Filament package.

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
