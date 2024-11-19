<?php
require_once 'config/config.php';
require_once 'config/supply_chain_config.php';
require_once 'includes/header.php';
require_once 'includes/navigation.php';

// 页面特定配置
$page_title = "Supply Chain Management - Coliin";
$page_description = "Comprehensive supply chain management services optimizing your procurement process and reducing operational costs.";
$current_page = 'supply-chain';

// 使用配置文件中的变量
$overview = $supply_chain_overview;
$stats = $supply_chain_stats;
$services = $supply_chain_services;
$process_steps = $supply_chain_process;
$benefits = $supply_chain_benefits;
$quote_title = $supply_chain_quote['title'];
$quote_description = $supply_chain_quote['description'];


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
                    <div class="stat-number animate-number"><?php echo $stat['number']; ?></div>
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
<section class="process-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h4 class="text-primary">PROCESS</h4>
                <h2>Supply Chain Process</h2>
            </div>
        </div>
        <div class="process-timeline">
            <?php foreach($process_steps as $step): ?>
            <div class="process-step">
                <div class="step-icon" style="color: <?php echo $step['color']; ?>">
                    <i class="icon <?php echo $step['icon']; ?>"></i>
                </div>
                <div class="step-content">
                    <div class="step-number animate-number"><?php echo $step['number']; ?></div>
                    <h3><?php echo $step['title']; ?></h3>
                    <p><?php echo $step['description']; ?></p>
                </div>
            </div>
            <?php endforeach; ?>
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
                        <span class="number animate-number"><?php echo $region['number']; ?></span>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>

<!-- 在 footer 之前添加 JS 文件 -->
<script src="js/number-animation.js"></script> 