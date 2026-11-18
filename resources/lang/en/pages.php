<?php

return [
    'navigation_label' => 'Cookie Consent',
    'navigation_group' => 'Settings',
    'title' => 'Cookie Consent Settings',

    'sections' => [
        'assets' => [
            'heading' => 'Assets',
            'description' => 'Configure the CSS and JavaScript URLs for the cookie consent library.',
        ],
        'content' => [
            'heading' => 'Content',
            'description' => 'Configure the content options for the cookie consent banner.',
        ],
        'popup' => [
            'heading' => 'Popup Colors',
            'description' => 'Configure the colors for the popup banner.',
        ],
        'button' => [
            'heading' => 'Button Colors',
            'description' => 'Configure the colors for the consent button.',
        ],
        'highlight' => [
            'heading' => 'Highlight Colors',
            'description' => 'Configure the colors for the highlight button.',
        ],
        'layout' => [
            'heading' => 'Layout',
            'description' => 'Configure the position and theme of the cookie consent banner.',
        ],
        'compliance' => [
            'heading' => 'Compliance',
            'description' => 'Choose how visitors consent and whether Google tags receive Consent Mode v2 signals.',
        ],
        'scripts' => [
            'heading' => 'Scripts and categories',
            'description' => 'Hold analytics, marketing and chat scripts until the visitor allows their category.',
        ],
    ],

    'fields' => [
        'css_url' => 'CSS URL',
        'js_url' => 'JavaScript URL',
        'content_header' => 'Header',
        'content_message' => 'Message',
        'content_dismiss' => 'Dismiss Button Text',
        'content_allow' => 'Allow Button Text',
        'content_deny' => 'Deny Button Text',
        'content_link' => 'Learn More Link Text',
        'content_href' => 'Privacy Policy URL',
        'content_href_help' => 'Leave empty to hide the "learn more" link.',
        'translated_default_help' => 'Leave empty to use the translated default for each visitor\'s language.',
        'content_target' => 'Link Target',
        'content_close' => 'Close Button Text',
        'content_policy' => 'Cookie Policy Text',
        'popup_background' => 'Background',
        'popup_text' => 'Text',
        'popup_link' => 'Link',
        'button_background' => 'Background',
        'button_border' => 'Border',
        'button_text' => 'Text',
        'highlight_background' => 'Background',
        'highlight_border' => 'Border',
        'highlight_text' => 'Text',
        'position' => 'Position',
        'theme' => 'Theme',
        'type' => 'Compliance type',
        'consent_mode' => 'Google Consent Mode v2',
        'consent_mode_help' => 'Sends consent signals to Google Tag Manager / gtag. The cookie consent head tag must load before them.',
        'preferences_css_url' => 'Preferences banner CSS URL',
        'preferences_js_url' => 'Preferences banner JavaScript URL',
        'mode' => 'Banner',
        'mode_help' => 'A choice per category shows Accept all, Reject all and a toggle for each cookie category.',
        'block_scripts' => 'Block scripts until consent',
        'block_scripts_help' => 'Scripts of the analytics and chat packages run only once their category is allowed.',
        'honor_gpc' => 'Honor Global Privacy Control',
        'honor_gpc_help' => 'A Global Privacy Control signal refuses the marketing category, as the CCPA requires.',
        'script_categories' => 'Script categories',
        'script_categories_help' => 'Change the category of a script (:scripts) to one of :categories, or leave it empty to never block it.',
        'script_categories_key' => 'Script',
        'script_categories_value' => 'Category',
    ],

    'types' => [
        'info' => 'Notice only',
        'opt-in' => 'Opt-in (ask before setting cookies)',
        'opt-out' => 'Opt-out (cookies until declined)',
    ],

    'modes' => [
        'banner' => 'Allow or decline',
        'categories' => 'A choice per category',
    ],
];
