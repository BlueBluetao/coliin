<?php
// 网站基础配置
define('SITE_NAME', 'Coliin');
define('SITE_URL', 'http://localhost'); 
define('COMPANY_ADDRESS', 'Forusbeen 50, 4035 Stavanger, Norway');
define('COMPANY_PHONE', '+84 0378 260 852');
define('COMPANY_EMAIL', 'info.coliin@gmail.com');

// 导航菜单配置
$nav_menu = [
    'Home' => 'index.php',
    'Solutions' => [
        'Key Cutting' => 'key-cutting.php',
        'Auto Tools' => 'automotive-tools.php',
        '5-Axis' => '5-axis.php',
        '3D Printing' => '3d-printing.php',
        'CNC' => 'cnc.php',
        'Sheet Metal' => 'sheet-metal.php',
        'Mold & Die' => 'mold.php'
    ],
    'Supply Chain' => 'supply-chain.php',
    'Technology' => 'advantages.php',
    'Innovation' => 'innovation.php',
    'Contact' => [
        'About Us' => 'about-company.php',
        'Business' => 'business.php',
        'Clients' => 'clients.php',
        'Cases' => 'cases.php',
        'Contact Us' => 'contact.php'
    ]
];

// 首页幻灯片配置
$home_sliders = [
    [
        'image' => 'demo/300x200.png',
        'title' => 'The leading provider of Industrial',
        'subtitle' => 'WELCOME TO COLIIN...!',
        'button_text' => 'Explore now',
        'button_link' => '#'
    ],
    [
        'image' => 'demo/300x200.png',
        'title' => 'Leader in power Automation',
        'subtitle' => 'WELCOME TO COLIIN...!',
        'button_text' => 'Explore now',
        'button_link' => '#'
    ],
    [
        'image' => 'demo/300x200.png',
        'title' => 'Best solution for Industrial & Factories',
        'subtitle' => 'WELCOME TO COLIIN...!',
        'button_text' => 'Explore now',
        'button_link' => '#'
    ]
];

// 服务项目配置
$services = [
    [
        'icon' => 'demo/300x200.png',
        'title' => 'Transportation & Distribution',
        'description' => 'By specializing in the transportation of goods in and around the Midwestern United States, we are able to...',
        'link' => 'services-detail.php'
    ],
    [
        'icon' => 'demo/300x200.png',
        'title' => 'Oil & Gas exploited',
        'description' => 'We are a leading explorer for new oil and gas fields. We do this not only to replenish the reserves we produce from current fields, but also to meet...',
        'link' => 'services-detail.php'
    ],
    [
        'icon' => 'images/services-icon-3.png',
        'title' => 'Automotive Manufacturing',
        'description' => 'The automotive industry is now undergoing the greatest upheaval in its history due to the advancement...',
        'link' => 'services-detail.php'
    ],
    [
        'icon' => 'images/services-icon-4.png',
        'title' => 'Industrial Construction',
        'description' => 'Diam vehicula platea blandit malesua quam hac vehicula id non leo dui et dapibu turpis quis, tempor augue duis ut justo...',
        'link' => 'services-detail.php'
    ],
    [
        'icon' => 'images/services-icon-5.png',
        'title' => 'Manufacture',
        'description' => 'With IoT business solutions, manufacturers have the power not only to improve and automate production, but expand their value chain...',
        'link' => 'services-detail.php'
    ],
    [
        'icon' => 'images/services-icon-6.png',
        'title' => 'Green Energy',
        'description' => 'A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart...',
        'link' => 'services-detail.php'
    ]
];

// 解决方案数据配置
$solutions_data = [
    'manufacturing' => [
        'title' => 'Manufacturing Solutions',
        'description' => 'Comprehensive Manufacturing Solutions',
        'sub_description' => 'Discover our range of advanced manufacturing solutions designed to meet your specific needs.',
        'solutions' => [
            'key-cutting' => [
                'title' => 'Key Cutting Solutions',
                'description' => 'Professional key cutting machines and systems for automotive and security industries.',
                'image' => 'images/demo/300x200.png', // images/solutions/key-cutting-thumb.jpg
                'features' => ['High Precision Cutting', 'Multiple Key Types', 'Advanced Security Features'],
                'category' => 'tools'
            ],
            'auto-tools' => [
                'title' => 'Auto Tools',
                'description' => 'Professional-grade automotive tools and diagnostic equipment.',
                'image' => 'images/demo/300x200.png', // images/solutions/auto-tools-thumb.jpg
                'features' => ['Hand Tools', 'Power Tools', 'Diagnostic Equipment'],
                'category' => 'tools'
            ],
            '5-axis' => [
                'title' => '5-Axis Machining',
                'description' => 'Advanced 5-axis CNC machining for complex components.',
                'image' => 'images/demo/300x200.png', // images/solutions/5-axis-thumb.jpg
                'features' => ['Complex Geometries', 'High Precision', 'Multi-axis Control'],
                'category' => 'machining'
            ],
            '3d-printing' => [
                'title' => '3D Printing',
                'description' => 'Industrial additive manufacturing solutions.',
                'image' => 'images/demo/300x200.png', // images/solutions/3d-printing-thumb.jpg
                'features' => ['Rapid Prototyping', 'Multiple Materials', 'Complex Parts'],
                'category' => 'automation'
            ],
            'cnc' => [
                'title' => 'CNC Machining',
                'description' => 'Precision CNC machining services.',
                'image' => 'images/demo/300x200.png', // images/solutions/cnc-thumb.jpg
                'features' => ['Milling & Turning', 'High Accuracy', 'Multiple Materials'],
                'category' => 'machining'
            ],
            'sheet-metal' => [
                'title' => 'Sheet Metal',
                'description' => 'Professional sheet metal fabrication.',
                'image' => 'images/demo/300x200.png', // images/solutions/sheet-metal-thumb.jpg
                'features' => ['Cutting & Forming', 'Welding', 'Surface Treatment'],
                'category' => 'machining'
            ],
            'mold' => [
                'title' => 'Mold & Die',
                'description' => 'Custom mold and die manufacturing.',
                'image' => 'images/demo/300x200.png', // images/solutions/mold-thumb.jpg
                'features' => ['Injection Molds', 'Die Casting', 'Tool Making'],
                'category' => 'tools'
            ]
        ]
    ],
    'smart_quoting' => [
        'title' => 'Smart Quoting System',
        'description' => 'Enhancing Cost Control and Efficiency',
        'content' => 'Our smart quoting system integrates a supplier management system to track and manage supplier relationships, enabling real-time data interaction with upstream suppliers and optimizing resource allocation to enhance the efficiency and responsiveness of the entire supply chain.',
        'features' => [
            [
                'title' => 'Supplier Management',
                'description' => 'Track supplier numbers and distribution to ensure optimal resource allocation.',
                'image' => 'images/demo/300x200.png' // images/supplier-management.jpg
            ],
            [
                'title' => 'Algorithm Model for Pricing Optimization',
                'description' => 'Utilizing machine learning algorithms, our system analyzes historical data in real-time to optimize pricing models, improving accuracy and reducing human error.',
                'image' => 'images/demo/300x200.png' // images/pricing-optimization.jpg
            ]
        ],
        'risk_control' => [
            'title' => 'Market Price Risk Control and Early Warning Mechanism',
            'description' => 'Our smart quoting system features built-in risk control and early warning mechanisms, collecting and analyzing vast amounts of data, including historical prices, transaction volumes, inventory levels, seasonal demand changes, and macroeconomic indicators. This transparency fosters collaboration among supply chain parties, accurately predicting market demand, price trends, and raw material supply conditions.',
            'image' => 'images/demo/300x200.png' // images/risk-control.jpg
        ]
    ],
    'advantages' => [
        'title' => 'Why Choose Our Solutions',
        'items' => [
            [
                'icon' => 'ion-md-ribbon',
                'title' => 'Quality',
                'description' => 'ISO certified manufacturing processes'
            ],
            [
                'icon' => 'ion-md-stopwatch',
                'title' => 'Speed',
                'description' => 'Fast turnaround times'
            ],
            [
                'icon' => 'ion-md-trending-up',
                'title' => 'Technology',
                'description' => 'Advanced manufacturing equipment'
            ],
            [
                'icon' => 'ion-md-people',
                'title' => 'Support',
                'description' => 'Expert technical assistance'
            ]
        ]
    ]
];

// 合作伙伴配置
$partners = [
    ['logo' => 'images/partner-logo-1.png', 'name' => 'Partner 1'],
    ['logo' => 'images/partner-logo-2.png', 'name' => 'Partner 2'],
    ['logo' => 'images/partner-logo-3.png', 'name' => 'Partner 3'],
    ['logo' => 'images/partner-logo-4.png', 'name' => 'Partner 4'],
    ['logo' => 'images/partner-logo-5.png', 'name' => 'Partner 5']
];

// 工作流程配置
$work_process = [
    [
        'icon' => 'ion-ios-briefcase',
        'title' => 'Receive and Evaluate',
        'subtitle' => 'the project overview'
    ],
    [
        'icon' => 'ion-md-football',
        'title' => 'Research and',
        'subtitle' => 'detailed planning'
    ],
    [
        'icon' => 'ion-ios-rocket',
        'title' => 'Deploy and complete',
        'subtitle' => 'the project'
    ],
    [
        'icon' => 'ion-ios-filing',
        'title' => 'Evaluation and',
        'subtitle' => 'project handover'
    ]
];

// 社交媒体配置
$social_media = [
    'facebook' => '#',
    'twitter' => '#',
    'linkedin' => '#',
    'instagram' => '#',
    'skype' => '#'
];

// SEO 配置
$seo = [
    'default_title' => 'Coliin - Industrial Solutions',
    'default_description' => 'Professional industrial solutions and manufacturing services',
    'default_keywords' => 'industrial, manufacturing, automation, solutions',
    'author' => 'Coliin',
    'robots' => 'index, follow'
];

// 系统配置
$config = [
    'debug' => true,
    'timezone' => 'Asia/Shanghai',
    'charset' => 'UTF-8',
    'cache_enabled' => true,
    'cache_time' => 3600,
    'maintenance_mode' => false
];

// 报价部分配置
$quote_sections = [
    'auto-tools' => [
        'title' => 'Let us know what you need',
        'description' => 'Professional automotive tools and solutions'
    ],
    'cnc' => [
        'title' => 'Let us know what you need',
        'description' => 'Professional CNC machining services'
    ],
    'mold' => [
        'title' => 'Let us know what you need',
        'description' => 'Professional mold & die manufacturing'
    ],
    'sheet-metal' => [
        'title' => 'Let us know what you need',
        'description' => 'Professional sheet metal fabrication services'
    ],
    '3d-printing' => [
        'title' => 'Let us know what you need',
        'description' => 'Professional 3D printing solutions'
    ],
    '5-axis' => [
        'title' => 'Let us know what you need',
        'description' => 'Precision 5-axis machining solutions'
    ],
    'key-cutting' => [
        'title' => 'Let us know what you need',
        'description' => 'Professional key cutting equipment'
    ]
];

// Hero Section 配置
$hero_sections = [
    'solutions' => [
        'title' => 'Manufacturing Solutions',
        'background' => 'images/solutions/solution.png'
    ],
    'auto-tools' => [
        'title' => 'Auto Tools',
        'background' => 'images/solutions/solution.png'
    ],
    // ... 其他页面的配置
];