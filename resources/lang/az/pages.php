<?php

return [
    'navigation_label' => 'Kuki razılığı',
    'navigation_group' => 'Parametrlər',
    'title' => 'Kuki razılığı parametrləri',
    'sections' => [
        'assets' => [
            'heading' => 'Resurslar',
            'description' => 'Kuki razılığı kitabxanası üçün CSS və JavaScript URL-lərini konfiqurasiya edin.',
        ],
        'content' => [
            'heading' => 'Məzmun',
            'description' => 'Kuki razılığı bannerinin məzmun seçimlərini konfiqurasiya edin.',
        ],
        'popup' => [
            'heading' => 'Popup rəngləri',
            'description' => 'Popup bannerin rənglərini konfiqurasiya edin.',
        ],
        'button' => [
            'heading' => 'Düymə rəngləri',
            'description' => 'Razılıq düyməsinin rənglərini konfiqurasiya edin.',
        ],
        'highlight' => [
            'heading' => 'Vurğu rəngləri',
            'description' => 'Vurğu düyməsinin rənglərini konfiqurasiya edin.',
        ],
        'layout' => [
            'heading' => 'Yerləşim',
            'description' => 'Kuki razılığı bannerinin mövqeyini və temasını konfiqurasiya edin.',
        ],
        'compliance' => [
            'heading' => 'Uyğunluq',
            'description' => 'Ziyarətçilərin necə razılıq verdiyini və Google teqlərinin Consent Mode v2 siqnallarını alıb-almadığını seçin.',
        ],
        'scripts' => [
            'heading' => 'Skriptlər və kateqoriyalar',
            'description' => 'Ziyarətçi kateqoriyalarına icazə verənə qədər analitika, marketinq və söhbət skriptlərini saxlayın.',
        ],
    ],
    'fields' => [
        'css_url' => 'CSS URL',
        'js_url' => 'JavaScript URL',
        'content_header' => 'Başlıq',
        'content_message' => 'Mesaj',
        'content_dismiss' => 'Bağlama düyməsinin mətni',
        'content_allow' => 'İcazə düyməsinin mətni',
        'content_deny' => 'İmtina düyməsinin mətni',
        'content_link' => 'Ətraflı keçidinin mətni',
        'content_href' => 'Məxfilik siyasəti URL',
        'content_href_help' => '"Ətraflı" keçidini gizlətmək üçün boş buraxın.',
        'translated_default_help' => 'Hər ziyarətçinin dilində tərcümə edilmiş standart mətndən istifadə etmək üçün boş buraxın.',
        'content_target' => 'Keçid hədəfi',
        'content_close' => 'Bağla düyməsinin mətni',
        'content_policy' => 'Kuki siyasəti mətni',
        'popup_background' => 'Fon',
        'popup_text' => 'Mətn',
        'popup_link' => 'Keçid',
        'button_background' => 'Fon',
        'button_border' => 'Çərçivə',
        'button_text' => 'Mətn',
        'highlight_background' => 'Fon',
        'highlight_border' => 'Çərçivə',
        'highlight_text' => 'Mətn',
        'position' => 'Mövqe',
        'theme' => 'Tema',
        'type' => 'Uyğunluq növü',
        'consent_mode' => 'Google Consent Mode v2',
        'consent_mode_help' => 'Razılıq siqnallarını Google Tag Manager / gtag-ə göndərir. Razılıq teqi onlardan əvvəl yüklənməlidir.',
        'preferences_css_url' => 'Seçimlər bannerinin CSS URL-i',
        'preferences_js_url' => 'Seçimlər bannerinin JavaScript URL-i',
        'mode' => 'Banner',
        'mode_help' => 'Kateqoriya üzrə seçim Hamısını qəbul et, Hamısını rədd et və hər kuki kateqoriyası üçün açar göstərir.',
        'block_scripts' => 'Razılığa qədər skriptləri blokla',
        'block_scripts_help' => 'Analitika və söhbət paketlərinin skriptləri yalnız kateqoriyalarına icazə veriləndə işləyir.',
        'honor_gpc' => 'Global Privacy Control-a əməl et',
        'honor_gpc_help' => 'Global Privacy Control siqnalı CCPA-nın tələb etdiyi kimi marketinq kateqoriyasını rədd edir.',
        'script_categories' => 'Skript kateqoriyaları',
        'script_categories_help' => 'Skriptin (:scripts) kateqoriyasını :categories siyahısından birinə dəyişin və ya heç vaxt bloklanmaması üçün boş saxlayın.',
        'script_categories_key' => 'Skript',
        'script_categories_value' => 'Kateqoriya',
    ],

    'types' => [
        'info' => 'Yalnız bildiriş',
        'opt-in' => 'Opt-in (kukilərdən əvvəl soruş)',
        'opt-out' => 'Opt-out (imtinaya qədər kukilər)',
    ],

    'modes' => [
        'banner' => 'İcazə ver və ya rədd et',
        'categories' => 'Kateqoriya üzrə seçim',
    ],
];
