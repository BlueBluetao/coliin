<?php 
require_once 'config/config.php';
require_once 'includes/header.php';
require_once 'includes/navigation.php';
?>

<!-- Solution Hero Section -->
<?php 
$page_title = "Auto Tools";
$breadcrumbs = [
    ['title' => 'Home', 'link' => 'index.php'],
    ['title' => 'Solutions', 'link' => 'solutions.php'],
    ['title' => 'Auto Tools']
];
require_once 'includes/solution-hero-section.php';
?>

<!-- Product Overview -->
<section class="no-padding-top">
    <div class="container">
        <div class="row flex-row">
            <div class="col-md-6">
                <div class="content-box">
                    <h4 class="text-primary">OVERVIEW</h4>
                    <h2>Professional Automotive Tools</h2>
                    <p>High-quality professional tools designed specifically for automotive maintenance and repair.</p>
                    <ul class="solution-features">
                        <?php
                        $features = [
                            'Professional Grade Quality',
                            'Ergonomic Design',
                            'Durability Guaranteed',
                            'Wide Range Selection'
                        ];
                        foreach($features as $feature): ?>
                        <li><i class="icon ion-md-checkmark-circle"></i><?php echo $feature; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="image-box">
                    <img src="images/solutions/auto-tools-main.jpg" alt="Auto Tools" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Product Categories -->
<section class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h4 class="text-primary">PRODUCTS</h4>
                <h2>Tool Categories</h2>
                <div class="coliin-space-30"></div>
            </div>
        </div>
        <div class="row">
            <?php
            $categories = [
                [
                    'icon' => 'ion-md-build',
                    'title' => 'Hand Tools',
                    'items' => ['Socket Sets', 'Wrench Sets', 'Screwdrivers', 'Pliers']
                ],
                [
                    'icon' => 'ion-md-flash',
                    'title' => 'Power Tools',
                    'items' => ['Impact Wrenches', 'Power Drills', 'Air Tools', 'Electric Tools']
                ],
                [
                    'icon' => 'ion-md-laptop',
                    'title' => 'Diagnostic Tools',
                    'items' => ['OBD Scanners', 'Code Readers', 'Test Equipment', 'Analysis Tools']
                ]
            ];

            foreach($categories as $category): ?>
            <div class="col-md-4">
                <div class="product-box text-center">
                    <div class="product-icon">
                        <i class="icon <?php echo $category['icon']; ?>"></i>
                    </div>
                    <h3><?php echo $category['title']; ?></h3>
                    <ul>
                        <?php foreach($category['items'] as $item): ?>
                        <li><?php echo $item; ?></li>
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
                <h2>Product Features</h2>
                <div class="coliin-space-30"></div>
            </div>
        </div>
        <div class="row">
            <?php
            $product_features = [
                [
                    'icon' => 'ion-md-ribbon',
                    'title' => 'Quality',
                    'description' => 'Premium materials and construction'
                ],
                [
                    'icon' => 'ion-md-hand',
                    'title' => 'Ergonomic',
                    'description' => 'Comfortable and efficient use'
                ],
                [
                    'icon' => 'ion-md-star',
                    'title' => 'Durable',
                    'description' => 'Long-lasting performance'
                ],
                [
                    'icon' => 'ion-md-settings',
                    'title' => 'Versatile',
                    'description' => 'Multiple applications'
                ]
            ];

            foreach($product_features as $feature): ?>
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
                <h2>Where To Use</h2>
                <div class="coliin-space-30"></div>
            </div>
        </div>
        <div class="application-slider" data-show="3" data-arrow="true">
            <?php
            $applications = [
                [
                    'image' => 'images/solutions/auto-repair.jpg',
                    'title' => 'Auto Repair',
                    'description' => 'Professional repair shops'
                ]
                // 可以添加更多应用场景
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
$quote_title = $quote_sections['auto-tools']['title'];
$quote_description = $quote_sections['auto-tools']['description'];
require_once 'includes/quote-section.php';
?>

<?php require_once 'includes/footer.php'; ?> 