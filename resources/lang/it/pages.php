<?php

return [
    'navigation_label' => 'Consenso ai cookie',
    'navigation_group' => 'Impostazioni',
    'title' => 'Impostazioni del consenso ai cookie',
    'sections' => [
        'assets' => [
            'heading' => 'Risorse',
            'description' => 'Configura gli URL CSS e JavaScript della libreria per il consenso ai cookie.',
        ],
        'content' => [
            'heading' => 'Contenuto',
            'description' => 'Configura le opzioni di contenuto del banner del consenso ai cookie.',
        ],
        'popup' => [
            'heading' => 'Colori del popup',
            'description' => 'Configura i colori del banner popup.',
        ],
        'button' => [
            'heading' => 'Colori del pulsante',
            'description' => 'Configura i colori del pulsante di consenso.',
        ],
        'highlight' => [
            'heading' => 'Colori di evidenziazione',
            'description' => 'Configura i colori del pulsante evidenziato.',
        ],
        'layout' => [
            'heading' => 'Layout',
            'description' => 'Configura la posizione e il tema del banner del consenso ai cookie.',
        ],
        'compliance' => [
            'heading' => 'Conformità',
            'description' => 'Scegli come i visitatori danno il consenso e se i tag Google ricevono i segnali di Consent Mode v2.',
        ],
        'scripts' => [
            'heading' => 'Script e categorie',
            'description' => 'Trattieni gli script di statistica, marketing e chat finché il visitatore non consente la loro categoria.',
        ],
    ],
    'fields' => [
        'css_url' => 'URL CSS',
        'js_url' => 'URL JavaScript',
        'content_header' => 'Intestazione',
        'content_message' => 'Messaggio',
        'content_dismiss' => 'Testo del pulsante Ignora',
        'content_allow' => 'Testo del pulsante Consenti',
        'content_deny' => 'Testo del pulsante Rifiuta',
        'content_link' => 'Testo del link Scopri di più',
        'content_href' => 'URL dell\'informativa sulla privacy',
        'content_href_help' => 'Lascia vuoto per nascondere il link "scopri di più".',
        'translated_default_help' => 'Lascia vuoto per usare il testo predefinito tradotto nella lingua di ogni visitatore.',
        'content_target' => 'Destinazione del link',
        'content_close' => 'Testo del pulsante Chiudi',
        'content_policy' => 'Testo della cookie policy',
        'popup_background' => 'Sfondo',
        'popup_text' => 'Testo',
        'popup_link' => 'Link',
        'button_background' => 'Sfondo',
        'button_border' => 'Bordo',
        'button_text' => 'Testo',
        'highlight_background' => 'Sfondo',
        'highlight_border' => 'Bordo',
        'highlight_text' => 'Testo',
        'position' => 'Posizione',
        'theme' => 'Tema',
        'type' => 'Tipo di conformità',
        'consent_mode' => 'Google Consent Mode v2',
        'consent_mode_help' => 'Invia i segnali di consenso a Google Tag Manager / gtag. Il tag del consenso deve essere caricato prima.',
        'preferences_css_url' => 'URL del CSS del banner delle preferenze',
        'preferences_js_url' => 'URL del JavaScript del banner delle preferenze',
        'mode' => 'Banner',
        'mode_help' => 'Una scelta per categoria mostra Accetta tutto, Rifiuta tutto e un interruttore per ogni categoria di cookie.',
        'block_scripts' => 'Blocca gli script fino al consenso',
        'block_scripts_help' => 'Gli script dei pacchetti di statistica e chat vengono eseguiti solo quando la loro categoria è consentita.',
        'honor_gpc' => 'Rispetta Global Privacy Control',
        'honor_gpc_help' => 'Un segnale Global Privacy Control rifiuta la categoria marketing, come richiede il CCPA.',
        'script_categories' => 'Categorie degli script',
        'script_categories_help' => 'Cambia la categoria di uno script (:scripts) in una di :categories, oppure lasciala vuota per non bloccarlo mai.',
        'script_categories_key' => 'Script',
        'script_categories_value' => 'Categoria',
    ],

    'types' => [
        'info' => 'Solo avviso',
        'opt-in' => 'Opt-in (chiedere prima dei cookie)',
        'opt-out' => 'Opt-out (cookie fino al rifiuto)',
    ],

    'modes' => [
        'banner' => 'Consenti o rifiuta',
        'categories' => 'Una scelta per categoria',
    ],
];
