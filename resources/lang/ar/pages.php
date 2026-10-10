<?php

return [
    'navigation_label' => 'موافقة ملفات تعريف الارتباط',
    'navigation_group' => 'الإعدادات',
    'title' => 'إعدادات موافقة ملفات تعريف الارتباط',
    'sections' => [
        'assets' => [
            'heading' => 'الموارد',
            'description' => 'اضبط روابط CSS وJavaScript لمكتبة موافقة ملفات تعريف الارتباط.',
        ],
        'content' => [
            'heading' => 'المحتوى',
            'description' => 'اضبط خيارات محتوى شريط موافقة ملفات تعريف الارتباط.',
        ],
        'popup' => [
            'heading' => 'ألوان النافذة المنبثقة',
            'description' => 'اضبط ألوان الشريط المنبثق.',
        ],
        'button' => [
            'heading' => 'ألوان الزر',
            'description' => 'اضبط ألوان زر الموافقة.',
        ],
        'highlight' => [
            'heading' => 'ألوان التمييز',
            'description' => 'اضبط ألوان زر التمييز.',
        ],
        'layout' => [
            'heading' => 'التخطيط',
            'description' => 'اضبط موضع شريط موافقة ملفات تعريف الارتباط وسمته.',
        ],
        'compliance' => [
            'heading' => 'الامتثال',
            'description' => 'اختر كيف يوافق الزوار وما إذا كانت علامات Google تتلقى إشارات Consent Mode v2.',
        ],
    ],
    'fields' => [
        'css_url' => 'رابط CSS',
        'js_url' => 'رابط JavaScript',
        'content_header' => 'العنوان',
        'content_message' => 'الرسالة',
        'content_dismiss' => 'نص زر الإغلاق',
        'content_allow' => 'نص زر السماح',
        'content_deny' => 'نص زر الرفض',
        'content_link' => 'نص رابط معرفة المزيد',
        'content_href' => 'رابط سياسة الخصوصية',
        'content_target' => 'هدف الرابط',
        'content_close' => 'نص زر الإغلاق',
        'content_policy' => 'نص سياسة ملفات تعريف الارتباط',
        'popup_background' => 'الخلفية',
        'popup_text' => 'النص',
        'popup_link' => 'الرابط',
        'button_background' => 'الخلفية',
        'button_border' => 'الحدود',
        'button_text' => 'النص',
        'highlight_background' => 'الخلفية',
        'highlight_border' => 'الحدود',
        'highlight_text' => 'النص',
        'position' => 'الموضع',
        'theme' => 'السمة',
        'type' => 'نوع الامتثال',
        'consent_mode' => 'Google Consent Mode v2',
        'consent_mode_help' => 'يرسل إشارات الموافقة إلى Google Tag Manager / gtag. يجب تحميل علامة الموافقة قبلها.',
    ],

    'types' => [
        'info' => 'إشعار فقط',
        'opt-in' => 'Opt-in (السؤال قبل ملفات تعريف الارتباط)',
        'opt-out' => 'Opt-out (ملفات تعريف الارتباط حتى الرفض)',
    ],
];
