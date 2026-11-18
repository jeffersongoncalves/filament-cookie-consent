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
        'scripts' => [
            'heading' => 'البرامج النصية والفئات',
            'description' => 'احتجز برامج التحليلات والتسويق والدردشة حتى يسمح الزائر بفئتها.',
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
        'content_href_help' => 'اتركه فارغًا لإخفاء رابط "اعرف المزيد".',
        'translated_default_help' => 'اتركه فارغًا لاستخدام النص الافتراضي المترجم بلغة كل زائر.',
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
        'preferences_css_url' => 'رابط CSS لشريط التفضيلات',
        'preferences_js_url' => 'رابط JavaScript لشريط التفضيلات',
        'mode' => 'الشريط',
        'mode_help' => 'يعرض الاختيار لكل فئة: قبول الكل ورفض الكل ومفتاحًا لكل فئة من ملفات تعريف الارتباط.',
        'block_scripts' => 'حظر البرامج النصية حتى الموافقة',
        'block_scripts_help' => 'لا تعمل البرامج النصية لحزم التحليلات والدردشة إلا بعد السماح بفئتها.',
        'honor_gpc' => 'احترام Global Privacy Control',
        'honor_gpc_help' => 'إشارة Global Privacy Control ترفض فئة التسويق كما يتطلب CCPA.',
        'script_categories' => 'فئات البرامج النصية',
        'script_categories_help' => 'غيّر فئة برنامج نصي (:scripts) إلى إحدى :categories، أو اتركها فارغة حتى لا يُحظر أبدًا.',
        'script_categories_key' => 'البرنامج النصي',
        'script_categories_value' => 'الفئة',
    ],

    'types' => [
        'info' => 'إشعار فقط',
        'opt-in' => 'Opt-in (السؤال قبل ملفات تعريف الارتباط)',
        'opt-out' => 'Opt-out (ملفات تعريف الارتباط حتى الرفض)',
    ],

    'modes' => [
        'banner' => 'السماح أو الرفض',
        'categories' => 'اختيار لكل فئة',
    ],
];
