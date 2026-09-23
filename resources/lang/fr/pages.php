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
    ],
];
