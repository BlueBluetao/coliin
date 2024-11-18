<?php 
require_once 'config/config.php';
require_once 'includes/header.php';
require_once 'includes/navigation.php';
?>

<!-- Hero Section -->
<?php 
$page_title = "Key Cutting Solutions";
$breadcrumbs = [
    ['title' => 'Home', 'link' => 'index.php'],
    ['title' => 'Solutions', 'link' => 'solutions.php'],
    ['title' => 'Key Cutting']
];
require_once 'includes/hero-section.php';
?>

<!-- Overview Section -->
<section class="no-padding-top">
    <div class="container">
        <div class="row flex-row">
            <div class="col-md-6">
                <div class="content-box">
                    <h4 class="text-primary">OVERVIEW</h4>
                    <h2>Key Cutting Services</h2>
                    <p>Professional key cutting services for automotive and security applications.</p>
                    <ul class="solution-features">
                        <li><i class="icon ion-md-checkmark-circle"></i>High Precision Cutting</li>
                        <li><i class="icon ion-md-checkmark-circle"></i>Multiple Key Types</li>
                        <li><i class="icon ion-md-checkmark-circle"></i>Advanced Security Features</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="image-box">
                    <img src="images/solutions/key-cutting.jpg" alt="Key Cutting" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Key Types -->
<section class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h4 class="text-primary">CAPABILITIES</h4>
                <h2>Key Types & Solutions</h2>
                <div class="coliin-space-30"></div>
            </div>
        </div>
        <div class="row">
            <?php
            $key_types = [
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
            ];

            foreach($key_types as $type): ?>
            <div class="col-md-4">
                <div class="key-type-box text-center">
                    <div class="type-icon">
                        <i class="icon <?php echo $type['icon']; ?>"></i>
                    </div>
                    <h3><?php echo $type['title']; ?></h3>
                    <ul>
                        <?php foreach($type['features'] as $feature): ?>
                        <li><?php echo $feature; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Features -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="text-primary">FEATURES</h4>
                <h2>Machine Features</h2>
                <div class="coliin-space-30"></div>
            </div>
        </div>
        <div class="row">
            <?php
            $features = [
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
                    'icon' => 'ion-md-cloud',
                    'title' => 'Security',
                    'description' => 'Advanced security features'
                ]
            ];

            foreach($features as $feature): ?>
            <div class="col-md-3">
                <div class="feature-box">
                    <div class="feature-icon">
                        <i class="icon <?php echo $feature['icon']; ?>"></i>
                    </div>
                    <h3><?php echo $feature['title']; ?></h3>
                    <p><?php echo $feature['description']; ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Applications -->
<section class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="text-primary">APPLICATIONS</h4>
                <h2>Industry Applications</h2>
                <div class="coliin-space-30"></div>
            </div>
        </div>
        <div class="application-slider" data-show="3" data-arrow="true">
            <?php
            $applications = [
                [
                    'image' => 'images/solutions/automotive-keys.jpg',
                    'title' => 'Automotive',
                    'description' => 'Car dealerships and service centers'
                ],
                // 添加更多应用案例...
            ];

            foreach($applications as $app): ?>
            <div class="application-item">
                <div class="application-box">
                    <img src="<?php echo $app['image']; ?>" alt="<?php echo $app['title']; ?>">
                    <div class="application-content">
                        <h3><?php echo $app['title']; ?></h3>
                        <p><?php echo $app['description']; ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Quote Section -->
<?php 
$quote_title = $quote_sections['key-cutting']['title'];
$quote_description = $quote_sections['key-cutting']['description'];
require_once 'includes/quote-section.php';
?>

<?php require_once 'includes/footer.php'; ?> 