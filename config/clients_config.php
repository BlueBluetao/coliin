<?php
$clients_config = [
    'page_title' => 'Our Clients',
    'hero' => [
        'background_image' => asset_url('images/clients/client-bg.jpg'),
        'title' => 'Our Clients',
        'breadcrumbs' => [
            ['title' => 'Home', 'link' => 'index.php'],
            ['title' => 'Clients', 'link' => null]
        ]
    ],
    'partners' => [
        [
            'name' => 'General Electric Company',
            'logo' => asset_url('images/clients/general_electric_logo.jpg'),
            'description' => 'One of the world\'s largest technology and services conglomerates, ranked 20th in Forbes Global Brand Value Top 100 for 2020'
        ],
        [
            'name' => 'Hillman Group',
            'logo' => asset_url('images/clients/hillman_logo.jpg'),
            'description' => 'NASDAQ: HLMN, a leading North American provider of hardware-related products and services, ranking first in fasteners, hardware, key duplication, engraving, and PPE product categories'
        ],
        [
            'name' => 'Lippert',
            'logo' => asset_url('images/clients/lippert_logo.jpg'),
            'description' => 'A global leader in the manufacturing and supply of highly engineered products and customized solutions'
        ],
        [
            'name' => 'LCI Industries',
            'logo' => asset_url('images/clients/lci_logo.jpg'),
            'description' => 'NYSE: LCII, manufactures and supplies components for OEMs in the recreation and transportation product markets, serving major clients including Thor Industries, Forest River, and Winnebago'
        ],
        [
            'name' => 'Duracell',
            'logo' => asset_url('images/clients/duracell_logo.jpg'),
            'description' => 'A world-leading manufacturer and marketer of high-performance alkaline batteries, ranked 141st in World\'s Top 500 Brands'
        ]
    ],
    'testimonials' => [
        [
            'content' => "Collin has consistently delivered high-quality precision components that meet our exacting standards. Their technical expertise and commitment to quality have made them a valuable partner in our supply chain.",
            'image' => asset_url('images/clients/testi-img-1.png'),
            'name' => 'Senior Procurement Manager',
            'position' => 'Global Power Generation Company'
        ],
        [
            'content' => "We've been working with Collin for over 5 years, and their ability to handle complex machining requirements while maintaining tight tolerances has been instrumental to our success.",
            'image' => asset_url('images/clients/testi-img-2.png'),
            'name' => 'Production Director',
            'position' => 'Leading Hardware Solutions Provider'
        ]
    ],
    'quote_section' => [
        'title' => 'Ready to work with us?',
        'description' => 'Get in touch for a custom quote for your project'
    ]
]; 