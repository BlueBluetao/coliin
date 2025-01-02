<?php
// Page Configuration
$key_cutting_config = [
    'page_title' => "Key Cutting Solutions",
    'breadcrumbs' => [
        ['title' => 'Home', 'link' => 'index.php'],
        ['title' => 'Solutions', 'link' => 'solutions.php'],
        ['title' => 'Key Cutting']
    ],
    
    // Overview Section
    'overview' => [
        'title' => 'Key Cutting Solutions',
        'paragraphs' => [
            'milestone' => [
                'title' => 'Industry Pioneer',
                'content' => "To better meet the demands of the automotive industry, we successfully developed the collin's first CNC key processing machine that represented a milestone, turned into the first one in China. Regardless of the mechanical mechanism and software, All the machines we developed take their place in the front ranks of the automotive security solutions worldwide. We have successively invested and developed the smallest CNC key processing machine in the world over the past several years."
            ],
            'innovation' => [
                'title' => 'Advanced Technology',
                'content' => "The functional, stable, and precise automatic key cutting machines that allow you to duplicate various keys. The powerful built-in key database and Intelligent software-guided cutting procedures support all key lost, cut by bitting, find bitting, etc. Xhorse automatic key cutting machines are easy to use and guide you through the key duplicating process step by step."
            ],
            'technology' => [
                'title' => 'Comprehensive Solutions',
                'content' => "Besides, we also provide you the mechanical key cutting solutions to duplicate keys with high precision and durability; with the ergonomics designed body structure, equipped with multiple specialized clamps the mechanical key cutting machines enable you flexibly cut vehicle, household, and other security keys."
            ]
        ]
    ],
    
    // Key Types Section
    'key_types' => [
        [
            'icon' => 'ion-md-key',
            'title' => 'Automotive Keys',
            'features' => [
                'Laser Cut Keys',
                'Transponder Keys',
                'Remote Keys',
                'Smart Keys'
            ]
        ],
        [
            'icon' => 'ion-md-lock',
            'title' => 'Security Keys',
            'features' => [
                'High Security Keys',
                'Dimple Keys',
                'Tubular Keys',
                'Safe Keys'
            ]
        ],
        [
            'icon' => 'ion-md-home',
            'title' => 'Residential Keys',
            'features' => [
                'Standard Keys',
                'Restricted Keys',
                'Master Keys',
                'Cylinder Keys'
            ]
        ]
    ],
    
    // Machine Features
    'machine_features' => [
        [
            'icon' => 'ion-md-eye',
            'title' => 'Optical Reading',
            'description' => 'Advanced key scanning system'
        ],
        [
            'icon' => 'ion-md-flash',
            'title' => 'Fast Cutting',
            'description' => 'Rapid key duplication'
        ],
        [
            'icon' => 'ion-md-cloud',
            'title' => 'Database',
            'description' => 'Extensive key codes library'
        ],
        [
            'icon' => 'ion-md-lock',
            'title' => 'Security',
            'description' => 'Advanced security features'
        ]
    ],
    
    // Products
    'products' => [
        [
            'image' => asset_url('images/key_cutting/1.jpg'),
            'title' => 'Automatic Key Machine',
            'model' => 'SEC-E9z',
            'features' => [
                'All-in-one key cutting solution',
                'High-precision optical recognition',
                // 'Automatic calibration system',
                // 'Cloud database support'
            ]
        ],
        [
            'image' => asset_url('images/key_cutting/2.jpg'),
            'title' => 'Mobile Key Cutting Machine',
            'model' => 'SEC-E9',
            'features' => [
                'Portable lightweight design',
                'Built-in rechargeable battery',
                // 'Wireless connectivity',
                // 'Tablet control interface'
            ]
        ],
        [
            'image' => asset_url('images/key_cutting/3.jpg'),
            'title' => 'Professional Key Machine',
            'model' => 'SEC-E9 Pro',
            'features' => [
                'Industrial-grade durability',
                'Multi-axis CNC system',
                // 'Advanced error detection',
                // 'Large key database'
            ]
        ],
        // [
        //     'image' => 'images/key_cutting/k4.png',
        //     'title' => 'Heavy Duty Key Machine',
        //     'model' => 'SEC-E9 Max',
        //     'features' => [
        //         '24/7 continuous operation',
        //         'Enhanced cutting precision',
        //         'Multiple clamp support',
        //         'Industrial IoT ready'
        //     ]
        // ],
        // [
        //     'image' => 'images/key_cutting/k5.png',
        //     'title' => 'Smart Key Machine',
        //     'model' => 'SEC-E9 Smart',
        //     'features' => [
        //         'AI-powered key recognition',
        //         'Remote operation capability',
        //         'Real-time monitoring',
        //         'Predictive maintenance'
        //     ]
        // ]
    ]
]; 