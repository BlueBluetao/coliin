<?php 
require_once 'config/config.php';
require_once 'config/key_cutting_config.php';
require_once 'includes/header.php';
require_once 'includes/navigation.php';
?>

<!-- Hero Section -->
<?php 
$page_title = $key_cutting_config['page_title'];
$breadcrumbs = $key_cutting_config['breadcrumbs'];
require_once 'includes/hero-section.php';
?>

<!-- Overview Section -->
<section class="no-padding-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center mb-5"><?php echo $key_cutting_config['overview']['title']; ?></h2>
            </div>
        </div>
        <?php foreach($key_cutting_config['overview']['paragraphs'] as $paragraph): ?>
        <div class="row mb-4">
            <div class="col-md-12">
                <div class="overview-box">
                    <h3 class="text-primary"><?php echo $paragraph['title']; ?></h3>
                    <p><?php echo $paragraph['content']; ?></p>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>

<!-- Products -->
<section class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="text-primary text-center">OUR PRODUCTS</h4>
                <h2 class="text-center">Key Cutting Machines</h2>
                <div class="coliin-space-30"></div>
            </div>
        </div>
        <div class="row">
            <?php foreach($key_cutting_config['products'] as $product): ?>
            <div class="col-md-4">
                <div class="product-box">
                    <div class="product-image">
                        <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['title']; ?>" class="img-fluid">
                    </div>
                    <div class="product-info">
                        <h3><?php echo $product['title']; ?></h3>
                        <h4 class="model">Model: <?php echo $product['model']; ?></h4>
                        <ul class="feature-list">
                            <?php foreach($product['features'] as $feature): ?>
                            <li><i class="icon ion-md-checkmark"></i><?php echo $feature; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Key Types -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h4 class="text-primary">CAPABILITIES</h4>
                <h2>Key Types & Solutions</h2>
                <div class="coliin-space-30"></div>
            </div>
        </div>
        <div class="row">
            <?php foreach($key_cutting_config['key_types'] as $type): ?>
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
<section class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="text-primary">FEATURES</h4>
                <h2>Machine Features</h2>
                <div class="coliin-space-30"></div>
            </div>
        </div>
        <div class="row">
            <?php foreach($key_cutting_config['machine_features'] as $feature): ?>
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

<!-- Quote Section -->
<?php 
$quote_title = $quote_sections['key-cutting']['title'];
$quote_description = $quote_sections['key-cutting']['description'];
require_once 'includes/quote-section.php';
?>

<?php require_once 'includes/footer.php'; ?> 