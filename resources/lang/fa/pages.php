<?php

return [
    'navigation_label' => 'رضایت کوکی',
    'navigation_group' => 'تنظیمات',
    'title' => 'تنظیمات رضایت کوکی',
    'sections' => [
        'assets' => [
            'heading' => 'منابع',
            'description' => 'آدرس‌های CSS و JavaScript کتابخانه رضایت کوکی را پیکربندی کنید.',
        ],
        'content' => [
            'heading' => 'محتوا',
            'description' => 'گزینه‌های محتوای بنر رضایت کوکی را پیکربندی کنید.',
        ],
        'popup' => [
            'heading' => 'رنگ‌های پاپ‌آپ',
            'description' => 'رنگ‌های بنر پاپ‌آپ را پیکربندی کنید.',
        ],
        'button' => [
            'heading' => 'رنگ‌های دکمه',
            'description' => 'رنگ‌های دکمه رضایت را پیکربندی کنید.',
        ],
        'highlight' => [
            'heading' => 'رنگ‌های برجسته',
            'description' => 'رنگ‌های دکمه برجسته را پیکربندی کنید.',
        ],
        'layout' => [
            'heading' => 'چیدمان',
            'description' => 'موقعیت و پوسته بنر رضایت کوکی را پیکربندی کنید.',
        ],
        'compliance' => [
            'heading' => 'انطباق',
            'description' => 'انتخاب کنید بازدیدکنندگان چگونه رضایت دهند و آیا برچسب‌های Google سیگنال‌های Consent Mode v2 را دریافت کنند.',
        ],
    ],
    'fields' => [
        'css_url' => 'آدرس CSS',
        'js_url' => 'آدرس JavaScript',
        'content_header' => 'سرتیتر',
        'content_message' => 'پیام',
        'content_dismiss' => 'متن دکمه رد کردن',
        'content_allow' => 'متن دکمه اجازه',
        'content_deny' => 'متن دکمه عدم پذیرش',
        'content_link' => 'متن پیوند اطلاعات بیشتر',
        'content_href' => 'آدرس سیاست حفظ حریم خصوصی',
        'content_target' => 'هدف پیوند',
        'content_close' => 'متن دکمه بستن',
        'content_policy' => 'متن سیاست کوکی',
        'popup_background' => 'پس‌زمینه',
        'popup_text' => 'متن',
        'popup_link' => 'پیوند',
        'button_background' => 'پس‌زمینه',
        'button_border' => 'حاشیه',
        'button_text' => 'متن',
        'highlight_background' => 'پس‌زمینه',
        'highlight_border' => 'حاشیه',
        'highlight_text' => 'متن',
        'position' => 'موقعیت',
        'theme' => 'پوسته',
        'type' => 'نوع انطباق',
        'consent_mode' => 'Google Consent Mode v2',
        'consent_mode_help' => 'سیگنال‌های رضایت را به Google Tag Manager / gtag می‌فرستد. برچسب رضایت باید پیش از آن‌ها بارگذاری شود.',
    ],

    'types' => [
        'info' => 'فقط اطلاع‌رسانی',
        'opt-in' => 'Opt-in (پرسیدن پیش از کوکی‌ها)',
        'opt-out' => 'Opt-out (کوکی تا زمان رد)',
    ],
];
