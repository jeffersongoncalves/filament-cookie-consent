<?php

return [
    'navigation_label' => 'Cookie roziligi',
    'navigation_group' => 'Sozlamalar',
    'title' => 'Cookie roziligi sozlamalari',
    'sections' => [
        'assets' => [
            'heading' => 'Resurslar',
            'description' => 'Cookie roziligi kutubxonasi uchun CSS va JavaScript URL manzillarini sozlang.',
        ],
        'content' => [
            'heading' => 'Kontent',
            'description' => 'Cookie roziligi bannerining kontent sozlamalarini sozlang.',
        ],
        'popup' => [
            'heading' => 'Qalqib chiquvchi oyna ranglari',
            'description' => 'Qalqib chiquvchi banner ranglarini sozlang.',
        ],
        'button' => [
            'heading' => 'Tugma ranglari',
            'description' => 'Rozilik tugmasi ranglarini sozlang.',
        ],
        'highlight' => [
            'heading' => 'Ajratish ranglari',
            'description' => 'Ajratilgan tugma ranglarini sozlang.',
        ],
        'layout' => [
            'heading' => 'Joylashuv',
            'description' => 'Cookie roziligi bannerining joylashuvi va mavzusini sozlang.',
        ],
        'compliance' => [
            'heading' => 'Muvofiqlik',
            'description' => 'Tashrif buyuruvchilar qanday rozilik berishini va Google teglari Consent Mode v2 signallarini olishini tanlang.',
        ],
    ],
    'fields' => [
        'css_url' => 'CSS URL',
        'js_url' => 'JavaScript URL',
        'content_header' => 'Sarlavha',
        'content_message' => 'Xabar',
        'content_dismiss' => 'Yopish tugmasi matni',
        'content_allow' => 'Ruxsat berish tugmasi matni',
        'content_deny' => 'Rad etish tugmasi matni',
        'content_link' => 'Batafsil havolasi matni',
        'content_href' => 'Maxfiylik siyosati URL',
        'content_target' => 'Havola maqsadi',
        'content_close' => 'Yopish tugmasi matni',
        'content_policy' => 'Cookie siyosati matni',
        'popup_background' => 'Fon',
        'popup_text' => 'Matn',
        'popup_link' => 'Havola',
        'button_background' => 'Fon',
        'button_border' => 'Chegara',
        'button_text' => 'Matn',
        'highlight_background' => 'Fon',
        'highlight_border' => 'Chegara',
        'highlight_text' => 'Matn',
        'position' => 'Joylashuv',
        'theme' => 'Mavzu',
        'type' => 'Muvofiqlik turi',
        'consent_mode' => 'Google Consent Mode v2',
        'consent_mode_help' => 'Rozilik signallarini Google Tag Manager / gtag ga yuboradi. Rozilik tegi ulardan oldin yuklanishi kerak.',
    ],

    'types' => [
        'info' => 'Faqat bildirishnoma',
        'opt-in' => 'Opt-in (cookie dan oldin so\'rash)',
        'opt-out' => 'Opt-out (rad etilguncha cookie)',
    ],
];
