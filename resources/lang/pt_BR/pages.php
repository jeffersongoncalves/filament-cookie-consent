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
        'compliance' => [
            'heading' => 'Conformidade',
            'description' => 'Defina como o visitante consente e se as tags do Google recebem os sinais do Consent Mode v2.',
        ],
        'scripts' => [
            'heading' => 'Scripts e categorias',
            'description' => 'Segure scripts de análise, marketing e chat até o visitante permitir a categoria deles.',
        ],
    ],

    'fields' => [
        'css_url' => 'URL do CSS',
        'js_url' => 'URL do JavaScript',
        'content_header' => 'Cabeçalho',
        'content_message' => 'Mensagem',
        'content_dismiss' => 'Texto do Botão Dispensar',
        'content_allow' => 'Texto do Botão Permitir',
        'content_deny' => 'Texto do Botão Recusar',
        'content_link' => 'Texto do Link Saiba Mais',
        'content_href' => 'URL da Política de Privacidade',
        'content_href_help' => 'Deixe em branco para ocultar o link "saiba mais".',
        'translated_default_help' => 'Deixe em branco para usar o texto padrão traduzido no idioma de cada visitante.',
        'content_target' => 'Destino do Link',
        'content_close' => 'Texto do Botão Fechar',
        'content_policy' => 'Texto da Política de Cookies',
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
        'consent_mode_help' => 'Envia os sinais de consentimento ao Google Tag Manager / gtag. A tag de consentimento precisa carregar antes deles.',
        'preferences_css_url' => 'URL do CSS do banner de preferências',
        'preferences_js_url' => 'URL do JavaScript do banner de preferências',
        'mode' => 'Banner',
        'mode_help' => 'Uma escolha por categoria mostra Aceitar tudo, Recusar tudo e um botão para cada categoria de cookies.',
        'block_scripts' => 'Bloquear scripts até o consentimento',
        'block_scripts_help' => 'Os scripts dos pacotes de análise e chat só rodam depois que a categoria deles for permitida.',
        'honor_gpc' => 'Respeitar o Global Privacy Control',
        'honor_gpc_help' => 'Um sinal Global Privacy Control recusa a categoria de marketing, como exige a CCPA.',
        'script_categories' => 'Categorias dos scripts',
        'script_categories_help' => 'Mude a categoria de um script (:scripts) para uma de :categories, ou deixe vazia para nunca bloqueá-lo.',
        'script_categories_key' => 'Script',
        'script_categories_value' => 'Categoria',
    ],

    'types' => [
        'info' => 'Somente aviso',
        'opt-in' => 'Opt-in (pedir antes de usar cookies)',
        'opt-out' => 'Opt-out (cookies até recusar)',
    ],

    'modes' => [
        'banner' => 'Permitir ou recusar',
        'categories' => 'Uma escolha por categoria',
    ],
];
