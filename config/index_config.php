<?php
// 滑块数据
$slider_data = [
    [
        'image' => 'images/slider/slider-1.png',
        'subtitle' => '',
        'title' => 'The leading provider of Industrial',
        'button' => [
            'text' => 'Explore now',
            'link' => '#'
        ]
    ],
    [
        'image' => 'images/slider/slider-2.png',
        'subtitle' => '',
        'title' => 'Leader in power Automation',
        'button' => [
            'text' => 'Explore now',
            'link' => '#'
        ]
    ],
    [
        'image' => 'images/slider/slider-3.png', 
        'subtitle' => '',
        'title' => 'Best solution for Industrial & Factories',
        'button' => [
            'text' => 'Explore now',
            'link' => '#'
        ]
    ]
];

// 服务数据
$services_data = [
    [
        'icon' => 'images/services-icon-1.png',
        'title' => 'Transportation & Distribution',
        'description' => 'By specializing in the transportation of goods in and around the Midwestern United States, we are able to...',
        'link' => 'services-detail.html'
    ],
    [
        'icon' => 'images/services-icon-2.png',
        'title' => 'Oil & Gas exploited',
        'description' => 'We are a leading explorer for new oil and gas fields. We do this not only to replenish the reserves we produce from current fields, but also to meet...',
        'link' => 'services-detail.html'
    ],
    [
        'icon' => 'images/services-icon-3.png',
        'title' => 'Automotive Manufacturing',
        'description' => 'The automotive industry is now undergoing the greatest upheaval in its history due to the advancement...',
        'link' => 'services-detail.html'
    ],
    [
        'icon' => 'images/services-icon-4.png',
        'title' => 'Industrial Construction',
        'description' => 'Diam vehicula platea blandit malesua quam hac vehicula id non leo dui et dapibu turpis quis, tempor augue duis ut justo...',
        'link' => 'services-detail.html'
    ],
    [
        'icon' => 'images/services-icon-5.png',
        'title' => 'Manufacture',
        'description' => 'With IoT business solutions, manufacturers have the power not only to improve and automate production, but expand their value chain...',
        'link' => 'services-detail.html'
    ],
    [
        'icon' => 'images/services-icon-6.png',
        'title' => 'Green Energy',
        'description' => 'A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart...',
        'link' => 'services-detail.html'
    ]
];

// 项目数据
$projects_data = [
    [
        'image' => 'images/portfolio-1.jpg',
        'meta' => 'Russia   |   12 November 2018',
        'title' => 'Refurbishing Gears',
        'description' => 'Sed ut perspiciatis unde omnis iste nas error sit voluptatem accusantium doloremque laudantium, totam  aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto ...',
        'link' => 'project-detail.html'
    ],
    [
        'image' => 'images/portfolio-2.jpg',
        'meta' => 'Russia   |   12 November 2018',
        'title' => 'Wind power in Russia',
        'description' => 'Sed ut perspiciatis unde omnis iste nas error sit voluptatem accusantium doloremque laudantium, totam  aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto ...',
        'link' => 'project-detail.html'
    ],
    [
        'image' => 'images/portfolio-3.jpg',
        'meta' => 'Russia   |   12 November 2018',
        'title' => 'Water Recycle',
        'description' => 'Sed ut perspiciatis unde omnis iste nas error sit voluptatem accusantium doloremque laudantium, totam  aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto ...',
        'link' => 'project-detail.html'
    ],
    [
        'image' => 'images/portfolio-4.jpg',
        'meta' => 'Russia   |   12 November 2018',
        'title' => 'Industry Complex',
        'description' => 'Sed ut perspiciatis unde omnis iste nas error sit voluptatem accusantium doloremque laudantium, totam  aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto ...',
        'link' => 'project-detail.html'
    ],
    [
        'image' => 'images/portfolio-5.jpg',
        'meta' => 'Russia   |   12 November 2018',
        'title' => 'Warehouse Industry',
        'description' => 'Sed ut perspiciatis unde omnis iste nas error sit voluptatem accusantium doloremque laudantium, totam  aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto ...',
        'link' => 'project-detail.html'
    ],
    [
        'image' => 'images/portfolio-6.jpg',
        'meta' => 'Russia   |   12 November 2018',
        'title' => 'Machine Engineering',
        'description' => 'Sed ut perspiciatis unde omnis iste nas error sit voluptatem accusantium doloremque laudantium, totam  aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto ...',
        'link' => 'project-detail.html'
    ]
];

// 合作伙伴数据
$partners_data = [
    ['logo' => 'images/partner-logo-1.png'],
    ['logo' => 'images/partner-logo-2.png'],
    ['logo' => 'images/partner-logo-3.png'],
    ['logo' => 'images/partner-logo-4.png'],
    ['logo' => 'images/partner-logo-5.png']
];

// 工作流程数据
$work_process_data = [
    [
        'icon' => 'icon ion-ios-briefcase',
        'title' => 'Receive and Evaluate<br> the project overview'
    ],
    [
        'icon' => 'icon ion-md-football',
        'title' => 'Research and<br> detailed planning'
    ],
    [
        'icon' => 'icon ion-ios-rocket',
        'title' => 'Deploy and complete<br> the project'
    ],
    [
        'icon' => 'icon ion-ios-filing',
        'title' => 'Evaluation and<br> project handover'
    ]
];

// 工作流程描述
$work_process_description = 'Over the course of more than 25 years of hard work with many large and small projects. We have worked out the best working process.';

// 表单配置
$form_config = [
    'title' => 'Get a quote',
    'description' => 'As fellow entrepreneurs, we understand the need for space which gives your business room to breathe and grow.',
    'fields' => [
        [
            'type' => 'text',
            'name' => 'name',
            'placeholder' => 'Your name',
            'required' => true
        ],
        [
            'type' => 'email',
            'name' => 'email',
            'placeholder' => 'Email address',
            'required' => true
        ],
        [
            'type' => 'text',
            'name' => 'phone',
            'placeholder' => 'Phone number',
            'required' => true
        ]
    ],
    'submit_button' => [
        'text' => 'Submit now',
        'icon' => 'icon ion-md-checkmark-circle'
    ]
];

// 特色项目部分配置
$featured_project_config = [
    'subtitle' => 'FEATURED PROJECT',
    'title' => 'The great work we did',
    'view_all_link' => [
        'text' => 'View all project',
        'url' => 'project.html'
    ]
];
?> 