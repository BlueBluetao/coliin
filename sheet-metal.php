<?php 
require_once 'config/config.php';
require_once 'config/sheet_metal_config.php';
require_once 'includes/header.php';
?>

<!-- 添加页面特定的CSS -->
<link rel="stylesheet" href="css/sheet-metal.css">

<?php
require_once 'includes/navigation.php';

// Solution Hero Section
$page_title = $page_config['title'];
$breadcrumbs = $page_config['breadcrumbs'];
require_once 'includes/solution-hero-section.php';
?>

<!-- Services Overview -->
<section class="no-padding-top">
    <div class="container">
        <div class="row flex-row">
            <!-- Services Column -->
            <div class="col-md-6">
                <div class="content-box">
                    <h4 class="text-primary">SERVICES</h4>
                    <h2><?php echo $services_overview['title']; ?></h2>
                    <p><?php echo $services_overview['description']; ?></p>
                    <ul class="solution-features">
                        <?php foreach($features as $feature): ?>
                        <li><i class="icon ion-md-checkmark-circle"></i><?php echo $feature; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            
            <!-- Applications Column -->
            <div class="col-md-6">
                <div class="content-box">
                    <h4 class="text-primary">APPLICATIONS</h4>
                    <h2>Industry Applications</h2>
                    <div class="applications-grid">
                        <?php foreach($applications as $app): ?>
                        <div class="application-box hover-effect mb-4">
                            <div class="image-wrapper">
                                <img src="<?php echo $app['image']; ?>" alt="<?php echo $app['title']; ?>" class="img-fluid">
                                <div class="overlay">
                                    <div class="overlay-content">
                                        <h3 class="large-text"><?php echo $app['title']; ?></h3>
                                        <span class="category medium-text"><?php echo $app['category']; ?></span>
                                        <p class="medium-text"><?php echo $app['description']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Processing Methods -->
<section class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h4 class="text-primary">CAPABILITIES</h4>
                <h2>Processing Methods</h2>
                <div class="coliin-space-30"></div>
            </div>
        </div>
        <div class="row">
            <?php foreach($methods as $method): ?>
            <div class="col-md-3">
                <div class="process-box text-center">
                    <div class="process-icon">
                        <i class="icon <?php echo $method['icon']; ?>"></i>
                    </div>
                    <h3><?php echo $method['title']; ?></h3>
                    <p><?php echo $method['description']; ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Materials & Specifications -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h4 class="text-primary">MATERIALS</h4>
                <h2>Material Options</h2>
                <div class="coliin-space-30"></div>
                <div class="materials-list">
                    <?php
                    foreach($materials as $material): ?>
                    <div class="material-item">
                        <h4><?php echo $material['title']; ?></h4>
                        <p><?php echo $material['types']; ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-md-6">
                <h4 class="text-primary">SPECIFICATIONS</h4>
                <h2>Processing Capabilities</h2>
                <div class="coliin-space-30"></div>
                <div class="specs-table">
                    <table class="table">
                        <tbody>
                            <?php
                            foreach($specifications as $key => $value): ?>
                            <tr>
                                <td><?php echo $key; ?></td>
                                <td><?php echo $value; ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Quote Section -->
<?php 
$quote_title = $quote_sections['sheet-metal']['title'];
$quote_description = $quote_sections['sheet-metal']['description'];
require_once 'includes/quote-section.php';
?>

<?php require_once 'includes/footer.php'; ?> 