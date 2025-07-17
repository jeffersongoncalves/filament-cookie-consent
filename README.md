<div class="filament-hidden">

![Laravel Created By](https://raw.githubusercontent.com/jeffersongoncalves/filament-cookie-consent/master/art/jeffersongoncalves-filament-cookie-consent.png)

</div>

# Filament Cookie Consent

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jeffersongoncalves/filament-cookie-consent.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-cookie-consent)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/jeffersongoncalves/filament-cookie-consent/fix-php-code-style-issues.yml?branch=master&label=code%20style&style=flat-square)](https://github.com/jeffersongoncalves/filament-cookie-consent/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/jeffersongoncalves/filament-cookie-consent.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-cookie-consent)

This Filament package provides seamless integration of cookie consent functionality into your Filament admin panels, ensuring compliance with privacy regulations like GDPR and CCPA. It automatically injects cookie consent banners and preferences into all Filament panels without requiring manual template modifications.

## Features

- 🚀 **Automatic Integration**: No need to manually add blade templates - works out of the box with Filament
- 🎨 **Clean & Customizable**: Elegant interface that matches your Filament theme
- ⚖️ **GDPR & CCPA Compliant**: Ensures your application meets privacy regulation requirements
- 🔧 **Highly Configurable**: Extensive configuration options for customization
- 📱 **Responsive Design**: Works perfectly on desktop and mobile devices
- 🌐 **Multi-language Support**: Easily translatable for international applications

## Requirements

- PHP 8.2 or higher
- Laravel 11.0 or 12.0
- Filament 3.0 or higher

## Installation

You can install the package via composer:

```bash
composer require jeffersongoncalves/filament-cookie-consent
```

## Usage

### Automatic Integration (Recommended)

This package automatically integrates with all your Filament panels. Once installed, cookie consent functionality will be automatically injected into your Filament admin interface without any additional configuration.

The package uses Filament's render hooks to automatically add:
- Cookie consent scripts to the `<head>` section
- Cookie consent banner to the end of the `<body>` section

### Configuration

You can publish and customize the configuration file:

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
