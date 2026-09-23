<?php

namespace JeffersonGoncalves\Filament\CookieConsent;

use Filament\View\PanelsRenderHook;
use JeffersonGoncalves\FilamentAnalyticsCore\AbstractAnalyticsServiceProvider;

class CookieConsentServiceProvider extends AbstractAnalyticsServiceProvider
{
    protected function packageName(): string
    {
        return 'filament-cookie-consent';
    }

    protected function renderHooks(): array
    {
        return [
            PanelsRenderHook::HEAD_START => 'cookie-consent::cookie-consent-head',
            PanelsRenderHook::BODY_END => 'cookie-consent::cookie-consent-body',
        ];
    }
}
