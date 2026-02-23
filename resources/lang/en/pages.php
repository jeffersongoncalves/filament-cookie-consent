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
    ],

    'fields' => [
        'css_url' => 'CSS URL',
        'js_url' => 'JavaScript URL',
        'content_href' => 'Privacy Policy URL',
        'content_close' => 'Close Button Text',
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
    ],
];
