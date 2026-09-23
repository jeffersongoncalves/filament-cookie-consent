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
    ],
];
