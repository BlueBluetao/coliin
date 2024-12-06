<?php
// Innovation Page Configuration

// Page Header
define('INNOVATION_PAGE_TITLE', 'Precision & Innovation');
define('INNOVATION_HEADER_BG', asset_url('images/solutions/solution.png'));

// Skilled Craftsmanship Section
define('CRAFTSMANSHIP_TITLE', 'Precision Manufacturing Excellence');
define('CRAFTSMANSHIP_DESC', 'Integrating advanced technology with expert craftsmanship to achieve manufacturing excellence through innovation.');

$CRAFTSMANSHIP_EXPERTISE = [
    [
        'icon' => 'ion-md-person',
        'title' => 'Expert Craftsmanship',
        'description' => 'Highly skilled operators with deep process expertise',
        'extended_desc' => 'Our experienced team combines decades of manufacturing expertise with deep technical knowledge, ensuring precise control and understanding of every manufacturing process. Their skill and dedication guarantee exceptional quality in every component produced.'
    ],
    [
        'icon' => 'ion-md-flask',
        'title' => 'Material Innovation',
        'description' => 'Advanced materials for superior performance',
        'extended_desc' => 'We specialize in utilizing cutting-edge materials including high-strength alloy steels, premium stainless steels, and specialized alloys. Our advanced heat treatment and material modification processes enhance material properties, delivering superior hardness, strength, and durability for demanding applications.'
    ],
    [
        'icon' => 'ion-md-build',
        'title' => 'Innovative Solutions',
        'description' => 'Custom solutions through design and process innovation',
        'extended_desc' => 'Our innovative approach to product design and manufacturing process development delivers customized solutions that meet precise requirements. We combine advanced engineering with creative problem-solving to optimize both product performance and manufacturing efficiency.'
    ]
];

// Materials Section
define('MATERIALS_SECTION_TITLE', 'Advanced Materials & Processing');
define('MATERIALS_SECTION_SUBTITLE', 'MATERIAL INNOVATION');
define('MATERIALS_SECTION_DESC', 'Utilizing cutting-edge materials and treatment technologies to achieve superior performance');

$MATERIALS_DATA = [
    [
        'image' => asset_url('images/innovation/m1.png'),
        'title' => 'High-Strength Alloy Steel',
        'description' => 'Premium alloy steels offering exceptional strength and durability',
        'features' => [
            'Superior tensile strength',
            'Enhanced wear resistance',
            'Optimized fatigue performance'
        ]
    ],
    [
        'image' => asset_url('images/innovation/m2.png'),
        'title' => 'Premium Stainless Steel',
        'description' => 'High-grade stainless steel with excellent corrosion resistance',
        'features' => [
            'Outstanding corrosion resistance',
            'High temperature stability',
            'Superior surface finish'
        ]
    ],
    [
        'image' => asset_url('images/innovation/m3.png'),
        'title' => 'Specialized Alloys',
        'description' => 'Custom alloy solutions for specific application requirements',
        'features' => [
            'Application-specific properties',
            'Enhanced performance characteristics',
            'Optimized material composition'
        ]
    ]
];

// Innovation & Solutions Section
define('SOLUTIONS_TITLE', 'Innovative Solutions & Custom Development');
define('SOLUTIONS_DESC', 'We excel in developing customized manufacturing solutions through innovative design and advanced process optimization.');

$INNOVATION_PROCESS = [
    [
        'icon' => 'ion-md-create',
        'title' => 'Product Design Optimization',
        'description' => 'Advanced CAD/CAM technology for optimal design solutions'
    ],
    [
        'icon' => 'ion-md-cog',
        'title' => 'Manufacturing Process Innovation',
        'description' => 'Development of innovative processes for complex requirements'
    ],
    [
        'icon' => 'ion-md-flame',
        'title' => 'Advanced Heat Treatment',
        'description' => 'Specialized material treatment for enhanced performance'
    ]
];

$SOLUTIONS_SHOWCASE = [
    [
        'image' => asset_url('images/solutions/solution.png'),
        'title' => 'Advanced Product Design'
    ],
    [
        'image' => asset_url('images/solutions/solution.png'),
        'title' => 'Process Innovation'
    ],
    [
        'image' => asset_url('images/solutions/solution.png'),
        'title' => 'Quality Excellence'
    ]
];

// Quote Section
define('QUOTE_TITLE', 'Looking for Innovative Manufacturing Solutions?');
define('QUOTE_DESC', 'Partner with us to bring your innovative ideas to life'); 