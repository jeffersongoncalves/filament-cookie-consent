<?php

return [
    'navigation_label' => 'Consentimento de cookies',
    'navigation_group' => 'Definições',
    'title' => 'Definições do consentimento de cookies',
    'sections' => [
        'assets' => [
            'heading' => 'Recursos',
            'description' => 'Configure os URLs de CSS e JavaScript da biblioteca de consentimento de cookies.',
        ],
        'content' => [
            'heading' => 'Conteúdo',
            'description' => 'Configure as opções de conteúdo do banner de consentimento de cookies.',
        ],
        'popup' => [
            'heading' => 'Cores do popup',
            'description' => 'Configure as cores do banner popup.',
        ],
        'button' => [
            'heading' => 'Cores do botão',
            'description' => 'Configure as cores do botão de consentimento.',
        ],
        'highlight' => [
            'heading' => 'Cores de destaque',
            'description' => 'Configure as cores do botão de destaque.',
        ],
        'layout' => [
            'heading' => 'Esquema',
            'description' => 'Configure a posição e o tema do banner de consentimento de cookies.',
        ],
        'compliance' => [
            'heading' => 'Conformidade',
            'description' => 'Defina como o visitante consente e se as etiquetas da Google recebem os sinais do Consent Mode v2.',
        ],
        'scripts' => [
            'heading' => 'Scripts e categorias',
            'description' => 'Retenha scripts de análise, marketing e chat até o visitante permitir a respetiva categoria.',
        ],
    ],
    'fields' => [
        'css_url' => 'URL do CSS',
        'js_url' => 'URL do JavaScript',
        'content_header' => 'Cabeçalho',
        'content_message' => 'Mensagem',
        'content_dismiss' => 'Texto do botão de dispensar',
        'content_allow' => 'Texto do botão de permitir',
        'content_deny' => 'Texto do botão de recusar',
        'content_link' => 'Texto do link Saber mais',
        'content_href' => 'URL da política de privacidade',
        'content_href_help' => 'Deixe em branco para ocultar a ligação "saber mais".',
        'translated_default_help' => 'Deixe em branco para usar o texto predefinido traduzido no idioma de cada visitante.',
        'content_target' => 'Destino do link',
        'content_close' => 'Texto do botão de fechar',
        'content_policy' => 'Texto da política de cookies',
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
        'type' => 'Tipo de conformidade',
        'consent_mode' => 'Google Consent Mode v2',
        'consent_mode_help' => 'Envia os sinais de consentimento ao Google Tag Manager / gtag. A etiqueta de consentimento tem de carregar antes deles.',
        'preferences_css_url' => 'URL do CSS do banner de preferências',
        'preferences_js_url' => 'URL do JavaScript do banner de preferências',
        'mode' => 'Banner',
        'mode_help' => 'Uma escolha por categoria mostra Aceitar tudo, Rejeitar tudo e um interruptor para cada categoria de cookies.',
        'block_scripts' => 'Bloquear scripts até ao consentimento',
        'block_scripts_help' => 'Os scripts dos pacotes de análise e chat só são executados depois de a sua categoria ser permitida.',
        'honor_gpc' => 'Respeitar o Global Privacy Control',
        'honor_gpc_help' => 'Um sinal Global Privacy Control recusa a categoria de marketing, como exige a CCPA.',
        'script_categories' => 'Categorias dos scripts',
        'script_categories_help' => 'Altere a categoria de um script (:scripts) para uma de :categories, ou deixe vazio para nunca o bloquear.',
        'script_categories_key' => 'Script',
        'script_categories_value' => 'Categoria',
    ],

    'types' => [
        'info' => 'Apenas aviso',
        'opt-in' => 'Opt-in (pedir antes de usar cookies)',
        'opt-out' => 'Opt-out (cookies até recusar)',
    ],

    'modes' => [
        'banner' => 'Permitir ou recusar',
        'categories' => 'Uma escolha por categoria',
    ],
];
