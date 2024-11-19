<?php 
require_once 'config/config.php';
require_once 'config/cnc_config.php';
require_once 'includes/header.php';
require_once 'includes/navigation.php';
?>

<!-- 引入页面特定的样式 -->
<link rel="stylesheet" href="css/cnc-page.css">

<!-- Solution Hero Section -->
<?php 
$page_title = $cnc_config['title'];
$breadcrumbs = [
    ['title' => 'Home', 'link' => 'index.php'],
    ['title' => 'Solutions', 'link' => 'solutions.php'],
    ['title' => 'CNC Machining']
];
require_once 'includes/solution-hero-section.php';
?>

<!-- Service Overview -->
<section class="no-padding-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h4 class="text-primary">OVERVIEW</h4>
                <h2><?php echo $cnc_config['overview']['title']; ?></h2>
                <p class="lead"><?php echo $cnc_config['overview']['description']; ?></p>
                <div class="coliin-space-30"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="content-box">
                    <h3>Our Advantages</h3>
                    <div class="advantages-grid">
                        <?php foreach($cnc_config['overview']['advantages'] as $title => $desc): ?>
                        <div class="advantage-item">
                            <h4><?php echo $title; ?></h4>
                            <p><?php echo $desc; ?></p>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="image-box">
                    <div class="decoration decoration-1"></div>
                    <div class="decoration decoration-2"></div>
                    <img src="<?php echo $cnc_config['img']['overview']; ?>" alt="CNC Machine" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Machining Services -->
<section class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h4 class="text-primary">CAPABILITIES</h4>
                <h2>Machining Services</h2>
                <p class="lead">State-of-the-art CNC machining solutions delivering precision, versatility, and efficiency.</p>
                <div class="coliin-space-30"></div>
            </div>
        </div>
        <div class="row">
            <?php foreach($cnc_config['services'] as $service): ?>
            <div class="col-md-4">
                <div class="service-box text-center">
                    <div class="service-icon">
                        <i class="icon <?php echo $service['icon']; ?>"></i>
                    </div>
                    <h3><?php echo $service['title']; ?></h3>
                    <p class="service-description"><?php echo $service['description']; ?></p>
                    <ul class="service-list">
                        <?php foreach($service['items'] as $item): ?>
                        <li><?php echo $item; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Materials Section -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="text-primary">MATERIALS</h4>
                <h2>Material Expertise</h2>
                <div class="coliin-space-30"></div>
            </div>
        </div>
        <div class="row">
            <?php foreach($cnc_config['materials'] as $material): ?>
            <div class="col-md-3">
                <div class="material-box">
                    <img src="<?php echo $material['image']; ?>" alt="<?php echo $material['title']; ?>">
                    <h3><?php echo $material['title']; ?></h3>
                    <p><?php echo $material['description']; ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Business Support Services -->
<section class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h4 class="text-primary">SUPPORT</h4>
                <h2>Business Support Services</h2>
                <p class="lead">Comprehensive support services ensuring smooth project execution from design to delivery.</p>
                <div class="coliin-space-30"></div>
            </div>
        </div>
        <div class="support-services-grid">
            <?php foreach($cnc_config['support_services'] as $service): ?>
            <div class="support-service-item">
                <div class="support-box">
                    <div class="support-image">
                        <img src="<?php echo $service['image']; ?>" alt="<?php echo $service['title']; ?>">
                    </div>
                    <div class="support-content">
                        <h3><?php echo $service['title']; ?></h3>
                        <ul>
                            <?php foreach($service['items'] as $item): ?>
                            <li><i class="icon ion-md-checkmark"></i><?php echo $item; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Quality Control -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h4 class="text-primary">QUALITY</h4>
                <h2>Quality Assurance</h2>
                <p class="lead">Comprehensive quality control systems ensuring precision and reliability in every component.</p>
                <div class="coliin-space-30"></div>
            </div>
        </div>
        <div class="quality-grid">
            <?php foreach($cnc_config['quality_sections'] as $section): ?>
            <div class="quality-item">
                <div class="quality-box">
                    <div class="quality-icon">
                        <i class="icon <?php echo $section['icon']; ?>"></i>
                    </div>
                    <h3><?php echo $section['title']; ?></h3>
                    <ul>
                        <?php foreach($section['items'] as $item): ?>
                        <li>
                            <span class="check-icon"><i class="icon ion-md-checkmark"></i></span>
                            <span class="item-text"><?php echo $item; ?></span>
                        </li>
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
$quote_title = $quote_sections['cnc']['title'];
$quote_description = $quote_sections['cnc']['description'];
require_once 'includes/quote-section.php';
?>

<!-- 添加页面特定的脚本 -->
<script src="js/cnc-page.js"></script>

<?php require_once 'includes/footer.php'; ?> 