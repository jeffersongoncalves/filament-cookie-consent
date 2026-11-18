<?php

return [
    'navigation_label' => 'Consentement aux cookies',
    'navigation_group' => 'Paramètres',
    'title' => 'Paramètres du consentement aux cookies',
    'sections' => [
        'assets' => [
            'heading' => 'Ressources',
            'description' => 'Configurez les URL CSS et JavaScript de la bibliothèque de consentement aux cookies.',
        ],
        'content' => [
            'heading' => 'Contenu',
            'description' => 'Configurez les options de contenu de la bannière de consentement aux cookies.',
        ],
        'popup' => [
            'heading' => 'Couleurs de la fenêtre',
            'description' => 'Configurez les couleurs de la bannière.',
        ],
        'button' => [
            'heading' => 'Couleurs du bouton',
            'description' => 'Configurez les couleurs du bouton de consentement.',
        ],
        'highlight' => [
            'heading' => 'Couleurs de mise en avant',
            'description' => 'Configurez les couleurs du bouton mis en avant.',
        ],
        'layout' => [
            'heading' => 'Mise en page',
            'description' => 'Configurez la position et le thème de la bannière de consentement aux cookies.',
        ],
        'compliance' => [
            'heading' => 'Conformité',
            'description' => 'Choisissez comment les visiteurs consentent et si les balises Google reçoivent les signaux Consent Mode v2.',
        ],
        'scripts' => [
            'heading' => 'Scripts et catégories',
            'description' => 'Retenez les scripts de mesure d\'audience, de marketing et de chat jusqu\'à ce que le visiteur autorise leur catégorie.',
        ],
    ],
    'fields' => [
        'css_url' => 'URL CSS',
        'js_url' => 'URL JavaScript',
        'content_header' => 'En-tête',
        'content_message' => 'Message',
        'content_dismiss' => 'Texte du bouton Ignorer',
        'content_allow' => 'Texte du bouton Autoriser',
        'content_deny' => 'Texte du bouton Refuser',
        'content_link' => 'Texte du lien En savoir plus',
        'content_href' => 'URL de la politique de confidentialité',
        'content_href_help' => 'Laissez vide pour masquer le lien « en savoir plus ».',
        'translated_default_help' => 'Laissez vide pour utiliser le texte par défaut traduit dans la langue de chaque visiteur.',
        'content_target' => 'Cible du lien',
        'content_close' => 'Texte du bouton Fermer',
        'content_policy' => 'Texte de la politique de cookies',
        'popup_background' => 'Arrière-plan',
        'popup_text' => 'Texte',
        'popup_link' => 'Lien',
        'button_background' => 'Arrière-plan',
        'button_border' => 'Bordure',
        'button_text' => 'Texte',
        'highlight_background' => 'Arrière-plan',
        'highlight_border' => 'Bordure',
        'highlight_text' => 'Texte',
        'position' => 'Position',
        'theme' => 'Thème',
        'type' => 'Type de conformité',
        'consent_mode' => 'Google Consent Mode v2',
        'consent_mode_help' => 'Envoie les signaux de consentement à Google Tag Manager / gtag. La balise de consentement doit être chargée avant.',
        'preferences_css_url' => 'URL du CSS du bandeau de préférences',
        'preferences_js_url' => 'URL du JavaScript du bandeau de préférences',
        'mode' => 'Bandeau',
        'mode_help' => 'Un choix par catégorie affiche Tout accepter, Tout refuser et un interrupteur pour chaque catégorie de cookies.',
        'block_scripts' => 'Bloquer les scripts jusqu\'au consentement',
        'block_scripts_help' => 'Les scripts des paquets de mesure d\'audience et de chat ne s\'exécutent qu\'une fois leur catégorie autorisée.',
        'honor_gpc' => 'Respecter Global Privacy Control',
        'honor_gpc_help' => 'Un signal Global Privacy Control refuse la catégorie marketing, comme l\'exige le CCPA.',
        'script_categories' => 'Catégories des scripts',
        'script_categories_help' => 'Changez la catégorie d\'un script (:scripts) pour l\'une de :categories, ou laissez-la vide pour ne jamais le bloquer.',
        'script_categories_key' => 'Script',
        'script_categories_value' => 'Catégorie',
    ],

    'types' => [
        'info' => 'Information seule',
        'opt-in' => 'Opt-in (demander avant les cookies)',
        'opt-out' => 'Opt-out (cookies jusqu\'au refus)',
    ],

    'modes' => [
        'banner' => 'Accepter ou refuser',
        'categories' => 'Un choix par catégorie',
    ],
];
