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
    ],
];
