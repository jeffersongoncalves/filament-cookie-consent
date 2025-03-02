<?php

namespace JeffersonGoncalves\Filament\CookieConsent;

use Filament\Support\Facades\FilamentView;
use Filament\View\PanelsRenderHook;
use Illuminate\Contracts\View\View;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class CookieConsentServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package->name('filament-cookie-consent');
    }

    public function packageRegistered(): void
    {
        FilamentView::registerRenderHook(PanelsRenderHook::HEAD_START, fn (): View => view('cookie-consent::cookie-consent-head'));
        FilamentView::registerRenderHook(PanelsRenderHook::BODY_END, fn (): View => view('cookie-consent::cookie-consent-body'));
    }
}
