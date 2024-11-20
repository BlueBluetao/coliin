<?php
require_once 'config/config.php';
require_once 'config/innovation_config.php';
$page_title = INNOVATION_PAGE_TITLE . " - " . SITE_NAME;
include 'includes/header.php';
?>

<link rel="stylesheet" href="css/innovation.css">

<div id="page" class="site">
    <?php include 'includes/navigation.php'; ?>

    <!-- Hero Section -->
    <div class="page-header" style="background: url('<?php echo INNOVATION_HEADER_BG; ?>') no-repeat center center;">
        <div class="container">
            <div class="breadc-box no-line">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-title"><?php echo INNOVATION_PAGE_TITLE; ?></h2>
                        <ul id="breadcrumbs" class="breadcrumbs none-style">
                            <li><a href="index.php">Home</a></li>
                            <li class="active">Innovation</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Skilled Craftsmanship Section -->
    <section class="craftsmanship-section">
        <div class="container">
            <div class="section-header text-center">
                <div class="section-tag">
                    <span>SKILLED CRAFTSMANSHIP</span>
                </div>
                <h2 class="section-title"><?php echo CRAFTSMANSHIP_TITLE; ?></h2>
                <p class="section-desc"><?php echo CRAFTSMANSHIP_DESC; ?></p>
            </div>
            
            <div class="expertise-grid">
                <?php foreach($CRAFTSMANSHIP_EXPERTISE as $expertise): ?>
                <div class="expertise-card">
                    <div class="expertise-icon">
                        <i class="icon <?php echo $expertise['icon']; ?>"></i>
                    </div>
                    <div class="expertise-content">
                        <h4><?php echo $expertise['title']; ?></h4>
                        <p><?php echo $expertise['description']; ?></p>
                    </div>
                    <div class="expertise-hover">
                        <div class="hover-content">
                            <?php echo $expertise['extended_desc']; ?>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Advanced Materials Section -->
    <section class="materials-section bg-light">
        <div class="container">
            <div class="section-header text-center">
                <h4 class="text-primary"><?php echo MATERIALS_SECTION_SUBTITLE; ?></h4>
                <h2><?php echo MATERIALS_SECTION_TITLE; ?></h2>
                <p><?php echo MATERIALS_SECTION_DESC; ?></p>
            </div>

            <div class="materials-grid">
                <?php foreach($MATERIALS_DATA as $material): ?>
                <div class="material-card">
                    <div class="material-image">
                        <img src="<?php echo $material['image']; ?>" alt="<?php echo $material['title']; ?>">
                    </div>
                    <div class="material-content">
                        <h3><?php echo $material['title']; ?></h3>
                        <p><?php echo $material['description']; ?></p>
                        <ul class="material-features">
                            <?php foreach($material['features'] as $feature): ?>
                            <li><i class="icon ion-md-checkmark-circle"></i> <?php echo $feature; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Innovation & Solutions Section -->
    <section class="solutions-section">
        <div class="container">
            <div class="section-header text-center">
                <div class="section-tag">
                    <span>PROCESS INNOVATION</span>
                </div>
                <h2 class="section-title"><?php echo SOLUTIONS_TITLE; ?></h2>
                <p class="section-desc"><?php echo SOLUTIONS_DESC; ?></p>
            </div>
            
            <div class="innovation-process">
                <?php foreach($INNOVATION_PROCESS as $index => $process): ?>
                <div class="process-step">
                    <div class="step-number">
                        <span><?php echo str_pad($index + 1, 2, '0', STR_PAD_LEFT); ?></span>
                    </div>
                    <div class="step-content">
                        <div class="step-icon">
                            <i class="icon <?php echo $process['icon']; ?>"></i>
                        </div>
                        <h4><?php echo $process['title']; ?></h4>
                        <p><?php echo $process['description']; ?></p>
                        <div class="step-details">
                            <?php echo $process['extended_desc']; ?>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <?php 
    $quote_title = QUOTE_TITLE;
    $quote_description = QUOTE_DESC;
    include 'includes/quote-section.php';
    ?>

</div>

<?php include 'includes/footer.php'; ?> 