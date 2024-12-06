<?php
// 页面基础配置
$page_config = [
    'title' => 'Sheet Metal Processing',
    'breadcrumbs' => [
        ['title' => 'Home', 'link' => 'index.php'],
        ['title' => 'Solutions', 'link' => 'solutions.php'],
        ['title' => 'Sheet Metal Processing']
    ]
];

// 服务特点配置
$features = [
    'Precision Cutting & Forming',
    'Custom Fabrication', 
    'Rapid Prototyping',
    'Production Manufacturing'
];

// 加工方法配置
$methods = [
    [
        'icon' => 'ion-md-cut',
        'title' => 'Laser Cutting',
        'description' => 'High-precision laser cutting for various materials and thicknesses'
    ],
    [
        'icon' => 'ion-md-hammer',
        'title' => 'Bending',
        'description' => 'Advanced CNC press brakes for precise bending operations'
    ],
    [
        'icon' => 'ion-md-flash',
        'title' => 'Welding',
        'description' => 'Professional welding services for various metals'
    ],
    [
        'icon' => 'ion-md-color-fill',
        'title' => 'Surface Treatment',
        'description' => 'Multiple finishing options for different requirements'
    ]
];

// 材料选项配置
$materials = [
    [
        'title' => 'Stainless Steel',
        'types' => '304, 316L, 201, etc.'
    ],
    [
        'title' => 'Carbon Steel',
        'types' => 'Q235, Q345, etc.'
    ],
    [
        'title' => 'Aluminum',
        'types' => '5052, 6061, 7075, etc.'
    ]
];

// 加工规格配置
$specifications = [
    'Sheet Thickness' => '0.5mm - 20mm',
    'Max Sheet Size' => '3000 x 1500mm',
    'Bending Accuracy' => '±0.1°',
    'Surface Finish' => 'Up to Ra 0.8'
];

// 应用领域配置
$applications = [
    [
        'image' => asset_url('images/sheet/m1.png'),
        'title' => 'Industrial Equipment',
        'category' => 'Industrial',
        'description' => '...'
    ],
    [
        'image' => asset_url('images/sheet/m2.png'),
        'title' => 'Electronics Housing',
        'category' => 'Electronics',
        'description' => '...'
    ],
    [
        'image' => asset_url('images/sheet/m3.png'),
        'title' => 'Automotive Parts',
        'category' => 'Automotive',
        'description' => '...'
    ],
    [
        'image' => asset_url('images/sheet/m4.png'),
        'title' => 'Medical Equipment',
        'category' => 'Medical',
        'description' => '...'
    ],
    [
        'image' => asset_url('images/sheet/m5.png'),
        'title' => 'Aerospace Components',
        'category' => 'Aerospace',
        'description' => '...'
    ],
    [
        'image' => asset_url('images/sheet/m7.png'),
        'title' => 'Consumer Products',
        'category' => 'Consumer',
        'description' => '...'
    ]
];

// 服务概览配置
$services_overview = [
    'title' => 'Sheet Metal Fabrication',
    'description' => 'Professional sheet metal fabrication services with advanced equipment and experienced craftsmen.'
]; 