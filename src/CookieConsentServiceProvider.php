<?php

namespace JeffersonGoncalves\Filament\CookieConsent;

use Filament\View\PanelsRenderHook;
use JeffersonGoncalves\FilamentPluginCore\BasePackageServiceProvider;
use Spatie\LaravelPackageTools\Package;

class CookieConsentServiceProvider extends BasePackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package->name('filament-cookie-consent')
            ->hasTranslations();
    }

    public function packageRegistered(): void
    {
        $this->registerRenderHooks([
            PanelsRenderHook::HEAD_START => 'cookie-consent::cookie-consent-head',
            PanelsRenderHook::BODY_END => 'cookie-consent::cookie-consent-body',
        ]);
    }
}
