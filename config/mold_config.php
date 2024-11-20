<?php
// 模具解决方案页面配置

// 页面基本信息
$page_config = [
    'title' => 'Mold & Die Solutions',
    'breadcrumbs' => [
        ['title' => 'Home', 'link' => 'index.php'],
        ['title' => 'Solutions', 'link' => 'solutions.php'],
        ['title' => 'Mold & Die']
    ]
];

// 概述部分特性列表
$features = [
    'Advanced CAD/CAM Design',
    'High-precision Machining',
    'Quality Heat Treatment',
    'Professional Assembly'
];

// 模具类型配置
$mold_types = [
    [
        'icon' => 'ion-md-cube',
        'title' => 'Injection Molds',
        'items' => [
            'Single Cavity Molds',
            'Multi Cavity Molds',
            'Hot Runner Systems',
            'Cold Runner Systems'
        ]
    ],
    [
        'icon' => 'ion-md-hammer',
        'title' => 'Die Casting Dies',
        'items' => [
            'Aluminum Die Casting',
            'Zinc Die Casting',
            'Magnesium Die Casting',
            'Complex Core Systems'
        ]
    ],
    [
        'icon' => 'ion-md-construct',
        'title' => 'Stamping Dies',
        'items' => [
            'Progressive Dies',
            'Transfer Dies',
            'Deep Drawing Dies',
            'Compound Dies'
        ]
    ]
];

// 制造流程配置
$processes = [
    [
        'icon' => 'ion-md-create',
        'title' => 'Design Phase',
        'items' => [
            '3D Modeling',
            'Flow Analysis',
            'Design Optimization'
        ]
    ],
    [
        'icon' => 'ion-md-build',
        'title' => 'Manufacturing',
        'items' => [
            'CNC Machining',
            'EDM Processing',
            'Heat Treatment'
        ]
    ],
    [
        'icon' => 'ion-md-checkmark-circle',
        'title' => 'Quality Control',
        'items' => [
            'CMM Inspection',
            'Trial Production',
            'Final Testing'
        ]
    ]
];

// 应用领域配置
$applications = [
    [
        'image' => 'images/solutions/solution_demo.jpg',
        'title' => 'Automotive',
        'description' => 'Interior & exterior parts, under-hood components'
    ],
    [
        'image' => 'images/solutions/solution_demo.jpg',
        'title' => 'Electronics',
        'description' => 'Housings, connectors, precision components'
    ],
    [
        'image' => 'images/solutions/solution_demo.jpg',
        'title' => 'Medical',
        'description' => 'Medical devices, laboratory equipment'
    ]
]; 