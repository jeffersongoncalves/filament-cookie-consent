<?php

return [
    'navigation_label' => 'Cookie 同意',
    'navigation_group' => '设置',
    'title' => 'Cookie 同意设置',
    'sections' => [
        'assets' => [
            'heading' => '资源',
            'description' => '配置 Cookie 同意库的 CSS 和 JavaScript URL。',
        ],
        'content' => [
            'heading' => '内容',
            'description' => '配置 Cookie 同意横幅的内容选项。',
        ],
        'popup' => [
            'heading' => '弹窗颜色',
            'description' => '配置弹窗横幅的颜色。',
        ],
        'button' => [
            'heading' => '按钮颜色',
            'description' => '配置同意按钮的颜色。',
        ],
        'highlight' => [
            'heading' => '强调颜色',
            'description' => '配置强调按钮的颜色。',
        ],
        'layout' => [
            'heading' => '布局',
            'description' => '配置 Cookie 同意横幅的位置和主题。',
        ],
        'compliance' => [
            'heading' => '合规',
            'description' => '选择访客如何同意，以及 Google 标签是否接收 Consent Mode v2 信号。',
        ],
    ],
    'fields' => [
        'css_url' => 'CSS URL',
        'js_url' => 'JavaScript URL',
        'content_header' => '标题',
        'content_message' => '消息',
        'content_dismiss' => '忽略按钮文本',
        'content_allow' => '允许按钮文本',
        'content_deny' => '拒绝按钮文本',
        'content_link' => '了解更多链接文本',
        'content_href' => '隐私政策 URL',
        'content_target' => '链接目标',
        'content_close' => '关闭按钮文本',
        'content_policy' => 'Cookie 政策文本',
        'popup_background' => '背景',
        'popup_text' => '文本',
        'popup_link' => '链接',
        'button_background' => '背景',
        'button_border' => '边框',
        'button_text' => '文本',
        'highlight_background' => '背景',
        'highlight_border' => '边框',
        'highlight_text' => '文本',
        'position' => '位置',
        'theme' => '主题',
        'type' => '合规类型',
        'consent_mode' => 'Google Consent Mode v2',
        'consent_mode_help' => '向 Google Tag Manager / gtag 发送同意信号。同意标签必须先于它们加载。',
    ],

    'types' => [
        'info' => '仅通知',
        'opt-in' => '选择加入（使用 Cookie 前询问）',
        'opt-out' => '选择退出（拒绝前使用 Cookie）',
    ],
];
