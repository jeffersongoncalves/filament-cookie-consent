<?php

return [
    'navigation_label' => 'Cookie 同意',
    'navigation_group' => '設定',
    'title' => 'Cookie 同意の設定',
    'sections' => [
        'assets' => [
            'heading' => 'アセット',
            'description' => 'Cookie 同意ライブラリの CSS と JavaScript の URL を設定します。',
        ],
        'content' => [
            'heading' => 'コンテンツ',
            'description' => 'Cookie 同意バナーのコンテンツオプションを設定します。',
        ],
        'popup' => [
            'heading' => 'ポップアップの色',
            'description' => 'ポップアップバナーの色を設定します。',
        ],
        'button' => [
            'heading' => 'ボタンの色',
            'description' => '同意ボタンの色を設定します。',
        ],
        'highlight' => [
            'heading' => '強調表示の色',
            'description' => '強調ボタンの色を設定します。',
        ],
        'layout' => [
            'heading' => 'レイアウト',
            'description' => 'Cookie 同意バナーの位置とテーマを設定します。',
        ],
    ],
    'fields' => [
        'css_url' => 'CSS URL',
        'js_url' => 'JavaScript URL',
        'content_header' => '見出し',
        'content_message' => 'メッセージ',
        'content_dismiss' => '閉じるボタンのテキスト',
        'content_allow' => '許可ボタンのテキスト',
        'content_deny' => '拒否ボタンのテキスト',
        'content_link' => '詳細リンクのテキスト',
        'content_href' => 'プライバシーポリシーの URL',
        'content_target' => 'リンクのターゲット',
        'content_close' => '閉じるボタンのテキスト',
        'content_policy' => 'Cookie ポリシーのテキスト',
        'popup_background' => '背景',
        'popup_text' => 'テキスト',
        'popup_link' => 'リンク',
        'button_background' => '背景',
        'button_border' => '枠線',
        'button_text' => 'テキスト',
        'highlight_background' => '背景',
        'highlight_border' => '枠線',
        'highlight_text' => 'テキスト',
        'position' => '位置',
        'theme' => 'テーマ',
    ],
];
