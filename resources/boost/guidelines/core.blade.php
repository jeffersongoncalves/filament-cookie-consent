## Filament Cookie Consent

A Filament plugin for GDPR/CCPA-compliant cookie consent banners with a built-in settings page. Uses `spatie/laravel-settings` for database-backed configuration and `jeffersongoncalves/laravel-cookie-consent` for the banner. Automatic script/banner injection via Filament render hooks. Requires Filament 5.0+ and PHP 8.2+.

### Installation

@verbatim
<code-snippet name="Install the plugin" lang="bash">
composer require jeffersongoncalves/filament-cookie-consent:"^3.2"
</code-snippet>
@endverbatim

### Publish Migrations

@verbatim
<code-snippet name="Publish and run settings migrations" lang="bash">
php artisan vendor:publish --provider="Spatie\LaravelSettings\LaravelSettingsServiceProvider" --tag="migrations"
php artisan vendor:publish --tag=cookie-consent-settings-migrations
php artisan migrate
</code-snippet>
@endverbatim

### Register Plugin

@verbatim
<code-snippet name="Register in PanelProvider" lang="php">
use JeffersonGoncalves\Filament\CookieConsent\CookieConsentPlugin;

public function panel(Panel $panel): Panel
{
    return $panel
        ->plugins([
            CookieConsentPlugin::make(),
        ]);
}
</code-snippet>
@endverbatim

### Disable Settings Page

@verbatim
<code-snippet name="Use without settings page" lang="php">
CookieConsentPlugin::make()
    ->settingsPage(false),
</code-snippet>
@endverbatim

### Features

- Automatic CSS/JS injection into Filament panels via render hooks (HEAD_START and BODY_END)
- Settings page to manage: assets, content, popup/button/highlight colors, position, and theme
- Database-backed settings via `spatie/laravel-settings` (`CookieConsentSettings` class)
- Positions: `top-left`, `top-right`, `bottom-left`, `bottom-right`
- Themes: `block`, `edgeless`, `classic`
- Multi-language support via translations

### Architecture

- **Namespace**: `JeffersonGoncalves\Filament\CookieConsent`
- **Plugin**: `CookieConsentPlugin` implements `Filament\Contracts\Plugin`
- **Settings Page**: `ManageCookieConsentSettings` extends `Filament\Pages\SettingsPage`
- **Service Provider**: `CookieConsentServiceProvider` registers render hooks
- **Settings Class**: `JeffersonGoncalves\CookieConsent\Settings\CookieConsentSettings` (from laravel-cookie-consent)

### Best Practices

- Always run both the Spatie settings migration and the cookie consent settings migration
- Use the built-in settings page to configure colors and content instead of editing config files
- Disable the settings page with `settingsPage(false)` if you prefer config-only management
- No manual Blade template inclusion is needed -- render hooks inject everything automatically
