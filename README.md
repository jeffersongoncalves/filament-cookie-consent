<div class="filament-hidden">

![Filament Cookie Consent](https://raw.githubusercontent.com/jeffersongoncalves/filament-cookie-consent/3.x/art/jeffersongoncalves-filament-cookie-consent.png)

</div>

# Filament Cookie Consent

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jeffersongoncalves/filament-cookie-consent.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-cookie-consent)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/jeffersongoncalves/filament-cookie-consent/fix-php-code-style-issues.yml?branch=3.x&label=code%20style&style=flat-square)](https://github.com/jeffersongoncalves/filament-cookie-consent/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3A3.x)
[![Total Downloads](https://img.shields.io/packagist/dt/jeffersongoncalves/filament-cookie-consent.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-cookie-consent)
[![License](https://img.shields.io/packagist/l/jeffersongoncalves/filament-cookie-consent.svg?style=flat-square)](LICENSE.md)

This Filament package provides a simple and elegant way to implement cookie consent on your website, ensuring compliance with privacy regulations like GDPR and CCPA. It includes a **Settings Page** to manage all cookie consent options directly from your Filament panel.

## Compatibility

| Package Version                                                               | Filament Version |
|-------------------------------------------------------------------------------|------------------|
| [1.x](https://github.com/jeffersongoncalves/filament-cookie-consent/tree/1.x) | 3.x              |
| [2.x](https://github.com/jeffersongoncalves/filament-cookie-consent/tree/2.x) | 4.x              |
| [3.x](https://github.com/jeffersongoncalves/filament-cookie-consent/tree/3.x) | 5.x              |

## Features

- **Automatic Integration**: No need to manually add blade templates - works out of the box with Filament
- **Settings Page**: Manage all cookie consent settings directly from your Filament panel
- **Database-driven Settings**: Uses `spatie/laravel-settings` for persistent, database-backed configuration
- **GDPR & CCPA Compliant**: Ensures your application meets privacy regulation requirements
- **Highly Configurable**: Customize colors, position, theme, and content via the admin panel
- **Responsive Design**: Works perfectly on desktop and mobile devices
- **Multi-language Support**: Easily translatable for international applications

## Requirements

- PHP 8.2 or higher
- Laravel 11.0 or higher
- Filament 5.0

## Installation

You can install the package via composer:

```bash
composer require jeffersongoncalves/filament-cookie-consent:^3.2
```

If you haven't already, publish the Spatie Laravel Settings migration:

```bash
php artisan vendor:publish --provider="Spatie\LaravelSettings\LaravelSettingsServiceProvider" --tag="migrations"
```

Then publish and run the cookie consent settings migration:

```bash
php artisan vendor:publish --tag=cookie-consent-settings-migrations
php artisan migrate
```

## Plugin Registration

Register the plugin in your Filament Panel Provider:

```php
use JeffersonGoncalves\Filament\CookieConsent\CookieConsentPlugin;

public function panel(Panel $panel): Panel
{
    return $panel
        ->plugins([
            CookieConsentPlugin::make(),
        ]);
}
```

## Settings Page

Once registered, the plugin adds a **Cookie Consent Settings** page to your Filament panel under the "Settings" navigation group. From there you can configure:

- **Assets**: CSS and JavaScript URLs for the cookie consent library
- **Content**: Header, message, button texts, privacy policy URL, link target, and cookie policy text
- **Popup Colors**: Background, text, and link colors
- **Button Colors**: Background, border, and text colors
- **Highlight Colors**: Background, border, and text colors
- **Layout**: Banner position and theme

### Disabling the Settings Page

If you only want the automatic cookie consent integration without the settings page:

```php
CookieConsentPlugin::make()
    ->settingsPage(false),
```

## How it works

This package extends the [jeffersongoncalves/laravel-cookie-consent](https://github.com/jeffersongoncalves/laravel-cookie-consent) package specifically for Filament panels. It automatically registers render hooks that inject the cookie consent templates into your Filament panel pages:

- Cookie consent scripts are automatically added to the `<head>` section
- Cookie consent banner is automatically added to the end of the `<body>` section

No manual template inclusion is required when using this Filament package.

### Screenshots

Screenshots using this package in the admin panel provider.

| Top Left | Top Right |
| :---: | :---: |
| ![Top Left](screenshots/cookie-consent-top-left.png) | ![Top Right](screenshots/cookie-consent-top-right.png) |
| **Bottom Left** | **Bottom Right** |
| ![Bottom Left](screenshots/cookie-consent-bottom-left.png) | ![Bottom Right](screenshots/cookie-consent-bottom-right.png) |

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

- [Jefferson Goncalves](https://github.com/jeffersongoncalves)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
