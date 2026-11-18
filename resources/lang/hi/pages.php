<?php

return [
    'navigation_label' => 'कुकी सहमति',
    'navigation_group' => 'सेटिंग्स',
    'title' => 'कुकी सहमति सेटिंग्स',
    'sections' => [
        'assets' => [
            'heading' => 'एसेट्स',
            'description' => 'कुकी सहमति लाइब्रेरी के लिए CSS और JavaScript URL कॉन्फ़िगर करें।',
        ],
        'content' => [
            'heading' => 'सामग्री',
            'description' => 'कुकी सहमति बैनर के सामग्री विकल्प कॉन्फ़िगर करें।',
        ],
        'popup' => [
            'heading' => 'पॉपअप रंग',
            'description' => 'पॉपअप बैनर के रंग कॉन्फ़िगर करें।',
        ],
        'button' => [
            'heading' => 'बटन रंग',
            'description' => 'सहमति बटन के रंग कॉन्फ़िगर करें।',
        ],
        'highlight' => [
            'heading' => 'हाइलाइट रंग',
            'description' => 'हाइलाइट बटन के रंग कॉन्फ़िगर करें।',
        ],
        'layout' => [
            'heading' => 'लेआउट',
            'description' => 'कुकी सहमति बैनर की स्थिति और थीम कॉन्फ़िगर करें।',
        ],
        'compliance' => [
            'heading' => 'अनुपालन',
            'description' => 'चुनें कि आगंतुक कैसे सहमति दें और क्या Google टैग Consent Mode v2 संकेत प्राप्त करें।',
        ],
        'scripts' => [
            'heading' => 'स्क्रिप्ट और श्रेणियाँ',
            'description' => 'जब तक आगंतुक उनकी श्रेणी की अनुमति न दे, विश्लेषण, मार्केटिंग और चैट स्क्रिप्ट रोके रखें।',
        ],
    ],
    'fields' => [
        'css_url' => 'CSS URL',
        'js_url' => 'JavaScript URL',
        'content_header' => 'शीर्षक',
        'content_message' => 'संदेश',
        'content_dismiss' => 'खारिज बटन का टेक्स्ट',
        'content_allow' => 'अनुमति बटन का टेक्स्ट',
        'content_deny' => 'अस्वीकार बटन का टेक्स्ट',
        'content_link' => 'और जानें लिंक का टेक्स्ट',
        'content_href' => 'गोपनीयता नीति URL',
        'content_href_help' => '"और जानें" लिंक छिपाने के लिए खाली छोड़ें।',
        'translated_default_help' => 'हर विज़िटर की भाषा में अनुवादित डिफ़ॉल्ट टेक्स्ट उपयोग करने के लिए खाली छोड़ें।',
        'content_target' => 'लिंक लक्ष्य',
        'content_close' => 'बंद करें बटन का टेक्स्ट',
        'content_policy' => 'कुकी नीति टेक्स्ट',
        'popup_background' => 'पृष्ठभूमि',
        'popup_text' => 'टेक्स्ट',
        'popup_link' => 'लिंक',
        'button_background' => 'पृष्ठभूमि',
        'button_border' => 'बॉर्डर',
        'button_text' => 'टेक्स्ट',
        'highlight_background' => 'पृष्ठभूमि',
        'highlight_border' => 'बॉर्डर',
        'highlight_text' => 'टेक्स्ट',
        'position' => 'स्थिति',
        'theme' => 'थीम',
        'type' => 'अनुपालन प्रकार',
        'consent_mode' => 'Google Consent Mode v2',
        'consent_mode_help' => 'सहमति संकेत Google Tag Manager / gtag को भेजता है। सहमति टैग उनसे पहले लोड होना चाहिए।',
        'preferences_css_url' => 'प्राथमिकता बैनर का CSS URL',
        'preferences_js_url' => 'प्राथमिकता बैनर का JavaScript URL',
        'mode' => 'बैनर',
        'mode_help' => 'हर श्रेणी के लिए चुनाव में सभी स्वीकारें, सभी अस्वीकारें और हर कुकी श्रेणी के लिए एक स्विच दिखता है।',
        'block_scripts' => 'सहमति तक स्क्रिप्ट रोकें',
        'block_scripts_help' => 'विश्लेषण और चैट पैकेज की स्क्रिप्ट केवल उनकी श्रेणी की अनुमति मिलने पर चलती हैं।',
        'honor_gpc' => 'Global Privacy Control का सम्मान करें',
        'honor_gpc_help' => 'Global Privacy Control संकेत CCPA की आवश्यकता के अनुसार मार्केटिंग श्रेणी को अस्वीकार करता है।',
        'script_categories' => 'स्क्रिप्ट श्रेणियाँ',
        'script_categories_help' => 'किसी स्क्रिप्ट (:scripts) की श्रेणी को :categories में से किसी एक में बदलें, या उसे कभी न रोकने के लिए खाली छोड़ें।',
        'script_categories_key' => 'स्क्रिप्ट',
        'script_categories_value' => 'श्रेणी',
    ],

    'types' => [
        'info' => 'केवल सूचना',
        'opt-in' => 'Opt-in (कुकीज़ से पहले पूछें)',
        'opt-out' => 'Opt-out (अस्वीकार करने तक कुकीज़)',
    ],

    'modes' => [
        'banner' => 'अनुमति दें या अस्वीकारें',
        'categories' => 'हर श्रेणी के लिए चुनाव',
    ],
];
