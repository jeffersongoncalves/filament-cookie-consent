<?php

namespace JeffersonGoncalves\Filament\CookieConsent;

use JeffersonGoncalves\Filament\CookieConsent\Pages\ManageCookieConsentSettings;
use JeffersonGoncalves\FilamentAnalyticsCore\AbstractAnalyticsPlugin;

class CookieConsentPlugin extends AbstractAnalyticsPlugin
{
    public function getId(): string
    {
        return 'filament-cookie-consent';
    }

    protected function getSettingsPageClass(): ?string
    {
        return ManageCookieConsentSettings::class;
    }
}
