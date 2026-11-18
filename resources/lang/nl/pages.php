<?php

return [
    'navigation_label' => 'Cookietoestemming',
    'navigation_group' => 'Instellingen',
    'title' => 'Instellingen cookietoestemming',
    'sections' => [
        'assets' => [
            'heading' => 'Assets',
            'description' => 'Configureer de CSS- en JavaScript-URL\'s voor de cookietoestemmingsbibliotheek.',
        ],
        'content' => [
            'heading' => 'Inhoud',
            'description' => 'Configureer de inhoudsopties voor de cookiebanner.',
        ],
        'popup' => [
            'heading' => 'Popupkleuren',
            'description' => 'Configureer de kleuren van de popupbanner.',
        ],
        'button' => [
            'heading' => 'Knopkleuren',
            'description' => 'Configureer de kleuren van de toestemmingsknop.',
        ],
        'highlight' => [
            'heading' => 'Accentkleuren',
            'description' => 'Configureer de kleuren van de accentknop.',
        ],
        'layout' => [
            'heading' => 'Lay-out',
            'description' => 'Configureer de positie en het thema van de cookiebanner.',
        ],
        'compliance' => [
            'heading' => 'Naleving',
            'description' => 'Kies hoe bezoekers toestemming geven en of Google-tags Consent Mode v2-signalen ontvangen.',
        ],
        'scripts' => [
            'heading' => 'Scripts en categorieën',
            'description' => 'Houd analyse-, marketing- en chatscripts tegen tot de bezoeker hun categorie toestaat.',
        ],
    ],
    'fields' => [
        'css_url' => 'CSS-URL',
        'js_url' => 'JavaScript-URL',
        'content_header' => 'Kop',
        'content_message' => 'Bericht',
        'content_dismiss' => 'Tekst van sluitknop',
        'content_allow' => 'Tekst van toestaanknop',
        'content_deny' => 'Tekst van weigerknop',
        'content_link' => 'Tekst van \'Meer informatie\'-link',
        'content_href' => 'URL van privacybeleid',
        'content_href_help' => 'Laat leeg om de link "meer informatie" te verbergen.',
        'translated_default_help' => 'Laat leeg om de vertaalde standaardtekst in de taal van elke bezoeker te gebruiken.',
        'content_target' => 'Linkdoel',
        'content_close' => 'Tekst van sluitknop',
        'content_policy' => 'Tekst van cookiebeleid',
        'popup_background' => 'Achtergrond',
        'popup_text' => 'Tekst',
        'popup_link' => 'Link',
        'button_background' => 'Achtergrond',
        'button_border' => 'Rand',
        'button_text' => 'Tekst',
        'highlight_background' => 'Achtergrond',
        'highlight_border' => 'Rand',
        'highlight_text' => 'Tekst',
        'position' => 'Positie',
        'theme' => 'Thema',
        'type' => 'Nalevingstype',
        'consent_mode' => 'Google Consent Mode v2',
        'consent_mode_help' => 'Stuurt toestemmingssignalen naar Google Tag Manager / gtag. De toestemmingstag moet eerder laden.',
        'preferences_css_url' => 'CSS-URL van de voorkeurenbanner',
        'preferences_js_url' => 'JavaScript-URL van de voorkeurenbanner',
        'mode' => 'Banner',
        'mode_help' => 'Een keuze per categorie toont Alles accepteren, Alles weigeren en een schakelaar per cookiecategorie.',
        'block_scripts' => 'Scripts blokkeren tot toestemming',
        'block_scripts_help' => 'Scripts van de analyse- en chatpakketten draaien pas als hun categorie is toegestaan.',
        'honor_gpc' => 'Global Privacy Control respecteren',
        'honor_gpc_help' => 'Een Global Privacy Control-signaal weigert de marketingcategorie, zoals de CCPA vereist.',
        'script_categories' => 'Scriptcategorieën',
        'script_categories_help' => 'Wijzig de categorie van een script (:scripts) in een van :categories, of laat hem leeg om het nooit te blokkeren.',
        'script_categories_key' => 'Script',
        'script_categories_value' => 'Categorie',
    ],

    'types' => [
        'info' => 'Alleen melding',
        'opt-in' => 'Opt-in (vragen vóór cookies)',
        'opt-out' => 'Opt-out (cookies tot weigering)',
    ],

    'modes' => [
        'banner' => 'Toestaan of weigeren',
        'categories' => 'Een keuze per categorie',
    ],
];
