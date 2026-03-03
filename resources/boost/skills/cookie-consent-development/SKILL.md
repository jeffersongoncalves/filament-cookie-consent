---
name: cookie-consent-development
description: Build and work with the Filament Cookie Consent plugin, including GDPR/CCPA cookie banners, settings page management, color customization, banner positioning, and render hook integration.
---

# Cookie Consent Development

## When to use this skill

Use this skill when:
- Adding a cookie consent banner to a Filament panel
- Configuring GDPR/CCPA compliance settings
- Customizing banner colors, position, theme, and content
- Managing cookie consent via the Filament settings page
- Disabling the settings page for config-only setups
- Troubleshooting banner display or migration issues

## Architecture

### Namespace
```
JeffersonGoncalves\Filament\CookieConsent
```

### Key Classes

| Class | Path | Description |
|-------|------|-------------|
| `CookieConsentPlugin` | `src/CookieConsentPlugin.php` | Plugin class implementing `Filament\Contracts\Plugin` |
| `CookieConsentServiceProvider` | `src/CookieConsentServiceProvider.php` | Registers render hooks for auto-injection |
| `ManageCookieConsentSettings` | `src/Pages/ManageCookieConsentSettings.php` | Filament settings page extending `Filament\Pages\SettingsPage` |

### Dependencies
- `filament/filament: ^5.0`
- `filament/spatie-laravel-settings-plugin: ^5.0`
- `jeffersongoncalves/laravel-cookie-consent: ^3.0` (banner logic, settings class, views)
- `spatie/laravel-package-tools: ^1.14.0`

## Configuration

### Installation

```bash
composer require jeffersongoncalves/filament-cookie-consent:"^3.2"
```

### Migrations

The plugin requires two sets of migrations:

```bash
# 1. Spatie Laravel Settings base migration (if not already published)
php artisan vendor:publish --provider="Spatie\LaravelSettings\LaravelSettingsServiceProvider" --tag="migrations"

# 2. Cookie consent settings migration
php artisan vendor:publish --tag=cookie-consent-settings-migrations

# 3. Run all migrations
php artisan migrate
```

### Plugin Registration

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

## Features

### Automatic Banner Injection

The `CookieConsentServiceProvider` registers two Filament render hooks:
- `PanelsRenderHook::HEAD_START` -- Injects cookie consent CSS and JavaScript
- `PanelsRenderHook::BODY_END` -- Injects the cookie consent banner HTML

No manual Blade template inclusion is required. The banner appears automatically on all panel pages.

### Settings Page

When enabled (default), a **Cookie Consent Settings** page is added under the "Settings" navigation group. The page uses `ManageCookieConsentSettings` which extends `Filament\Pages\SettingsPage` backed by `CookieConsentSettings::class`.

#### Settings Page Sections

| Section | Fields |
|---------|--------|
| **Assets** | `css_url`, `js_url` |
| **Content** | `content_header`, `content_message`, `content_dismiss`, `content_allow`, `content_deny`, `content_link`, `content_href`, `content_target`, `content_close`, `content_policy` |
| **Popup Colors** | `popup_background`, `popup_text`, `popup_link` |
| **Button Colors** | `button_background`, `button_border`, `button_text` |
| **Highlight Colors** | `highlight_background`, `highlight_border`, `highlight_text` |
| **Layout** | `position` (top-left, top-right, bottom-left, bottom-right), `theme` (block, edgeless, classic) |

### Disable Settings Page

If you only want the automatic banner injection without the admin settings page:

```php
CookieConsentPlugin::make()
    ->settingsPage(false),
```

### Plugin Methods

| Method | Default | Description |
|--------|---------|-------------|
| `settingsPage(bool $condition)` | `true` | Enable/disable the settings page registration |

## Settings Page Form Schema

The `ManageCookieConsentSettings` page uses the following form components:

```php
// Assets section
TextInput::make('css_url')->url()->required()
TextInput::make('js_url')->url()->required()

// Content section
TextInput::make('content_header')->required()
Textarea::make('content_message')->required()->columnSpanFull()
TextInput::make('content_dismiss')->required()
TextInput::make('content_allow')->required()
TextInput::make('content_deny')->required()
TextInput::make('content_link')->required()
TextInput::make('content_href')->url()->nullable()
Select::make('content_target')->options(['_blank', '_self'])->required()
TextInput::make('content_close')->required()
TextInput::make('content_policy')->required()

// Color sections use ColorPicker components
ColorPicker::make('popup_background')->required()
// ... etc.

// Layout section
Select::make('position')->options(['top-left', 'top-right', 'bottom-left', 'bottom-right'])
Select::make('theme')->options(['block', 'edgeless', 'classic'])
```

## Internal Behavior

### Render Hook Registration

In `CookieConsentServiceProvider::packageRegistered()`:

```php
FilamentView::registerRenderHook(
    PanelsRenderHook::HEAD_START,
    fn (): View => view('cookie-consent::cookie-consent-head')
);

FilamentView::registerRenderHook(
    PanelsRenderHook::BODY_END,
    fn (): View => view('cookie-consent::cookie-consent-body')
);
```

These views come from the `jeffersongoncalves/laravel-cookie-consent` package.

### Translation Support

The settings page uses translation keys from `filament-cookie-consent::pages.*` for:
- `navigation_label`, `navigation_group`, `title`
- All section headings and descriptions
- All field labels

## Version Compatibility

| Package Branch | Filament Version |
|----------------|------------------|
| 1.x | 3.x |
| 2.x | 4.x |
| 3.x | 5.x |

## Troubleshooting

### Banner Not Appearing
**Cause**: Render hooks not registered, or CSS/JS URLs invalid in settings.
**Solution**: Verify the plugin is registered in the panel provider. Check the settings page to ensure `css_url` and `js_url` are valid URLs.

### Settings Page Missing
**Cause**: `settingsPage(false)` was called, or migrations not run.
**Solution**: Remove `->settingsPage(false)` and ensure both Spatie and cookie consent migrations are published and run.

### Migration Error: Table "settings" Not Found
**Cause**: Spatie Laravel Settings base migration not published.
**Solution**: Run `php artisan vendor:publish --provider="Spatie\LaravelSettings\LaravelSettingsServiceProvider" --tag="migrations"` first, then migrate.

### Colors Not Saving
**Cause**: Settings migration not run -- no database table for settings.
**Solution**: Publish and run both migrations:
```bash
php artisan vendor:publish --tag=cookie-consent-settings-migrations
php artisan migrate
```

### Banner Appears on All Panels
**Cause**: Render hooks are registered globally in the service provider.
**Solution**: This is by design. If you need per-panel control, conditionally register the plugin only in specific panel providers.
