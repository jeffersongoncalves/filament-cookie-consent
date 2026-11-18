<?php

return [
    'navigation_label' => 'Zgoda na pliki cookie',
    'navigation_group' => 'Ustawienia',
    'title' => 'Ustawienia zgody na pliki cookie',
    'sections' => [
        'assets' => [
            'heading' => 'Zasoby',
            'description' => 'Skonfiguruj adresy URL CSS i JavaScript biblioteki zgody na pliki cookie.',
        ],
        'content' => [
            'heading' => 'Treść',
            'description' => 'Skonfiguruj opcje treści banera zgody na pliki cookie.',
        ],
        'popup' => [
            'heading' => 'Kolory okna',
            'description' => 'Skonfiguruj kolory banera.',
        ],
        'button' => [
            'heading' => 'Kolory przycisku',
            'description' => 'Skonfiguruj kolory przycisku zgody.',
        ],
        'highlight' => [
            'heading' => 'Kolory wyróżnienia',
            'description' => 'Skonfiguruj kolory wyróżnionego przycisku.',
        ],
        'layout' => [
            'heading' => 'Układ',
            'description' => 'Skonfiguruj położenie i motyw banera zgody na pliki cookie.',
        ],
        'compliance' => [
            'heading' => 'Zgodność',
            'description' => 'Wybierz, jak odwiedzający wyrażają zgodę i czy tagi Google otrzymują sygnały Consent Mode v2.',
        ],
        'scripts' => [
            'heading' => 'Skrypty i kategorie',
            'description' => 'Wstrzymuj skrypty analityczne, marketingowe i czatu, dopóki odwiedzający nie zezwoli na ich kategorię.',
        ],
    ],
    'fields' => [
        'css_url' => 'Adres URL CSS',
        'js_url' => 'Adres URL JavaScript',
        'content_header' => 'Nagłówek',
        'content_message' => 'Wiadomość',
        'content_dismiss' => 'Tekst przycisku odrzucenia',
        'content_allow' => 'Tekst przycisku zezwolenia',
        'content_deny' => 'Tekst przycisku odmowy',
        'content_link' => 'Tekst linku Dowiedz się więcej',
        'content_href' => 'Adres URL polityki prywatności',
        'content_href_help' => 'Pozostaw puste, aby ukryć link „dowiedz się więcej”.',
        'translated_default_help' => 'Pozostaw puste, aby użyć przetłumaczonego tekstu domyślnego w języku odwiedzającego.',
        'content_target' => 'Cel linku',
        'content_close' => 'Tekst przycisku zamknięcia',
        'content_policy' => 'Tekst polityki cookie',
        'popup_background' => 'Tło',
        'popup_text' => 'Tekst',
        'popup_link' => 'Link',
        'button_background' => 'Tło',
        'button_border' => 'Obramowanie',
        'button_text' => 'Tekst',
        'highlight_background' => 'Tło',
        'highlight_border' => 'Obramowanie',
        'highlight_text' => 'Tekst',
        'position' => 'Położenie',
        'theme' => 'Motyw',
        'type' => 'Typ zgodności',
        'consent_mode' => 'Google Consent Mode v2',
        'consent_mode_help' => 'Wysyła sygnały zgody do Google Tag Manager / gtag. Tag zgody musi załadować się wcześniej.',
        'preferences_css_url' => 'Adres URL CSS banera preferencji',
        'preferences_js_url' => 'Adres URL JavaScript banera preferencji',
        'mode' => 'Baner',
        'mode_help' => 'Wybór dla każdej kategorii pokazuje Akceptuj wszystko, Odrzuć wszystko i przełącznik dla każdej kategorii plików cookie.',
        'block_scripts' => 'Blokuj skrypty do czasu zgody',
        'block_scripts_help' => 'Skrypty pakietów analitycznych i czatu uruchamiają się dopiero po zezwoleniu na ich kategorię.',
        'honor_gpc' => 'Respektuj Global Privacy Control',
        'honor_gpc_help' => 'Sygnał Global Privacy Control odrzuca kategorię marketingową, jak wymaga tego CCPA.',
        'script_categories' => 'Kategorie skryptów',
        'script_categories_help' => 'Zmień kategorię skryptu (:scripts) na jedną z :categories lub zostaw pustą, aby nigdy go nie blokować.',
        'script_categories_key' => 'Skrypt',
        'script_categories_value' => 'Kategoria',
    ],

    'types' => [
        'info' => 'Tylko informacja',
        'opt-in' => 'Opt-in (pytaj przed cookies)',
        'opt-out' => 'Opt-out (cookies do odmowy)',
    ],

    'modes' => [
        'banner' => 'Zezwól lub odrzuć',
        'categories' => 'Wybór dla każdej kategorii',
    ],
];
