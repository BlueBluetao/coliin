<?php 
require_once 'config/config.php';
require_once 'config/3d_printing_config.php';
require_once 'includes/header.php';
require_once 'includes/navigation.php';
?>

<!-- Solution Hero Section -->
<?php 
$page_title = $page_config['title'];
$breadcrumbs = $page_config['breadcrumbs'];
require_once 'includes/solution-hero-section.php';
?>

<!-- Combined Technology & Materials Section -->
<section class="no-padding-top">
    <div class="container">
        <div class="row">
            <!-- Technology Column -->
            <div class="col-md-6">
                <div class="content-box">
                    <h4 class="text-primary">TECHNOLOGY</h4>
                    <h2><?php echo $technology_overview['title']; ?></h2>
                    <p><?php echo $technology_overview['description']; ?></p>
                    <ul class="solution-features">
                        <?php foreach($features as $feature): ?>
                        <li><i class="icon ion-md-checkmark-circle"></i><?php echo $feature; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            
            <!-- Materials Column -->
            <div class="col-md-6">
                <h4 class="text-primary">Service</h4>
                <h2>Available Products</h2>
                <div class="materials-grid">
                    <?php foreach($materials as $material): ?>
                    <div class="material-solution-card">
                        <div class="material-image">
                            <img src="<?php echo $material['image']; ?>" alt="<?php echo $material['title']; ?>" class="img-fluid">
                        </div>
                        <div class="material-content">
                            <h3><?php echo $material['title']; ?></h3>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Printing Technologies -->
<section class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h4 class="text-primary">CAPABILITIES</h4>
                <h2>Printing Technologies</h2>
                <div class="coliin-space-30"></div>
            </div>
        </div>
        <div class="row">
            <?php foreach($technologies as $tech): ?>
            <div class="col-md-3">
                <div class="tech-box text-center">
                    <div class="tech-icon">
                        <i class="icon <?php echo $tech['icon']; ?>"></i>
                    </div>
                    <h3><?php echo $tech['title']; ?></h3>
                    <p><?php echo $tech['description']; ?></p>
                    <ul>
                        <?php foreach($tech['features'] as $feature): ?>
                        <li><?php echo $feature; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Quote Section -->
<?php 
$quote_title = $quote_sections['3d-printing']['title'];
$quote_description = $quote_sections['3d-printing']['description'];
require_once 'includes/quote-section.php';
?>

<?php require_once 'includes/footer.php'; ?> 

<!-- 在footer.php之前添加 -->
<script src="js/3d-printing.js"></script>

<!-- 在header.php之后添加 -->
<link rel="stylesheet" href="css/3d-printing.css"> 