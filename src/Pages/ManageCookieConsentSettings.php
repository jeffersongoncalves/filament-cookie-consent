<?php

namespace JeffersonGoncalves\Filament\CookieConsent\Pages;

use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Pages\SettingsPage;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use JeffersonGoncalves\CookieConsent\Settings\CookieConsentSettings;

class ManageCookieConsentSettings extends SettingsPage
{
    protected static string $settings = CookieConsentSettings::class;

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-shield-check';

    public static function getNavigationLabel(): string
    {
        return __('filament-cookie-consent::pages.navigation_label');
    }

    public static function getNavigationGroup(): string|\UnitEnum|null
    {
        return __('filament-cookie-consent::pages.navigation_group');
    }

    public function getTitle(): string
    {
        return __('filament-cookie-consent::pages.title');
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->columns(null)
            ->schema([
                Section::make(__('filament-cookie-consent::pages.sections.assets.heading'))
                    ->description(__('filament-cookie-consent::pages.sections.assets.description'))
                    ->schema([
                        TextInput::make('css_url')
                            ->label(__('filament-cookie-consent::pages.fields.css_url'))
                            ->url()
                            ->required(),

                        TextInput::make('js_url')
                            ->label(__('filament-cookie-consent::pages.fields.js_url'))
                            ->url()
                            ->required(),
                    ])->columns(2),

                Section::make(__('filament-cookie-consent::pages.sections.content.heading'))
                    ->description(__('filament-cookie-consent::pages.sections.content.description'))
                    ->schema([
                        TextInput::make('content_header')
                            ->label(__('filament-cookie-consent::pages.fields.content_header'))
                            ->required(),

                        Textarea::make('content_message')
                            ->label(__('filament-cookie-consent::pages.fields.content_message'))
                            ->required()
                            ->columnSpanFull(),

                        TextInput::make('content_dismiss')
                            ->label(__('filament-cookie-consent::pages.fields.content_dismiss'))
                            ->required(),

                        TextInput::make('content_allow')
                            ->label(__('filament-cookie-consent::pages.fields.content_allow'))
                            ->required(),

                        TextInput::make('content_deny')
                            ->label(__('filament-cookie-consent::pages.fields.content_deny'))
                            ->required(),

                        TextInput::make('content_link')
                            ->label(__('filament-cookie-consent::pages.fields.content_link'))
                            ->required(),

                        TextInput::make('content_href')
                            ->label(__('filament-cookie-consent::pages.fields.content_href'))
                            ->url()
                            ->nullable(),

                        Select::make('content_target')
                            ->label(__('filament-cookie-consent::pages.fields.content_target'))
                            ->options([
                                '_blank' => 'New Tab (_blank)',
                                '_self' => 'Same Tab (_self)',
                            ])
                            ->required(),

                        TextInput::make('content_close')
                            ->label(__('filament-cookie-consent::pages.fields.content_close'))
                            ->required(),

                        TextInput::make('content_policy')
                            ->label(__('filament-cookie-consent::pages.fields.content_policy'))
                            ->required(),
                    ])->columns(2),

                Section::make(__('filament-cookie-consent::pages.sections.popup.heading'))
                    ->description(__('filament-cookie-consent::pages.sections.popup.description'))
                    ->schema([
                        ColorPicker::make('popup_background')
                            ->label(__('filament-cookie-consent::pages.fields.popup_background'))
                            ->required(),

                        ColorPicker::make('popup_text')
                            ->label(__('filament-cookie-consent::pages.fields.popup_text'))
                            ->required(),

                        ColorPicker::make('popup_link')
                            ->label(__('filament-cookie-consent::pages.fields.popup_link'))
                            ->required(),
                    ])->columns(3),

                Section::make(__('filament-cookie-consent::pages.sections.button.heading'))
                    ->description(__('filament-cookie-consent::pages.sections.button.description'))
                    ->schema([
                        TextInput::make('button_background')
                            ->label(__('filament-cookie-consent::pages.fields.button_background'))
                            ->required(),

                        ColorPicker::make('button_border')
                            ->label(__('filament-cookie-consent::pages.fields.button_border'))
                            ->required(),

                        ColorPicker::make('button_text')
                            ->label(__('filament-cookie-consent::pages.fields.button_text'))
                            ->required(),
                    ])->columns(3),

                Section::make(__('filament-cookie-consent::pages.sections.highlight.heading'))
                    ->description(__('filament-cookie-consent::pages.sections.highlight.description'))
                    ->schema([
                        ColorPicker::make('highlight_background')
                            ->label(__('filament-cookie-consent::pages.fields.highlight_background'))
                            ->required(),

                        ColorPicker::make('highlight_border')
                            ->label(__('filament-cookie-consent::pages.fields.highlight_border'))
                            ->required(),

                        ColorPicker::make('highlight_text')
                            ->label(__('filament-cookie-consent::pages.fields.highlight_text'))
                            ->required(),
                    ])->columns(3),

                Section::make(__('filament-cookie-consent::pages.sections.layout.heading'))
                    ->description(__('filament-cookie-consent::pages.sections.layout.description'))
                    ->schema([
                        Select::make('position')
                            ->label(__('filament-cookie-consent::pages.fields.position'))
                            ->options([
                                'top-left' => 'Top Left',
                                'top-right' => 'Top Right',
                                'bottom-left' => 'Bottom Left',
                                'bottom-right' => 'Bottom Right',
                            ])
                            ->required(),

                        Select::make('theme')
                            ->label(__('filament-cookie-consent::pages.fields.theme'))
                            ->options([
                                'block' => 'Block',
                                'edgeless' => 'Edgeless',
                                'classic' => 'Classic',
                            ])
                            ->required(),
                    ])->columns(2),
            ]);
    }
}
