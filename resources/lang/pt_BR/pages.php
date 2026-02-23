<?php

return [
    'navigation_label' => 'Consentimento de Cookies',
    'navigation_group' => 'Configurações',
    'title' => 'Configurações de Consentimento de Cookies',

    'sections' => [
        'assets' => [
            'heading' => 'Assets',
            'description' => 'Configure as URLs de CSS e JavaScript da biblioteca de consentimento de cookies.',
        ],
        'content' => [
            'heading' => 'Conteúdo',
            'description' => 'Configure as opções de conteúdo do banner de consentimento de cookies.',
        ],
        'popup' => [
            'heading' => 'Cores do Popup',
            'description' => 'Configure as cores do banner popup.',
        ],
        'button' => [
            'heading' => 'Cores do Botão',
            'description' => 'Configure as cores do botão de consentimento.',
        ],
        'highlight' => [
            'heading' => 'Cores de Destaque',
            'description' => 'Configure as cores do botão de destaque.',
        ],
        'layout' => [
            'heading' => 'Layout',
            'description' => 'Configure a posição e o tema do banner de consentimento de cookies.',
        ],
    ],

    'fields' => [
        'css_url' => 'URL do CSS',
        'js_url' => 'URL do JavaScript',
        'content_href' => 'URL da Política de Privacidade',
        'content_close' => 'Texto do Botão Fechar',
        'popup_background' => 'Fundo',
        'popup_text' => 'Texto',
        'popup_link' => 'Link',
        'button_background' => 'Fundo',
        'button_border' => 'Borda',
        'button_text' => 'Texto',
        'highlight_background' => 'Fundo',
        'highlight_border' => 'Borda',
        'highlight_text' => 'Texto',
        'position' => 'Posição',
        'theme' => 'Tema',
    ],
];
