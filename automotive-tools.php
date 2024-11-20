<?php 
require_once 'config/config.php';
require_once 'config/auto_tools_config.php';
require_once 'includes/header.php';
require_once 'includes/navigation.php';
?>

<link rel="stylesheet" href="css/custom-styles.css">

<!-- Solution Hero Section -->
<?php 
require_once 'includes/solution-hero-section.php';
?>

<!-- Product Overview -->
<section class="no-padding-top">
    <div class="container">
        <div class="row flex-row">
            <div class="col-md-12">
                <div class="content-box">
                    <h4 class="text-primary">OVERVIEW</h4>
                    <h2>Professional Automotive Tools</h2>
                    <p>Collin has been fully committed to the development of automotive safety technology and presents outstanding professional achievements and leading automotive tools to the automotive service industry, such as powerful automotive comprehensive diagnostic instruments and convenient in-car Bluetooth detectors. The professional automotive tools we develop have multiple powerful functions and integrate automotive inspection, OBD programming and more practical functions. As the world's first company to develop universal keyless entry automotive remote control, we integrate a large number of dedicated transponders independently developed by Collin into our products, greatly enhancing the performance and stability of our products.</p>
                    <p>Collin remotes help users immensely reduce inventory pressure, only 4 types of Xhorse remotes support over 3,000 car models. We have XE Series Super Remote; XS Series Smartkey Remote; XN Series Wireless, and XK Series Wired Remote which can be generated and cloned for specialized security solutions on our VVDI series tools such as KEY TOOL MAX, MINI KEY TOOL, and KEY TOOL PLUS.</p>
                    <ul class="solution-features">
                        <?php foreach($features as $feature): ?>
                        <li><i class="icon ion-md-checkmark-circle"></i><?php echo $feature; ?></li>
                        <?php endforeach; ?>
                    </ul>
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
            <?php foreach($categories as $category): ?>
            <div class="col-md-4 mb-4">
                <div class="product-box text-center p-3 shadow-sm rounded">
                    <div class="product-icon mb-3">
                        <i class="icon <?php echo $category['icon']; ?> text-primary" style="font-size: 2em;"></i>
                    </div>
                    <h3 class="mb-3"><?php echo $category['title']; ?></h3>
                    <ul class="list-unstyled">
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
            <?php foreach($product_features as $feature): ?>
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
        <div class="row">
            <div class="col-md-6">
                <div id="application-image" class="application-image">
                    <img src="<?php echo $applications[0]['image']; ?>" alt="<?php echo $applications[0]['title']; ?>" class="img-fluid rounded">
                </div>
            </div>
            <div class="col-md-6">
                <div class="application-list">
                    <?php foreach($applications as $index => $app): ?>
                    <div class="application-item" data-index="<?php echo $index; ?>" data-image="<?php echo $app['image']; ?>">
                        <h3><?php echo $app['title']; ?> <span class="toggle-icon">&#9662;</span></h3>
                        <div class="application-content">
                            <p><?php echo $app['description']; ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Quote Section -->
<?php 
$quote_title = $quote_sections['auto-tools']['title'];
$quote_description = $quote_sections['auto-tools']['description'];
require_once 'includes/quote-section.php';
?>

<script src="js/effects.js"></script>
<?php require_once 'includes/footer.php'; ?> 