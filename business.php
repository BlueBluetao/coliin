<?php 
require_once 'config/config.php';
require_once 'config/business_config.php';
include 'includes/header.php';
include 'includes/navigation.php';
?>

<!-- Page Header -->
<div class="page-header" style="background: url('<?php echo $business_config['hero']['background_image']; ?>') no-repeat center center;">
    <div class="container">
        <div class="breadc-box no-line">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="page-title">Business Structure</h1>
                    <ul id="breadcrumbs" class="breadcrumbs none-style">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Business</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Overview Section -->
<section class="overview-section no-padding-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="overview-content text-center">
                    <span class="text-primary">Global Manufacturing Partner</span>
                    <h2>Digital Manufacturing Solutions Provider</h2>
                </div>
            </div>
        </div>
        
        <div class="row g-4 mt-4">
            <div class="col-lg-4">
                <div class="overview-card">
                    <div class="card-icon">
                        <i class="fas fa-industry"></i>
                    </div>
                    <h3>Digital Manufacturing</h3>
                    <p>Comprehensive digital manufacturing solutions from concept to product for mechanical manufacturing companies worldwide.</p>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="overview-card">
                    <div class="card-icon">
                        <i class="fas fa-globe-americas"></i>
                    </div>
                    <h3>Global Supply Chain</h3>
                    <p>One-stop digital supply chain platform connecting 500+ experienced manufacturers globally.</p>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="overview-card">
                    <div class="card-icon">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3>Smart Solutions</h3>
                    <p>Advanced manufacturing capabilities with innovative solutions for various industries worldwide.</p>
                </div>
            </div>
        </div>

        <div class="row g-4 mt-4">
            <div class="col-lg-3">
                <div class="stat-card">
                    <div class="stat-number">24h</div>
                    <div class="stat-label">Quick Response</div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="stat-card">
                    <div class="stat-number">3 Days</div>
                    <div class="stat-label">Fast Delivery</div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="stat-card">
                    <div class="stat-number">99%</div>
                    <div class="stat-label">On-time Rate</div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="stat-card">
                    <div class="stat-number">500+</div>
                    <div class="stat-label">Global Partners</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Global Presence Section -->
<section class="global-presence-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-head">
                    <h4 class="text-primary">GLOBAL NETWORK</h4>
                    <h2>Our Global Manufacturing Network</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach($business_config['global_presence']['regions'] as $region): ?>
            <div class="col-lg-4">
                <div class="region-card">
                    <h3><?php echo $region['name']; ?></h3>
                    <ul class="specialty-list">
                        <?php foreach($region['specialties'] as $specialty): ?>
                        <li><i class="icon ion-ios-checkmark"></i><?php echo $specialty; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Achievements Section -->
<section class="achievements-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-head">
                    <h4 class="text-primary">OUR ACHIEVEMENTS</h4>
                    <h2>Key Performance Indicators</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach($business_config['achievements']['stats'] as $stat): ?>
            <div class="col-lg-3 col-md-6">
                <div class="achievement-card">
                    <div class="achievement-number"><?php echo $stat['number']; ?></div>
                    <div class="achievement-label"><?php echo $stat['label']; ?></div>
                    <p><?php echo $stat['description']; ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Quote Section -->
<?php 
$quote_title = "Start Your Manufacturing Project";
$quote_description = "Contact us to discuss your specific manufacturing needs and get a quote within 24 hours.";
include 'includes/quote-section.php'; 
?>

<?php include 'includes/footer.php'; ?> 