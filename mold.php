<?php 
require_once 'config/config.php';
require_once 'config/mold_config.php';
require_once 'includes/header.php';
require_once 'includes/navigation.php';
?>

<!-- Solution Hero Section -->
<?php 
$page_title = $page_config['title'];
$breadcrumbs = $page_config['breadcrumbs'];
require_once 'includes/solution-hero-section.php';
?>
<link rel="stylesheet" href="css/mold.css">
<!-- Service Overview -->
<section class="no-padding-top">
    <div class="container">
        <div class="row flex-row">
            <div class="col-md-12">
                <div class="content-box">
                    <h4 class="text-primary">OVERVIEW</h4>
                    <h2>Professional Mold Making</h2>
                    <p>Expert mold design and manufacturing services for plastic injection molding and die casting.</p>
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

<!-- Mold Types -->
<section class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h4 class="text-primary">CAPABILITIES</h4>
                <h2>Mold & Die Types</h2>
                <div class="coliin-space-30"></div>
            </div>
        </div>
        <div class="row">
            <?php
            foreach($mold_types as $type): ?>
            <div class="col-md-4">
                <div class="mold-type-box">
                    <div class="type-icon">
                        <i class="icon <?php echo $type['icon']; ?>"></i>
                    </div>
                    <h3><?php echo $type['title']; ?></h3>
                    <ul>
                        <?php foreach($type['items'] as $item): ?>
                        <li><?php echo $item; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Design & Manufacturing -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h4 class="text-primary">PROCESS</h4>
                <h2>Design & Manufacturing Process</h2>
                <div class="coliin-space-30"></div>
            </div>
        </div>
        <div class="row">
            <?php foreach($processes as $process): ?>
            <div class="col-md-4">
                <div class="process-box text-center">
                    <div class="process-icon">
                        <i class="icon <?php echo $process['icon']; ?>"></i>
                    </div>
                    <h3><?php echo $process['title']; ?></h3>
                    <ul class="process-list">
                        <?php foreach($process['items'] as $item): ?>
                        <li><?php echo $item; ?></li>
                        <?php endforeach; ?>
                    </ul>
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
        <div class="application-grid">
            <div class="application-scroll">
                <?php foreach($applications as $app): ?>
                <div class="col-md-4">
                    <div class="application-box">
                        <img src="<?php echo $app['image']; ?>" alt="<?php echo $app['title']; ?>">
                        <div class="content">
                            <h3><?php echo $app['title']; ?></h3>
                            <p><?php echo $app['description']; ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- Quote Section -->
<?php 
$quote_title = $quote_sections['mold']['title'];
$quote_description = $quote_sections['mold']['description'];
require_once 'includes/quote-section.php';
?>

<?php require_once 'includes/footer.php'; ?> 