<?php

return [
    'navigation_label' => 'Cookie-Einwilligung',
    'navigation_group' => 'Einstellungen',
    'title' => 'Einstellungen zur Cookie-Einwilligung',
    'sections' => [
        'assets' => [
            'heading' => 'Assets',
            'description' => 'Konfigurieren Sie die CSS- und JavaScript-URLs für die Cookie-Consent-Bibliothek.',
        ],
        'content' => [
            'heading' => 'Inhalt',
            'description' => 'Konfigurieren Sie die Inhaltsoptionen für das Cookie-Banner.',
        ],
        'popup' => [
            'heading' => 'Popup-Farben',
            'description' => 'Konfigurieren Sie die Farben des Popup-Banners.',
        ],
        'button' => [
            'heading' => 'Schaltflächenfarben',
            'description' => 'Konfigurieren Sie die Farben der Zustimmungsschaltfläche.',
        ],
        'highlight' => [
            'heading' => 'Hervorhebungsfarben',
            'description' => 'Konfigurieren Sie die Farben der hervorgehobenen Schaltfläche.',
        ],
        'layout' => [
            'heading' => 'Layout',
            'description' => 'Konfigurieren Sie Position und Design des Cookie-Banners.',
        ],
        'compliance' => [
            'heading' => 'Compliance',
            'description' => 'Legen Sie fest, wie Besucher zustimmen und ob Google-Tags Consent-Mode-v2-Signale erhalten.',
        ],
        'scripts' => [
            'heading' => 'Skripte und Kategorien',
            'description' => 'Hält Statistik-, Marketing- und Chat-Skripte zurück, bis der Besucher ihre Kategorie erlaubt.',
        ],
    ],
    'fields' => [
        'css_url' => 'CSS-URL',
        'js_url' => 'JavaScript-URL',
        'content_header' => 'Überschrift',
        'content_message' => 'Nachricht',
        'content_dismiss' => 'Text der Schließen-Schaltfläche',
        'content_allow' => 'Text der Erlauben-Schaltfläche',
        'content_deny' => 'Text der Ablehnen-Schaltfläche',
        'content_link' => 'Text des „Mehr erfahren“-Links',
        'content_href' => 'URL der Datenschutzerklärung',
        'content_href_help' => 'Leer lassen, um den „Mehr erfahren“-Link auszublenden.',
        'translated_default_help' => 'Leer lassen, um den übersetzten Standardtext in der Sprache des Besuchers zu verwenden.',
        'content_target' => 'Link-Ziel',
        'content_close' => 'Text der Schließen-Schaltfläche',
        'content_policy' => 'Text der Cookie-Richtlinie',
        'popup_background' => 'Hintergrund',
        'popup_text' => 'Text',
        'popup_link' => 'Link',
        'button_background' => 'Hintergrund',
        'button_border' => 'Rahmen',
        'button_text' => 'Text',
        'highlight_background' => 'Hintergrund',
        'highlight_border' => 'Rahmen',
        'highlight_text' => 'Text',
        'position' => 'Position',
        'theme' => 'Design',
        'type' => 'Compliance-Typ',
        'consent_mode' => 'Google Consent Mode v2',
        'consent_mode_help' => 'Sendet Einwilligungssignale an Google Tag Manager / gtag. Das Consent-Tag muss vorher geladen werden.',
        'preferences_css_url' => 'CSS-URL des Einstellungsbanners',
        'preferences_js_url' => 'JavaScript-URL des Einstellungsbanners',
        'mode' => 'Banner',
        'mode_help' => 'Eine Auswahl pro Kategorie zeigt Alle akzeptieren, Alle ablehnen und einen Schalter je Cookie-Kategorie.',
        'block_scripts' => 'Skripte bis zur Einwilligung blockieren',
        'block_scripts_help' => 'Skripte der Statistik- und Chat-Pakete laufen erst, wenn ihre Kategorie erlaubt ist.',
        'honor_gpc' => 'Global Privacy Control beachten',
        'honor_gpc_help' => 'Ein Global-Privacy-Control-Signal lehnt die Marketing-Kategorie ab, wie es der CCPA verlangt.',
        'script_categories' => 'Skript-Kategorien',
        'script_categories_help' => 'Ändern Sie die Kategorie eines Skripts (:scripts) in eine von :categories oder lassen Sie sie leer, um es nie zu blockieren.',
        'script_categories_key' => 'Skript',
        'script_categories_value' => 'Kategorie',
    ],

    'types' => [
        'info' => 'Nur Hinweis',
        'opt-in' => 'Opt-in (vor Cookies fragen)',
        'opt-out' => 'Opt-out (Cookies bis zur Ablehnung)',
    ],

    'modes' => [
        'banner' => 'Erlauben oder ablehnen',
        'categories' => 'Eine Auswahl pro Kategorie',
    ],
];
