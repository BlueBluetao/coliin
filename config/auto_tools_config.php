<?php
// 页面标题
$page_title = "Auto Tools";

// 面包屑导航
$breadcrumbs = [
    ['title' => 'Home', 'link' => 'index.php'],
    ['title' => 'Solutions', 'link' => 'solutions.php'],
    ['title' => 'Auto Tools']
];

// 产品特性
$features = [
    'Professional Grade Quality',
    'Ergonomic Design',
    'Durability Guaranteed',
    'Wide Range Selection'
];

// 产品类别
$categories = [
    [
        'icon' => 'ion-md-build',
        'title' => 'Key Blade',
        'items' => ['Key Cutting Tools', 'Key Blank Sets', 'Key Duplicators', 'Key Programming Tools']
    ],
    [
        'icon' => 'ion-md-flash',
        'title' => 'VVDI Key Tools',
        'items' => ['Key Programming Devices', 'Transponder Key Programmers', 'Key Cloning Tools', 'Remote Key Programmers']
    ],
    [
        'icon' => 'ion-md-laptop',
        'title' => 'VVDI Remote Tools',
        'items' => ['Remote Key Fobs', 'Keyless Entry Systems', 'Remote Programming Tools', 'Diagnostic Tools']
    ]
];

// 产品特征
$product_features = [
    [
        'icon' => 'ion-md-ribbon',
        'title' => 'Quality',
        'description' => 'Premium materials and construction'
    ],
    [
        'icon' => 'ion-md-hand',
        'title' => 'Ergonomic',
        'description' => 'Comfortable and efficient use'
    ],
    [
        'icon' => 'ion-md-star',
        'title' => 'Durable',
        'description' => 'Long-lasting performance'
    ],
    [
        'icon' => 'ion-md-settings',
        'title' => 'Versatile',
        'description' => 'Multiple applications'
    ]
];

// 应用场景
$applications = [
    [
        'image' => asset_url('images/auto/4.jpg'),
        'title' => 'VVDI-PROG',
        'description' => 'VVDI-PROG is an advanced programming tool that supports programming various car keys and remotes.'
    ],
    [
        'image' => asset_url('images/auto/5.jpg'),
        'title' => 'Key Tool Max',
        'description' => 'An efficient key tool for programming and duplicating various car keys.'
    ],
    [
        'image' => asset_url('images/auto/6.jpg'),
        'title' => 'VVDI2',
        'description' => 'VVDI2 is a professional automotive key programming tool suitable for various car models.'
    ],
    [
        'image' => asset_url('images/auto/1.jpg'),
        'title' => 'Mini Key Tool',
        'description' => 'A compact and portable key tool suitable for quick key programming.'
    ],
    [
        'image' => asset_url('images/auto/2.jpg'),
        'title' => 'Car Remotes',
        'description' => 'Car remotes compatible with various models, providing convenient remote control features.'
    ],
    [
        'image' => asset_url('images/auto/3.jpg'),
        'title' => 'Key Tool Plus',
        'description' => 'A multifunctional key tool that supports programming and duplicating various key types.'
    ]
];

// 报价部分
$quote_sections = [
    'auto-tools' => [
        'title' => 'Get a Quote',
        'description' => 'Contact us for pricing and availability.'
    ]
];
?> 