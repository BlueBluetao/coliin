<?php 
require_once 'config/config.php';
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

<!-- Solutions Overview -->
<section class="solutions-overview">
    <div class="container">
        <!-- 标题部分 -->
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center">
                <div class="section-header">
                    <span class="section-tag">OUR SOLUTIONS</span>
                    <h2 class="section-title"><?php echo $solutions_data['manufacturing']['description']; ?></h2>
                    <p class="section-desc"><?php echo $solutions_data['manufacturing']['sub_description']; ?></p>
                </div>
            </div>
        </div>

        <!-- Solutions Grid -->
        <div class="row g-4">
            <?php foreach($solutions_data['manufacturing']['solutions'] as $key => $solution): ?>
            <div class="col-lg-4 col-md-6">
                <div class="solution-box">
                    <div class="solution-image">
                        <img src="<?php echo $solution['image']; ?>" alt="<?php echo $solution['title']; ?>">
                        <div class="solution-overlay">
                            <a href="<?php echo $key; ?>.php" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                    <div class="solution-content">
                        <h3><?php echo $solution['title']; ?></h3>
                        <ul class="solution-features">
                            <?php foreach($solution['features'] as $feature): ?>
                            <li>
                                <i class="fas fa-check"></i>
                                <?php echo $feature; ?>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Smart Quoting System -->
<section class="smart-quoting-section">
    <div class="container">
        <!-- Header -->
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center">
                <div class="section-header">
                    <span class="section-tag">SMART SYSTEM</span>
                    <h2 class="section-title"><?php echo $solutions_data['smart_quoting']['title']; ?></h2>
                    <p class="section-desc"><?php echo $solutions_data['smart_quoting']['content']; ?></p>
                </div>
            </div>
        </div>

        <!-- Features -->
        <div class="row g-5">
            <?php foreach($solutions_data['smart_quoting']['features'] as $feature): ?>
            <div class="col-lg-6">
                <div class="feature-box">
                    <div class="feature-content">
                        <h3 class="feature-title"><?php echo $feature['title']; ?></h3>
                        <p class="feature-desc"><?php echo $feature['description']; ?></p>
                    </div>
                    <div class="feature-image">
                        <img src="<?php echo $feature['image']; ?>" alt="<?php echo $feature['title']; ?>" class="img-fluid">
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- Risk Control -->
        <div class="row justify-content-center mt-5">
            <div class="col-lg-10">
                <div class="risk-control-box">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <h3 class="risk-title"><?php echo $solutions_data['smart_quoting']['risk_control']['title']; ?></h3>
                            <p class="risk-desc"><?php echo $solutions_data['smart_quoting']['risk_control']['description']; ?></p>
                        </div>
                        <div class="col-lg-6">
                            <div class="risk-image">
                                <img src="<?php echo $solutions_data['smart_quoting']['risk_control']['image']; ?>" alt="Risk Control" class="img-fluid">
                            </div>
                        </div>
                    </div>
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