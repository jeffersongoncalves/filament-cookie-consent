<?php

return [
    'navigation_label' => 'Consentimiento de cookies',
    'navigation_group' => 'Configuración',
    'title' => 'Configuración del consentimiento de cookies',
    'sections' => [
        'assets' => [
            'heading' => 'Recursos',
            'description' => 'Configura las URL de CSS y JavaScript de la librería de consentimiento de cookies.',
        ],
        'content' => [
            'heading' => 'Contenido',
            'description' => 'Configura las opciones de contenido del banner de consentimiento de cookies.',
        ],
        'popup' => [
            'heading' => 'Colores del popup',
            'description' => 'Configura los colores del banner emergente.',
        ],
        'button' => [
            'heading' => 'Colores del botón',
            'description' => 'Configura los colores del botón de consentimiento.',
        ],
        'highlight' => [
            'heading' => 'Colores de resaltado',
            'description' => 'Configura los colores del botón resaltado.',
        ],
        'layout' => [
            'heading' => 'Diseño',
            'description' => 'Configura la posición y el tema del banner de consentimiento de cookies.',
        ],
        'compliance' => [
            'heading' => 'Cumplimiento',
            'description' => 'Elige cómo consienten los visitantes y si las etiquetas de Google reciben las señales de Consent Mode v2.',
        ],
        'scripts' => [
            'heading' => 'Scripts y categorías',
            'description' => 'Retén los scripts de analítica, marketing y chat hasta que el visitante permita su categoría.',
        ],
    ],
    'fields' => [
        'css_url' => 'URL de CSS',
        'js_url' => 'URL de JavaScript',
        'content_header' => 'Encabezado',
        'content_message' => 'Mensaje',
        'content_dismiss' => 'Texto del botón de descartar',
        'content_allow' => 'Texto del botón de permitir',
        'content_deny' => 'Texto del botón de rechazar',
        'content_link' => 'Texto del enlace Más información',
        'content_href' => 'URL de la política de privacidad',
        'content_href_help' => 'Déjalo vacío para ocultar el enlace "más información".',
        'translated_default_help' => 'Déjalo vacío para usar el texto predeterminado traducido al idioma de cada visitante.',
        'content_target' => 'Destino del enlace',
        'content_close' => 'Texto del botón de cerrar',
        'content_policy' => 'Texto de la política de cookies',
        'popup_background' => 'Fondo',
        'popup_text' => 'Texto',
        'popup_link' => 'Enlace',
        'button_background' => 'Fondo',
        'button_border' => 'Borde',
        'button_text' => 'Texto',
        'highlight_background' => 'Fondo',
        'highlight_border' => 'Borde',
        'highlight_text' => 'Texto',
        'position' => 'Posición',
        'theme' => 'Tema',
        'type' => 'Tipo de cumplimiento',
        'consent_mode' => 'Google Consent Mode v2',
        'consent_mode_help' => 'Envía las señales de consentimiento a Google Tag Manager / gtag. La etiqueta de consentimiento debe cargarse antes.',
        'preferences_css_url' => 'URL del CSS del banner de preferencias',
        'preferences_js_url' => 'URL del JavaScript del banner de preferencias',
        'mode' => 'Banner',
        'mode_help' => 'Una elección por categoría muestra Aceptar todo, Rechazar todo y un interruptor para cada categoría de cookies.',
        'block_scripts' => 'Bloquear scripts hasta el consentimiento',
        'block_scripts_help' => 'Los scripts de los paquetes de analítica y chat solo se ejecutan cuando se permite su categoría.',
        'honor_gpc' => 'Respetar Global Privacy Control',
        'honor_gpc_help' => 'Una señal Global Privacy Control rechaza la categoría de marketing, como exige la CCPA.',
        'script_categories' => 'Categorías de los scripts',
        'script_categories_help' => 'Cambia la categoría de un script (:scripts) a una de :categories, o déjala vacía para no bloquearlo nunca.',
        'script_categories_key' => 'Script',
        'script_categories_value' => 'Categoría',
    ],

    'types' => [
        'info' => 'Solo aviso',
        'opt-in' => 'Opt-in (preguntar antes de usar cookies)',
        'opt-out' => 'Opt-out (cookies hasta rechazar)',
    ],

    'modes' => [
        'banner' => 'Permitir o rechazar',
        'categories' => 'Una elección por categoría',
    ],
];
