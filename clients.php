<?php 
require_once 'config/config.php';
require_once 'config/clients_config.php';
$page_title = $clients_config['page_title'] . " - " . SITE_NAME;
include 'includes/header.php';
?>

<link rel="stylesheet" href="css/clients-page.css">

<div id="page" class="site">
    <?php include 'includes/navigation.php'; ?>

    <!-- Hero Section -->
    <div class="page-header" style="background: url('<?php echo $clients_config['hero']['background_image']; ?>') no-repeat center center;">
        <div class="container">
            <div class="breadc-box no-line">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-title"><?php echo $clients_config['hero']['title']; ?></h2>
                        <ul id="breadcrumbs" class="breadcrumbs none-style">
                            <?php foreach($clients_config['hero']['breadcrumbs'] as $item): ?>
                                <?php if($item['link']): ?>
                                    <li><a href="<?php echo $item['link']; ?>"><?php echo $item['title']; ?></a></li>
                                <?php else: ?>
                                    <li class="active"><?php echo $item['title']; ?></li>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="content" class="site-content">
        <!-- Partners Section -->
        <section class="partners-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h3 class="section-title">Partnerships & Affiliations</h3>
                        <p class="section-description">Trusted by industry leaders worldwide</p>
                    </div>
                </div>
                <div class="row partners-grid">
                    <?php foreach($clients_config['partners'] as $partner): ?>
                    <div class="col-lg-6">
                        <div class="partner-item">
                            <div class="partner-logo">
                                <img src="<?php echo $partner['logo']; ?>" alt="<?php echo $partner['name']; ?>">
                            </div>
                            <div class="partner-info">
                                <h4><?php echo $partner['name']; ?></h4>
                                <p><?php echo $partner['description']; ?></p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section class="no-padding-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3>Happy Clients Say</h3>
                    </div>
                </div>
                <div class="row">
                    <?php foreach($clients_config['testimonials'] as $testimonial): ?>
                    <div class="col-md-6">
                        <div class="testi-box list-testi">
                            <div class="testi-content">
                                <p>"<?php echo $testimonial['content']; ?>"</p>
                            </div>
                            <div class="testi-info">
                                <img src="<?php echo $testimonial['image']; ?>" alt="" class="circle-img">
                                <h4><?php echo $testimonial['name']; ?><span><?php echo $testimonial['position']; ?></span></h4>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <?php
        $quote_title = $clients_config['quote_section']['title'];
        $quote_description = $clients_config['quote_section']['description'];
        include 'includes/quote-section.php';
        ?>
    </div>
</div>

<?php include 'includes/footer.php'; ?> 