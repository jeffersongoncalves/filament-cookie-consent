<?php

return [
    'navigation_label' => 'Згода на cookie',
    'navigation_group' => 'Налаштування',
    'title' => 'Налаштування згоди на cookie',
    'sections' => [
        'assets' => [
            'heading' => 'Ресурси',
            'description' => 'Налаштуйте URL CSS і JavaScript для бібліотеки згоди на cookie.',
        ],
        'content' => [
            'heading' => 'Вміст',
            'description' => 'Налаштуйте параметри вмісту банера згоди на cookie.',
        ],
        'popup' => [
            'heading' => 'Кольори спливаючого вікна',
            'description' => 'Налаштуйте кольори спливаючого банера.',
        ],
        'button' => [
            'heading' => 'Кольори кнопки',
            'description' => 'Налаштуйте кольори кнопки згоди.',
        ],
        'highlight' => [
            'heading' => 'Кольори виділення',
            'description' => 'Налаштуйте кольори виділеної кнопки.',
        ],
        'layout' => [
            'heading' => 'Макет',
            'description' => 'Налаштуйте розташування та тему банера згоди на cookie.',
        ],
        'compliance' => [
            'heading' => 'Відповідність',
            'description' => 'Оберіть, як відвідувачі надають згоду і чи отримують теги Google сигнали Consent Mode v2.',
        ],
        'scripts' => [
            'heading' => 'Скрипти та категорії',
            'description' => 'Затримуйте скрипти аналітики, маркетингу та чату, доки відвідувач не дозволить їхню категорію.',
        ],
    ],
    'fields' => [
        'css_url' => 'URL CSS',
        'js_url' => 'URL JavaScript',
        'content_header' => 'Заголовок',
        'content_message' => 'Повідомлення',
        'content_dismiss' => 'Текст кнопки «Закрити»',
        'content_allow' => 'Текст кнопки «Дозволити»',
        'content_deny' => 'Текст кнопки «Відхилити»',
        'content_link' => 'Текст посилання «Докладніше»',
        'content_href' => 'URL політики конфіденційності',
        'content_href_help' => 'Залиште порожнім, щоб приховати посилання «Докладніше».',
        'translated_default_help' => 'Залиште порожнім, щоб використовувати перекладений текст за замовчуванням мовою відвідувача.',
        'content_target' => 'Ціль посилання',
        'content_close' => 'Текст кнопки закриття',
        'content_policy' => 'Текст політики cookie',
        'popup_background' => 'Фон',
        'popup_text' => 'Текст',
        'popup_link' => 'Посилання',
        'button_background' => 'Фон',
        'button_border' => 'Рамка',
        'button_text' => 'Текст',
        'highlight_background' => 'Фон',
        'highlight_border' => 'Рамка',
        'highlight_text' => 'Текст',
        'position' => 'Розташування',
        'theme' => 'Тема',
        'type' => 'Тип відповідності',
        'consent_mode' => 'Google Consent Mode v2',
        'consent_mode_help' => 'Надсилає сигнали згоди до Google Tag Manager / gtag. Тег згоди має завантажуватися раніше.',
        'preferences_css_url' => 'URL CSS банера налаштувань',
        'preferences_js_url' => 'URL JavaScript банера налаштувань',
        'mode' => 'Банер',
        'mode_help' => 'Вибір за категоріями показує «Прийняти все», «Відхилити все» і перемикач для кожної категорії cookie.',
        'block_scripts' => 'Блокувати скрипти до згоди',
        'block_scripts_help' => 'Скрипти пакетів аналітики та чату запускаються лише після дозволу їхньої категорії.',
        'honor_gpc' => 'Враховувати Global Privacy Control',
        'honor_gpc_help' => 'Сигнал Global Privacy Control відхиляє категорію маркетингу, як вимагає CCPA.',
        'script_categories' => 'Категорії скриптів',
        'script_categories_help' => 'Змініть категорію скрипта (:scripts) на одну з :categories або залиште порожньою, щоб ніколи його не блокувати.',
        'script_categories_key' => 'Скрипт',
        'script_categories_value' => 'Категорія',
    ],

    'types' => [
        'info' => 'Лише повідомлення',
        'opt-in' => 'Opt-in (питати до cookies)',
        'opt-out' => 'Opt-out (cookies до відмови)',
    ],

    'modes' => [
        'banner' => 'Дозволити або відхилити',
        'categories' => 'Вибір за категоріями',
    ],
];
