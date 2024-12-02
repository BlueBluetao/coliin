<?php 
require_once 'config/config.php';
require_once 'config/solutions_config.php';
require_once 'includes/header.php';
require_once 'includes/navigation.php';
?>

<!-- Solution Hero Section -->
<?php 
$page_title = $solutions_data['manufacturing']['title'];
$breadcrumbs = [
    ['title' => 'Home', 'link' => 'index.php'],
    ['title' => 'Solutions']
];
require_once 'includes/solution-hero-section.php';
?>

<link rel="stylesheet" href="css/solutions.css">


<!-- Solutions Overview -->
<section class="solutions-overview">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="section-header sticky-top" style="top: 100px;">
                    <span class="section-tag">OUR SOLUTIONS</span>
                    <h2 class="section-title"><?php echo $solutions_data['manufacturing']['description']; ?></h2>
                    <p class="section-desc"><?php echo $solutions_data['manufacturing']['sub_description']; ?></p>
                    <!-- <div class="section-action mt-4">
                        <a href="#" class="btn btn-outline-primary">
                            Explore All Solutions
                            <i class="fas fa-arrow-right ms-2"></i>
                        </a>
                    </div> -->
                </div>
            </div>
            <div class="col-lg-8">
                <div class="solutions-grid">
                    <?php foreach($solutions_data['manufacturing']['solutions'] as $key => $solution): ?>
                    <div class="solution-card">
                        <div class="solution-header">
                            <div class="solution-icon">
                                <i class="<?php echo $solution['icon']; ?>"></i>
                            </div>
                            <h3><?php echo $solution['title']; ?></h3>
                        </div>
                        <div class="solution-body">
                            <p class="solution-desc"><?php echo $solution['description']; ?></p>
                            <div class="solution-features">
                                <?php foreach($solution['features'] as $feature): ?>
                                <span class="feature-tag">
                                    <i class="fas fa-check-circle"></i>
                                    <?php echo $feature; ?>
                                </span>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="solution-footer">
                            <a href="<?php echo $key; ?>.php" class="btn btn-primary btn-learn-more">
                                Learn More 
                                <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Smart System -->
<section class="smart-system-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="smart-system-content">
                    <span class="section-tag"><?php echo $smart_quoting_config['section_tag']; ?></span>
                    <h2 class="section-title"><?php echo $smart_quoting_config['title']; ?></h2>
                    <p class="section-desc"><?php echo $smart_quoting_config['description']; ?></p>
                    
                    <div class="features-grid">
                        <?php foreach($smart_quoting_config['features'] as $feature): ?>
                        <div class="feature-item">
                            <div class="feature-header">
                                <i class="<?php echo $feature['icon']; ?>"></i>
                                <h3><?php echo $feature['title']; ?></h3>
                            </div>
                            <p><?php echo $feature['description']; ?></p>
                            <div class="feature-metric">
                                <span class="metric-number"><?php echo $feature['stats']['number']; ?></span>
                                <span class="metric-label"><?php echo $feature['stats']['text']; ?></span>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="process-timeline">
                    <div class="timeline-header">
                        <h3>How It Works</h3>
                    </div>
                    <?php foreach($smart_quoting_config['process_steps'] as $step): ?>
                    <div class="timeline-item">
                        <div class="timeline-marker"><?php echo $step['number']; ?></div>
                        <div class="timeline-content">
                            <h4><?php echo $step['title']; ?></h4>
                            <p><?php echo $step['description']; ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="advantages-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="section-header">
                    <h4 class="text-primary">ADVANTAGES</h4>
                    <h2 class="mb-4"><?php echo $solutions_data['advantages']['title']; ?></h2>
                </div>
            </div>
        </div>
        <div class="row g-4">
            <?php foreach($solutions_data['advantages']['items'] as $advantage): ?>
            <div class="col-md-3">
                <div class="advantage-box h-100">
                    <div class="advantage-icon">
                        <i class="<?php echo $advantage['icon']; ?>"></i>
                    </div>
                    <h3 class="h4"><?php echo $advantage['title']; ?></h3>
                    <p class="mb-0"><?php echo $advantage['description']; ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Quote Section -->
<?php 
$quote_title = "Find Your Solution";
$quote_description = "Contact us to discuss your manufacturing needs";
require_once 'includes/quote-section.php';
?>

<?php require_once 'includes/footer.php'; ?> 