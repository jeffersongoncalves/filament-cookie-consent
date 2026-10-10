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
    ],

    'types' => [
        'info' => 'Только уведомление',
        'opt-in' => 'Opt-in (спрашивать до cookies)',
        'opt-out' => 'Opt-out (cookies до отказа)',
    ],
];
