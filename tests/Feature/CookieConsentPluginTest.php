<?php

use Filament\Facades\Filament;
use Filament\Support\Facades\FilamentView;
use Filament\View\PanelsRenderHook;
use Illuminate\Foundation\Auth\User;
use JeffersonGoncalves\CookieConsent\Settings\CookieConsentSettings;
use JeffersonGoncalves\Filament\CookieConsent\CookieConsentPlugin;
use JeffersonGoncalves\Filament\CookieConsent\Pages\ManageCookieConsentSettings;
use Livewire\Livewire;

beforeEach(function () {
    Filament::setCurrentPanel(Filament::getPanel('test'));
    $this->actingAs((new User)->forceFill(['id' => 1, 'name' => 'Admin', 'email' => 'admin@example.com']));
});

it('registers the settings page on the panel', function () {
    expect(Filament::getPanel('test')->getPages())->toContain(ManageCookieConsentSettings::class)
        ->and(CookieConsentPlugin::make()->getId())->toBe('filament-cookie-consent');
});

it('ships translated labels', function () {
    expect(ManageCookieConsentSettings::getNavigationLabel())->not->toContain('::')
        ->and((new ManageCookieConsentSettings)->getTitle())->not->toContain('::');
});

it('saves the settings from the page', function () {
    Livewire::test(ManageCookieConsentSettings::class)
        ->fillForm(['content_header' => 'Cookies here'])
        ->call('save')
        ->assertHasNoFormErrors();

    $settings = app(CookieConsentSettings::class)->refresh();
    expect($settings->content_header)->toBe('Cookies here');
});

it('injects the script into the panel once configured', function () {
    $settings = app(CookieConsentSettings::class);
    $settings->content_header = 'Cookies here';
    $settings->save();

    $html = (string) FilamentView::renderHook(PanelsRenderHook::HEAD_START)
        .(string) FilamentView::renderHook(PanelsRenderHook::HEAD_END)
        .(string) FilamentView::renderHook(PanelsRenderHook::BODY_START)
        .(string) FilamentView::renderHook(PanelsRenderHook::BODY_END);

    expect($html)->toContain('Cookies here');
});
