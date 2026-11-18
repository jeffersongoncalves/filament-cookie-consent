<?php

return [
    'navigation_label' => 'Согласие на cookie',
    'navigation_group' => 'Настройки',
    'title' => 'Настройки согласия на cookie',
    'sections' => [
        'assets' => [
            'heading' => 'Ресурсы',
            'description' => 'Настройте URL CSS и JavaScript для библиотеки согласия на cookie.',
        ],
        'content' => [
            'heading' => 'Содержимое',
            'description' => 'Настройте параметры содержимого баннера согласия на cookie.',
        ],
        'popup' => [
            'heading' => 'Цвета всплывающего окна',
            'description' => 'Настройте цвета всплывающего баннера.',
        ],
        'button' => [
            'heading' => 'Цвета кнопки',
            'description' => 'Настройте цвета кнопки согласия.',
        ],
        'highlight' => [
            'heading' => 'Цвета выделения',
            'description' => 'Настройте цвета выделенной кнопки.',
        ],
        'layout' => [
            'heading' => 'Макет',
            'description' => 'Настройте положение и тему баннера согласия на cookie.',
        ],
        'compliance' => [
            'heading' => 'Соответствие',
            'description' => 'Выберите, как посетители дают согласие и получают ли теги Google сигналы Consent Mode v2.',
        ],
        'scripts' => [
            'heading' => 'Скрипты и категории',
            'description' => 'Задерживайте скрипты аналитики, маркетинга и чата, пока посетитель не разрешит их категорию.',
        ],
    ],
    'fields' => [
        'css_url' => 'URL CSS',
        'js_url' => 'URL JavaScript',
        'content_header' => 'Заголовок',
        'content_message' => 'Сообщение',
        'content_dismiss' => 'Текст кнопки «Закрыть»',
        'content_allow' => 'Текст кнопки «Разрешить»',
        'content_deny' => 'Текст кнопки «Отклонить»',
        'content_link' => 'Текст ссылки «Подробнее»',
        'content_href' => 'URL политики конфиденциальности',
        'content_href_help' => 'Оставьте пустым, чтобы скрыть ссылку «Подробнее».',
        'translated_default_help' => 'Оставьте пустым, чтобы использовать переведённый текст по умолчанию на языке посетителя.',
        'content_target' => 'Цель ссылки',
        'content_close' => 'Текст кнопки закрытия',
        'content_policy' => 'Текст политики cookie',
        'popup_background' => 'Фон',
        'popup_text' => 'Текст',
        'popup_link' => 'Ссылка',
        'button_background' => 'Фон',
        'button_border' => 'Рамка',
        'button_text' => 'Текст',
        'highlight_background' => 'Фон',
        'highlight_border' => 'Рамка',
        'highlight_text' => 'Текст',
        'position' => 'Положение',
        'theme' => 'Тема',
        'type' => 'Тип соответствия',
        'consent_mode' => 'Google Consent Mode v2',
        'consent_mode_help' => 'Отправляет сигналы согласия в Google Tag Manager / gtag. Тег согласия должен загружаться раньше.',
        'preferences_css_url' => 'URL CSS баннера настроек',
        'preferences_js_url' => 'URL JavaScript баннера настроек',
        'mode' => 'Баннер',
        'mode_help' => 'Выбор по категориям показывает «Принять все», «Отклонить все» и переключатель для каждой категории cookie.',
        'block_scripts' => 'Блокировать скрипты до согласия',
        'block_scripts_help' => 'Скрипты пакетов аналитики и чата запускаются только после разрешения их категории.',
        'honor_gpc' => 'Учитывать Global Privacy Control',
        'honor_gpc_help' => 'Сигнал Global Privacy Control отклоняет категорию маркетинга, как требует CCPA.',
        'script_categories' => 'Категории скриптов',
        'script_categories_help' => 'Измените категорию скрипта (:scripts) на одну из :categories или оставьте пустой, чтобы никогда его не блокировать.',
        'script_categories_key' => 'Скрипт',
        'script_categories_value' => 'Категория',
    ],

    'types' => [
        'info' => 'Только уведомление',
        'opt-in' => 'Opt-in (спрашивать до cookies)',
        'opt-out' => 'Opt-out (cookies до отказа)',
    ],

    'modes' => [
        'banner' => 'Разрешить или отклонить',
        'categories' => 'Выбор по категориям',
    ],
];
