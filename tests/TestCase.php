<?php

namespace JeffersonGoncalves\Filament\CookieConsent\Tests;

use BladeUI\Heroicons\BladeHeroiconsServiceProvider;
use BladeUI\Icons\BladeIconsServiceProvider;
use Filament\Actions\ActionsServiceProvider;
use Filament\FilamentServiceProvider;
use Filament\Forms\FormsServiceProvider;
use Filament\Infolists\InfolistsServiceProvider;
use Filament\Notifications\NotificationsServiceProvider;
use Filament\Schemas\SchemasServiceProvider;
use Filament\SpatieLaravelSettingsPluginServiceProvider;
use Filament\Support\SupportServiceProvider;
use Filament\Tables\TablesServiceProvider;
use Filament\Widgets\WidgetsServiceProvider;
use Illuminate\Database\Schema\Blueprint;
use JeffersonGoncalves\CookieConsent\CookieConsentServiceProvider as LaravelCookieConsentServiceProvider;
use JeffersonGoncalves\Filament\CookieConsent\CookieConsentServiceProvider;
use JeffersonGoncalves\Filament\CookieConsent\Tests\Fixtures\TestPanelProvider;
use Livewire\LivewireServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;
use ReflectionClass;
use RyanChandler\BladeCaptureDirective\BladeCaptureDirectiveServiceProvider;
use Spatie\LaravelSettings\LaravelSettingsServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->app['db']->connection()->getSchemaBuilder()->create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('group');
            $table->string('name');
            $table->boolean('locked')->default(false);
            $table->json('payload');
            $table->timestamps();
            $table->unique(['group', 'name']);
        });

        // Seed through laravel-cookie-consent's own migration, like an app would.
        $dir = dirname((string) (new ReflectionClass(LaravelCookieConsentServiceProvider::class))->getFileName()).'/../database/settings';
        foreach (glob($dir.'/*.php') ?: [] as $file) {
            (include $file)->up();
        }
    }

    protected function getPackageProviders($app): array
    {
        // Version-specific providers: Filament 4+ ships the form/schema test helpers (fillForm...) in the Schemas
        // provider; Filament 3 views need the @capture directive provider.
        $versionSpecific = array_values(array_filter([
            SchemasServiceProvider::class,
            BladeCaptureDirectiveServiceProvider::class,
        ], 'class_exists'));

        return [
            ...$versionSpecific,
            ActionsServiceProvider::class,
            BladeHeroiconsServiceProvider::class,
            BladeIconsServiceProvider::class,
            FilamentServiceProvider::class,
            FormsServiceProvider::class,
            InfolistsServiceProvider::class,
            LivewireServiceProvider::class,
            NotificationsServiceProvider::class,
            SupportServiceProvider::class,
            TablesServiceProvider::class,
            WidgetsServiceProvider::class,
            LaravelSettingsServiceProvider::class,
            SpatieLaravelSettingsPluginServiceProvider::class,
            LaravelCookieConsentServiceProvider::class,
            CookieConsentServiceProvider::class,
            TestPanelProvider::class,
        ];
    }

    protected function defineEnvironment($app): void
    {
        $app['config']->set('app.key', 'base64:'.base64_encode(str_repeat('k', 32)));
        $app['config']->set('database.default', 'testing');
        $app['config']->set('database.connections.testing', [
            'driver' => 'sqlite',
            'database' => ':memory:',
            'prefix' => '',
        ]);
    }
}
