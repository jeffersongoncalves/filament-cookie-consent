<?php

namespace JeffersonGoncalves\Filament\CookieConsent;

use Filament\Panel;
use JeffersonGoncalves\Filament\CookieConsent\Pages\ManageCookieConsentSettings;
use JeffersonGoncalves\FilamentPluginCore\BasePlugin;

class CookieConsentPlugin extends BasePlugin
{
    protected bool $hasSettingsPage = true;

    public function getId(): string
    {
        return 'filament-cookie-consent';
    }

    public function register(Panel $panel): void
    {
        if ($this->hasSettingsPage) {
            $panel->pages([
                ManageCookieConsentSettings::class,
            ]);
        }
    }

    public function settingsPage(bool $condition = true): static
    {
        $this->hasSettingsPage = $condition;

        return $this;
    }
}
