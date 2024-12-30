<?php
// 3D打印页面配置

// 页面基础信息
$page_config = [
    'title' => '3D Printing',
    'breadcrumbs' => [
        ['title' => 'Home', 'link' => 'index.php'],
        ['title' => 'Solutions', 'link' => 'solutions.php'],
        ['title' => '3D Printing']
    ]
];

// 技术特点配置
$features = [
    'Rapid Prototyping',
    'Production-Grade Materials',
    'Complex Geometry Capability',
    'Design Freedom'
];

// 打印技术配置
$technologies = [
    [
        'icon' => 'ion-md-construct',
        'title' => 'SLA',
        'description' => 'Stereolithography for high-detail prototypes and patterns',
        'features' => [
            'High Resolution',
            'Smooth Surface',
            'Clear Parts'
        ]
    ],
    [
        'icon' => 'ion-md-flame',
        'title' => 'SLS',
        'description' => 'Selective Laser Sintering for functional parts',
        'features' => [
            'Strong Parts',
            'Complex Geometry',
            'No Supports'
        ]
    ],
    [
        'icon' => 'ion-md-flash',
        'title' => 'DMLS',
        'description' => 'Direct Metal Laser Sintering for metal parts',
        'features' => [
            'Metal Parts',
            'High Strength',
            'Heat Resistant'
        ]
    ],
    [
        'icon' => 'ion-md-cube',
        'title' => 'FDM',
        'description' => 'Fused Deposition Modeling for functional prototypes',
        'features' => [
            'Cost Effective',
            'Quick Turnaround',
            'Durable Parts'
        ]
    ]
];

// 材料配置
$materials = [
    [
        'image' => asset_url('images/3d/1.avif'),
        'title' => 'Durability',
        'items' => ['Stainless Steel', 'Titanium', 'Aluminum']
    ],
    [
        'image' => asset_url('images/3d/2.avif'),
        'title' => 'Complex Geometry',
        'items' => ['PA12 (Nylon)', 'TPU', 'PEEK']
    ],
    [
        'image' => asset_url('images/3d/5.avif'),
        'title' => 'ABS and ASA',
        'items' => ['Standard', 'Tough', 'Clear']
    ],
    [
        'image' => asset_url('images/3d/6.avif'),
        'title' => 'Durable Nylon',
        'items' => ['Carbon Fiber', 'Glass Filled', 'Kevlar']
    ]
];

// 技术概览配置
$technology_overview = [
    'title' => 'Advanced Additive Manufacturing',
    'description' => 'Our industrial 3D printing solutions utilize cutting-edge technology to deliver high-quality parts with complex geometries and superior material properties.'
]; 