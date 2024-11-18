<?php
require_once 'config/config.php';  // 引入配置文件
require_once 'includes/header.php';
require_once 'includes/navigation.php';

// 页面特定配置
$page_title = "Supply Chain Management - Coliin";
$page_description = "Comprehensive supply chain management services optimizing your procurement process and reducing operational costs.";
$current_page = 'supply-chain';

// 页面数据配置
$overview = [
    'title' => 'Integrated Supply Chain Solutions',
    'description' => 'Comprehensive supply chain management services optimizing your procurement process and reducing operational costs.',
    'features' => [
        'Global Sourcing Network',
        'Quality Assurance',
        'Inventory Management',
        'Just-in-Time Delivery'
    ]
];

$stats = [
    [
        'number' => '5000+',
        'title' => 'Supplier Network'
    ],
    [
        'number' => '98.5%',
        'title' => 'Quote Accuracy'
    ],
    [
        'number' => '30',
        'title' => 'Countries Covered'
    ],
    [
        'number' => '15min',
        'title' => 'Average Quote Time'
    ]
];

$services = [
    [
        'title' => 'Intelligent Pricing System',
        'description' => 'AI-powered pricing system delivering cost control and efficiency optimization',
        'image' => 'images/supply-chain/ai-pricing.jpg',
        'features' => [
            'Real-time Data Analysis',
            'Multi-dimensional Cost Analysis',
            'Smart Supplier Matching',
            'Automated Quotation Process'
        ]
    ],
    [
        'title' => 'Algorithm Model Optimization',
        'description' => 'Machine learning-driven pricing models ensuring quote accuracy',
        // 'image' => 'images/services/algorithm.jpg',
        'image' => 'images/supply-chain/ai-pricing.jpg',
        'features' => [
            'Historical Data Analysis',
            'Market Trend Prediction',
            'Dynamic Pricing Strategy',
            'Continuous Optimization'
        ]
    ],
    [
        'title' => 'Risk Control & Early Warning',
        'description' => 'Comprehensive monitoring and alert system ensuring supply chain stability',
        'image' => 'images/supply-chain/ai-pricing.jpg',
        // 'image' => 'images/services/risk-control.jpg',
        'features' => [
            'Real-time Risk Monitoring',
            'Alert Mechanism',
            'Emergency Response',
            'Supply Chain Optimization'
        ]
    ]
];

$process_steps = [
    [
        'number' => '01',
        'title' => 'Planning',
        'description' => 'Demand forecasting and resource planning'
    ],
    [
        'number' => '02',
        'title' => 'Sourcing',
        'description' => 'Supplier selection and procurement'
    ],
    [
        'number' => '03',
        'title' => 'Manufacturing',
        'description' => 'Production and quality control'
    ],
    [
        'number' => '04',
        'title' => 'Delivery',
        'description' => 'Logistics and distribution'
    ]
];

$benefits = [
    [
        'icon' => 'ion-md-cash',
        'title' => 'Cost Reduction',
        'description' => 'Optimize procurement costs and improve operational efficiency'
    ],
    [
        'icon' => 'ion-md-time',
        'title' => 'Time Saving',
        'description' => 'Reduce lead times and improve delivery performance'
    ],
    [
        'icon' => 'ion-md-analytics',
        'title' => 'Risk Management',
        'description' => 'Minimize supply chain risks and ensure business continuity'
    ]
];

$supplier_regions = [
    [
        'region' => 'Asia Pacific',
        'number' => '2000+'
    ],
    [
        'region' => 'Europe',
        'number' => '1500+'
    ],
    [
        'region' => 'North America',
        'number' => '1000+'
    ],
    [
        'region' => 'Other Regions',
        'number' => '500+'
    ]
];

// Quote section 配置
$quote_title = "Optimize Your Supply Chain";
$quote_description = "Contact us to discuss your supply chain management needs";

include 'includes/header.php';
?>

<!-- Hero Section -->
<div class="page-header" style="background: url('images/solutions/solution.png') no-repeat center center;">
    <div class="container">
        <div class="breadc-box no-line">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="page-title">Supply Chain Management</h2>
                    <ul id="breadcrumbs" class="breadcrumbs none-style">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Supply Chain</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Overview Section -->
<section class="no-padding-top">
    <div class="container">
        <div class="row flex-row">
            <div class="col-md-6">
                <div class="content-box">
                    <h4 class="text-primary">OVERVIEW</h4>
                    <h2><?php echo $overview['title']; ?></h2>
                    <p><?php echo $overview['description']; ?></p>
                    <ul class="solution-features">
                        <?php foreach($overview['features'] as $feature): ?>
                        <li><i class="icon ion-md-checkmark-circle"></i><?php echo $feature; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="image-box">
                    <img src="images/supply-chain-overview.jpg" alt="Supply Chain Management" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="stats-section bg-gradient">
    <div class="container">
        <div class="row">
            <?php foreach($stats as $stat): ?>
            <div class="col-md-3">
                <div class="stat-box">
                    <div class="stat-number"><?php echo $stat['number']; ?></div>
                    <div class="stat-title"><?php echo $stat['title']; ?></div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="services-intro">
                    <h4 class="text-primary">INTELLIGENT SUPPLY CHAIN SOLUTIONS</h4>
                    <h2>Digital Transformation for Supply Chain Excellence</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach($services as $service): ?>
            <div class="col-lg-4 col-md-6">
                <div class="service-box hover-box">
                    <div class="service-thumb">
                        <a href="#"><img src="<?php echo $service['image']; ?>" alt="<?php echo $service['title']; ?>"></a>
                    </div>
                    <div class="service-content">
                        <h4><?php echo $service['title']; ?></h4>
                        <p><?php echo $service['description']; ?></p>
                        <ul class="service-list">
                            <?php foreach($service['features'] as $feature): ?>
                            <li><i class="icon ion-md-checkmark-circle"></i><?php echo $feature; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Process Flow -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="text-primary">PROCESS</h4>
                <h2>Supply Chain Process</h2>
                <div class="coliin-space-30"></div>
            </div>
        </div>
        <div class="process-flow">
            <div class="row">
                <?php foreach($process_steps as $step): ?>
                <div class="col-md-3">
                    <div class="process-step">
                        <div class="step-number"><?php echo $step['number']; ?></div>
                        <h3><?php echo $step['title']; ?></h3>
                        <p><?php echo $step['description']; ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- Benefits -->
<section class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="text-primary">BENEFITS</h4>
                <h2>Why Choose Our Supply Chain Services</h2>
                <div class="coliin-space-30"></div>
            </div>
        </div>
        <div class="row">
            <?php foreach($benefits as $benefit): ?>
            <div class="col-md-4">
                <div class="benefit-box">
                    <div class="benefit-icon">
                        <i class="icon <?php echo $benefit['icon']; ?>"></i>
                    </div>
                    <h3><?php echo $benefit['title']; ?></h3>
                    <p><?php echo $benefit['description']; ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Quote Section -->
<?php include 'includes/quote-section.php'; ?>

<!-- Supplier Map -->
<section class="supplier-map">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="text-primary">GLOBAL SUPPLIER NETWORK</h4>
                <h2>Strategic Global Collaboration</h2>
                <div id="supplier-map" class="world-map"></div>
                <div class="supplier-stats">
                    <?php foreach($supplier_regions as $region): ?>
                    <div class="stat-item">
                        <span class="region"><?php echo $region['region']; ?></span>
                        <span class="number"><?php echo $region['number']; ?></span>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?> 